<?php
$user = $_POST['user_login'];
$map = '';

parse_str($_SERVER["QUERY_STRING"]);
if ($map === 'saw'){
	$trapLocations = range(0, 25);
	shuffle($trapLocations);
	for ($i=0; $i <= 25; $i++){
		file_put_contents('seed/'.$user.'_'.$i, $trapLocations[$i]);
	}
	
	file_put_contents('seed/lastSeed', $trapLocations);
}


?>
