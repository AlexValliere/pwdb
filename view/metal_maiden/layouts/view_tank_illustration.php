<div class="col-lg-10 col-lg-offset-1">
	<h4>Illustration :</h4>
	<?php
	$filename  = "resources/metal_maidens/";
	$filename .= "full/";
	$filename .= $tank->getImagename();
	$filename .= ".png";

	if (file_exists(utf8_decode($filename)))
	{
		echo '<img src="'.$filename.'" alt="'.$tank->getTank().' full illustration" class="img-responsive" />';
	}
	else if (file_exists(urldecode($filename)))
	{
		echo '<img src="'.urldecode ($filename).'" alt="'.$tank->getTank().' full illustration" class="img-responsive" />';
	}
	else
		echo "Can't access : " . $filename;
	?>
</div>