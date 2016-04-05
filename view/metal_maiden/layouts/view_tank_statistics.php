<table class="view_tank">
<tr>
	<th colspan="9" >Statistics</th>
</tr>
<tr>
	<td><img src="<?php echo RESSOURCES_DIR . "attributes/firepower.png"; ?>" alt="Firepower icon" /></td>
	<td>Firepower</td>
	<td><?php echo $tank->getFirepower(); ?></td>
	<td><img src="<?php echo RESSOURCES_DIR . "attributes/penetration.png"; ?>" alt="Penetration icon" /></td>
	<td>Penetration</td>
	<td><?php echo $tank->getPenetration(); ?></td>
	<td><img src="<?php echo RESSOURCES_DIR . "attributes/targeting.png"; ?>" alt="Targeting icon" /></td>
	<td>Targeting</td>
	<td><?php echo $tank->getTargeting(); ?></td>
</tr>
<tr>
	<td><img src="<?php echo RESSOURCES_DIR . "attributes/durability.png"; ?>" alt="Durability icon" /></td>
	<td>Durability</td>
	<td><?php echo $tank->getDurability(); ?></td>
	<td><img src="<?php echo RESSOURCES_DIR . "attributes/armor.png"; ?>" alt="Armor icon" /></td>
	<td>Armor</td>
	<td><?php echo $tank->getArmor(); ?></td>
	<td><img src="<?php echo RESSOURCES_DIR . "attributes/evasion.png"; ?>" alt="Evasion icon" /></td>
	<td>Evasion</td>
	<td><?php echo $tank->getEvasion(); ?></td>
</tr>
<tr>
	<td><img src="<?php echo RESSOURCES_DIR . "attributes/stealth.png"; ?>" alt="Stealth icon" /></td>
	<td>Stealth</td>
	<td><?php echo $tank->getStealth(); ?></td>
	<td><img src="<?php echo RESSOURCES_DIR . "attributes/detection.png"; ?>" alt="Detection icon" /></td>
	<td>Detection</td>
	<td><?php echo $tank->getDetection(); ?></td>
	<td colspan="3"></td>
</tr>
<tr>
	<th colspan="9" >Range</th>
</tr>
<tr>
	<td>MIN</td>
	<td>Minimal range</td>
	<td><?php if ($tank->getMin_range() != 0) echo $tank->getMin_range(); ?></td>
	<td colspan="3"></td>
	<td><?php if ($tank->getMax_range() != 0) echo $tank->getMax_range(); ?></td>	
	<td>Maximal range</td>
	<td>MAX</td>
</tr>
</table>