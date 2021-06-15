<?php
	//Numerical array
	//method 1
	$a[0] = 10;
	$a[1] = 20;
	$a[2] = 20.5;
	$a[3] = "value";
	$a[4] = "15";

	//Index Dynamic array
	//Method 2 
	$a[] = 10;
	$a[] = 20;
	$a[] = 20.5;
	$a[] = "value";
	$a[] = "15";

	//Method 3
	//Always use this method to create an array 
	$a = array(10,30,50,"c","c++",20.25,"data");
	//Print array
	echo $a[4];
	//Print whole array
	for ($i=0; $i < count($a); $i++) { 
		echo "<br/>".$a[$i];
	}

	$sum = array_sum($a);
	echo $sum;

	$product = array_product($a);
	echo $product;

	//Inbuilt function to debug an array
	echo "<pre>";
	print_r($a);
	echo "<pre>";
	var_dump($a);
	echo "<pre>";
?>