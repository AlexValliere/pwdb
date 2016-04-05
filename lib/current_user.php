<?php
function current_user() {
	$current_user = NULL;

	if (isset($_SESSION['user']))
	{
		try { $dbhandler = new PDOConfig(); $dbhandler->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); }
		catch(PDOException $e) { die('Unable to open database connection'); }

		$usersManager = new UsersManager($dbhandler);
		$current_user = unserialize($_SESSION['user']);
		$test = $usersManager->get($usersManager->username_exists($current_user->getUsername()));

		if (!($current_user == $test && $current_user !== $test))
			$current_user = NULL;
	}

	return ($current_user);
}

function current_user_roles() {
	$current_user = current_user();
	$roles = $current_user == NULL ? [] : $current_user->getRoles();

	return ($roles);
}

function current_user_has_roles($roles) {
	$current_user_roles = array_flip(current_user_roles());

	foreach ($roles as $role)
	{
		if (!isset($current_user_roles[$role]))
			return (FALSE);
	}

	return (TRUE);
}
?>