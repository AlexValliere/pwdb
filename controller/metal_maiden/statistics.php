<?php
$allowed_categories = ["atg", "ht", "lav", "lt", "mt", "spg"];

if (isset($_GET['category']) && in_array($_GET['category'], $allowed_categories))		{ $category = $_GET['category']; }
else																					{ $category = 'atg'; }

function cmp_firepower_asc($a, $b)
{
	if ($a->getFirepower() == $b->getFirepower())
		return 0;
	return ($a->getFirepower() < $b->getFirepower()) ? -1 : 1;
}

function cmp_firepower_desc($a, $b)
{
	if ($a->getFirepower() == $b->getFirepower())
		return 0;
	return ($a->getFirepower() < $b->getFirepower()) ? 1 : -1;
}

function cmp_penetration_asc($a, $b)
{
	if ($a->getPenetration() == $b->getPenetration())
		return 0;
	return ($a->getPenetration() < $b->getPenetration()) ? -1 : 1;
}

function cmp_penetration_desc($a, $b)
{
	if ($a->getPenetration() == $b->getPenetration())
		return 0;
	return ($a->getPenetration() < $b->getPenetration()) ? 1 : -1;
}

function cmp_durability_asc($a, $b)
{
	if ($a->getDurability() == $b->getDurability())
		return 0;
	return ($a->getDurability() < $b->getDurability()) ? -1 : 1;
}

function cmp_durability_desc($a, $b)
{
	if ($a->getDurability() == $b->getDurability())
		return 0;
	return ($a->getDurability() < $b->getDurability()) ? 1 : -1;
}

function cmp_armor_asc($a, $b)
{
	if ($a->getArmor() == $b->getArmor())
		return 0;
	return ($a->getArmor() < $b->getArmor()) ? -1 : 1;
}

function cmp_armor_desc($a, $b)
{
	if ($a->getArmor() == $b->getArmor())
		return 0;
	return ($a->getArmor() < $b->getArmor()) ? 1 : -1;
}

function cmp_targeting_asc($a, $b)
{
	if ($a->getTargeting() == $b->getTargeting())
		return 0;
	return ($a->getTargeting() < $b->getTargeting()) ? -1 : 1;
}

function cmp_targeting_desc($a, $b)
{
	if ($a->getTargeting() == $b->getTargeting())
		return 0;
	return ($a->getTargeting() < $b->getTargeting()) ? 1 : -1;
}

function cmp_evasion_asc($a, $b)
{
	if ($a->getEvasion() == $b->getEvasion())
		return 0;
	return ($a->getEvasion() < $b->getEvasion()) ? -1 : 1;
}

function cmp_evasion_desc($a, $b)
{
	if ($a->getEvasion() == $b->getEvasion())
		return 0;
	return ($a->getEvasion() < $b->getEvasion()) ? 1 : -1;
}

function cmp_stealth_asc($a, $b)
{
	if ($a->getStealth() == $b->getStealth())
		return 0;
	return ($a->getStealth() < $b->getStealth()) ? -1 : 1;
}

function cmp_stealth_desc($a, $b)
{
	if ($a->getStealth() == $b->getStealth())
		return 0;
	return ($a->getStealth() < $b->getStealth()) ? 1 : -1;
}

function cmp_detection_asc($a, $b)
{
	if ($a->getDetection() == $b->getDetection())
		return 0;
	return ($a->getDetection() < $b->getDetection()) ? -1 : 1;
}

function cmp_detection_desc($a, $b)
{
	if ($a->getDetection() == $b->getDetection())
		return 0;
	return ($a->getDetection() < $b->getDetection()) ? 1 : -1;
}

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

	if (($category == "ht" || $category == "mt") && $attribute == "stealth")
		usort($tank_list_sorted_by[$attribute], 'cmp_' . $attribute . '_asc');
	else
		usort($tank_list_sorted_by[$attribute], 'cmp_' . $attribute . '_desc');

	$median_stats[$attribute] = $tank_list_sorted_by[$attribute][intval($tank_list_size / 2)]->getStatistics($attribute);
}
?>