<div class="table-responsive">
	<?php
	$quote_array = array(
		"intro"		=> "Intro",
		"main1"		=> "Main screen #1",
		"main2"		=> "Main screen #2",
		"main3"		=> "Main screen #3",
		"main4"		=> "Main screen #4",
		"main5"		=> "Main screen #5",
		"upgrading"	=> "On upgrade",
		"attacking"	=> "On attack"
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