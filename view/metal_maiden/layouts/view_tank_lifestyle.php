<table class="view_tank">
<tr>
	<th colspan="3" >Lifestyle skills</th>
</tr>
<?php
for ($i = 1; $i <= 3; ++$i)
{
	if (isset($tank->getLifestyle_skills()["skill_$i"]) && $tank->getLifestyle_skills()["skill_$i"] != "null")
	{
		?>
	<tr>
		<td>
			<img
				src="<?php echo RESSOURCES_DIR . "lifestyle_skills/" . $tank->getLifestyle_skills()["skill_$i"]; ?>.png"
				alt="<?php echo $tank->getLifestyle_skills()["skill_$i"]; ?> icon"
				style="height: 25px;"
			/>
		</td>
		<td><?php echo $tank->getLifestyle_skills()["skill_$i"]; ?></td>
		<td><?php echo $tank->getLifestyle_skills()["skill_".$i."_level"]; ?></td>
	</tr>
		<?php
	}
}
?>
</table>
