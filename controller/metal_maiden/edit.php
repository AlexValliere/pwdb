<?php
$method = $_SERVER['REQUEST_METHOD'];
$metalMaidensManager = new MetalMaidensManager($dbhandler);

if (isset($_GET['tank']))
	$tank = $metalMaidensManager->get($metalMaidensManager->tank_slug_exists($_GET['tank']));

if ($method == 'POST' && isset($_POST["edit_tank"]))
{
	$metalMaiden = $metalMaidensManager->get($metalMaidensManager->tank_slug_exists($_POST['edit_tank']));

	if (isset($metalMaiden))
	{
		$name = $_POST["name"];
		$tank = $_POST["tank"];
		$category = $_POST["category"];
		$nation = $_POST["nation"];
		$rarity = $_POST["rarity"];
		$character_voice = $_POST["character_voice"];
		$live2d = isset($_POST["live2d"]) ? $_POST["live2d"] : NULL;
		$ammo = array(
				"ap"	=> isset($_POST['ap']) ? 1 : 0,
				"apcr"	=> isset($_POST['apcr']) ? 1 : 0,
				"apds"	=> isset($_POST['apds']) ? 1 : 0,
				"he"	=> isset($_POST['he']) ? 1 : 0,
				"heat"	=> isset($_POST['heat']) ? 1 : 0,
				"hesh"	=> isset($_POST['hesh']) ? 1 : 0,
				"rp"	=> isset($_POST['rp']) ? 1 : 0
		);
		$lifestyle_skills = array(
				"skill_1"	=> $_POST['lifestyle_skill_1'],
				"skill_1_level"	=> $_POST['lifestyle_skill_1_level'],
				"skill_2"	=> $_POST['lifestyle_skill_2'],
				"skill_2_level"	=> $_POST['lifestyle_skill_2_level'],
				"skill_3"	=> $_POST['lifestyle_skill_3'],
				"skill_3_level"	=> $_POST['lifestyle_skill_3_level']
		);
		$equipment_slots = array(
				"slot_1"	=> $_POST["equipment_slot_1"],
				"slot_2"	=> $_POST["equipment_slot_2"],
				"slot_3"	=> $_POST["equipment_slot_3"],
				"slot_4"	=> $_POST["equipment_slot_4"],
				"slot_5"	=> $_POST["equipment_slot_5"],
				"slot_6"	=> $_POST["equipment_slot_6"],
				"slot_7"	=> $_POST["equipment_slot_7"],
				"slot_8"	=> $_POST["equipment_slot_8"]
		);
		$engine_bonus = array(
				"c_proof"	=> isset($_POST['c_proof']) ? 1 : 0,
				"d_proof"	=> isset($_POST['d_proof']) ? 1 : 0,
				"h_proof"	=> isset($_POST['h_proof']) ? 1 : 0,
				"s_proof"	=> isset($_POST['s_proof']) ? 1 : 0,
				"w_proof"	=> isset($_POST['w_proof']) ? 1 : 0,
				"silent"	=> isset($_POST['silent']) ? 1 : 0
		);
		$chassis_bonus = array(
				"angled"	=> isset($_POST['angled']) ? 1 : 0,
				"flat_top"	=> isset($_POST['flat_top']) ? 1 : 0,
				"front"		=> isset($_POST['front']) ? 1 : 0,
				"light"		=> isset($_POST['light']) ? 1 : 0,
				"low"		=> isset($_POST['low']) ? 1 : 0,
				"rear"		=> isset($_POST['rear']) ? 1 : 0,
				"sloped"	=> isset($_POST['sloped']) ? 1 : 0,
				"tires"		=> isset($_POST['tires']) ? 1 : 0,
				"treads"	=> isset($_POST['treads']) ? 1 : 0
		);
		$firepower = $_POST["firepower"];
		$penetration = $_POST["penetration"];
		$durability = $_POST["durability"];
		$armor = $_POST["armor"];
		$stealth = $_POST["stealth"];
		$detection = $_POST["detection"];
		$targeting = $_POST["targeting"];
		$evasion = $_POST["evasion"];
		$min_range = $_POST["min_range"];
		$max_range = $_POST["max_range"];
		$quote_intro = is_string($_POST["quote_intro"]) ? trim($_POST["quote_intro"]) : "";
		$quote_main_screen_1 = is_string($_POST["quote_main_screen_1"]) ? trim($_POST["quote_main_screen_1"]) : "";
		$quote_main_screen_2 = is_string($_POST["quote_main_screen_2"]) ? trim($_POST["quote_main_screen_2"]) : "";
		$quote_main_screen_3 = is_string($_POST["quote_main_screen_3"]) ? trim($_POST["quote_main_screen_3"]) : "";
		$quote_main_screen_4 = is_string($_POST["quote_main_screen_4"]) ? trim($_POST["quote_main_screen_4"]) : "";
		$quote_main_screen_5 = is_string($_POST["quote_main_screen_5"]) ? trim($_POST["quote_main_screen_5"]) : "";
		$quote_upgrading = is_string($_POST["quote_upgrading"]) ? trim($_POST["quote_upgrading"]) : "";
		$quote_attacking = is_string($_POST["quote_attacking"]) ? trim($_POST["quote_attacking"]) : "";

		$metalMaiden->setName($name);
		$metalMaiden->setTank($tank);
		$metalMaiden->setCategory($category);
		$metalMaiden->setNation($nation);
		$metalMaiden->setRarity($rarity);
		$metalMaiden->setCharacter_voice($character_voice);
		$metalMaiden->setLive2d($live2d);
		$metalMaiden->setAmmo($ammo);
		$metalMaiden->setLifestyle_skills($lifestyle_skills);
		$metalMaiden->setEquipment_slots($equipment_slots);
		$metalMaiden->setEngine_bonus($engine_bonus);
		$metalMaiden->setChassis_bonus($chassis_bonus);
		$metalMaiden->setFirepower($firepower);
		$metalMaiden->setPenetration($penetration);
		$metalMaiden->setDurability($durability);
		$metalMaiden->setArmor($armor);
		$metalMaiden->setTargeting($targeting);
		$metalMaiden->setEvasion($evasion);
		$metalMaiden->setStealth($stealth);
		$metalMaiden->setDetection($detection);
		$metalMaiden->setMin_range($min_range);
		$metalMaiden->setMax_range($max_range);
		$metalMaiden->setQuote_intro($quote_intro);
		$metalMaiden->setQuote_main_screen_1($quote_main_screen_1);
		$metalMaiden->setQuote_main_screen_2($quote_main_screen_2);
		$metalMaiden->setQuote_main_screen_3($quote_main_screen_3);
		$metalMaiden->setQuote_main_screen_4($quote_main_screen_4);
		$metalMaiden->setQuote_main_screen_5($quote_main_screen_5);
		$metalMaiden->setQuote_upgrading($quote_upgrading);
		$metalMaiden->setQuote_attacking($quote_attacking);

		$metalMaidensManager = new MetalMaidensManager($dbhandler);
		$metalMaidensManager->update($metalMaiden);

		if (VERBOSE)
			echo var_dump($metalMaiden);

		redirection('index.php?route=metal_maiden&tank=' . $metalMaiden->getTank_slug(), 250);
	}
}
?>