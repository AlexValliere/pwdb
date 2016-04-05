<?php
if (isset($tank))
{
	$filename  = "resources/metal_maidens/";
	$filename .= "full/";
	$filename .= $tank->getImagename();
	$filename .= ".png";

	if (file_exists(utf8_decode($filename)))
	{
		echo '<img src="'.$filename.'" alt="'.$tank->getTank().' full illustration" />';
	}
}
?>