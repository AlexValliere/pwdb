<?php
require_once("config/database.php");

try
{
	$dbhandler = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
	$dbhandler->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}