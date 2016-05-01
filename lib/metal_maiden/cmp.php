<?php
function cmp_tank_asc($a, $b)
{
	return strcmp($a->getTank(), $b->getTank());
}

function cmp_tank_desc($a, $b)
{
	return strcmp($a->getTank(), $b->getTank()) * -1;
}

function cmp_category_asc($a, $b)
{
	return strcmp($a->getCategory(), $b->getCategory());
}

function cmp_category_desc($a, $b)
{
	return strcmp($a->getCategory(), $b->getCategory()) * -1;
}

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
?>