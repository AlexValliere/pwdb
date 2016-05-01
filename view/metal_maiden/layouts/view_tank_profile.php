<div class="col-xs-12 col-sm-3 col-lg-2">
	<img
		src="<?php echo TANK_IMAGE_DIR . "/portrait/" . $tank->getImagename(); ?>.png"
		alt="<?php echo $tank->getTank(); ?> portrait"
	/>
	<h4><?php echo $tank->getTank(); ?></h4>
	<p><?php echo $tank->getName(); ?></p>
</div>

<div class="col-xs-12 col-sm-3 col-lg-2">
	<p>
		<strong>Category :</strong>
			<img
			src="<?php echo RESSOURCES_DIR . "tank_categories/" . $tank->getCategory(); ?>.png"
			alt="<?php echo $tank->getCategory(); ?> icon"
			style="width: 35px;"
		/>
	</p>
	<p><strong>Rarity :</strong> <span class="<?php echo $tank->getRarity(); ?>_text"><?php echo ucfirst($tank->getRarity()); ?></span></p>
	<p>
		<strong>Nation :</strong>
		<img
			src="<?php echo RESSOURCES_DIR . "/national_flags/" . $tank->getNation(); ?>.png"
			alt="<?php echo $tank->getNation(); ?> national flag"
			style="width: 35px;"
		/>
		<?php echo ucfirst($tank->getNation()); ?>
	</p>
	<p><strong>Character voice :</strong> <?php echo $tank->getCharacter_voice(); ?></p>
	<p><strong>Live2D :</strong> <?php echo $tank->getLive2d_string(); ?></p>
	<p>
		<strong>Max rank :</strong>
		<img src="resources/icons/tech_<?php echo $tank->getMax_rank(); ?>.png" alt="Rank icon" style="height: 35px;" />
	</p>
	<p>
		<strong>Armor category :</strong>
		<?php
		if ($tank->getArmor_category() != "")
			echo '<img style="height: 30px;" src="' . RESSOURCES_DIR . 'attributes/' . $tank->getArmor_category() . '_armor.png" alt="' . $tank->getArmor_category() . ' icon" /> ';
		?>
		<?php echo ucfirst($tank->getArmor_category()); ?>
	</p>
</div>