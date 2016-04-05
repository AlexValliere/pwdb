<fieldset>
	<legend>Lifestyle</legend>
	<?php
	for($i = 1; $i <= 3; $i++)
	{
		?>
	<p>
		<label for="lifestyle_skill_<?php echo $i; ?>">Lifestyle skill <?php echo $i; ?> :</label>
			<select name="lifestyle_skill_<?php echo $i; ?>" id="lifestyle_skill_<?php echo $i; ?>">
			<option value="null"
			<?php if (isset($tank) && $tank->getLifestyle_skills()["skill_" . $i] == "null") echo 'selected="selected"'; ?>
			>(empty)</option>
			<option value="artistry"
			<?php if (isset($tank) && $tank->getLifestyle_skills()["skill_" . $i] == "artistry") echo 'selected="selected"'; ?>
			>Artistry</option>
			<option value="cooking"
			<?php if (isset($tank) && $tank->getLifestyle_skills()["skill_" . $i] == "cooking") echo 'selected="selected"'; ?>
			>Cooking</option>
			<option value="crafting"
			<?php if (isset($tank) && $tank->getLifestyle_skills()["skill_" . $i] == "crafting") echo 'selected="selected"'; ?>
			>Crafting</option>
			<option value="nursing"
			<?php if (isset($tank) && $tank->getLifestyle_skills()["skill_" . $i] == "nursing") echo 'selected="selected"'; ?>
			>Nursing</option>
			<option value="performing"
			<?php if (isset($tank) && $tank->getLifestyle_skills()["skill_" . $i] == "performing") echo 'selected="selected"'; ?>
			>Performing</option>
			<option value="sports"
			<?php if (isset($tank) && $tank->getLifestyle_skills()["skill_" . $i] == "sports") echo 'selected="selected"'; ?>
			>Sports</option>
		</select>
		<label for="lifestyle_skill_<?php echo $i; ?>_level">level :</label>
		<input type="number" name="lifestyle_skill_<?php echo $i; ?>_level" id="lifestyle_skill_<?php echo $i; ?>_level" min="0" max="3" step="1"
		value="<?php if (isset($tank)) echo $tank->getLifestyle_skills()["skill_" . $i . "_level"]; else echo "0"; ?>"
		/>
	</p>
		<?php
		}
	?>
</fieldset>