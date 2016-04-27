<?php
class MetalMaiden
{
	protected $_id;
	protected $_name;
	protected $_tank;
	protected $_category;
	protected $_nation;
	protected $_rarity;
	protected $_character_voice;
	protected $_live2d;
	protected $_ammo;
	protected $_lifestyle_skills;
	protected $_equipment_slots;
	protected $_engine_bonus;
	protected $_chassis_bonus;
	protected $_firepower;
	protected $_penetration;
	protected $_durability;
	protected $_armor;
	protected $_stealth;
	protected $_detection;
	protected $_targeting;
	protected $_evasion;
	protected $_fire_resist;
	protected $_crit_resist;
	protected $_crit_defense;
	protected $_firepower_lvl60;
	protected $_penetration_lvl60;
	protected $_durability_lvl60;
	protected $_armor_lvl60;
	protected $_min_range;
	protected $_max_range;
	protected $_quote_intro;
	protected $_quote_main_screen_1;
	protected $_quote_main_screen_2;
	protected $_quote_main_screen_3;
	protected $_quote_main_screen_4;
	protected $_quote_main_screen_5;
	protected $_quote_upgrading;
	protected $_quote_attacking;
	protected $_created_on;
	protected $_updated_on;

	protected $_forge;
	protected $_naval_port;
	protected $_refactor;
	protected $_chapter;
	protected $_method_1;
	protected $_method_2;
	protected $_method_3;
	protected $_develop;
	protected $_research;

	static $verbose = false;

	public function __construct( array $kwargs ) {
		$this->hydrate($kwargs);
		if (self::$verbose == True)
		{
			echo '[Creating Metal Maiden]<br />';
			echo 'id : ' . $this->getId() . '<br />';
			echo 'name : ' . $this->getName() . '<br />';
			echo 'tank : ' . $this->getTank() . '<br />';
			echo 'tank slug : ' . $this->getTank_slug() . '<br />';
			echo 'category : ' . $this->getCategory() . '<br />';
			echo 'nation : ' . $this->getNation() . '<br />';
			echo 'rarity : ' . $this->getRarity() . '<br />';
			echo 'character voice : ' . $this->getCharacter_voice() . '<br />';
			echo 'live2D : ' . $this->getLive2d() . '<br />';
			echo 'ammo : ' . $this->getAmmo() . '<br />';
			echo 'lifestyle skills : ' . $this->getLifestyle_skills() . '<br />';
			echo 'equipment slots : ' . $this->getEquipment_slots() . '<br />';
			echo 'engine bonus : ' . $this->getEngine_bonus() . '<br />';
			echo 'chassis bonus : ' . $this->getChassis_bonus() . '<br />';
			echo 'firepower : ' . $this->getFirepower() . '<br />';
			echo 'penetration : ' . $this->getPenetration() . '<br />';
			echo 'durability : ' . $this->getDurability() . '<br />';
			echo 'armor : ' . $this->getArmor() . '<br />';
			echo 'stealth : ' . $this->getStealth() . '<br />';
			echo 'detection : ' . $this->getDetection() . '<br />';
			echo 'targeting : ' . $this->getTargeting() . '<br />';
			echo 'evasion : ' . $this->getEvasion() . '<br />';
			echo 'min range : ' . $this->getMin_range() . '<br />';
			echo 'max range : ' . $this->getMax_range() . '<br />';
			echo 'fire resist : ' . $this->getFire_resist() . '<br />';
			echo 'crit resist : ' . $this->getCrit_resist() . '<br />';
			echo 'crit defense : ' . $this->getCrit_defense() . '<br />';
			echo 'firepower lvl60 : ' . $this->getFirepower_lvl60() . '<br />';
			echo 'penetration lvl60 : ' . $this->getPenetration_lvl60() . '<br />';
			echo 'durability lvl60 : ' . $this->getDurability_lvl60() . '<br />';
			echo 'armor lvl60 : ' . $this->getArmor_lvl60() . '<br />';
			echo 'intro quote : ' . $this->getQuote_intro() . '<br />';
			echo 'main screen quote 1 : ' . $this->getQuote_main_screen_1() . '<br />';
			echo 'main screen quote 2 : ' . $this->getQuote_main_screen_2() . '<br />';
			echo 'main screen quote 3 : ' . $this->getQuote_main_screen_3() . '<br />';
			echo 'main screen quote 4 : ' . $this->getQuote_main_screen_4() . '<br />';
			echo 'main screen quote 5 : ' . $this->getQuote_main_screen_5() . '<br />';
			echo 'upgrading quote : ' . $this->getQuote_upgrading() . '<br />';
			echo 'attacking quote : ' . $this->getQuote_attacking() . '<br />';
			echo 'created on : ' . $this->getCreated_on() . '<br />';
			echo 'last updated : ' . $this->getUpdated_on() . '<br />';
			echo '<br />Join requirements<br />';
			echo 'forge : ' . $this->getForge() . '<br />';
			echo 'naval port : ' . $this->getNaval_port() . '<br />';
			echo 'refactor : ' . $this->getRefactor() . '<br />';
			echo 'method 1 : ' . $this->getMethod_1() . '<br />';
			echo 'method 2 : ' . $this->getMethod_2() . '<br />';
			echo 'method 3 : ' . $this->getMethod_3() . '<br />';
			echo 'develop : ' . $this->getDevelop() . '<br />';
			echo 'research : ' . $this->getResearch() . '<br />';
		}
	}

