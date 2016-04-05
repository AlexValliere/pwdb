<?php
if (isset($_GET['username']) && !empty($_GET['username']) && isset($_GET['token']) && !empty($_GET['token']))
{
	try { $dbhandler = new PDOConfig(); $dbhandler->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); }
	catch(PDOException $e) { die('Unable to open database connection'); }

	$usersManager = new UsersManager($dbhandler);

	if ($usersManager->username_exists($_GET['username']))
	{
		$user = $usersManager->get($usersManager->username_exists($_GET['username']));
		if ($user->confirmEmail($_GET['token']))
			$usersManager->update($user);
	}
}
?>