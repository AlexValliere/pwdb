<?php
$page_title = "Panzer Waltz DB";

if (get_route() != "home" && get_route() != "metal_maiden")
	$page_title = ucfirst(str_replace("_", " ", get_route())) . " - " . $page_title;
else if (get_route() == "metal_maiden")
	$page_title = $tank->getTank() . " - " . $page_title;
?>
<script language="javascript">
	document.title = "<?php echo $page_title; ?>"
</script>