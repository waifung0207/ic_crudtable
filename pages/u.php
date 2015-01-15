<?php
	require_once(__DIR__.'/../config.php');
	require_once(__DIR__.'/../models/user.php');
	require_once(__DIR__.'/../helpers/form_helper.php');

	// get fake data
	$user_id = $_GET['id'];
	$user = create_user($user_id);
?>

<form class="form-horizontal">
	<fieldset>
		<legend>Update User: <?php echo $user_id; ?></legend>
		<?php echo form_input('first_name', 'First Name', $user['first_name']); ?>
		<?php echo form_input('last_name', 'Last Name', $user['last_name']); ?>
		<?php echo form_input('email', 'Email', $user['email']); ?>
		
		<div class='<?php echo FORM_COLUMN_LEFT; ?>'></div>
		<div class='<?php echo FORM_COLUMN_RIGHT; ?>'>
			<?php echo form_submit(); ?>
			<?php echo form_cancel(); ?>
		</div>
	</div>
	</fieldset>
</form>