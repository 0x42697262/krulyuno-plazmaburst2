<?php
parse_str($_SERVER["QUERY_STRING"]);

if ($map === 'saw'){
	$trapLocations = range(0, 25);
	shuffle($trapLocations);
	for ($i=0; $i <= 25; $i++){
		file_put_contents('seed/'.$login.'_'.$i, $trapLocations[$i]);
	}
	echo($map);
	echo($login);
}


?>
