<section class="view_tank">
	<?php
	if (isset($tank))
	{
		?>
		<h1 class="page-header"><?php echo $tank->getTank(); ?><small><?php echo $tank->getName(); ?></small></h1>

		<a href="index.php?route=edit_metal_maiden&amp;tank=<?php echo $tank->getTank_slug(); ?>"><button type="button">Edit this page</button></a>
		<?php include("layouts/export_to_wiki.php"); ?>

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<?php include ("layouts/view_tank_profile.php"); ?>
					<?php include ("layouts/view_tank_lifestyle.php"); ?>
				</div>
				<br />
				<div class="row equipment">
					<?php include ("layouts/view_tank_equipment.php"); ?>
					<?php include ("layouts/view_tank_statistics.php"); ?>
				</div>
				<br />
				<?php include ("layouts/view_tank_quote.php"); ?>
			</div>		
			<?php include ("layouts/view_tank_illustration.php"); ?>
		</div>
		<?php
	}
	?>
</section>