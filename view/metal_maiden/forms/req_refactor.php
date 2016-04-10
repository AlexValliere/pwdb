<fieldset>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<legend>Refactor</legend>
		</div>
	</div>

	<div class="form-group">
		<label for="refactor" class="col-sm-2 col-sm-offset-3 control-label">Level :</label>
		<div class="col-sm-2">
			<select name="refactor" id="refactor" multiple class="form-control">
				<?php
				for ($i = 0; $i <= 3; $i++)
				{
					echo '<option value="' . $i . '" '; 
					if (isset($tank) && $tank->getRefactor() == $i)
						echo 'selected="selected"';

					echo '>';

					if ($i == 0)
						echo 'Not available at BWMG Depot';
					else
						echo $i;

					echo '</option>';
				}
				?>
			</select>
		</div>
	</div>
</fieldset>