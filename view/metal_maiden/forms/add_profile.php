<fieldset>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<legend>Profile</legend>
		</div>
	</div>
	<div class="form-group">
		<label for="tank" class="col-sm-2 col-sm-offset-3 control-label">Tank :</label>
		<div class="col-sm-3 col-lg-2">
			<input type="text" name="tank" id="tank" placeholder="Ex : Churchill Mk-I" maxlength="30" class="form-control"
			<?php if (isset($tank)) echo 'value="' . $tank->getTank() . '"'; ?>
			/>
		</div>
	</div>

	<div class="form-group">
		<label for="name" class="col-sm-2 col-sm-offset-3 control-label">Name :</label>
		<div class="col-sm-3 col-lg-2">
			<input type="text" name="name" id="name" placeholder="Ex : Camilla Beck" class="form-control"
			<?php if (isset($tank)) echo 'value="' . $tank->getName() . '"'; ?>
			/>
		</div>
	</div>

	<div class="form-group">
		<label for="root_head_id" class="col-sm-2 col-sm-offset-3 control-label">Root head id :</label>
		<div class="col-sm-3 col-lg-2">
			<input type="number" name="root_head_id" id="root_head_id" min="0" max="9999" step="1" class="form-control"
			value="<?php if (isset($tank)) echo $tank->getRoot_head_id(); else echo "0"; ?>"
			/>
		</div>
	</div>

	<div class="form-group">
		<label for="category" class="col-sm-2 col-sm-offset-3 control-label">Category :</label>
		<div class="col-sm-3 col-lg-2">
			<select name="category" id="category" multiple class="form-control">
				<option value="atg"
				<?php if (isset($tank) && $tank->getCategory() == "atg") echo 'selected="selected"'; ?>
				>AnTi-Gun</option>
				<option value="ht"
				<?php if (isset($tank) && $tank->getCategory() == "ht") echo 'selected="selected"'; ?>
				>Heavy Tank</option>
				<option value="lav"
				<?php if (isset($tank) && $tank->getCategory() == "lav") echo 'selected="selected"'; ?>
				>Light Armored Vehicle</option>
				<option value="lt"
				<?php if (isset($tank) && $tank->getCategory() == "lt") echo 'selected="selected"'; ?>
				>Light Tank</option>
				<option value="mt"
				<?php if (isset($tank) && $tank->getCategory() == "mt") echo 'selected="selected"'; ?>
				>Medium Tank</option>
				<option value="spg"
				<?php if (isset($tank) && $tank->getCategory() == "spg") echo 'selected="selected"'; ?>
				>Self Propelled Gun</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="nation" class="col-sm-2 col-sm-offset-3 control-label">Nation :</label>
		<div class="col-sm-3 col-lg-2">
			<select name="nation" id="nation" multiple class="form-control">
				<option value="bavaria"
				<?php if (isset($tank) && $tank->getNation() == "bavaria") echo 'selected="selected"'; ?>
				>Bavaria</option>
				<option value="britannia"
				<?php if (isset($tank) && $tank->getNation() == "britannia") echo 'selected="selected"'; ?>
				>Britannia</option>
				<option value="freedonia"
				<?php if (isset($tank) && $tank->getNation() == "freedonia") echo 'selected="selected"'; ?>
				>Freedonia</option>
				<option value="gallia"
				<?php if (isset($tank) && $tank->getNation() == "gallia") echo 'selected="selected"'; ?>
				>Gallia</option>
				<option value="rossiya"
				<?php if (isset($tank) && $tank->getNation() == "rossiya") echo 'selected="selected"'; ?>
				>Rossiya</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="rarity" class="col-sm-2 col-sm-offset-3 control-label">Rarity :</label>
		<div class="col-sm-3 col-lg-2">
			<select name="rarity" id="rarity" multiple class="form-control">
				<option value="blue"
				<?php if (isset($tank) && $tank->getRarity() == "blue") echo 'selected="selected"'; ?>
				>Blue</option>
				<option value="purple"
				<?php if (isset($tank) && $tank->getRarity() == "purple") echo 'selected="selected"'; ?>
				>Purple</option>
				<option value="gold"
				<?php if (isset($tank) && $tank->getRarity() == "gold") echo 'selected="selected"'; ?>
				>Gold</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="character_voice" class="col-sm-2 col-sm-offset-3 control-label">Character voice :</label>
		<div class="col-sm-3 col-lg-2">
			<input type="text" name="character_voice" id="character_voice" placeholder="Ex : Megumi Han" class="form-control"
			<?php if (isset($tank)) echo 'value="' . $tank->getCharacter_voice() . '"'; ?>
			/>
		</div>
	</div>

	<div class="form-group">
		<label for="live2d" class="col-sm-2 col-sm-offset-3 control-label">Live2D availibility :</label>
		<div class="col-sm-3 col-lg-2">
			<label class="radio-inline" for="null"><input type="radio" name="live2d" value="null" id="null"
			<?php if (isset($tank) && $tank->getLive2d() == "null") echo 'checked="checked"'; elseif (!isset($tank)) echo 'checked="checked"'; ?>
			/> (empty)</label><br />
			<label class="radio-inline" for="true"><input type="radio" name="live2d" value="1" id="true"
			<?php if (isset($tank) && $tank->getLive2d() == "1") echo 'checked="checked"'; ?>
			/> Available</label><br />
			<label class="radio-inline" for="false"><input type="radio" name="live2d" value="0" id="false"
			<?php if (isset($tank) && $tank->getLive2d() == "0") echo 'checked="checked"'; ?>
			/> Not available</label>
		</div>
	</div>
</fieldset>