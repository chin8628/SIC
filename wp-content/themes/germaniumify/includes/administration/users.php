<?php

function padd_userprofile_extras_show($user) {
?>
<h3>Extra Profile Information</h3>
<table class="form-table">
	<tr>
		<th><label for="padd-rank-custom">Appear in About Us Box?</label></th>
		<td>
			<input type="checkbox" name="padd-appear-user" id="padd-appear-user" value="1" <?php echo esc_attr(get_the_author_meta('padd_appear_user',$user->ID)) == '1' ? 'checked="checked"' : ''; ?> /><br />
			<span class="description">Tick this box if you want to appear the user in About Us Box.</span>
		</td>
	</tr>
</table>
	<?php
}

if (current_user_can('manage_options'))  {
	add_action('show_user_profile','padd_userprofile_extras_show');
	add_action('edit_user_profile','padd_userprofile_extras_show');
}

function padd_userprofile_extras_save($user_id) {
	if (isset($_POST['padd-appear-user'])) {
		update_usermeta($user_id,'padd_appear_user','1');
	} else {
		update_usermeta($user_id,'padd_appear_user','0');
	}
}

if (current_user_can('manage_options'))  {
	add_action( 'personal_options_update','padd_userprofile_extras_save');
	add_action( 'edit_user_profile_update','padd_userprofile_extras_save');
}