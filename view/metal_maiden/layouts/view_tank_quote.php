<table class="view_tank">
<tr>
	<th colspan="2" >Quote</th>
</tr>
<tr>
	<td>Intro</td>
	<td>
		<?php
		if ($tank->getQuote_intro() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_intro();
		?>
	</td>
</tr>
<tr>
	<td>Main game screen #1</td>
	<td>
		<?php
		if ($tank->getQuote_main_screen_1() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_main_screen_1();
		?>
	</td>
</tr>
<tr>
	<td>Main game screen #2</td>
	<td>
		<?php
		if ($tank->getQuote_main_screen_2() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_main_screen_2();
		?>
	</td>
</tr>
<tr>
	<td>Main game screen #3</td>
	<td>
		<?php
		if ($tank->getQuote_main_screen_3() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_main_screen_3();
		?>
	</td>
</tr>
<tr>
	<td>Main game screen #4</td>
	<td>
		<?php
		if ($tank->getQuote_main_screen_4() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_main_screen_4();
		?>
	</td>
</tr>
<tr>
	<td>Main game screen #5</td>
	<td>
		<?php
		if ($tank->getQuote_main_screen_5() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_main_screen_5();
		?>
	</td>
</tr>
<tr>
	<td>Upgrading</td>
	<td>
		<?php
		if ($tank->getQuote_upgrading() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_upgrading();
		?>
	</td>
</tr>
<tr>
	<td>Attacking</td>
	<td>
		<?php
		if ($tank->getQuote_attacking() == "null")
			echo '<span style="color: Crimson">No quote</span>';
		else
			echo $tank->getQuote_attacking();
		?>
	</td>
</tr>
</table>
