<section id="edit_metal_maiden">
<?php
if ($method != 'POST')
{
	?>
	<form action="index.php?route=create_metal_maiden" method="post" enctype="multipart/form-data">

		<?php
		require_once("forms/add_profile.php");
		require_once("forms/add_statistics.php");
		require_once("forms/add_lifestyle.php");
		require_once("forms/add_equipment.php");
		require_once("forms/add_quote.php");
		?>

		<input type="submit" value="Add new Metal Maiden" />
	</form>
	<?php
}
else
{

}
?>
</section>