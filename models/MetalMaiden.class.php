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
			echo 'intro quote : ' . $this->getQuote_intro() . '<br />';
			echo 'main screen quote 1 : ' . $this->getQuote_main_screen_1() . '<br />';
			echo 'main screen quote 2 : ' . $this->getQuote_main_screen_2() . '<br />';
			echo 'main screen quote 3 : ' . $this->getQuote_main_screen_3() . '<br />';
			echo 'main screen quote 4 : ' . $this->getQuote_main_screen_4() . '<br />';
			echo 'main screen quote 5 : ' . $this->getQuote_main_screen_5() . '<br />';
			echo 'upgrading quote : ' . $this->getQuote_upgrading() . '<br />';
			echo 'attacking quote : ' . $this->getQuote_attacking() . '<br />';
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

	public function getArmor_category()		{ if ($this->_category == "spg") return "light"; elseif ($this->_category == "ht" || $this->_category == "atg") return "heavy"; elseif ($this->_category == "lav" || $this->_category == "lt" || $this->_category == "mt") return "standard"; else return ""; }
	public function getLive2d_string()		{ if ($this->_live2d == "1") return "Available"; elseif ($this->_live2d == "0") return "Not available"; else return ""; }
	public function getImagename()			{ return str_replace('/', '_', $this->_tank); }
	public function getMax_rank()			{ if ($this->_rarity == "gold") return "3"; elseif ($this->_rarity == "purple") return "2"; elseif ($this->_rarity == "blue") return "1"; else return ""; }
	public function getTank_slug()			{ return post_slug($this->_tank); }

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
			case 'intro':
				return $this->_quote_intro;
				break;

			case 'main1':
				return $this->_quote_main_screen_1;
				break;
			
			case 'main2':
				return $this->_quote_main_screen_2;
				break;

			case 'main3':
				return $this->_quote_main_screen_3;
				break;

			case 'main4':
				return $this->_quote_main_screen_4;
				break;

			case 'main5':
				return $this->_quote_main_screen_5;
				break;

			case 'attacking':
				return $this->_quote_attacking;
				break;

			case 'upgrading':
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
			if (is_array($ammo))
				$this->_ammo = $ammo;
			else
			{
				$ammo = explode(",", $ammo);
				$this->_ammo = array(
					"ap"	=> $ammo[0],
					"apcr"	=> $ammo[1],
					"apds"	=> $ammo[2],
					"he"	=> $ammo[3],
					"heat"	=> $ammo[4],
					"hesh"	=> $ammo[5],
					"rp"	=> $ammo[6]
				);
			}
		}
		else
			$this->_ammo = [];
	}

	public function setLifestyle_skills( $lifestyle_skills ) {
		if (!empty($lifestyle_skills))
		{
			if (is_array($lifestyle_skills))
				$this->_lifestyle_skills = $lifestyle_skills;
			else
			{
				$lifestyle_skills = explode(",", $lifestyle_skills);
				$this->_lifestyle_skills = array(
					"skill_1"	=> $lifestyle_skills[0],
					"skill_1_level"	=> $lifestyle_skills[1],
					"skill_2"	=> $lifestyle_skills[2],
					"skill_2_level"	=> $lifestyle_skills[3],
					"skill_3"	=> $lifestyle_skills[4],
					"skill_3_level"	=> $lifestyle_skills[5]
				);
			}
		}
		else
			$this->_lifestyle_skills = [];
	}

	public function setEquipment_slots( $equipment_slots ) {
		if (!empty($equipment_slots))
		{
			if (is_array($equipment_slots))
				$this->_equipment_slots = $equipment_slots;
			else
			{
				$equipment_slots = explode(",", $equipment_slots);
				$this->_equipment_slots = array(
					"slot_1"	=> $equipment_slots[0],
					"slot_2"	=> $equipment_slots[1],
					"slot_3"	=> $equipment_slots[2],
					"slot_4"	=> $equipment_slots[3],
					"slot_5"	=> $equipment_slots[4],
					"slot_6"	=> $equipment_slots[5],
					"slot_7"	=> $equipment_slots[6],
					"slot_8"	=> $equipment_slots[7]
				);
			}
		}
		else
			$this->_equipment_slots = [];
	}

	public function setEngine_bonus( $engine_bonus ) {
		if (!empty($engine_bonus))
		{
			if (is_array($engine_bonus))
				$this->_engine_bonus = $engine_bonus;
			else
			{
				$engine_bonus = explode(",", $engine_bonus);
				$this->_engine_bonus = array(
					"c_proof"	=> $engine_bonus[0],
					"d_proof"	=> $engine_bonus[1],
					"h_proof"	=> $engine_bonus[2],
					"s_proof"	=> $engine_bonus[3],
					"w_proof"	=> $engine_bonus[4],
					"silent"	=> $engine_bonus[5]
				);
			}
		}
		else
			$this->_engine_bonus = [];
	}

	public function setChassis_bonus( $chassis_bonus ) {
		if (!empty($chassis_bonus))
		{
			if (is_array($chassis_bonus))
				$this->_chassis_bonus = $chassis_bonus;
			else
			{
				$chassis_bonus = explode(",", $chassis_bonus);
				$this->_chassis_bonus = array(
					"angled"	=> $chassis_bonus[0],
					"flat_top"	=> $chassis_bonus[1],
					"front"		=> $chassis_bonus[2],
					"light"		=> $chassis_bonus[3],
					"low"		=> $chassis_bonus[4],
					"rear"		=> $chassis_bonus[5],
					"sloped"	=> $chassis_bonus[6],
					"tires"		=> $chassis_bonus[7],
					"treads"	=> $chassis_bonus[8]
				);
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
}
?>