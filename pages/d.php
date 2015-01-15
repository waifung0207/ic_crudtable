<?php
	require_once(__DIR__.'/../config.php');
	require_once(__DIR__.'/../models/user.php');
	require_once(__DIR__.'/../helpers/form_helper.php');

	$user_id = $_GET['id'];
?>

<div class="alert alert-dismissable alert-success">
	Successfully deleted user <?php echo $user_id; ?>.
</div>

<?php
	// show original index table
	require_once(__DIR__.'/list.php');
	die();
?>