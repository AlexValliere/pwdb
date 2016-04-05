<section id="edit_metal_maiden">
<?php
if (isset($tank) && $method != 'POST')
{
	?>
	<form action="index.php?route=edit_metal_maiden" method="post" enctype="multipart/form-data">
		<?php
		require_once("forms/add_profile.php");
		require_once("forms/add_statistics.php");
		require_once("forms/add_lifestyle.php");
		require_once("forms/add_equipment.php");
		require_once("forms/add_quote.php");
		?>
		<input type="hidden" name="edit_tank" value="<?php echo $tank->getTank_slug(); ?>" />
		<input type="submit" value="Update Metal Maiden" />
	</form>
	<?php
}
?>
</section>