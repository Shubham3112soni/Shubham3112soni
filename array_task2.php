<?php
	//Associative array
	//key = value
	//Method 1
	$a[0] = 10;
	$a['c'] = "computer";
	$a['php'] = "Web development";
	$a[10] = "Ten";
	$a[50] = 50.50;
	//Method 2 
	//Always use this method to create an array
	$a = array(
		0 => 10, 
		"c" => "computer",
		"php" => "web development",
		10 => "ten",
		50 => 50.50
	);

	//Print value
	echo "c for ".$a['c'];

	foreach ($a as $value) {
		echo "<br> value is $value";
	}

	foreach ($a as $key => $value) {
		echo "<br>Key is <b>$key</b> and value is <b>$value</b>";
	}

	//Inbulit functions 
	echo "<pre>";
	print_r($a);
	echo "<pre>";
	var_dump($a);
	echo "<pre>";
?>