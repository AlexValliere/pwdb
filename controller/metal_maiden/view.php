<?php
$metalMaidensManager = new MetalMaidensManager($dbhandler);

if (isset($_GET['tank']))
	$tank = $metalMaidensManager->get($metalMaidensManager->tank_slug_exists($_GET['tank']));
?>