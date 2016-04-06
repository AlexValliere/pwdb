<section class="edit_metal_maiden">
<?php
if ($method != 'POST')
{
	?>
	<form class="form-horizontal" action="index.php?route=create_metal_maiden" method="post" enctype="multipart/form-data">
		<?php
		require_once("forms/add_profile.php");
		require_once("forms/add_statistics.php");
		require_once("forms/add_lifestyle.php");
		require_once("forms/add_equipment.php");
		require_once("forms/add_quote.php");
		?>
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<button type="submit" class="btn btn-primary">Update Metal Maiden</button>
			</div>
		</div>
	</form>
	<?php
}
else
{

}
?>
</section>