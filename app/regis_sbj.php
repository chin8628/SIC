<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT=NO-CACHE"">
</head>
</head>
<body>
<?php
require 'plugin.php';
use_subject_maintenance_mode();

$sql = mysqli_query($status,"select * from data_sbj order by sbj") or die("Error Sql Database!" . mysqli_error());
$check_sbj_null = mysqli_query($status,"select * from data_sbj") or die("Error Sql Database!" . mysqli_error());
$data_sbj_null = mysqli_fetch_array($check_sbj_null);
?>
<?php require 'cover.php'; ?>
<div id="contain">
<div id="app">
<legend><div class="header">ลงทะเบียนวิชาเสริม</div></legend>
<?php if(!empty($data_sbj_null)){ ?>
	<br>
	<form method="post" class="form-horizontal" onsubmit="return confirm('ถ้าสมัครวิชาเสริมผิด คุณไม่สามารถออกจากวิชาเสริมได้ โปรดเช็คให้มั่นใจ');">
	<table class="table table-bordered">
	<tr><td width="20px"></td><th width="60%">รายวิชา</th><th>สมาชิกปัจจุบัน/สมาชิกทั้งหมด</th></tr>
	<?php
	while($data = mysqli_fetch_array($sql)){
		$condition_m = explode(",", $data['condition_m']);
		echo '	
				<div id="'.$data['ID'].'" class="modal hide fade in" style="display: none; ">  
				<div class="modal-header"><a class="close" data-dismiss="modal">×</a>
				<h3>'.$data['sbj'].'</h3>
				</div> 
				<div class="modal-body">  
				<h4>ครูผู้สอน</h4>
				<p>'.$data['teacher'].'</p>
				<h4>สมาชิกปัจจุบัน/สมาชิก</h4>
				<p>'.$data['member'].'/'.$data['limit_member'].'</p>
				<h4>คำอธิบาย</h4>
				<p>'.$data['des'].'</p>
			  ';
		if($data['condition_m'] != null || $data['condition_s_m'] != 0 || $data['condition_s_fm'] != 0){
		echo '<h4>เงื่อนไขการรับสมัคร</h4>';
		}
		if($data['condition_m'] != null){
		echo  '	  
				<p>รับเฉพาะชั้นมัธยมศึกษาปีที่ '.$condition_m[0].' '.$condition_m[1].' '.$condition_m[2].' '.$condition_m[3].' '.$condition_m[4].' '.$condition_m[5].' '.$condition_m[6].'</p>
			  ';
		}
		if($data['condition_s_m'] != 0 || $data['condition_s_fm'] != 0){
		echo  '	<p>รับสมาชิกนักเรียนชาย : '.$data['condition_s_m'].'<br>รับสมาชิกนักเรียนหญิง : '.$data['condition_s_fm'].'</p>
			  ';
		}
		echo  '	  
				</div>  
				<div class="modal-footer">  
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>  
				</div>
				';
		echo '<tr ';
		if($data['member'] == $data['limit_member']) echo 'class="red" style="color:white;"';
		echo '>';
		echo '<td><center><input type="radio" name="regis" value='.$data['ID'].'></input></center></td>';
		echo '<td><a ';
		if($data['member'] == $data['limit_member']) echo 'style="color:white;"';
		echo 'href="#'.$data['ID'].'" data-toggle="modal">'.$data['sbj'].'</a></td>';
		echo '<td>'.$data['member'].'/'.$data['limit_member'].'</td></tr>';
	}
	?>
	</table>
	<button type="submit" class="btn btn-primary">ตกลง</button>
	</form>
<?php }else{ ?>
	<div class="alert alert-block">ยังไม่มีรายวิชาเสริมเปิดรับสมัครในขณะนี้</div>
<?php } ?>
</div>
<?php require 'footer.php';  ?>
</div>

<!-- database section -->
<?php
require 'header.php';
$regis = htmlspecialchars($_POST['regis'] ,ENT_QUOTES);

if($regis != NULL)
{
	$id = GetIdUser();
	$sql = mysqli_query($status,"select * from sbjenrollment where idUser = '$id' and sbj = '$regis'");
	$data = mysqli_fetch_array($sql);
	$sql = mysqli_query($status,"select * from data_sbj where ID = '$regis'");
	$member = mysqli_fetch_array($sql);
	if($member['condition_m'] == null)
		$condition_m = null;
	else
		$condition_m = explode(",", $member['condition_m']);
	if(checkRegister()){
		if(checkLimitSbjStudent()){
			if($member['member'] < $member['limit_member']){
				if(empty($data)){
					if(checkCondition_M($member['ID'],$condition_m)){
						if(checkCondition_S($member['ID'])){
							$set = $member['member']+1;
							mysqli_query($status,"update data_sbj set member = '$set' where ID = '$regis'");
							$sql = ("insert into sbjenrollment(idUser,sbj) values('$id','$regis')");
						}
					}
					else echo '<script>alert("วิชาเสริมนี้ไม่เปิดรับสมัครสำหรับชั้นปีการศึกษาของคุณ"); stop();</script>';
				}
				else echo '<script>alert("คุณได้ลงทะเบียนวิชาเสริมนี้ไปแล้ว ไม่สามารถลงซ้ำได้"); stop();</script>';
			}
			else echo '<script>alert("วิชาเสริมนี้สมาชิกครบแล้ว คุณไม่สามารถลงทะเบียนได้"); stop();</script>';
			mysqli_query($status,$sql) or die("Error Sql Database!" . mysqli_error());
		}
		else echo '<script>alert("คุณไม่สามารถลงทะเบียนวิชาเสริมเพิ่มได้แล้ว"); stop();</script>';
	}
	else echo '<script>alert("โปรดลงทะเบียนข้อมูลส่วนตัวก่อน"); stop();</script>';
	echo '<script>alert("ลงทะเบียนสำเร็จ");</script>';
	echo '<script>window.location.href="index.php"</script>';
}
mysqli_close($status);
?>
</body>
</html>