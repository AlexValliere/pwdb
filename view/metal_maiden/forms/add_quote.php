<?php
$quote_array = ["Quote intro", "Quote main screen 1", "Quote main screen 2", "Quote main screen 3", "Quote main screen 4", "Quote main screen 5", "Quote attacking", "Quote upgrading"];
?>
<fieldset>
	<legend>Quote</legend>
		<p>Type null to set a quote to <span style="color: Crimson;">No quote</span></p>
		<br />
		<p>
			<?php
			foreach ($quote_array as $quote)
			{
				?>
				<label for="<?php echo post_slug($quote); ?>"><?php echo $quote; ?> :</label><br />
				<textarea name="<?php echo post_slug($quote); ?>" id="<?php echo post_slug($quote); ?>" cols="50"><?php
				if (isset($tank))
				{
					if ($quote == "Quote intro")				echo $tank->getQuote_intro();
					elseif ($quote == "Quote main screen 1")	echo $tank->getQuote_main_screen_1();
					elseif ($quote == "Quote main screen 2")	echo $tank->getQuote_main_screen_2();
					elseif ($quote == "Quote main screen 3")	echo $tank->getQuote_main_screen_3();
					elseif ($quote == "Quote main screen 4")	echo $tank->getQuote_main_screen_4();
					elseif ($quote == "Quote main screen 5")	echo $tank->getQuote_main_screen_5();
					elseif ($quote == "Quote attacking")		echo $tank->getQuote_attacking();
					elseif ($quote == "Quote upgrading")		echo $tank->getQuote_upgrading();
				}
				?></textarea>
				<br />
				<?php
			}
			?>
</fieldset>