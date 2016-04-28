<?php
function cmp_tank_asc($a, $b)
{
	return strcmp($a->getTank(), $b->getTank());
}

function cmp_root_head_id_asc($a, $b)
{
	if ($a->getRoot_head_id() == $b->getRoot_head_id())
		return 0;
	return ($a->getRoot_head_id() < $b->getRoot_head_id()) ? -1 : 1;
}

$metalMaidensManager = new MetalMaidensManager($dbhandler);
$tanks = $metalMaidensManager->getList();
usort($tanks, 'cmp_root_head_id_asc');
?>