<button type="button" onClick="setVisibility();">Export to wiki</button>
<pre id="export_to_wiki" style="display: none;">
{{Infobox_Metal_Maiden_Profile
 | model                                        = <?php echo $tank->getTank() . "<br />"; ?>
 | name                                                = <?php echo $tank->getName() . "<br />"; ?>
 | character_portrait_image                        = <?php echo str_replace('/', '_', $tank->getTank() . '.png<br />'); ?>
 | rarity                                        = <?php echo $tank->getRarity() . "<br />"; ?>
 | type                                                = <?php echo $tank->getCategory() . "<br />"; ?>
 | nation                                        = <?php echo ucfirst($tank->getNation()) . "<br />"; ?>
 | character_voice                                = <?php echo $tank->getCharacter_voice() . "<br />"; ?>
 | live2d                                        = <?php echo $tank->getLive2d() . "<br />"; ?>
}}

==Quote==
<?php
if ($tank->countQuotes() > 0)
{
	echo '{| class="wikitable"<br />';
	echo ' ! From<br />';
	echo ' ! Quote<br />';

	if (!empty($tank->getQuote_intro()))
	{
		echo ' |-<br />';
		echo ' | Intro<br />';
		echo ' | ';
		if ($tank->getQuote_intro() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_intro();
		echo "<br />";
	}

	if ($tank->countQuote_main_screen() > 0)
	{
		echo ' |-<br />';
		echo ' | rowspan="' . $tank->countQuote_main_screen() . '" | Main game screen<br />';

		if ($tank->getQuote_main_screen_1() == "null")		echo ' | ' . '<span style="color: Crimson">No quote</span>' . "<br /> |-<br />";
		elseif (!empty($tank->getQuote_main_screen_1()))	echo ' | ' . $tank->getQuote_main_screen_1() . "<br /> |-<br />";

		if ($tank->getQuote_main_screen_2() == "null")		echo ' | ' . '<span style="color: Crimson">No quote</span>' . "<br /> |-<br />";
		elseif (!empty($tank->getQuote_main_screen_2()))	echo ' | ' . $tank->getQuote_main_screen_2() . "<br /> |-<br />";

		if ($tank->getQuote_main_screen_3() == "null")		echo ' | ' . '<span style="color: Crimson">No quote</span>' . "<br /> |-<br />";
		elseif (!empty($tank->getQuote_main_screen_3()))	echo ' | ' . $tank->getQuote_main_screen_3() . "<br /> |-<br />";

		if ($tank->getQuote_main_screen_4() == "null")		echo ' | ' . '<span style="color: Crimson">No quote</span>' . "<br /> |-<br />";
		elseif (!empty($tank->getQuote_main_screen_4()))	echo ' | ' . $tank->getQuote_main_screen_4() . "<br /> |-<br />";

		if ($tank->getQuote_main_screen_5() == "null")		echo ' | ' . '<span style="color: Crimson">No quote</span>' . "<br /> |-<br />";
		elseif (!empty($tank->getQuote_main_screen_5()))	echo ' | ' . $tank->getQuote_main_screen_5() . "<br /> |-<br />";
	}

	if (!empty($tank->getQuote_upgrading()))
	{
		echo ' |-<br />';
		echo ' | Upgrading<br />';
		echo ' | ';
		if ($tank->getQuote_upgrading() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_upgrading();
		echo "<br />";
	}

	if (!empty($tank->getQuote_attacking()))
	{
		echo ' |-<br />';
		echo ' | Attacking<br />';
		echo ' | ';
		if ($tank->getQuote_attacking() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_attacking();
		echo "<br />";
	}

	echo '|}';
}
?>


==Attributes==
{{Infobox_Metal_Maiden_Statistics
 | firepower                                = <?php echo $tank->getFirepower() . "<br />"; ?>
 | penetration                                = <?php echo $tank->getPenetration() . "<br />"; ?>
 | durability                                = <?php echo $tank->getDurability() . "<br />"; ?>
 | armor                                = <?php echo $tank->getArmor() . "<br />"; ?>
 | targeting                                = <?php echo $tank->getTargeting() . "<br />"; ?>
 | evasion                                = <?php echo $tank->getEvasion() . "<br />"; ?>
 | stealth                                = <?php echo $tank->getStealth() . "<br />"; ?>
 | detection                                = <?php echo $tank->getDetection() . "<br />"; ?>
 | range_min                                = <?php if ($tank->getMin_range() != 0) echo number_format($tank->getMin_range(), 0, ',', ' '); echo "<br />"; ?>
 | range_max                                = <?php if ($tank->getMax_range() != 0) echo number_format($tank->getMax_range(), 0, ',', ' '); echo "<br />"; ?>
}}
{{Infobox_Metal_Maiden_Lifestyle
 |skill_1                        = <?php if ($tank->getLifestyle_skills()["skill_1"] != "null") echo $tank->getLifestyle_skills()["skill_1"]; echo "<br />"; ?>
 |skill_1_level                        = <?php if ($tank->getLifestyle_skills()["skill_1"] != "null") echo $tank->getLifestyle_skills()["skill_1_level"]; echo "<br />"; ?>
 |skill_2                        = <?php if ($tank->getLifestyle_skills()["skill_2"] != "null") echo $tank->getLifestyle_skills()["skill_2"]; echo "<br />"; ?>
 |skill_2_level                        = <?php if ($tank->getLifestyle_skills()["skill_2"] != "null") echo $tank->getLifestyle_skills()["skill_2_level"]; echo "<br />"; ?>
 |skill_3                        = <?php if ($tank->getLifestyle_skills()["skill_3"] != "null") echo $tank->getLifestyle_skills()["skill_3"]; echo "<br />"; ?>
 |skill_3_level                        = <?php if ($tank->getLifestyle_skills()["skill_3"] != "null") echo $tank->getLifestyle_skills()["skill_3_level"]; echo "<br />"; ?>
}}
{{Infobox_Metal_Maiden_Equipment
 | max_rank                        = <?php echo $tank->getMax_rank() . "<br />"; ?>
 | slot_1                        = <?php if ($tank->getEquipment_slots()["slot_1"] != "null") echo $tank->getEquipment_slots()["slot_1"]; echo "<br />"; ?>
 | slot_2                        = <?php if ($tank->getEquipment_slots()["slot_2"] != "null") echo $tank->getEquipment_slots()["slot_2"]; echo "<br />"; ?>
 | slot_3                        = <?php if ($tank->getEquipment_slots()["slot_3"] != "null") echo $tank->getEquipment_slots()["slot_3"]; echo "<br />"; ?>
 | slot_4                        = <?php if ($tank->getEquipment_slots()["slot_4"] != "null") echo $tank->getEquipment_slots()["slot_4"]; echo "<br />"; ?>
 | slot_5                        = <?php if ($tank->getEquipment_slots()["slot_5"] != "null") echo $tank->getEquipment_slots()["slot_5"]; echo "<br />"; ?>
 | slot_6                        = <?php if ($tank->getEquipment_slots()["slot_6"] != "null") echo $tank->getEquipment_slots()["slot_6"]; echo "<br />"; ?>
 | slot_7                        = <?php if ($tank->getEquipment_slots()["slot_7"] != "null") echo $tank->getEquipment_slots()["slot_7"]; echo "<br />"; ?>
 | slot_8                        = <?php if ($tank->getEquipment_slots()["slot_8"] != "null") echo $tank->getEquipment_slots()["slot_8"]; echo "<br />"; ?>
 | ap                                = <?php echo $tank->getAmmo()["ap"] . "<br />"; ?>
 | apcr                                = <?php echo $tank->getAmmo()["apcr"] . "<br />"; ?>
 | apds                                = <?php echo $tank->getAmmo()["apds"] . "<br />"; ?>
 | he                                = <?php echo $tank->getAmmo()["he"] . "<br />"; ?>
 | heat                                = <?php echo $tank->getAmmo()["heat"] . "<br />"; ?>
 | hesh                                = <?php echo $tank->getAmmo()["hesh"] . "<br />"; ?>
 | rp                                = <?php echo $tank->getAmmo()["rp"] . "<br />"; ?>
 | c_proof                        = <?php echo $tank->getEngine_bonus()["c_proof"] . "<br />"; ?>
 | d_proof                        = <?php echo $tank->getEngine_bonus()["d_proof"] . "<br />"; ?>
 | h_proof                        = <?php echo $tank->getEngine_bonus()["h_proof"] . "<br />"; ?>
 | s_proof                        = <?php echo $tank->getEngine_bonus()["s_proof"] . "<br />"; ?>
 | w_proof                        = <?php echo $tank->getEngine_bonus()["w_proof"] . "<br />"; ?>
 | silent                        = <?php echo $tank->getEngine_bonus()["silent"] . "<br />"; ?>
 | armor                        = <?php echo $tank->getArmor_category() . "<br />"; ?>
 | angled                        = <?php echo $tank->getChassis_bonus()["angled"] . "<br />"; ?>
 | flat-top                        = <?php echo $tank->getChassis_bonus()["flat_top"] . "<br />"; ?>
 | front                        = <?php echo $tank->getChassis_bonus()["front"] . "<br />"; ?>
 | light                        = <?php echo $tank->getChassis_bonus()["light"] . "<br />"; ?>
 | low                        = <?php echo $tank->getChassis_bonus()["low"] . "<br />"; ?>
 | rear                        = <?php echo $tank->getChassis_bonus()["rear"] . "<br />"; ?>
 | sloped                        = <?php echo $tank->getChassis_bonus()["sloped"] . "<br />"; ?>
 | tires                        = <?php echo $tank->getChassis_bonus()["tires"] . "<br />"; ?>
 | treads                        = <?php echo $tank->getChassis_bonus()["treads"] . "<br />"; ?>
}}

==Technology==

==Illustration==
<?php
$filename  = "resources/metal_maidens/";
$filename .= "full/";
$filename .= $tank->getImagename();
$filename .= ".png";

$file_headers = @get_headers($filename);

if (file_exists(utf8_decode($filename)))
{
?>
{| class="mw-collapsible mw-collapsed wikitable"
! Full illustration
|-
| [[File:<?php echo str_replace('/', '_', $tank->getTank() . "_full.png"); ?>]]
|}
<?php
}
?>
</pre>
<script>
    var hidden = true;
    function setVisibility() {
        hidden = !hidden;
        if (hidden) {
            document.getElementById('export_to_wiki').style.display = 'none';
        } else {
            document.getElementById('export_to_wiki').style.display = 'block';
        }
    }
</script>