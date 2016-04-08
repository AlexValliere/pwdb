<div class="row">
	<div class="col-lg-1">
		Sort options :
	</div>
</div>

<div class="table-responsive">
	<table class="table table-bordered table-condensed tank_spreadsheet">
		<tr>
			<th>
				Tank name
				<a href="index.php?route=spreadsheet&amp;sort=tank&amp;order=asc">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
				</a>
				<a href="index.php?route=spreadsheet&amp;sort=tank&amp;order=desc">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</th>
			<th>
				Category
				<a href="index.php?route=spreadsheet&amp;sort=category&amp;order=asc">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
				</a>
				<a href="index.php?route=spreadsheet&amp;sort=category&amp;order=desc">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</th>
			<th>
				Firepower
				<a href="index.php?route=spreadsheet&amp;sort=firepower&amp;order=asc">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
				</a>
				<a href="index.php?route=spreadsheet&amp;sort=firepower&amp;order=desc">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</th>
			<th>
				Penetration
				<a href="index.php?route=spreadsheet&amp;sort=penetration&amp;order=asc">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
				</a>
				<a href="index.php?route=spreadsheet&amp;sort=penetration&amp;order=desc">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</th>
			<th>
				Durability
				<a href="index.php?route=spreadsheet&amp;sort=durability&amp;order=asc">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
				</a>
				<a href="index.php?route=spreadsheet&amp;sort=durability&amp;order=desc">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</th>
			<th>
				Armor
				<a href="index.php?route=spreadsheet&amp;sort=armor&amp;order=asc">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
				</a>
				<a href="index.php?route=spreadsheet&amp;sort=armor&amp;order=desc">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</th>
			<th>
				Targeting
				<a href="index.php?route=spreadsheet&amp;sort=targeting&amp;order=asc">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
				</a>
				<a href="index.php?route=spreadsheet&amp;sort=targeting&amp;order=desc">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</th>
			<th>
				Evasion
				<a href="index.php?route=spreadsheet&amp;sort=evasion&amp;order=asc">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
				</a>
				<a href="index.php?route=spreadsheet&amp;sort=evasion&amp;order=desc">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</th>
			<th>
				Stealth
				<a href="index.php?route=spreadsheet&amp;sort=stealth&amp;order=asc">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
				</a>
				<a href="index.php?route=spreadsheet&amp;sort=stealth&amp;order=desc">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</th>
			<th>
				Detection
				<a href="index.php?route=spreadsheet&amp;sort=detection&amp;order=asc">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
				</a>
				<a href="index.php?route=spreadsheet&amp;sort=detection&amp;order=desc">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</th>
		</tr>
		<?php
		foreach ($tank_list as $tank)
		{
			?>
			<tr>
				<td><a href="index.php?route=metal_maiden&amp;tank=<?php echo $tank->getTank_slug(); ?>"><?php echo $tank->getTank(); ?></a></td>
				<td><?php echo $tank->getCategory(); ?></td>
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