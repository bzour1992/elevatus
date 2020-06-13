<?php

	require "helper.php";

	echo "Test 1 : this is a test , this is test <br> Test 2 : this is test , the is test <br>";

	//Levenshtein distance test
	echo '</br>'.'Levenshtein distance test:'.'</br>';
	echo 'Test 1: ' . Helper::instantiate('Levenshtein','this is test','the is test').'</br>'
	.'Test 2: ' . Helper::instantiate('Levenshtein','this is a test','this is test').'</br>';

	//Hamming distance test
	echo '<br>'.'Hamming distance test:'.'</br>';
	echo 'Test 1: ' . Helper::instantiate('Hamming','this is a test','this is test'). '</br>'
	.'Test 2: ' . Helper::instantiate('Hamming','this is test','the is test') . '</br>';
