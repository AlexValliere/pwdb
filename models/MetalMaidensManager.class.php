<?php
class MetalMaidensManager
{
	private $_dbhandler;

	public function __construct( $dbhandler ) {
		$this->setDbhandler( $dbhandler );
	}

	public function getDbhandler() { return $this->_dbhandler; }

	public function add( MetalMaiden $metalMaiden ) {
		$query = $this->_dbhandler->prepare('INSERT INTO `metal_maidens`
			SET name = :name,
				tank = :tank,
				tank_slug = :tank_slug,
				category = :category,
				nation = :nation,
				rarity = :rarity,
				character_voice = :character_voice,
				live2d = :live2d,
				ammo = :ammo,
				lifestyle_skills = :lifestyle_skills,
				equipment_slots = :equipment_slots,
				engine_bonus = :engine_bonus,
				chassis_bonus = :chassis_bonus,
				firepower = :firepower,
				penetration = :penetration,
				durability = :durability,
				armor = :armor,
				stealth = :stealth,
				detection = :detection,
				targeting = :targeting,
				evasion = :evasion,
				min_range = :min_range,
				max_range = :max_range,
				quote_intro = :quote_intro,
				quote_main_screen_1 = :quote_main_screen_1,
				quote_main_screen_2 = :quote_main_screen_2,
				quote_main_screen_3 = :quote_main_screen_3,
				quote_main_screen_4 = :quote_main_screen_4,
				quote_main_screen_5 = :quote_main_screen_5,
				quote_upgrading = :quote_upgrading,
				quote_attacking = :quote_attacking'
			);

		$query->bindValue(':name', $metalMaiden->getName());
		$query->bindValue(':tank', $metalMaiden->getTank());
		$query->bindValue(':tank_slug', $metalMaiden->getTank_slug());
		$query->bindValue(':category', $metalMaiden->getCategory());
		$query->bindValue(':nation', $metalMaiden->getNation());
		$query->bindValue(':rarity', $metalMaiden->getRarity());
		$query->bindValue(':character_voice', $metalMaiden->getCharacter_voice());
		$query->bindValue(':live2d', $metalMaiden->getLive2d());
		$query->bindValue(':ammo', serialize($metalMaiden->getAmmo()));
		$query->bindValue(':lifestyle_skills', serialize($metalMaiden->getLifestyle_skills()));
		$query->bindValue(':equipment_slots', serialize($metalMaiden->getEquipment_slots()));
		$query->bindValue(':engine_bonus', serialize($metalMaiden->getEngine_bonus()));
		$query->bindValue(':chassis_bonus', serialize($metalMaiden->getChassis_bonus()));
		$query->bindValue(':firepower', $metalMaiden->getFirepower(), PDO::PARAM_INT);
		$query->bindValue(':penetration', $metalMaiden->getPenetration(), PDO::PARAM_INT);
		$query->bindValue(':durability', $metalMaiden->getDurability(), PDO::PARAM_INT);
		$query->bindValue(':armor', $metalMaiden->getArmor(), PDO::PARAM_INT);
		$query->bindValue(':stealth', $metalMaiden->getStealth(), PDO::PARAM_INT);
		$query->bindValue(':detection', $metalMaiden->getDetection(), PDO::PARAM_INT);
		$query->bindValue(':targeting', $metalMaiden->getTargeting(), PDO::PARAM_INT);
		$query->bindValue(':evasion', $metalMaiden->getEvasion(), PDO::PARAM_INT);
		$query->bindValue(':min_range', $metalMaiden->getMin_range(), PDO::PARAM_INT);
		$query->bindValue(':max_range', $metalMaiden->getMax_range(), PDO::PARAM_INT);
		$query->bindValue(':quote_intro', $metalMaiden->getQuote_intro());
		$query->bindValue(':quote_main_screen_1', $metalMaiden->getQuote_main_screen_1());
		$query->bindValue(':quote_main_screen_2', $metalMaiden->getQuote_main_screen_2());
		$query->bindValue(':quote_main_screen_3', $metalMaiden->getQuote_main_screen_3());
		$query->bindValue(':quote_main_screen_4', $metalMaiden->getQuote_main_screen_4());
		$query->bindValue(':quote_main_screen_5', $metalMaiden->getQuote_main_screen_5());
		$query->bindValue(':quote_upgrading', $metalMaiden->getQuote_upgrading());
		$query->bindValue(':quote_attacking', $metalMaiden->getQuote_attacking());

		$query->execute();

		$metalMaidensManager = new MetalMaidensManager($this->_dbhandler);
		$metalMaiden = $metalMaidensManager->get($metalMaidensManager->tank_slug_exists($metalMaiden->getTank_slug()));
	}

