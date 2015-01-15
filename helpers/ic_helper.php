<?php

/**
 * Elements with intercooler.js function
 */

function ic_button($label, $type, $src, $target) {
	return "<button
		class='btn btn-$type'
		ic-get-from='$src'
		ic-target='#$target'>
		$label
	</button> ";
}

function ic_button_confirm($label, $type, $src, $target) {
	return "<button
		class='btn btn-$type'
		ic-get-from='$src'
		ic-target='#$target'
		ic-confirm='Are you sure?'>
		$label
	</button> ";
}

function ic_a($label, $src, $target) {
	return "<a href='#' ic-get-from='$src' ic-target='#$target' onclick='return false;'>$label</a>";
}