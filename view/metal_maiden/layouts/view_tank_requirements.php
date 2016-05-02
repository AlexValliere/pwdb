<div class="row">
	<?php
	if ($tank->getRefactor() > 0)
	{
		?>
	<div class="col-lg-12 tank_req">
		<h4 class="media-heading page-header">Refactor</h4>
		<p>Appears in BWMG Depot LV<?php echo $tank->getRefactor(); ?></p>
		<img
			class="img-responsive tank_req"
			src="<?php echo RESSOURCES_DIR . 'supply/bwmg.png'; ?>"
			alt="BWMG Depot image"
		/>
	</div>
		<?php
	}
	?>
	<?php
	if ($tank->getNaval_port() > 0)
	{
		?>
	<br />
	<div class="col-lg-12 tank_req">
		<h4 class="media-heading page-header">Naval Port</h4>
		<p>Requires Naval Port LV<?php echo $tank->getNaval_port(); ?></p>
		<img
			class="img-responsive tank_req"
			src="<?php echo RESSOURCES_DIR . 'supply/naval_port.png'; ?>"
			alt="Naval Port image"
		/>
	</div>
		<?php
	}
	?>
	<?php
	if ($tank->getForge() == 1)
	{
		?>
	<br />

	<div class="col-lg-12 tank_req">
		<h4 class="media-heading page-header">Source Forge</h4>
		<p>Can be obtained at Source Forge</p>
		<img
			class="img-responsive tank_req"
			src="<?php echo RESSOURCES_DIR . 'supply/source_forge.png'; ?>"
			alt="Source Forge image"
		/>
	</div>
	<?php
	}
	?>
	<?php
	if ($tank->getChapter() != NULL && array_search('1', $tank->getChapter()))
	{
		?>
	<br />

	<div class="col-lg-12 tank_req">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="page-header">Can be obtained in the following volumes</h4>
			</div>
		</div>
		<div class="row">
			<?php
			foreach ($tank->getChapter() as $key => $value)
			{
				if ($value == "1")
				{
					?>
					<div class="col-xs-6 col-sm-3 col-lg-1">
						<p>Volume <?php echo str_replace("_", "-", $key); ?></p>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
	<?php
	}
	?>
	<?php
	$form_values_array = ["method_1", "method_2", "method_3", "develop", "research"];
	foreach($form_values_array as $form_value)
	{
		if ($tank->getRequirements($form_value) != NULL)
		{
			$metalMaidensManager = new MetalMaidensManager($dbhandler);
			?>
			<br />
			<div class="col-lg-12 tank_req">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="page-header"><?php echo ucfirst(str_replace("_", " ", $form_value)); ?></h4>
					</div>
				</div>
				<?php
				if ($tank->getRequirements($form_value)["commander_level"] != 0)
				{
					?>
					<div class="row">
						<div class="col-lg-12">
							<span class="label label-danger tank_req">
								Require Commander level <?php echo $tank->getRequirements($form_value)["commander_level"]; ?>
							</span>
						</div>
					</div>
					<?php
				}
				?>
				<div class="row">
					<?php
					for ($i = 1; $i <= 3; $i++)
					{
						if ($tank->getRequirements($form_value)["tank_" . $i] != NULL)
						{
							$tank_req = $metalMaidensManager->get($metalMaidensManager->tank_slug_exists($tank->getRequirements($form_value)["tank_" . $i]));
							?>
							<a href="index.php?route=metal_maiden&amp;tank=<?php echo $tank_req->getTank_slug(); ?>">
								<div class="col-xs-3 col-sm-2 col-lg-1 tank_req tank">
									<p class="level <?php echo $tank_req->getRarity(); ?>_border">
										<small>
											Level <?php if ($tank->getRequirements($form_value)["tank_level_" . $i] != 0) echo $tank->getRequirements($form_value)["tank_level_" . $i]; else echo "?"; ?>
										</small>
									</p>
									<div class="tank_portrait">
										<img
											src="<?php echo TANK_IMAGE_DIR . "/portrait/" . $tank_req->getImagename(); ?>.png"
											alt="<?php echo $tank_req->getTank(); ?> portrait"
											class="img-responsive"
										/>
										<img
											src="<?php echo RESSOURCES_DIR . "icons/tech_" . $tank_req->getMax_rank() . ".png"; ?>"
											alt=""
											class="tech"
										/>
									</div>
									<p>
										<small><?php echo $tank_req->getTank(); ?></small>
										<br />
										
									</p>
								</div>
							</a>
							<?php
						}
					}
					?>
				</div>
				<div class="row tank_req_resources">
					<?php
					if ($tank->getRequirements($form_value)["dogtag"] != 0)
					{
						?>
						<div class="col-xs-3 col-sm-2 col-lg-1 tank_req tank">
							<img
								src="<?php echo RESSOURCES_DIR . "icons/dogtag.png"; ?>"
								alt="Dogtag image"
								class="img-responsive tank_req_item"
							/>
							<p class="quantity">
								x <?php echo $tank->getRequirements($form_value)["dogtag"]; ?>
							</p>
						</div>
						<?php
					}
					?>
					<?php
					if ($tank->getRequirements($form_value)["resource_quantity"] != 0)
					{
						?>
						<div class="col-xs-3 col-sm-2 col-lg-1 tank_req tank">
							<img
								src="<?php echo RESSOURCES_DIR . "icons/" . $tank->getRequirements($form_value)["resource"] . ".png"; ?>"
								alt="Resource image"
								class="img-responsive tank_req_item"
							/>
							<p class="quantity">
								x <?php echo $tank->getRequirements($form_value)["resource_quantity"]; ?>
							</p>
						</div>
						<?php
					}
					?>
					<?php
					if ($tank->getRequirements($form_value)["blueprint_quantity"] != 0)
					{
						?>
						<div class="col-xs-3 col-sm-2 col-lg-1 tank_req tank">
							<img
								src="<?php echo RESSOURCES_DIR . "icons/" . $tank->getRequirements($form_value)["blueprint"] . ".png"; ?>"
								alt="Blueprint image"
								class="img-responsive tank_req_item"
							/>
							<p class="quantity">
								x <?php echo $tank->getRequirements($form_value)["blueprint_quantity"]; ?>
							</p>
						</div>
						<?php
					}
					?>
					<?php
					if ($tank->getRequirements($form_value)["equipment_quantity"] != 0)
					{
						$equipment = explode("_", $tank->getRequirements($form_value)["equipment"]);
						$slot = array_shift($equipment);
						$equipment = implode("_", $equipment);
						?>
						<div class="col-xs-3 col-sm-2 col-lg-1 tank_req tank">
							<img
								src="<?php echo RESSOURCES_DIR . "equipment/" . $equipment . ".png"; ?>"
								alt="<?php echo ucfirst($equipment); ?> image"
								class="img-responsive tank_req_item"
							/>
							<p class="item_rank">S<?php echo $tank->getRequirements($form_value)["equipment_rank"]; ?></p>
							<img
								src="<?php echo RESSOURCES_DIR . "icons/" . $slot . ".png"; ?>"
								alt="<?php echo ucfirst($slot); ?> image"
								class="item_slot"
							/>
							<p class="quantity">
								x <?php echo $tank->getRequirements($form_value)["equipment_quantity"]; ?>
							</p>
						</div>
						<?php
					}
					?>
				</div>
				<?php
				if ($tank->getRequirements($form_value)["silver"] != 0)
				{
					?>
					<div class="row">
						<div class="col-xs-3 col-sm-2 col-lg-1 tank_req tank">
							<img
								src="<?php echo RESSOURCES_DIR . "icons/silver.png"; ?>"
								alt="Silver image"
								class="img-responsive tank_req_item"
							/>
							<p class="quantity">
								x <?php echo number_format($tank->getRequirements($form_value)["silver"], 0, ',', ' '); ?>
							</p>
						</div>
					</div>
					<?php
				}
				?>
			</div>
			<?php
		}
	}
	?>
</div>