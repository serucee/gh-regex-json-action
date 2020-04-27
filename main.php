<?php
$input = file_get_contents($_SERVER["GITHUB_WORKSPACE"] . "/files.json");
$json = json_decode($input, true);
$pattern = '/^.*\/[0-9]{3}-.*/u';
foreach ($json as $fileName) {
	if(preg_match($pattern, $fileName) !== 1) {
		echo "Filename $fileName invalid!";
		exit(1);
	}
}

exit(0);