<div class="row">
	<div class="col-lg-1">
		Sort options :
	</div>
</div>

<div class="table-responsive">
	<table class="table table-bordered table-condensed tank_spreadsheet">
		<tr>
			<?php
			foreach ($sortableValues as $key)
			{
				?>
				<th>
					<?php echo ucfirst($key); ?>
					<a href="index.php?route=spreadsheet&amp;sort=<?php echo $key; ?>&amp;order=asc" <?php if ($sort == $key && $order == "asc") echo 'style="color: yellowgreen;"'; ?>>
						<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
					</a>
					<a href="index.php?route=spreadsheet&amp;sort=<?php echo $key; ?>&amp;order=desc" <?php if ($sort == $key && $order == "desc") echo 'style="color: yellowgreen;"'; ?>>
						<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
					</a>
				</th>
				<?php
			}
			?>
		</tr>
		<?php
		foreach ($tank_list as $tank)
		{
			?>
			<tr>
				<td><a href="index.php?route=metal_maiden&amp;tank=<?php echo $tank->getTank_slug(); ?>" class="<?php echo $tank->getRarity(); ?>_text"><?php echo $tank->getTank(); ?></a></td>
				<td style="text-align: center;"><?php echo ucfirst($tank->getRarity()); ?></td>
				<td style="text-align: center;"><img src="<?php echo RESSOURCES_DIR . "tank_categories/" . $tank->getCategory(); ?>.png" alt="<?php echo $tank->getCategory(); ?> icon" class="statistics-current-category-icon" /></td>
				<td><?php echo $tank->getFirepower(); ?></td>
				<td><?php echo $tank->getPenetration(); ?></td>
				<td><?php echo $tank->getDurability(); ?></td>
				<td><?php echo $tank->getArmor(); ?></td>
				<td><?php echo $tank->getTargeting(); ?></td>
				<td><?php echo $tank->getEvasion(); ?></td>
				<td><?php echo $tank->getStealth(); ?></td>
				<td><?php echo $tank->getDetection(); ?></td>
			</tr>
			<?php
		}
		?>
	</table>
</div>