<?php
$categories = ["atg", "ht", "lav", "lt", "mt", "spg"];
$nations = ["bavaria", "britannia", "freedonia", "gallia", "rossiya"];
$result = NULL;

if (isset($_GET["query"]) && !empty($_GET["query"]))
{
	$metalMaidensManager = new MetalMaidensManager($dbhandler);

	$search = strtolower($_GET["query"]);
	$search = remove_accent($search);

	$search = str_replace("mk-1", "mk-i", $search);
	$search = str_replace("mk-2", "mk-ii", $search);
	$search = str_replace("mk-3", "mk-iii", $search);
	$search = str_replace("mk-4", "mk-iv", $search);
	$search = str_replace("mk-5", "mk-v", $search);
	$search = str_replace("mk-6", "mk-vi", $search);
	$search = str_replace("mk-7", "mk-vii", $search);
	$search = str_replace("mk-8", "mk-viii", $search);
	$search = str_replace("mk-9", "mk-ix", $search);
	$search = str_replace("mk-10", "mk-x", $search);
	$search = str_replace("mk.1", "mk.i", $search);
	$search = str_replace("mk.2", "mk.ii", $search);
	$search = str_replace("mk.3", "mk.iii", $search);
	$search = str_replace("mk.4", "mk.iv", $search);
	$search = str_replace("mk.5", "mk.v", $search);
	$search = str_replace("mk.6", "mk.vi", $search);
	$search = str_replace("mk.7", "mk.vii", $search);
	$search = str_replace("mk.8", "mk.viii", $search);
	$search = str_replace("mk.9", "mk.ix", $search);
	$search = str_replace("mk.10", "mk.x", $search);
	$search = str_replace("jagdpanzer 4", "jagdpanzer iv", $search);
	$search = str_replace("panzer 3", "panzer iii", $search);
	$search = str_replace("panzer 4", "panzer iv", $search);
	$search = str_replace("sturmgeschutz", "sturmgeschütz", $search);
	$search = str_replace("geschutzwagen", "geschützwagen", $search);

	$results = $metalMaidensManager->search_like_tank_slug(post_slug($search));

	if ($results == NULL)
	{
		$search_table = explode(" ", $search);

		foreach ($search_table as $key)
		{
			if (in_array($key, $categories) || in_array($key, $nations))
				$keys[] = $key;
		}

		if (isset($keys) && !empty($keys))
		{
			$keys = array_unique($keys);

			foreach ($keys as $key)
			{
				if (in_array($key, $categories))
					$tank_list[$key] = $metalMaidensManager->getCategory_list($key);
				if (in_array($key, $nations))
					$tank_list[$key] = $metalMaidensManager->getNation_list($key);
			}

			if (isset($tank_list) && !empty($tank_list))
			{
				foreach ($tank_list as $key => $value)
				{
					foreach ($value as $tank)
						$results[] = $tank;
				}
				if (isset($results) && !empty($results))
					$results = array_unique($results);
			}
		}
	}
}
?>