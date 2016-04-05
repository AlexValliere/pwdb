<fieldset class="equipment">
	<legend>Equipment</legend>

	<p>
		Ammunitions :
	</p>
	<table>
		<?php
		$ammo_array = ["AP", "APCR", "APDS", "HE", "Heat", "Hesh", "RP"];
		$i = 0;

		foreach ($ammo_array as $ammo) {
			if ($i == 0) echo "<tr>";
			echo '<td>';
			echo '<input type="checkbox" name="' . strtolower($ammo) . '" id="' . strtolower($ammo) . '"';
			if (isset($tank) && $tank->getAmmo()[strtolower($ammo)] == 1)
				echo 'checked="checked"';
			echo ' /> <label for="' . strtolower($ammo) . '">' . strtoupper($ammo) . '</label>';
			echo '</td>';
			if ($i++ == 3)
			{
				echo "</tr>";
				$i = 0;
			}
		}
		if ($i > 0 && $i <= 3)
			echo "</tr>";
		?>
	</table>

	<br />

	<p>Equipment slots :</p>

	<table>
		<?php
		for ($i = 1; $i <= 8; $i++)
		{
			if ($i == 1 || $i == 1 + 4)
				echo "<tr>";
			?>
			<td>
				<label for="equipment_slot_<?php echo $i; ?>">Slot <?php echo $i; ?> :</label>
				<select name="equipment_slot_<?php echo $i; ?>" id="equipment_slot_<?php echo $i; ?>">
					<option value="null"
					<?php if (isset($tank) && $tank->getEquipment_slots()["slot_" . $i] == "null") echo 'selected="selected"'; ?>
					>(empty)</option>
					<option value="turret"
					<?php if (isset($tank) && $tank->getEquipment_slots()["slot_" . $i] == "turret") echo 'selected="selected"'; ?>
					>Turret</option>
					<option value="mod"
					<?php if (isset($tank) && $tank->getEquipment_slots()["slot_" . $i] == "mod") echo 'selected="selected"'; ?>
					>Mod</option>
					<option value="cabin"
					<?php if (isset($tank) && $tank->getEquipment_slots()["slot_" . $i] == "cabin") echo 'selected="selected"'; ?>
					>Cabin</option>
					<option value="external"
					<?php if (isset($tank) && $tank->getEquipment_slots()["slot_" . $i] == "external") echo 'selected="selected"'; ?>
					>External</option>
					<option value="internal"
					<?php if (isset($tank) && $tank->getEquipment_slots()["slot_" . $i] == "internal") echo 'selected="selected"'; ?>
					>Internal</option>
					<option value="carriage"
					<?php if (isset($tank) && $tank->getEquipment_slots()["slot_" . $i] == "carriage") echo 'selected="selected"'; ?>
					>Carriage</option>
					<option value="special"
					<?php if (isset($tank) && $tank->getEquipment_slots()["slot_" . $i] == "special") echo 'selected="selected"'; ?>
					>Special</option>
				</select>
			</td>
			<?php
			if ($i == 4 || $i == 4 + 4)
				echo "</tr>";
		}
		?>
	</table>

	<br />

	<p>Engine bonus :</p>
	<table>
		<?php
		$engine_bonus_array = ["C Proof", "D Proof", "H Proof", "S Proof", "W Proof", "Silent"];
		$i = 0;

		foreach ($engine_bonus_array as $engine_bonus) {
			if ($i == 0) echo "<tr>";
			echo '<td>';
			echo '<input type="checkbox" name="' . post_slug($engine_bonus) . '" id="' . post_slug($engine_bonus) . '"';
			if (isset($tank) && $tank->getEngine_bonus()[post_slug($engine_bonus)] == 1)
				echo 'checked="checked"';
			echo ' /> <label for="' . post_slug($engine_bonus) . '">' . $engine_bonus . '</label>';
			echo '</td>';
			if ($i++ == 3)
			{
				echo "</tr>";
				$i = 0;
			}
		}
		if ($i > 0 && $i <= 3)
			echo "</tr>";
		?>
	</table>

	<br />

	<p>Chassis bonus :</p>
	<table>
		<?php
		$chassis_bonus_array = ["Angled", "Flat-top", "Front", "Light", "Low", "Rear", "Sloped", "Tires", "Treads"];
		$i = 0;

		foreach ($chassis_bonus_array as $chassis_bonus) {
			if ($i == 0) echo "<tr>";
			echo '<td>';
			echo '<input type="checkbox" name="' . post_slug($chassis_bonus) . '" id="' . post_slug($chassis_bonus) . '"';
			if (isset($tank) && $tank->getChassis_bonus()[post_slug($chassis_bonus)] == 1)
				echo 'checked="checked"';
			echo ' /> <label for="' . post_slug($chassis_bonus) . '">' . $chassis_bonus . '</label>';
			echo '</td>';
			if ($i++ == 3)
			{
				echo "</tr>";
				$i = 0;
			}
		}
		if ($i > 0 && $i <= 3)
			echo "</tr>";
		?>
	</table>
</fieldset>