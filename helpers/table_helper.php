<?php

require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../models/user.php');
require_once(__DIR__.'/ic_helper.php');

/**
 * Table elements with Bootstrap theme
 */

function table_crud($page, $limit, $fields = array())
{
	// header row
	$th = array_map(function($value) {
		$value = str_replace('_', ' ', $value);
		return '<th>'.ucwords($value).'</th>';
	}, $fields);
	$thead = '<thead>'.implode($th).'<th>Action</th></thead>';

	// start table
	$str = "<table class='table table-bordered table-striped'>$thead<tbody>";

	// get user data
	$start_idx = ($page-1) * $limit + 1;
	$users = create_users($start_idx, $limit);

	// populate row
	foreach ($users as $user)
	{
		$str.= "<tr>";
		$str.= "<td>".$user['id']."</td>";
		$str.= "<td>".$user['first_name']."</td>";
		$str.= "<td>".$user['last_name']."</td>";
		$str.= "<td>".$user['email']."</td>";
		$str.= "<td>";
		$str.= ic_button('Read', 'info', 'pages/r.php?id='.$user['id'], 'target');
		$str.= ic_button('Update', 'primary', 'pages/u.php?id='.$user['id'], 'target');
		$str.= ic_button_confirm('Delete', 'danger', 'pages/d.php?id='.$user['id'], 'target');
		$str.= "</td>";
		$str.= "</tr>";
	}

	// close table
	$str.= "</tbody></table>";

	return $str;
}

function table_read($user_id) {
	$user = create_user($user_id);

	$str = "<table class='table table-bordered table-hover'>";
	$str.= "<tr><th class='".FORM_COLUMN_LEFT."''>ID: </th><td>$user_id</td></tr>";
	$str.= "<tr><th>First Name: </th><td>".$user['first_name']."</td></tr>";
	$str.= "<tr><th>Last Name: </th><td>".$user['last_name']."</td></tr>";
	$str.= "<tr><th>Email: </th><td><a href='mailto:".$user['email']."'>".$user['email']."</a></td></tr>";
	$str.= "</table>";
	return $str;
}

function table_pagination($page, $total) {
	$str = "<ul class='pagination'>";

	// to first page
	if ($page==1)
		$str.= "<li class='disabled'><a href='#' onclick='return false;'>«</a></li>";
	else
		$str.= "<li>".ic_a('«', 'pages/list.php?page=1', 'target')."</li>";

	// page numbers
	for ($i=1; $i<=$total; $i++)
	{
		if ($i==$page) 
			$str.= "<li class='active'><a href='#' onclick='return false;'>$i</a></li>";
		else
			$str.= "<li>".ic_a($i, 'pages/list.php?page='.$i, 'target')."</li>";
	}

	// to last page
	if ($page==$total)
		$str.= "<li class='disabled'><a href='#' onclick='return false;'>»</a></li>";
	else
		$str.= "<li>".ic_a('»', 'pages/list.php?page='.$total, 'target')."</li>";

	$str.= "</ul>";
	return $str;
}