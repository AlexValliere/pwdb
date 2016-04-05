<?php
session_start();

define("PWDB_HOME_DIR", $_SERVER['DOCUMENT_ROOT'] . 'panzerwaltzdb/');
define("PWDB_CONFIG_DIR", $_SERVER['DOCUMENT_ROOT'] . 'panzerwaltzdb/config/');
define("PWDB_LIB_DIR", $_SERVER['DOCUMENT_ROOT'] . 'panzerwaltzdb/lib/');
define("PWDB_MODELS_DIR", $_SERVER['DOCUMENT_ROOT'] . 'panzerwaltzdb/models/');
define("VERBOSE", FALSE);

define("RESSOURCES_DIR", 'resources/');
define("TANK_IMAGE_DIR", 'resources/metal_maidens/');

require_once(PWDB_CONFIG_DIR	. 'classLoader.php');
require_once(PWDB_CONFIG_DIR	. 'route.php');
require_once(PWDB_LIB_DIR	    . 'current_user.php');
require_once(PWDB_LIB_DIR		. 'debug.php');
require_once(PWDB_LIB_DIR		. 'redirection.php');

try { $dbhandler = new PDOConfig(); $dbhandler->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); }
catch(PDOException $e) { die('Unable to open database connection'); }

$route = get_route();
$routes = get_routes();
$routes_firewall = get_routes_firewall();
$has_route_permission = (isset($routes_firewall[$route]) && !current_user_has_roles(explode(',', $routes_firewall[$route]))) ? FALSE : TRUE;
$current_user = current_user();

require_once('view/layout_pre.php');

if (!array_key_exists($route, $routes))					include_once('view/error/001.php');
elseif (!is_file('controller/'.$routes[$route].'.php'))	include_once('view/error/002.php');
elseif(!$has_route_permission)							include_once('view/error/003.php');
else
{
	require_once('controller/'.$routes[$route].'.php');

	if (is_file('view/'.$routes[$route].'.php'))
		include_once('view/'.$routes[$route].'.php');
}

if (VERBOSE && isset($_SESSION['user']))
	echo var_dump(unserialize($_SESSION['user']));

require_once('view/layout_post.php');
?>