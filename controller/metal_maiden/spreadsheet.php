<?php
$sortableValues = ["tank", "rarity", "category", "firepower", "penetration", "durability", "armor", "targeting", "evasion", "stealth", "detection"];

if (isset($_GET['sort']) && in_array(strtolower($_GET['sort']), $sortableValues))							{ $sort = strtolower($_GET['sort']); }
else																										{ $sort = NULL; }
if (isset($_GET['order']) && (strtolower($_GET['order']) == "asc" || strtolower($_GET['order']) == "desc"))	{ $order = strtolower($_GET['order']); }
else																										{ $order= NULL; }

$metalMaidensManager = new MetalMaidensManager($dbhandler);
$tank_list = $metalMaidensManager->getList();

if (isset($sort) && isset($order))
{
	usort($tank_list, 'cmp_' . $sort . '_' . $order);
}
?>