	public function count() {
		return $this->_dbhandler->query('SELECT COUNT(*) FROM `metal_maidens`')->fetchColumn();
	}

	public function exists($id) {
		if (is_numeric($id))
			return (bool) $this->_dbhandler->query('SELECT COUNT(*) FROM `metal_maidens` WHERE id = ' . $id)->fetchColumn();
	}

	public function tank_slug_exists( $tank_slug ) {
		$query = $this->_dbhandler->prepare('SELECT id FROM `metal_maidens` WHERE tank_slug = :tank_slug');
		$query->execute(array(':tank_slug' => $tank_slug));

		return $query->fetchColumn();
	}

	public function delete( MetalMaiden $metalMaiden ) {
		$this->_dbhandler->exec("DELETE FROM `metal_maidens` WHERE id = " . $metalMaiden->getId());
	}

	public function get( $id ) {
		$id = (int) $id;

		$query = $this->_dbhandler->query('SELECT * FROM `metal_maidens` WHERE id = ' . $id);
		$data = $query->fetch(PDO::FETCH_ASSOC);

		if ($data != false)
			return new MetalMaiden($data);
		else
			return NULL;
	}

	public function getList() {
		$metalMaidens = array();

		$query = $this->_dbhandler->query('SELECT * FROM `metal_maidens` ORDER BY tank');

		while ($data = $query->fetch(PDO::FETCH_ASSOC))
		{
			$metalMaidens[] = new MetalMaiden($data);
		}

		return $metalMaidens;
	}

	public function getNation_list( $nation ) {
		$metalMaidens = array();
		$nation = strtolower($nation);
		$allowed_values = array('bavaria', 'brittania', 'freedonia', 'gallia', 'rossiya');

		if (in_array($nation, $allowed_values))
		{
			$query = $this->_dbhandler->query('SELECT * FROM `metal_maidens` WHERE nation = "' . $nation . '" ORDER BY tank');

			while ($data = $query->fetch(PDO::FETCH_ASSOC))
			{
				$metalMaidens[] = new MetalMaiden($data);
			}
		}

		return $metalMaidens;
	}

	public function getCategory_list( $category ) {
		$metalMaidens = array();
		$category = strtolower($category);
		$allowed_values = array('atg', 'ht', 'lav', 'lt', 'mt', 'spg');

		if (in_array($category, $allowed_values))
		{
			$query = $this->_dbhandler->query('SELECT * FROM `metal_maidens` WHERE category = "' . $category . '" ORDER BY tank');

			while ($data = $query->fetch(PDO::FETCH_ASSOC))
			{
				$metalMaidens[] = new MetalMaiden($data);
			}
		}

		return $metalMaidens;
	}

	public function getCategory_nation_list( $category, $nation ) {
		$metalMaidens = array();
		$category = strtolower($category);
		$nation = strtolower($nation);
		$allowed_category_values = array('atg', 'ht', 'lav', 'lt', 'mt', 'spg');
		$allowed_nation_values = array('bavaria', 'britannia', 'freedonia', 'gallia', 'rossiya');

		if (in_array($category, $allowed_category_values) && in_array($nation, $allowed_nation_values))
		{
			$query = $this->_dbhandler->query('SELECT * FROM `metal_maidens` WHERE category = "' . $category . '" AND nation = "' . $nation . '" ORDER BY tank');

			while ($data = $query->fetch(PDO::FETCH_ASSOC))
			{
				$metalMaidens[] = new MetalMaiden($data);
			}
		}

		return $metalMaidens;
	}

