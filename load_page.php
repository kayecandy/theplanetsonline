<?php 

	$domain = 'https://www.jpl.nasa.gov';
	$dir = '/video/details.php?id=1440';
	$site = file_get_contents($domain . $dir);

	$site = str_replace('href="/', 'href="' . $domain . '/', $site);
	$site = str_replace('src="/', 'src="' . $domain . '/', $site);
	echo($site);

?>