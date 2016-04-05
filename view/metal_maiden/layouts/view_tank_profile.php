<table class="view_tank profile">
<tr>
	<th colspan="2" class="<?php echo $tank->getRarity(); ?>"><?php echo $tank->getTank(); ?></th>
</tr>
<tr>
	<td colspan="2" class="metal_maiden_name"><?php echo $tank->getName(); ?></td>
</tr>
<tr>
	<td colspan="2" class="tank_portrait">
		<img src="<?php echo TANK_IMAGE_DIR . "/portrait/" . $tank->getImagename(); ?>.png" alt="<?php echo $tank->getTank(); ?> portrait" />
	</td>
</tr>
<tr>
	<td>Type</td>
	<td>
		<img
			src="<?php echo RESSOURCES_DIR . "tank_categories/" . $tank->getCategory(); ?>.png"
			alt="<?php echo $tank->getCategory(); ?> icon"
			style="width: 35px;"
		/>
		<?php echo strtoupper($tank->getCategory()); ?>
	</td>
</tr>
<tr>
	<td>Rarity</td>
	<td class="<?php echo $tank->getRarity(); ?>">
		<?php echo ucfirst($tank->getRarity()); ?>
	</td>
</tr>
<tr>
	<td>Nation</td>
	<td>
		<img
			src="<?php echo RESSOURCES_DIR . "/national_flags/" . $tank->getNation(); ?>.png"
			alt="<?php echo $tank->getNation(); ?> national flag"
			style="width: 35px;"
		/>
		<?php echo ucfirst($tank->getNation()); ?>
	</td>
</tr>
<tr>
	<td>Character Voice</td>
	<td><?php echo ucwords($tank->getCharacter_voice()); ?></td>
</tr>
<tr>
	<td>Live2D</td>
	<td><?php echo ucfirst($tank->getLive2d_string()); ?></td>
</tr>
</table>