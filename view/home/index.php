<?php
$tank_list = $metalMaidensManager->getCategory_nation_list("ht", "britannia");
?>
<section id="metal_maidens_index">
	<h1 class="page-header">Metal Maidens list</h1>

	<div class="row">
		<div class="col-lg-2">
			<p>Indexed tanks : <?php echo $tank_indexed; ?> out of <?php echo $tank_total; ?></p>
			<?php //include_once("layouts/export_to_wiki.php"); ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-8">
			<p>Go to : </p>
			<?php
			foreach ($nations as $nation)
			{
				?>
				<a href="index.php#<?php echo $nation; ?>">
					<img
						src="<?php echo RESSOURCES_DIR . "/national_flags/".$nation.".png"; ?>"
						alt="<?php echo $nation; ?> national flag"
						class="statistics-filter-icon"
					/>
				</a>
				<?php
			}
			?>
		</div>
	</div>

	<br />

	<?php
	foreach ($nations as $nation)
	{
		?>
		<span class="anchor" id="<?php echo $nation; ?>"></span>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-8 col-lg-offset-2 nation">
				<img
					src="<?php echo RESSOURCES_DIR . "/national_flags/" . $nation; ?>.png"
					alt="<?php echo $nation; ?> national flag"
				/>
				<?php echo ucfirst($nation); ?>
				<img
					src="<?php echo RESSOURCES_DIR . "/national_flags/" . $nation; ?>.png"
					alt="<?php echo $nation; ?> national flag"
				/>
			</div>
		</div>
		<?php

		echo '<div class="row">';
		foreach ($categories as $category)
		{
			?>
			<div class="col-xs-12 col-lg-8 col-lg-offset-2 category-block <?php echo $category; ?>">
				<div class="row">
					<div class="col-xs-12 col-lg-12 category-icon">
						<img
							src="<?php echo RESSOURCES_DIR . "tank_categories/" . $category; ?>.png"
							alt="<?php echo $category; ?> icon"
							class="category-icon"
						/>
					</div>
					<?php

					$tank_list = $metalMaidensManager->getCategory_nation_list($category, $nation);

					foreach ($tank_list as $tank)
					{
						?>
						<div class="col-xs-6 col-sm-3 col-lg-2 metal_maiden_block" id="<?php echo $nation . " " . $category; ?>">
							<a href="index.php?route=metal_maiden&amp;tank=<?php echo $tank->getTank_slug(); ?>">
								<img
									src="<?php echo TANK_IMAGE_DIR . "portrait/" . $tank->getImagename(); ?>.png"
									alt="<?php echo $tank->getTank(); ?> portrait"
									class="portrait <?php echo $tank->getRarity(); ?>_border"
								/>
								<br />
								<p class="<?php echo $nation . " " . $category . " " . $tank->getRarity(); ?>">
									<?php echo $tank->getTank(); ?>
								</p>
							</a>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		<?php
		}
		echo "</div><br />";
	}
	?>
</section>