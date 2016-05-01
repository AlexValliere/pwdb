<?php
$sortableValues = ["tank", "category", "firepower", "penetration", "durability", "armor", "targeting", "evasion", "stealth", "detection"];

if (isset($_GET['sort']) && in_array($_GET['sort'], $sortableValues))				{ $sort = $_GET['sort']; }
else																				{ $sort = NULL; }
if (isset($_GET['order']) && ($_GET['order'] == "asc" || $_GET['order'] == "desc"))	{ $order = $_GET['order']; }
else																				{ $order= NULL; }

$metalMaidensManager = new MetalMaidensManager($dbhandler);
$tank_list = $metalMaidensManager->getList();

if (isset($sort) && isset($order))
{
	usort($tank_list, 'cmp_' . $sort . '_' . $order);
}
?>