	public function hydrate( array $kwargs ) {
		foreach ($kwargs as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method))	{ $this->$method($value); }
		}
	}

	public function getId()						{ return $this->_id; }
	public function getName()					{ return $this->_name; }
	public function getTank()					{ return $this->_tank; }
	public function getCategory()				{ return $this->_category; }
	public function getNation()					{ return $this->_nation; }
	public function getRarity()					{ return $this->_rarity; }
	public function getCharacter_voice()		{ return $this->_character_voice; }
	public function getLive2d()					{ return $this->_live2d; }
	public function getAmmo()					{ return $this->_ammo; }
	public function getLifestyle_skills()		{ return $this->_lifestyle_skills; }
	public function getEquipment_slots()		{ return $this->_equipment_slots; }
	public function getEngine_bonus()			{ return $this->_engine_bonus; }
	public function getChassis_bonus()			{ return $this->_chassis_bonus; }
	public function getFirepower()				{ return $this->_firepower; }
	public function getPenetration()			{ return $this->_penetration; }
	public function getDurability()				{ return $this->_durability; }
	public function getArmor()					{ return $this->_armor; }
	public function getStealth()				{ return $this->_stealth; }
	public function getDetection()				{ return $this->_detection; }
	public function getTargeting()				{ return $this->_targeting; }
	public function getEvasion()				{ return $this->_evasion; }
	public function getFire_resist()			{ return $this->_fire_resist; }
	public function getCrit_resist()			{ return $this->_crit_resist; }
	public function getCrit_defense()			{ return $this->_crit_defense; }
	public function getFirepower_lvl60()		{ return $this->_firepower_lvl60; }
	public function getPenetration_lvl60()		{ return $this->_penetration_lvl60; }
	public function getDurability_lvl60()		{ return $this->_durability_lvl60; }
	public function getArmor_lvl60()			{ return $this->_armor_lvl60; }
	public function getMin_range()				{ return $this->_min_range; }
	public function getMax_range()				{ return $this->_max_range; }
	public function getQuote_intro()			{ return $this->_quote_intro; }
	public function getQuote_main_screen_1()	{ return $this->_quote_main_screen_1; }
	public function getQuote_main_screen_2()	{ return $this->_quote_main_screen_2; }
	public function getQuote_main_screen_3()	{ return $this->_quote_main_screen_3; }
	public function getQuote_main_screen_4()	{ return $this->_quote_main_screen_4; }
	public function getQuote_main_screen_5()	{ return $this->_quote_main_screen_5; }
	public function getQuote_upgrading()		{ return $this->_quote_upgrading; }
	public function getQuote_attacking()		{ return $this->_quote_attacking; }
	public function getUpdated_on()				{ return $this->_updated_on; }
	public function getCreated_on()				{ return $this->_created_on; }

	public function getForge()					{ return $this->_forge; }
	public function getNaval_port()				{ return $this->_naval_port; }
	public function getRefactor()				{ return $this->_refactor; }
	public function getChapter()				{ return $this->_chapter; }
	public function getMethod_1()				{ return $this->_method_1; }
	public function getMethod_2()				{ return $this->_method_2; }
	public function getMethod_3()				{ return $this->_method_3; }
	public function getDevelop()				{ return $this->_develop; }
	public function getResearch()				{ return $this->_research; }
	public function getRequirements( $requirement ) {
		switch ($requirement) {
			case 'forge':
				return $this->_forge;
				break;

			case 'naval_port':
				return $this->_naval_port;
				break;
			
			case 'refactor':
				return $this->_refactor;
				break;

			case 'chapter':
				return $this->_chapter;
				break;

			case 'method_1':
				return $this->_method_1;
				break;

			case 'method_2':
				return $this->_method_2;
				break;

			case 'method_3':
				return $this->_method_3;
				break;

			case 'develop':
				return $this->_develop;
				break;

			case 'research':
				return $this->_research;
				break;

			default:
				return NULL;
				break;
		}
	}

	public function getArmor_category()			{ if ($this->_category == "spg") return "light"; elseif ($this->_category == "ht" || $this->_category == "atg") return "heavy"; elseif ($this->_category == "lav" || $this->_category == "lt" || $this->_category == "mt") return "standard"; else return ""; }
	public function getLive2d_string()			{ if ($this->_live2d == "1") return "Available"; elseif ($this->_live2d == "0") return "Not available"; else return ""; }
	public function getImagename()				{ return str_replace('/', '_', $this->_tank); }
	public function getMax_rank()				{ if ($this->_rarity == "gold") return "3"; elseif ($this->_rarity == "purple") return "2"; elseif ($this->_rarity == "blue") return "1"; else return ""; }
	public function getTank_slug()				{ return post_slug($this->_tank); }

	public function getChapter_number($chapter, $volume) { return $this->_chapter[$chapter . "_" . $volume]; }

	public function countQuote_main_screen() {
		$i = 0;

		if (!empty($this->_quote_main_screen_1))	++$i;
		if (!empty($this->_quote_main_screen_2))	++$i;
		if (!empty($this->_quote_main_screen_3))	++$i;
		if (!empty($this->_quote_main_screen_4))	++$i;
		if (!empty($this->_quote_main_screen_5))	++$i;

		return $i;
	}

	public function countQuotes() {
		$i = 0;

		if (!empty($this->_quote_intro))			++$i;
		if (!empty($this->_quote_main_screen_1))	++$i;
		if (!empty($this->_quote_main_screen_2))	++$i;
		if (!empty($this->_quote_main_screen_3))	++$i;
		if (!empty($this->_quote_main_screen_4))	++$i;
		if (!empty($this->_quote_main_screen_5))	++$i;
		if (!empty($this->_quote_upgrading))		++$i;
		if (!empty($this->_quote_attacking))		++$i;

		return $i;
	}

	public function getQuote($quote_name) {
		switch ($quote_name) {
			case 'quote_intro':
				return $this->_quote_intro;
				break;

			case 'quote_main_screen_1':
				return $this->_quote_main_screen_1;
				break;
			
			case 'quote_main_screen_2':
				return $this->_quote_main_screen_2;
				break;

			case 'quote_main_screen_3':
				return $this->_quote_main_screen_3;
				break;

			case 'quote_main_screen_4':
				return $this->_quote_main_screen_4;
				break;

			case 'quote_main_screen_5':
				return $this->_quote_main_screen_5;
				break;

			case 'quote_attacking':
				return $this->_quote_attacking;
				break;

			case 'quote_upgrading':
				return $this->_quote_upgrading;
				break;

			default:
				return "";
				break;
		}
	}

	public function getStatistics($statistic_name) {
		switch ($statistic_name) {
			case 'penetration':
				return $this->_penetration;
				break;

			case 'firepower':
				return $this->_firepower;
				break;
			
			case 'durability':
				return $this->_durability;
				break;

			case 'armor':
				return $this->_armor;
				break;

			case 'targeting':
				return $this->_targeting;
				break;

			case 'evasion':
				return $this->_evasion;
				break;

			case 'stealth':
				return $this->_stealth;
				break;

			case 'detection':
				return $this->_detection;
				break;

			case 'min_range':
				return $this->_min_range;
				break;

			case 'max_range':
				return $this->_max_range;
				break;

			case 'fire_resist':
				return $this->_fire_resist;
				break;

			case 'crit_resist':
				return $this->_crit_resist;
				break;

			case 'crit_defense':
				return $this->_crit_defense;
				break;

			case 'penetration_lvl60':
				return $this->_penetration_lvl60;
				break;

			case 'firepower_lvl60':
				return $this->_firepower_lvl60;
				break;
			
			case 'durability_lvl60':
				return $this->_durability_lvl60;
				break;

			case 'armor_lvl60':
				return $this->_armor_lvl60;
				break;

			default:
				return "";
				break;
		}
	}

	public function getAmmo_desc() {
		$ammo_desc = array(
			"ap"	=> "<span style='color: orange;'>[AP]</span> Conventional",
			"apcr"	=> "<span style='color: orange;'>[APCR]</span> Composite-Rigid",
			"apds"	=> "<span style='color: orange;'>[APDS]</span> Discarding Sabot",
			"he"	=> "<span style='color: orange;'>[HE]</span> High-Explosive",
			"heat"	=> "<span style='color: orange;'>[HEAT]</span> Anti-Tank",
			"hesh"	=> "<span style='color: orange;'>[HESH]</span> Squash-Head",
			"rp"	=> "<span style='color: orange;'>[RP]</span> Rocket-Propelled"
		);

		return $ammo_desc;
	}

	public function getChassis_bonus_desc() {
		$chassis_bonus_desc = array(
			"angled"	=> "<span style='color: orange;'>[Angled]</span> Immune to [Broad] terrain effect",
			"flat_top"	=> "<span style='color: orange;'>[Flat-top]</span> Increases ricochet chance for [AP] and [AT] attacks",
			"front"		=> "<span style='color: orange;'>[Front]</span> Immune to [Bushy] terrain effect",
			"light"		=> "<span style='color: orange;'>[Light]</span> Immune to [Rocky] terrain effect",
			"low"		=> "<span style='color: orange;'>[Low]</span> Immune to [Trap] terrain effect",
			"rear"		=> "<span style='color: orange;'>[Rear]</span> Immune to [Swamp] terrain effect",
			"sloped"	=> "<span style='color: orange;'>[Sloped]</span> Increases ricochet chance for [AP] and [AT] attacks",
			"tires"		=> "<span style='color: orange;'>[Tires]</span> Immune to [Flat] terrain effect",
			"treads"	=> "<span style='color: orange;'>[Treads]</span> Immune to [Snowy] terrain effect"
		);

		return $chassis_bonus_desc;
	}

	public function getEngine_bonus_desc() {
		$engine_bonus_desc = array(
			"c_proof"	=> "<span style='color: orange;'>[C Proof]</span> Immune to [Cold] terrain effect",
			"d_proof"	=> "<span style='color: orange;'>[D Proof]</span> Immune to [Dusty] terrain effect",
			"h_proof"	=> "<span style='color: orange;'>[H Proof]</span> Immune to [Hot] terrain effect",
			"s_proof"	=> "<span style='color: orange;'>[S Proof]</span> Immune to [Steep] terrain effect",
			"w_proof"	=> "<span style='color: orange;'>[W Proof]</span> Immune to [Wet] terrain effect",
			"silent"	=> "<span style='color: orange;'>[Silent]</span> Immune to [Exposed] terrain effect"
		);

		return $engine_bonus_desc;
	}

	public function setId ( $id ) {
		$id = (int) $id;
	
		if (is_int($id) && $id > 0)
			$this->_id = $id;
		else
			$this->_id = NULL;
	}

	public function setName( $name ) {
		$this->_name = $name;
	}

	public function setTank( $tank ) {
		$this->_tank = $tank;
	}

	public function setCategory( $category ) {
		$this->_category = $category;
	}

	public function setNation( $nation ) {
		$this->_nation = $nation;
	}

	public function setRarity( $rarity ) {
		$this->_rarity = $rarity;
	}

	public function setCharacter_voice( $character_voice ) {
		$this->_character_voice = $character_voice;
	}

	public function setLive2d( $live2d ) {
		$this->_live2d = $live2d;
	}

	public function setAmmo( $ammo ) {
		if (!empty($ammo))
		{
			$data = @unserialize($ammo);

			if ($ammo === 'b:0;' || $data !== false)
			{
				$this->_ammo = $data;
			}
			else
			{
				if (is_array($ammo))
					$this->_ammo = $ammo;
			}
		}
		else
			$this->_ammo = [];
	}

	public function setLifestyle_skills( $lifestyle_skills ) {
		if (!empty($lifestyle_skills))
		{
			$data = @unserialize($lifestyle_skills);

			if ($lifestyle_skills === 'b:0;' || $data !== false)
			{
				$this->_lifestyle_skills = $data;
			}
			else
			{
				if (is_array($lifestyle_skills))
					$this->_lifestyle_skills = $lifestyle_skills;
			}
		}
		else
			$this->_lifestyle_skills = [];
	}

	public function setEquipment_slots( $equipment_slots ) {
		if (!empty($equipment_slots))
		{
			$data = @unserialize($equipment_slots);

			if ($equipment_slots === 'b:0;' || $data !== false)
			{
				$this->_equipment_slots = $data;
			}
			else
			{
				if (is_array($equipment_slots))
					$this->_equipment_slots = $equipment_slots;
			}
		}
		else
			$this->_equipment_slots = [];
	}

	public function setEngine_bonus( $engine_bonus ) {
		if (!empty($engine_bonus))
		{
			$data = @unserialize($engine_bonus);

			if ($engine_bonus === 'b:0;' || $data !== false)
			{
				$this->_engine_bonus = $data;
			}
			else
			{
				if (is_array($engine_bonus))
					$this->_engine_bonus = $engine_bonus;
			}
		}
		else
			$this->_engine_bonus = [];
	}

	public function setChassis_bonus( $chassis_bonus ) {
		if (!empty($chassis_bonus))
		{
			$data = @unserialize($chassis_bonus);

			if ($chassis_bonus === 'b:0;' || $data !== false)
			{
				$this->_chassis_bonus = $data;
			}
			else
			{
				if (is_array($chassis_bonus))
					$this->_chassis_bonus = $chassis_bonus;
			}
		}
		else
			$this->_chassis_bonus = [];
	}

	public function setFirepower( $firepower ) {
		$this->_firepower = $firepower;
	}

	public function setPenetration( $penetration ) {
		$this->_penetration = $penetration;
	}

	public function setDurability( $durability ) {
		$this->_durability = $durability;
	}

	public function setArmor( $armor ) {
		$this->_armor = $armor;
	}

	public function setStealth( $stealth ) {
		$this->_stealth = $stealth;
	}

	public function setDetection( $detection ) {
		$this->_detection = $detection;
	}

	public function setTargeting( $targeting ) {
		$this->_targeting = $targeting;
	}

	public function setEvasion( $evasion ) {
		$this->_evasion = $evasion;
	}

	public function setFire_resist( $fire_resist ) {
		$this->_fire_resist = $fire_resist;
	}

	public function setCrit_resist( $crit_resist ) {
		$this->_crit_resist = $crit_resist;
	}

	public function setCrit_defense( $crit_defense ) {
		$this->_crit_defense = $crit_defense;
	}

	public function setFirepower_lvl60( $firepower_lvl60 ) {
		$this->_firepower_lvl60 = $firepower_lvl60;
	}

	public function setPenetration_lvl60( $penetration_lvl60 ) {
		$this->_penetration_lvl60 = $penetration_lvl60;
	}

	public function setDurability_lvl60( $durability_lvl60 ) {
		$this->_durability_lvl60 = $durability_lvl60;
	}

	public function setArmor_lvl60( $armor_lvl60 ) {
		$this->_armor_lvl60 = $armor_lvl60;
	}

	public function setMin_range( $min_range ) {
		$this->_min_range = $min_range;
	}

	public function setMax_range( $max_range ) {
		$this->_max_range = $max_range;
	}

	public function setQuote_intro( $quote ) {
		$this->_quote_intro = $quote;
	}

	public function setQuote_main_screen_1( $quote ) {
		$this->_quote_main_screen_1 = $quote;
	}

	public function setQuote_main_screen_2( $quote ) {
		$this->_quote_main_screen_2 = $quote;
	}

	public function setQuote_main_screen_3( $quote ) {
		$this->_quote_main_screen_3 = $quote;
	}

	public function setQuote_main_screen_4( $quote ) {
		$this->_quote_main_screen_4 = $quote;
	}

	public function setQuote_main_screen_5( $quote ) {
		$this->_quote_main_screen_5 = $quote;
	}

	public function setQuote_upgrading( $quote ) {
		$this->_quote_upgrading = $quote;
	}

	public function setQuote_attacking( $quote ) {
		$this->_quote_attacking = $quote;
	}

	public function setCreated_on( $time ) {
		$this->_created_on = $time;
	}

	public function setUpdated_on( $time ) {
		$this->_updated_on = $time;
	}

	public function setForge( $bool ) {
		$this->_forge = $bool;
	}

	public function setNaval_port( $level ) {
		$this->_naval_port = $level;
	}

	public function setRefactor( $level ) {
		$this->_refactor = $level;
	}

	public function setChapter( $chapter ) {
		if (!empty($chapter))
		{
			$data = @unserialize($chapter);

			if ($chapter === 'b:0;' || $data !== false)
			{
				$this->_chapter = $data;
			}
			else
			{
				if (is_array($chapter))
					$this->_chapter = $chapter;
			}
		}
		else
			$this->_chapter = NULL;
	}

	public function setMethod_1( $method ) {
		if (!empty($method))
		{
			$data = @unserialize($method);

			if ($method === 'b:0;' || $data !== false)
			{
				$this->_method_1 = $data;
			}
			else
			{
				if (is_array($method))
					$this->_method_1 = $method;
			}
		}
		else
			$this->_method_1 = NULL;
	}

	public function setMethod_2( $method ) {
		if (!empty($method))
		{
			$data = @unserialize($method);

			if ($method === 'b:0;' || $data !== false)
			{
				$this->_method_2 = $data;
			}
			else
			{
				if (is_array($method))
					$this->_method_2 = $method;
			}
		}
		else
			$this->_method_2 = NULL;
	}

	public function setMethod_3( $method ) {
		if (!empty($method))
		{
			$data = @unserialize($method);

			if ($method === 'b:0;' || $data !== false)
			{
				$this->_method_3 = $data;
			}
			else
			{
				if (is_array($method))
					$this->_method_3 = $method;
			}
		}
		else
			$this->_method_3 = NULL;
	}

	public function setDevelop( $develop ) {
		if (!empty($develop))
		{
			$data = @unserialize($develop);

			if ($develop === 'b:0;' || $data !== false)
			{
				$this->_develop = $data;
			}
			else
			{
				if (is_array($develop))
					$this->_develop = $develop;
			}
		}
		else
			$this->_develop = NULL;
	}

	public function setResearch( $research ) {
		if (!empty($research))
		{
			$data = @unserialize($research);

			if ($research === 'b:0;' || $data !== false)
			{
				$this->_research = $data;
			}
			else
			{
				if (is_array($research))
					$this->_research = $research;
			}
		}
		else
			$this->_research = NULL;
	}

	public function setRequirements( $requirements ) {
		if (isset($requirements["forge"]))
			$this->setForge($requirements["forge"]);
		else
			$this->_forge = 0;

		if (isset($requirements["naval_port"]))
			$this->setNaval_port($requirements["naval_port"]);
		else
			$this->_naval_port = 0;

		if (isset($requirements["refactor"]))
			$this->setRefactor($requirements["refactor"]);
		else
			$this->_refactor = 0;

		if (isset($requirements["chapter"]))
			$this->setChapter($requirements["chapter"]);
		else
			$this->_chapter = NULL;

		if (isset($requirements["method_1"]))
			$this->setMethod_1($requirements["method_1"]);
		else
			$this->_method_1 = NULL;

		if (isset($requirements["method_2"]))
			$this->setMethod_2($requirements["method_2"]);
		else
			$this->_method_2 = NULL;

		if (isset($requirements["method_3"]))
			$this->setMethod_3($requirements["method_3"]);
		else
			$this->_method_3 = NULL;

		if (isset($requirements["develop"]))
			$this->setDevelop($requirements["develop"]);
		else
			$this->_develop = NULL;

		if (isset($requirements["research"]))
			$this->setResearch($requirements["research"]);
		else
			$this->_research = NULL;
	}
}
?>