<?php
	require_once(__DIR__.'/../config.php');
	require_once(__DIR__.'/../helpers/form_helper.php');
?>

<form class="form-horizontal">
	<fieldset>
		<legend>Create User</legend>
		<?php echo form_input('id', 'ID'); ?>
		<?php echo form_input('first_name', 'First Name'); ?>
		<?php echo form_input('last_name', 'Last Name'); ?>
		<?php echo form_input('email', 'Email'); ?>

		<div class='<?php echo FORM_COLUMN_LEFT; ?>'></div>
		<div class='<?php echo FORM_COLUMN_RIGHT; ?>'>
			<?php echo form_submit(); ?>
			<?php echo form_cancel(); ?>
		</div>
	</div>
	</fieldset>
</form>