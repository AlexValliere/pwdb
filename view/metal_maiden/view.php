<section class="view_tank">
<?php
if (isset($tank))
{
	?><a href="index.php?route=edit_metal_maiden&tank=<?php echo $tank->getTank_slug(); ?>"><button type="button">Edit this page</button></a> <?php
	include('layouts/export_to_wiki.php');
	echo "<br />";
	include('layouts/view_tank_profile.php');
	include('layouts/view_tank_lifestyle.php');
	echo "<br />";
	include('layouts/view_tank_statistics.php');
	echo "<br />";
	include('layouts/view_tank_equipment.php');
	echo "<br />";
	include('layouts/view_tank_quote.php');
	echo "<br />";
	include('layouts/view_tank_illustration.php');
}
?>
</section>