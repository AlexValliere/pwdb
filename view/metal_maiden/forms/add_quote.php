<?php
	$quote_array = array(
		"quote_intro"			=> "Intro",
		"quote_main_screen_1"	=> "Main screen #1",
		"quote_main_screen_2"	=> "Main screen #2",
		"quote_main_screen_3"	=> "Main screen #3",
		"quote_main_screen_4"	=> "Main screen #4",
		"quote_main_screen_5"	=> "Main screen #5",
		"quote_attacking"		=> "On upgrade",
		"quote_upgrading"		=> "On attack"
	);
?>
<fieldset>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<legend>Quotes</legend>
		</div>
	</div>

	<div class="col-sm-6 col-sm-offset-3">
		<p>Type null to set a quote to <span style="color: Crimson;">No quote</span></p>
	</div>

	<?php
	foreach ($quote_array as $quote_index => $quote_name)
	{
		?>
		<div class="form-group">
			<label for="<?php echo $quote_index; ?>" class="col-sm-2 col-sm-offset-2 control-label"><?php echo $quote_name; ?> :</label>
			<div class="col-sm-5">
				<textarea class="form-control" name="<?php echo $quote_index; ?>" id="<?php echo $quote_index; ?>" rows="3"><?php if (isset($tank)) echo $tank->getQuote($quote_index); ?></textarea>
			</div>
		</div>
		<?php
	}
	?>

</fieldset>