	public function update( MetalMaiden $metalMaiden ) {
		$query = $this->_dbhandler->prepare('UPDATE `metal_maidens`
			SET name = :name,
				tank = :tank,
				tank_slug = :tank_slug,
				category = :category,
				nation = :nation,
				rarity = :rarity,
				character_voice = :character_voice,
				live2d = :live2d,
				ammo = :ammo,
				lifestyle_skills = :lifestyle_skills,
				equipment_slots = :equipment_slots,
				engine_bonus = :engine_bonus,
				chassis_bonus = :chassis_bonus,
				firepower = :firepower,
				penetration = :penetration,
				durability = :durability,
				armor = :armor,
				stealth = :stealth,
				detection = :detection,
				targeting = :targeting,
				evasion = :evasion,
				min_range = :min_range,
				max_range = :max_range,
				quote_intro = :quote_intro,
				quote_main_screen_1 = :quote_main_screen_1,
				quote_main_screen_2 = :quote_main_screen_2,
				quote_main_screen_3 = :quote_main_screen_3,
				quote_main_screen_4 = :quote_main_screen_4,
				quote_main_screen_5 = :quote_main_screen_5,
				quote_upgrading = :quote_upgrading,
				quote_attacking = :quote_attacking,
				updated_on = FROM_UNIXTIME(:updated_on)
			WHERE id = :id');

		$query->bindValue(':id', $metalMaiden->getId(), PDO::PARAM_INT);
		$query->bindValue(':name', $metalMaiden->getName());
		$query->bindValue(':tank', $metalMaiden->getTank());
		$query->bindValue(':tank_slug', $metalMaiden->getTank_slug());
		$query->bindValue(':category', $metalMaiden->getCategory());
		$query->bindValue(':nation', $metalMaiden->getNation());
		$query->bindValue(':rarity', $metalMaiden->getRarity());
		$query->bindValue(':character_voice', $metalMaiden->getCharacter_voice());
		$query->bindValue(':live2d', $metalMaiden->getLive2d());
		$query->bindValue(':ammo', serialize($metalMaiden->getAmmo()));
		$query->bindValue(':lifestyle_skills', serialize($metalMaiden->getLifestyle_skills()));
		$query->bindValue(':equipment_slots', serialize($metalMaiden->getEquipment_slots()));
		$query->bindValue(':engine_bonus', serialize($metalMaiden->getEngine_bonus()));
		$query->bindValue(':chassis_bonus', serialize($metalMaiden->getChassis_bonus()));
		$query->bindValue(':firepower', $metalMaiden->getFirepower(), PDO::PARAM_INT);
		$query->bindValue(':penetration', $metalMaiden->getPenetration(), PDO::PARAM_INT);
		$query->bindValue(':durability', $metalMaiden->getDurability(), PDO::PARAM_INT);
		$query->bindValue(':armor', $metalMaiden->getArmor(), PDO::PARAM_INT);
		$query->bindValue(':stealth', $metalMaiden->getStealth(), PDO::PARAM_INT);
		$query->bindValue(':detection', $metalMaiden->getDetection(), PDO::PARAM_INT);
		$query->bindValue(':targeting', $metalMaiden->getTargeting(), PDO::PARAM_INT);
		$query->bindValue(':evasion', $metalMaiden->getEvasion(), PDO::PARAM_INT);
		$query->bindValue(':min_range', $metalMaiden->getMin_range(), PDO::PARAM_INT);
		$query->bindValue(':max_range', $metalMaiden->getMax_range(), PDO::PARAM_INT);
		$query->bindValue(':quote_intro', $metalMaiden->getQuote_intro());
		$query->bindValue(':quote_main_screen_1', $metalMaiden->getQuote_main_screen_1());
		$query->bindValue(':quote_main_screen_2', $metalMaiden->getQuote_main_screen_2());
		$query->bindValue(':quote_main_screen_3', $metalMaiden->getQuote_main_screen_3());
		$query->bindValue(':quote_main_screen_4', $metalMaiden->getQuote_main_screen_4());
		$query->bindValue(':quote_main_screen_5', $metalMaiden->getQuote_main_screen_5());
		$query->bindValue(':quote_upgrading', $metalMaiden->getQuote_upgrading());
		$query->bindValue(':quote_attacking', $metalMaiden->getQuote_attacking());
		$query->bindValue(':updated_on', time());

		$query->execute();
	}

	public function setDbhandler( PDO $dbhandler ) {
		$this->_dbhandler = $dbhandler;
	}
}
?>