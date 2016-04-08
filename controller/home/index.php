<?php
$metalMaidensManager = new MetalMaidensManager($dbhandler);
$categories = array('atg', 'ht', 'lav', 'lt', 'mt', 'spg');
$nations = array('bavaria', 'britannia', 'freedonia', 'gallia', 'rossiya');

$tank_indexed = $metalMaidensManager->count();
$tank_total = 225;
?>