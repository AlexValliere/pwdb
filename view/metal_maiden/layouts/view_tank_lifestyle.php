<div class="col-lg-6">
	<p><strong>Lifestyle skills :</strong></p>
	<table class="table table-bordered lifestyle_skills">
	<tr>
		<th colspan="2">Skill</th>
		<th>Level</th>
	</tr>
	<?php
	for ($i = 1; $i <= 3; ++$i)
	{
		if (isset($tank->getLifestyle_skills()["skill_$i"]) && $tank->getLifestyle_skills()["skill_$i"] != "null")
		{
			?>
			<tr>
				<td class="icon">
					<img
						src="<?php echo RESSOURCES_DIR . "lifestyle_skills/" . $tank->getLifestyle_skills()["skill_$i"]; ?>.png"
						alt="<?php echo $tank->getLifestyle_skills()["skill_$i"]; ?> icon"
						style="height: 25px;"
					/>
				</td>
				<td><?php echo ucfirst($tank->getLifestyle_skills()["skill_$i"]); ?></td>
				<td><?php echo $tank->getLifestyle_skills()["skill_".$i."_level"]; ?></td>
			</tr>
			<?php
		}
	}
	?>
	</table>
</div>