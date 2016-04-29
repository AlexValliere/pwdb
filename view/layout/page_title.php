<?php
$project_title = "Metal Maiden Depot";
$page_title = $project_title;

if (get_route() != "home" && get_route() != "metal_maiden")
	$page_title = ucfirst(str_replace("_", " ", get_route())) . " - " . $project_title;
else if (get_route() == "metal_maiden")
	$page_title = $tank->getTank() . " - " . $project_title;
?>
<script language="javascript">
	document.title = "<?php echo $page_title; ?>"
</script>