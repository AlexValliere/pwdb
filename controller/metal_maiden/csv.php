<?php
$metalMaidensManager = new MetalMaidensManager($dbhandler);
$categories = array('atg', 'ht', 'lav', 'lt', 'mt', 'spg');
$nations = array('bavaria', 'britannia', 'freedonia', 'gallia', 'rossiya');

$tanks = array();

foreach ($nations as $nation)
{
	foreach ($categories as $category)
	{
		$tank_list_tmp = $metalMaidensManager->getCategory_nation_list($category, $nation);
		foreach ($tank_list_tmp as $tank)
		{
			$data = array
			(
				'tank' => array
				(
					'id' => $tank->getId(),
					'name' => $tank->getTank(),
					'tank' => $tank->getTank()
				)
			);
			//$data = array(
			//	"name"	=> $tank->getName(),
			//	"tank"	=> $tank->getTank()
			//);
			$tanks[] = $data;
		}
	}
}

?>