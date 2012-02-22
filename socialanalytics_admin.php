<?php 
	if($_POST['social_analytics_config'] == 'Y') {
		//Form data sent
		$facebook_app_id = $_POST['facebook_app_id'];
		update_option('app_id', $facebook_app_id);		
?>
<div class="updated"><p><strong><?php _e('Changes saved.', 'social_analytics'); ?></strong></p></div>
<?php
	}
	else {
		$facebook_app_id = get_option('app_id');
	}
?>
<div class="wrap">
	<div id="icon-options-general" class="icon32"><br></div>
		<?php echo "<h2>" . __( 'Social Analytics', 'social_analytics') . "</h2>"; ?>
		<?php echo "<h3>" . __( 'Facebook', 'social_analytics') . "</h2>"; ?>
		<p><?php _e("Grab the App ID from the Facebook App you just created.", 'social_analytics'); ?></p>
		<form name="social_analytics_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
			<input type="hidden" name="social_analytics_config" value="Y">
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">
							<label for="facebook_app_id"><?php _e("Facebook App ID:", 'social_analytics'); ?></label>
						</th>
						<td>
							<input type="text" id="facebook_app_id" name="facebook_app_id" value="<?php echo $facebook_app_id; ?>" size="20"> <em><?php _e("Example: 722620961", 'social_analytics'); ?></em>
						</td>
					</tr>
				</tbody>
			</table>
			<p class="submit">
				<input type="submit" name="Submit" id="submit" class="button-primary" value="<?php _e('Save Changes', 'social_analytics') ?>" />
			</p>
		</form>
	</div>
</div>