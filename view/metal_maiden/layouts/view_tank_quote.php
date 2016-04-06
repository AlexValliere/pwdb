<div class="table-responsive">
	<?php
	$quote_array = array(
		"quote_intro"			=> "Intro",
		"quote_main_screen_1"	=> "Main screen #1",
		"quote_main_screen_2"	=> "Main screen #2",
		"quote_main_screen_3"	=> "Main screen #3",
		"quote_main_screen_4"	=> "Main screen #4",
		"quote_main_screen_5"	=> "Main screen #5",
		"quote_upgrading"		=> "On upgrade",
		"quote_attacking"		=> "On attack"
	);
	?>
	<p><strong>Quotes</strong></p>
	<table class="table table-condensed">
		<tr>
			<th>From</th>
			<th>Quote</th>
		</tr>
		<?php
			foreach ($quote_array as $quote_index => $quote)
			{
				?>
				<tr>
					<td><?php echo $quote; ?></td>
					<td><?php echo $tank->getQuote($quote_index); ?></td>
				</tr>
				<?php
			}
			?>
	</table>
</div>