<?php
require_once("./config.php");
require_once("./helpers/ic_helper.php");
require_once("./helpers/table_helper.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>CRUD Table Demo</title>
		
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/paper/bootstrap.min.css">
	</head>
	<body ic-launch-debugger="true">
		<div class="container">
			<h2>CRUD Table Demo <span class="small">with <a href="http://intercoolerjs.org/" target="_blank">intercooler.js</a></span></h2>
			<p class="muted">GitHub repository: <a href="https://github.com/waifung0207/ic_crudtable">waifung0207/ic_crudtable</a></p>

			<!-- target DIV to update -->
			<div id="target">
				<?php require_once('pages/list.php'); ?>
			</div>
			<div class="col-lg-12 text-center">
				Authored by Michael Chan <br/>
				<a href="https://github.com/waifung0207">waifung0207</a> / <a href="http://waifung.hk" target="_blank">waifung.hk</a>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="https://intercoolerreleases-leaddynocom.netdna-ssl.com/intercooler-0.4.7.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-mockjax/1.5.3/jquery.mockjax.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function($) {
				//Intercooler.debug();
			});
		</script>
	</body>
</html>