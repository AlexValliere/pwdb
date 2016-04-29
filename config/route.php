<?php
require_once(PWDB_LIB_DIR . 'post_slug.php');

function get_route() {
	$route = (!empty($_GET['route'])) ? htmlentities($_GET['route']) : 'home';
	return $route;
}

function get_routes($route = NULL) {
	$routes = array(
		'home'								=> 'home/index',
		'changelog'							=> 'home/changelog',
		'confirm_email'						=> 'user/confirm_email',
		'login'								=> 'user/login',
		'logout'							=> 'user/logout',
		'register'							=> 'user/register',
		'create_metal_maiden'				=> 'metal_maiden/add',
		'edit_metal_maiden'					=> 'metal_maiden/edit',
		'edit_metal_maiden_requirements'	=> 'metal_maiden/edit_req',
		'flair'								=> 'metal_maiden/flair',
		'metal_maiden'						=> 'metal_maiden/view',
		'search'							=> 'metal_maiden/search',
		'spreadsheet'						=> 'metal_maiden/spreadsheet',
		'statistics'						=> 'metal_maiden/statistics',
		'tanks_csv'							=> 'metal_maiden/csv'
	);

	if (isset($route) && !empty($route) && array_key_exists($route, $routes))
		return ($routes[$route]);

	return $routes;
}

function get_routes_firewall() {
	$routes_firewall = array(
		'home'								=> NULL,
		'login'								=> NULL,
		'create_metal_maiden'				=> 'users',
		'edit_metal_maiden'					=> 'users',
		'edit_metal_maiden_requirements'	=> 'users'
	);

	return $routes_firewall;
}

function get_route_controller($route) {
	$controller_name = NULL;

	$pieces = explode('/', $route);
	if (is_dir('controller/'.$pieces[0]))
		$controller_name = $pieces[0];

	return $controller_name;
}

function get_route_css($route) {
	$css = NULL;

	$pieces = explode('/', $route);
	if (is_dir('view/'.$pieces[0]) && is_file('view/'.$pieces[0].'/style.css'))
		$css = 'view/'.$pieces[0].'/style.css';

	return $css;
}
?>