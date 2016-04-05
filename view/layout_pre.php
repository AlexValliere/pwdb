<!DOCTYPE html>
<html lang="fr">
	<head>
		<link href='https://fonts.googleapis.com/css?family=Roboto:300italic,300' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
		<title>Panzer Waltz DB</title>
		<link rel="stylesheet" href="view/layout/layout.css">
		<?php if (isset($routes[$route]) && get_route_css($routes[$route]) != NULL) echo '<link rel="stylesheet" href="'.get_route_css($routes[$route]).'">'; ?>
		<!--<script src="script.js"></script>-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php include("view/layout/header.php"); ?>
		<div id="main-wrapper">
			<section id="main">
