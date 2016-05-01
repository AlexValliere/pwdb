<div class="col-lg-8">
	<p><strong>Statistics :</strong> [ <span class="stat_lvl60">Value at level 60</span> ] [ <a href="index.php?route=statistics&amp;category=<?php echo $tank->getCategory(); ?>"><span class="stat_rank">Rank in <?php echo strtoupper($tank->getCategory()); ?> category</span></a> <small><span class="stat_delta_median">&Delta;</span> &plusmn; delta median</small> ]</p>
	<?php
	$attributes_array = ["firepower", "penetration", "targeting", "durability", "armor", "evasion", "stealth", "detection"];
	$statistics_lvl60_array = ["firepower", "penetration", "durability", "armor"];
	$statistics_hidden_array = ["fire_resist", "crit_resist", "crit_defense"];

	foreach ($attributes_array as $attribute)
	{
		?>
		<div class="col-xs-12 col-md-4 col-lg-4">
			<div class="table-responsive">
				<table class="table table-bordered statistic">
					<tr>
						<td><?php echo number_format($tank->getStatistics($attribute), 0, ',', ' '); ?><?php if (in_array($attribute, $statistics_lvl60_array)) echo "<br /><span class='stat_lvl60'>" . $tank->getStatistics($attribute . "_lvl60") . "</span>"; ?></td>
						<td>
							<img src="<?php echo RESSOURCES_DIR . "attributes/" . $attribute . ".png"; ?>" alt="" . ucfirst($attribute) . " icon" />
						</td>
						<td>
							<?php echo ucfirst($attribute); ?>
							<br />
							<span class="stat_rank"><?php echo $metalMaidensManager->getStat_on_attribute_for_id_and_cat($tank->getId(), $tank->getCategory(), $attribute)["rank"]; ?></span> <small><span class="stat_delta_median">&Delta;</span> <?php echo sprintf("%+d", $metalMaidensManager->getStat_on_attribute_for_id_and_cat($tank->getId(), $tank->getCategory(), $attribute)["delta_median"]); ?></small>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php
	}
	foreach ($statistics_hidden_array as $attribute)
	{
		?>
		<div class="col-xs-12 col-md-4 col-lg-4">
			<div class="table-responsive">
				<table class="table table-bordered statistic">
					<tr>
						<td class="hidden_stat"><?php echo $tank->getStatistics($attribute); ?></td>
						<td colspan="2"><?php echo str_replace("_", " ", ucfirst($attribute)); ?></td>
					</tr>
				</table>
			</div>
		</div>
		<?php
	}
	?>
</div>