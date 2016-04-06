<div class="col-lg-4">
	<p><strong>Slots :</strong></p>
	<?php
	foreach ($tank->getEquipment_slots() as $slot => $value) {
		if ($value != "null")
			echo ' <img style="height: 30px;" src="' . RESSOURCES_DIR . 'equipment/' . $value . '.png" alt="' . $value . ' icon" />';
	}
	?>
	<div class="row equipment">
		<div class="col-lg-12">
			<p><strong>Shells :</strong></p>
			<?php
			foreach ($tank->getAmmo() as $missile => $value) {
				if ($value == "1")
					echo ' <img style="width: 60px;" src="' . RESSOURCES_DIR . 'missiles/' . $missile . '.png" alt="' . $missile . ' icon" /> ' . $tank->getAmmo_desc()[$missile] . '<br />';
			}
			?>
			<div class="row equipment">
				<div class="col-lg-12">
					<p><strong>Engine bonus :</strong></p>
					<?php
					foreach ($tank->getEngine_bonus() as $bonus => $value) {
						if ($value == "1")
							echo '<img style="height: 30px;" src="' . RESSOURCES_DIR . 'attributes/' . $bonus . '.png" alt="' . $bonus . ' icon" /> ' . $tank->getEngine_bonus_desc()[$bonus] . '<br />';
					}
					?>
					<div class="row equipment">
						<div class="col-lg-12">
							<p><strong>Chassis bonus :</strong></p>
							<?php
							foreach ($tank->getChassis_bonus() as $bonus => $value) {
								if ($value == "1")
									echo '<img style="height: 30px;" src="' . RESSOURCES_DIR . 'attributes/' . $bonus . '.png" alt="' . $bonus . ' icon" /> ' . $tank->getChassis_bonus_desc()[$bonus] . '<br />';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>