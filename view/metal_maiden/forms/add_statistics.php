<fieldset class="statistics">
	<legend>Statistics</legend>

	<table>
		<tr>
			<td>
				<input type="number" name="firepower" id="firepower" min="0" max="99999" step="1"
				value="<?php if (isset($tank)) echo $tank->getFirepower(); else echo "0"; ?>"
				/>
				<label for="firepower">Firepower</label>
			</td>
			<td>
				<input type="number" name="penetration" id="penetration" min="0" max="99999" step="1"
				value="<?php if (isset($tank)) echo $tank->getPenetration(); else echo "0"; ?>"
				/>
				<label for="penetration">Penetration</label>
			</td>
			<td>
				<input type="number" name="targeting" id="targeting" min="0" max="99999" step="1"
				value="<?php if (isset($tank)) echo $tank->getTargeting(); else echo "0"; ?>"
				/>
				<label for="targeting">Targeting</label>
			</td>
		</tr>
		<tr>
			<td>
				<input type="number" name="durability" id="durability" min="0" max="99999" step="1"
				value="<?php if (isset($tank)) echo $tank->getDurability(); else echo "0"; ?>"
				/>
				<label for="durability">Durability</label>
			</td>
			<td>
				<input type="number" name="armor" id="armor" min="0" max="99999" step="1"
				value="<?php if (isset($tank)) echo $tank->getArmor(); else echo "0"; ?>"
				/>
				<label for="armor">Armor</label>
			</td>
			<td>
				<input type="number" name="evasion" id="evasion" min="0" max="99999" step="1"
				value="<?php if (isset($tank)) echo $tank->getEvasion(); else echo "0"; ?>"
				/>
				<label for="evasion">Evasion</label>
			</td>
		</tr>
		<tr>
			<td>
				<input type="number" name="stealth" id="stealth" min="0" max="99999" step="1"
				value="<?php if (isset($tank)) echo $tank->getStealth(); else echo "0"; ?>"
				/>
				<label for="stealth">Stealth</label>
			</td>
			<td>
				<input type="number" name="detection" id="detection" min="0" max="99999" step="1"
				value="<?php if (isset($tank)) echo $tank->getDetection(); else echo "0"; ?>"
				/>
				<label for="detection">Detection</label>
			</td>
			<td></td>
		</tr>
		<tr>
			<td>
				<input type="number" name="min_range" id="min_range" min="0" max="99999" step="1" value="0" />
				<label for="min_range">Min range</label>
			</td>
			<td>
				<input type="number" name="max_range" id="max_range" min="0" max="99999" step="1" value="0" />
				<label for="max_range">Max range</label>
			</td>
			<td></td>
		</tr>
	</table>
</fieldset>