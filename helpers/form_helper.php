<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/ic_helper.php');

/**
 * Form elements with Bootstrap theme
 */

function form_input($name, $label, $value = '') {
	$str = "<div class='form-group'>
		<label for='$name' class='control-label ".FORM_COLUMN_LEFT."'>$label</label>
		<div class='".FORM_COLUMN_RIGHT."'>
			<input class='form-control' id='$name' name='$name' placeholder='' type='text' value='$value' />
		</div>
	</div>";
	return $str;
}

function form_submit() {
	$str = ic_button('Sumbit', 'primary', 'pages/list.php', 'target');
	return $str;
}

function form_cancel() {
	$str = ic_button('Cancel', 'default', 'pages/list.php', 'target');
	return $str;
}