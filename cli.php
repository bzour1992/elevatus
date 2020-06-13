<?php
	require "helper.php";

	echo "Please enter 2 strings to calculate Levenshtein distance between them: \n";

	echo "First String: \n";
	$handle = fopen("php://stdin", "r");
	$str1 = fgets($handle);

	echo "Second String: \n";
	$handle = fopen("php://stdin", "r");
	$str2 = fgets($handle);

	echo "Levenshtein: " . Helper::instantiate('Levenshtein', $str1, $str2) . " operations needed \n";
?>
