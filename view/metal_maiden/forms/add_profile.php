<fieldset>
	<legend>Profile</legend>
		<p>
			<label for="tank">Tank :</label>
			<input type="text" name="tank" id="tank" placeholder="Ex : Churchill Mk-I" size="30" maxlength="30"
			<?php if (isset($tank)) echo 'value="' . $tank->getTank() . '"'; ?>
			/>
		</p>

		<p>
			<label for="name">Name :</label>
			<input type="text" name="name" id="name" placeholder="Ex : Camilla Beck" size="30" maxlength="30"
			<?php if (isset($tank)) echo 'value="' . $tank->getName() . '"'; ?>
			/>
		</p>

		<p>
			<label for="category">Category :</label>
				<select name="category" id="category">
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
		</p>

		<p>
			<label for="nation">Nation :</label>
				<select name="nation" id="nation">
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
		</p>

		<p>
			<label for="rarity">Rarity :</label>
				<select name="rarity" id="rarity">
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
		</p>

		<p>
			<label for="character_voice">Character voice :</label>
			<input type="text" name="character_voice" id="character_voice" placeholder="Ex : Megumi Han" size="30" maxlength="30"
			<?php if (isset($tank)) echo 'value="' . $tank->getCharacter_voice() . '"'; ?>
			/>
		</p>

		<p>
			<label for="live2d">Live2D availibility :</label><br />
			<input type="radio" name="live2d" value="null" id="null"
			<?php if (isset($tank) && $tank->getLive2d() == "null") echo 'checked="checked"'; elseif (!isset($tank)) echo 'checked="checked"'; ?>
			/> <label for="null">(empty)</label><br />
			<input type="radio" name="live2d" value="1" id="true"
			<?php if (isset($tank) && $tank->getLive2d() == "1") echo 'checked="checked"'; ?>
			/> <label for="true">Available</label><br />
			<input type="radio" name="live2d" value="0" id="false"
			<?php if (isset($tank) && $tank->getLive2d() == "0") echo 'checked="checked"'; ?>
			/> <label for="false">Not available</label>
		</p>
</fieldset>