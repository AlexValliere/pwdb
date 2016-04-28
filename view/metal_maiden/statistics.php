<p>Get statistics about : <?php foreach($allowed_categories as $value) echo "<a href='index.php?route=statistics&amp;category=" . $value . "'>" . strtoupper($value) . "</a> "; ?></p>

<br />

<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<p>Currently displaying statistics on the <?php echo strtoupper($category); ?> category.</p>
		<p>Number of tanks in this category : <?php echo $tank_list_size; ?></p>
		
		<br />

		<table class="table table-responsive table-bordered">
		<tr>
			<th></th>
			<th colspan="4">Values</th>
		</tr>
		<tr>
			<th>Attributes</th>
			<th>Minimal</th>
			<th>Average</th>
			<th>Median</th>
			<th>Maximal</th>
		</tr>
		<?php
		foreach ($attributes as $attribute)
		{
			?>
		<tr>
			<td><?php echo ucfirst($attribute); ?></td>
			<td><?php echo $min_stats[$attribute]; ?></td>
			<td><?php echo intval($average_stats[$attribute]); ?></td>
			<td><?php echo $median_stats[$attribute]; ?></td>
			<td><?php echo $max_stats[$attribute]; ?></td>
		</tr>
			<?php
		}
		?>
		</table>
	</div>
</div>

<p>Ranks by attributes :</p>

<div class="row">
	<?php
	foreach ($attributes as $attribute)
	{
		?>
	<div class="col-lg-3">
		<table class="table table-responsive table-bordered">
		<tr>
			<th colspan="4"><?php echo ucfirst($attribute); ?></th>
		</tr>
		<tr>
			<th>Rank</th>
			<th>Tank</th>
			<th>Value</th>
			<th>Delta Median</th>
		</tr>
		<?php
		$i = 1;
		foreach($tank_list_sorted_by[$attribute] as $tank)
		{
			?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a
					href="index.php?route=metal_maiden&amp;tank=<?php echo $tank->getTank_slug(); ?>"
					class="<?php echo $tank->getRarity(); ?>_text"
				/>
					<?php echo $tank->getTank(); ?>
				</a>
			</td>
			<td><?php echo $tank->getStatistics($attribute); ?></td>
			<td>
				<?php
				if (intval($tank->getStatistics($attribute) - $median_stats[$attribute]) > 0)
					echo "<span style='color: yellowgreen;'>+</span> " . intval($tank->getStatistics($attribute) - $median_stats[$attribute]);
				else if (intval($tank->getStatistics($attribute) - $median_stats[$attribute]) < 0)
					echo "<span style='color: orangered;'>-</span> " . (intval($tank->getStatistics($attribute) - $median_stats[$attribute]) * -1);
				else
					echo "0";
				?>
			</td>
		</tr>
			<?php
			++$i;
		}
		?>
		</table>
	</div>
		<?php
	}
	?>
</div>