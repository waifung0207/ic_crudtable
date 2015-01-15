<?php
	require_once(__DIR__.'/../config.php');
	require_once(__DIR__.'/../models/user.php');
	require_once(__DIR__.'/../helpers/form_helper.php');
	require_once(__DIR__.'/../helpers/table_helper.php');

	$user_id = $_GET['id'];
?>

<div class="well">
	<fieldset>
		<legend>User: <?php echo $user_id; ?></legend>
		<?php echo table_read($user_id); ?>
		<?php echo ic_button('Back', 'primary', 'pages/list.php', 'target'); ?>
	</fieldset>
</div>