<div class="col-lg-8">
	<p><strong>Statistics :</strong> [<span class="stat_lvl60">Value at level 60</span>]</p>
	<?php
	$statistics_array = ["firepower", "penetration", "targeting", "durability", "armor", "evasion", "stealth", "detection"];
	$statistics_lvl60_array = ["firepower", "penetration", "durability", "armor"];
	$statistics_hidden_array = ["fire_resist", "crit_resist", "crit_defense"];

	foreach ($statistics_array as $statistic)
	{
		?>
		<div class="col-xs-12 col-md-4 col-lg-4">
			<div class="table-responsive">
				<table class="table table-bordered statistic">
					<tr>
						<td><?php echo number_format($tank->getStatistics($statistic), 0, ',', ' '); ?><?php if (in_array($statistic, $statistics_lvl60_array)) echo "<br /><span class='stat_lvl60'>" . $tank->getStatistics($statistic . "_lvl60") . "</span>"; ?></td>
						<td><img src="<?php echo RESSOURCES_DIR . "attributes/" . $statistic . ".png"; ?>" alt="" . ucfirst($statistic) . " icon" /></td>
						<td><?php echo ucfirst($statistic); ?></td>
					</tr>
				</table>
			</div>
		</div>
		<?php
	}
	foreach ($statistics_hidden_array as $statistic)
	{
		?>
		<div class="col-xs-12 col-md-4 col-lg-4">
			<div class="table-responsive">
				<table class="table table-bordered statistic">
					<tr>
						<td class="hidden_stat"><?php echo $tank->getStatistics($statistic); ?></td>
						<td colspan="2"><?php echo str_replace("_", " ", ucfirst($statistic)); ?></td>
					</tr>
				</table>
			</div>
		</div>
		<?php
	}
	?>
</div>