<?php

// list of users
function create_users($start_idx, $count) {
	$users = array();
	for ($i=$start_idx; $i<$start_idx + $count; $i++)
	{
		$users[] = create_user($i);
	}
	return $users;
}

// single user
function create_user($idx) {
	return array(
		"id"			=> $idx,
		"first_name"	=> "First ".$idx,
		"last_name"		=> "Last ".$idx,
		"email"			=> "user".$idx."@email.com",
	);
}