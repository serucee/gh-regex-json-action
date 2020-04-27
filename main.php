<?php

$input = file_get_contents($_SERVER['HOME'] . "/files.json");
$json = json_decode($input, true);
$pattern = '/^[0-9]{3}-.*/u';

foreach ($json['all'] as $fileName) {
	if(preg_match($pattern, $fileName) !== 1) {
		exit(1);
	}
}

exit(0);