<fieldset>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-3">
			<legend>Drop</legend>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-3">
			<p>Can be obtained on the following chapters :</p>
		</div>
	</div>

	
	<?php
	for ($i = 1; $i <= 24; $i++)
	{
		echo '<div class="form-group">';
		echo '<div class="col-sm-10 col-sm-offset-2 col-lg-6 col-lg-offset-4">';
		echo '<div class="row">';
		for ($j = 1; $j <= 4; $j++)
		{
			echo '<label for="chapter_' . $i . '_' . $j . '" class="col-sm-6 col-lg-6 control-label" style="text-align: left;">Volume ' . $i . '-' . $j . ' : ';
			?>
			<input type="radio" value="0" name="chapter_<?php echo $i . '_' . $j; ?>" id="chapter_<?php echo $i . '_' . $j; ?>"
			<?php if (!isset($tank) || (isset($tank) && ($tank->getChapter() == NULL || $tank->getChapter_number($i, $j) == 0))) echo 'checked="checked"'; ?>
			/> No
			<input type="radio" value="1" name="chapter_<?php echo $i . '_' . $j; ?>" id="chapter_<?php echo $i . '_' . $j; ?>"
			<?php if (isset($tank) && $tank->getChapter_number($i, $j) == 1) echo 'checked="checked"'; ?>
			/> Yes
			<?php
			echo '</label>';
		}
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	?>
</fieldset>