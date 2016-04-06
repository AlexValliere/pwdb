<div class="col-lg-8">
	<p><strong>Statistics :</strong></p>
	<?php
	$statistics_array = ["firepower", "penetration", "targeting", "durability", "armor", "evasion", "stealth", "detection"];

	foreach ($statistics_array as $statistic)
	{
		?>
		<div class="col-xs-12 col-md-4 col-lg-4">
			<div class="table-responsive">
				<table class="table table-bordered statistic">
					<tr>
						<td><?php echo number_format($tank->getStatistics($statistic), 0, ',', ' '); ?></td>
						<td><img src="<?php echo RESSOURCES_DIR . "attributes/" . $statistic . ".png"; ?>" alt="" . ucfirst($statistic) . " icon" /></td>
						<td><?php echo ucfirst($statistic); ?></td>
					</tr>
				</table>
			</div>
		</div>
		<?php
	}
	?>
</div>