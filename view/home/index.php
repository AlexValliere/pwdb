<h1 class="page-header">Metal Maidens list</h1>
<?php
$col_num = 8;

foreach ($nations as $nation)
{
	echo "<table class='metal_maidens_index'>";
	echo "<tr><th colspan='" . $col_num . "'>";
	?>
<img
	src="<?php echo RESSOURCES_DIR . "/national_flags/" . $nation; ?>.png"
	alt="<?php echo $nation; ?> national flag"
	style="width: 65px;"
/>
	<?php
	echo "<span id='" . $nation . "'>" . ucfirst($nation) . "</span>";
	?>
<img
	src="<?php echo RESSOURCES_DIR . "/national_flags/" . $nation; ?>.png"
	alt="<?php echo $nation; ?> national flag"
	style="width: 65px;"
/>
	<?php
	echo "</th></tr>";

	foreach ($categories as $category)
	{
		$tank_list = $metalMaidensManager->getCategory_nation_list($category, $nation);
		$i = 0;

		echo "<tr><td id='" . $nation . "-" . $category . "' class='" . $nation . " " . $category . "'>";
		?>
<img
	src="<?php echo RESSOURCES_DIR . "tank_categories/" . $category; ?>.png"
	alt="<?php echo $category; ?> icon"
	style="width: 50px;"
/>
		<?php
		echo "</td>";

		foreach ($tank_list as $tank)
		{
			if ($i == $col_num - 1)
			{
				echo "</tr><td class='" . $nation . " " . $category . "'></td>";
				$i = 0;
			}
			?>
<td class="<?php echo $nation . " " . $category; ?>">
	<a class="<?php echo $tank->getRarity(); ?>" href="index.php?route=metal_maiden&amp;tank=<?php echo $tank->getTank_slug(); ?>">
		<img
			src="<?php echo TANK_IMAGE_DIR . "portrait/" . $tank->getImagename(); ?>.png"
			alt="<?php echo $tank->getTank(); ?> portrait"
			style="width: 100px;"
		/><br />
		<?php echo $tank->getTank(); ?>
	</a>
</td>
			<?php
			++$i;
		}
		while (++$i != 8)
			echo "<td class='" . $nation . " " . $category . "'></td>";
		echo "</tr>";
	}
	echo "</tr>";
	echo "</table>";
	echo "<br />";
}
?>