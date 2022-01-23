<?php
	$contents = file_get_contents("ipsum.txt");
	preg_match_all("/\[[^\]]*\]/", $contents, $matches);
	var_dump($matches);
?>