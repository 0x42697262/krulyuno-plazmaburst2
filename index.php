<?php
#$user = $_POST['user_login'];
$user = '';
$map = '';

parse_str($_SERVER["QUERY_STRING"]);
$user = htmlspecialchars($user);
if ($map === 'saw'){
	$trapLocations = range(0, 25);
	shuffle($trapLocations);
	for ($i=0; $i <= 25; $i++){
		file_put_contents('seed/'.$user.'_'.$i, strval($trapLocations[$i]));
	}
	
#	file_put_contents('seed/'.$user.'_seed', implode('|',$trapLocations));
	file_put_contents('seed/'.$user.'_seed', json_encode($trapLocations));
}


?>
