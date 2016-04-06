<fieldset>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<legend>Statistics</legend>
		</div>
	</div>

	<div class="form-group">
		<label for="firepower" class="col-sm-1 col-sm-offset-3 control-label">Firepower :</label>
		<div class="col-sm-1">
			<input type="number" name="firepower" id="firepower" min="0" max="99999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getFirepower(); else echo "0"; ?>"
			/>
		</div>

		<label for="penetration" class="col-sm-1 control-label">Penetration :</label>
		<div class="col-sm-1">
			<input type="number" name="penetration" id="penetration" min="0" max="99999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getPenetration(); else echo "0"; ?>"
			/>
		</div>

		<label for="targeting" class="col-sm-1 control-label">Targeting :</label>
		<div class="col-sm-1">
			<input type="number" name="targeting" id="targeting" min="0" max="99999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getPenetration(); else echo "0"; ?>"
			/>
		</div>
	</div>

	<div class="form-group">
		<label for="durability" class="col-sm-1 col-sm-offset-3 control-label">Durability :</label>
		<div class="col-sm-1">
			<input type="number" name="durability" id="durability" min="0" max="99999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getDurability(); else echo "0"; ?>"
			/>
		</div>

		<label for="armor" class="col-sm-1 control-label">Armor :</label>
		<div class="col-sm-1">
			<input type="number" name="armor" id="armor" min="0" max="99999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getArmor(); else echo "0"; ?>"
			/>
		</div>

		<label for="evasion" class="col-sm-1 control-label">Evasion :</label>
		<div class="col-sm-1">
			<input type="number" name="evasion" id="evasion" min="0" max="99999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getEvasion(); else echo "0"; ?>"
			/>
		</div>
	</div>

	<div class="form-group">
		<label for="stealth" class="col-sm-1 col-sm-offset-3 control-label">Stealth :</label>
		<div class="col-sm-1">
			<input type="number" name="stealth" id="stealth" min="0" max="99999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getStealth(); else echo "0"; ?>"
			/>
		</div>

		<label for="detection" class="col-sm-1 control-label">Detection :</label>
		<div class="col-sm-1">
			<input type="number" name="detection" id="detection" min="0" max="99999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getDetection(); else echo "0"; ?>"
			/>
		</div>
	</div>

	<div class="form-group">
		<label for="min_range" class="col-sm-1 col-sm-offset-3 control-label">Minimal range :</label>
		<div class="col-sm-1">
			<input type="number" name="min_range" id="min_range" min="0" max="99999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getMin_range(); else echo "0"; ?>"
			/>
		</div>

		<label for="max_range" class="col-sm-1 control-label">Maximal range :</label>
		<div class="col-sm-1">
			<input type="number" name="max_range" id="max_range" min="0" max="99999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getMax_range(); else echo "0"; ?>"
			/>
		</div>
	</div>

</fieldset>