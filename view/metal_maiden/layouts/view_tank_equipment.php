<table class="view_tank">
<tr>
	<th colspan="3">Equipment</th>
</tr>
<tr>
	<td>Max rank</td>
	<td colspan="2"><?php echo $tank->getMax_rank(); ?></td>
</tr>
<tr>
	<td>Armor category</td>
	<td class="view_tank_equipment">
		<?php
		if ($tank->getArmor_category() != "")
			echo '<img style="height: 30px;" src="' . RESSOURCES_DIR . 'attributes/' . $tank->getArmor_category() . '_armor.png" alt="' . $tank->getArmor_category() . ' icon" /> ';
		?>
	</td>
	<td>
		<?php
		if ($tank->getArmor_category() != "")
			echo ucfirst($tank->getArmor_category());
		?>
	</td>
</tr>
<tr>
	<td>Equipment slots</td>
	<td colspan="2">
		<?php
		foreach ($tank->getEquipment_slots() as $slot => $value) {
			if ($value != "null")
				echo ' <img style="height: 30px;" src="' . RESSOURCES_DIR . 'equipment/' . $value . '.png" alt="' . $value . ' icon" />';
		}
		?>
	</td>
</tr>
<tr>
	<td>Ammunition</td>
	<td class="view_tank_equipment">
		<?php
		foreach ($tank->getAmmo() as $missile => $value) {
			if ($value == "1")
				echo ' <img style="width: 60px;" src="' . RESSOURCES_DIR . 'missiles/' . $missile . '.png" alt="' . $missile . ' icon" /><br />';
		}
		?>
	</td>
	<td>
		<?php
		foreach ($tank->getAmmo() as $missile => $value) {
			if ($value == "1")
				echo $tank->getAmmo_desc()[$missile] . '<br />';
		}
		?>
	</td>
</tr>
<tr>
	<td>Engine bonus</td>
	<td class="view_tank_equipment">
		<?php
		foreach ($tank->getEngine_bonus() as $bonus => $value) {
			if ($value == "1")
				echo '<img style="height: 30px;" src="' . RESSOURCES_DIR . 'attributes/' . $bonus . '.png" alt="' . $bonus . ' icon" /><br />';
		}
		?>
	</td>
	<td>
		<?php
		foreach ($tank->getEngine_bonus() as $bonus => $value) {
			if ($value == "1")
				echo $tank->getEngine_bonus_desc()[$bonus] . '<br />';
		}
		?>
	</td>
</tr>
<tr>
	<td>Chassis bonus</td>
	<td class="view_tank_equipment">
		<?php
		foreach ($tank->getChassis_bonus() as $bonus => $value) {
			if ($value == "1")
				echo ' <img style="height: 30px;" src="' . RESSOURCES_DIR . 'attributes/' . $bonus . '.png" alt="' . $bonus . ' icon" /><br />';
		}
		?>
	</td>
	<td>
		<?php
		foreach ($tank->getChassis_bonus() as $bonus => $value) {
			if ($value == "1")
				echo $tank->getChassis_bonus_desc()[$bonus] . '<br />';
		}
		?>
	</td>
</tr>
</table>