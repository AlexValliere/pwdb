<?php
//2 $zip = new ZipArchive();
$zip_path = TANK_IMAGE_DIR . "root-head_rectangle/output/flairs_1.10.1.3_april2016.zip";

//2 if ($zip->open($zip_path, ZipArchive::CREATE)!==TRUE) {
//2 	exit("Impossible d'ouvrir le fichier <$zip_path>\n");
//2 }

echo "Zip file below generated on April 28 with game's version : 1.10.1.3<br />";
echo "<a href=" . $zip_path . ">Download flairs by clicking this link</a><br /><br />";

$last_id = 0;
$number_of_flairs = 0;

foreach ($tanks as $tank)
{
	if ($tank->getRoot_head_id() != 0 && $tank->getRoot_head_id() != $last_id)
	{
		?>
		<img
			<?php if ($tank->getRoot_head_id() < 10) { ?>
			src="<?php echo TANK_IMAGE_DIR . "root-head_rectangle/root-head_rectangle-0" . $tank->getRoot_head_id(); ?>.png";
			<?php } else { ?>
			src="<?php echo TANK_IMAGE_DIR . "root-head_rectangle/root-head_rectangle-" . $tank->getRoot_head_id(); ?>.png";
			<?php } ?>
			alt="<?php echo $tank->getTank(); ?> flair"
			style="display: inline-block;"
		/>
		<?php
		$filename = $tank->getTank();
		$filename = str_replace("/", "-", $filename);
		$filename = str_replace(".", "-", $filename);
		$filename = str_replace("_", "-", $filename);
		$filename = str_replace(" ", "-", $filename);
		$filename = str_replace("ü", "u", $filename);
		$filename = str_replace("(", "-", $filename);
		$filename = str_replace(")", "-", $filename);
		$filename = str_replace("---", "-", $filename);
		$filename = str_replace("--", "-", $filename);
		$filename = rtrim($filename, "-");

		if ($tank->getRoot_head_id() < 10)
			$filepath = TANK_IMAGE_DIR . "root-head_rectangle/root-head_rectangle-0" . $tank->getRoot_head_id() . ".png";
		else
			$filepath = TANK_IMAGE_DIR . "root-head_rectangle/root-head_rectangle-" . $tank->getRoot_head_id() . ".png";
		$newfilepath = TANK_IMAGE_DIR . "root-head_rectangle/output/" . $filename . ".png";
		
		echo $tank->getRoot_head_id() . " : " . $filename;

		//1 if (!copy($filepath, $newfilepath)) { echo "failed to copy"; }
		//2 $zip->addFile($newfilepath);

		echo "<br />";
	}
	$last_id = $tank->getRoot_head_id();
}

$additional_files_array = array(
	"197" => "Coming-Soon",
	"215" => "Male-Commander",
	"229" => "Female-Commander"
);

foreach ($additional_files_array as $key => $value) {
	$filepath = TANK_IMAGE_DIR . "root-head_rectangle/root-head_rectangle-" . $key . ".png";
	$newfilepath = TANK_IMAGE_DIR . "root-head_rectangle/output/" . $value . ".png";

	?>
	<img
		src="<?php echo TANK_IMAGE_DIR . "root-head_rectangle/root-head_rectangle-" . $key; ?>.png";
		alt="<?php echo $value; ?> flair"
		style="display: inline-block;"
	/>
	<?php
	echo $key . " : " . $value . "<br />";

	//1 if (!copy($filepath, $newfilepath)) { echo "failed to copy"; }
	//2 $zip->addFile($newfilepath);
}

//2 $zip->close();
?>