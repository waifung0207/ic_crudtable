<?php
	require_once(__DIR__.'/../config.php');
	require_once(__DIR__.'/../helpers/table_helper.php');
	require_once(__DIR__.'/../helpers/ic_helper.php');

	$page = empty($_GET['page']) ? 1 : $_GET['page'];
?>

<?php echo ic_button('Create User', 'primary', './pages/c.php', 'target'); ?>
<br/><br/>

<?php echo table_crud($page, PER_PAGE_LIMIT, array('id', 'first_name', 'last_name', 'email')); ?>

<div class="text-center">
	<?php echo table_pagination($page, PAGE_TOTAL); ?>
</div>