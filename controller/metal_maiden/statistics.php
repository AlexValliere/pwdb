<?php
$allowed_categories = ["atg", "ht", "lav", "lt", "mt", "spg"];

if (isset($_GET['category']) && in_array($_GET['category'], $allowed_categories))		{ $category = $_GET['category']; }
else																					{ $category = 'atg'; }

$attributes = ["firepower", "penetration", "durability", "armor", "targeting", "evasion", "stealth", "detection"];

$metalMaidensManager = new MetalMaidensManager($dbhandler);
$tank_list = $metalMaidensManager->getCategory_list( $category );
$tank_list_size = count($tank_list);

$min_stats = array(
	"firepower" => "0",
	"penetration" => "0",
	"durability" => "0",
	"armor" => "0",
	"targeting" => "0",
	"evasion" => "0",
	"stealth" => "0",
	"detection" => "0"
);

$max_stats = array(
	"firepower" => "0",
	"penetration" => "0",
	"durability" => "0",
	"armor" => "0",
	"targeting" => "0",
	"evasion" => "0",
	"stealth" => "0",
	"detection" => "0"
);

$median_stats = array(
	"firepower" => "0",
	"penetration" => "0",
	"durability" => "0",
	"armor" => "0",
	"targeting" => "0",
	"evasion" => "0",
	"stealth" => "0",
	"detection" => "0"
);

$average_stats = array(
	"firepower" => "0",
	"penetration" => "0",
	"durability" => "0",
	"armor" => "0",
	"targeting" => "0",
	"evasion" => "0",
	"stealth" => "0",
	"detection" => "0"
);

foreach ($tank_list as $tank)
{
	foreach ($attributes as $attribute)
	{
		if ($min_stats[$attribute] == 0 || $tank->getStatistics($attribute) < $min_stats[$attribute])
			$min_stats[$attribute] = $tank->getStatistics($attribute);
		if ($max_stats[$attribute] == 0 || $tank->getStatistics($attribute) > $max_stats[$attribute])
			$max_stats[$attribute] = $tank->getStatistics($attribute);
		$average_stats[$attribute] += $tank->getStatistics($attribute);
	}
}

foreach ($attributes as $attribute)
{
	$average_stats[$attribute] /= $tank_list_size;
	$tank_list_sorted_by[$attribute] = $tank_list;

	if (($category == "ht" || $category == "atg") && $attribute == "stealth")
		usort($tank_list_sorted_by[$attribute], 'cmp_' . $attribute . '_asc');
	else
		usort($tank_list_sorted_by[$attribute], 'cmp_' . $attribute . '_desc');

	$median_stats[$attribute] = $tank_list_sorted_by[$attribute][intval($tank_list_size / 2)]->getStatistics($attribute);
}
?>