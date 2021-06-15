<?php
	$a = array("hello", "world", "i", "am", "here");
	$b = array(3,5,7,8,6);
	$c = array("java", "android", "java", "ios", "jason");
	$ks = array(
		9 => 'keyur' , 
		5 => 'jay' ,
		6 => 'dhruv' ,
		21 => 'shubham' , 
		20 => 'supan' );
	$uc = array('mango' => 24, 'orange' => 25, 'apple' => 26 );
	$ardiff1 = array("orange", "mango", "apple" , "banana");
	$ardiff2 = array("mango", "orange", "grape" , "watermellon");
	$exstring = "Hello world i am here";
	echo "following are the array used in the array function<br/>";
 	print_r($a);
 	echo "<br/>";
 	print_r($b);
 	echo "<br/>";
 	print_r($c);
 	echo "<br/>";
 	print_r($ks);
 	echo "<br/>";
 	print_r($uc);
 	echo "<br/>";
 	print_r($ardiff1);
 	echo "<br/>";
 	print_r($ardiff2);
 	echo "<br/><br/>";
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Array Functions</title>
</head>
<body>
	<form method="get" action="#"> 
		<select name="array_functions">
			<option value="1">count()</option>
			<option value="2">array_count_values()</option>
			<option value="3">array_sum()</option>
			<option value="4">array_product()</option>
			<option value="5">array_reverse()</option>
			<option value="6">in_array()</option>
			<option value="7">array_rand()</option>
			<option value="8">array_unique()</option>
			<option value="9">array_merge()</option>
			<option value="10">array_search()</option>
			<option value="11">range()</option>
			<option value="12">sort()</option>
			<option value="13">rsort()</option>
			<option value="14">asort()</option>
			<option value="15">ksort()</option>
			<option value="16">shuffle()</option>
			<option value="17">array_key_exists()</option>
			<option value="18">array_change_key_case()</option>
			<option value="19">array_combine()</option>
			<option value="20">end()</option>
			<option value="21">compact()</option>
			<option value="22">array_flip()</option>
			<option value="23">array_diff()</option>
			<option value="24">array_intersect()</option>
			<option value="25">array_values ()</option>
			<option value="26">array_push()</option>
			<option value="27">array_pop()</option>
			<option value="28">explode()</option>
			<option value="29">implode()</option>
		</select>
		<input type="submit" name="submit">
		<br/>
		<?php
			if (isset($_GET['submit'])) {
			 	$ar_fun = $_GET['array_functions'];
				switch ($ar_fun) {
					case '1':
						echo "the array is following:";
						print_r($a);
						echo "<br/>and this is the answer:";
						echo count($a);
						break;
					case '2':
						foreach ($a as $key => $value) {
							echo "<br/>$key-<strong>$value</strong>";
						}
						break;
					case '3':
						echo "the array is following:";
						print_r($a);
						echo "<br/>and this is the answer:";
						echo array_sum($b)."<br/>";
						break;
					case '4':
						echo "the array is following:";
						print_r($a);
						echo "<br/>and this is the answer:";
						echo array_product($b)."<br/>";
						break;
					case '5':
						$rev = array_reverse($a);
						print_r($rev);
						echo "<br/>";
						break;
					case '6':
						$temp = in_array('am', $a);
						echo "$temp";
						break;
					case '7':
						$indexofarray = array_rand($a,2);
						foreach ($indexofarray as $k => $v) {
							echo "<br/>$k - <strong>" .$a[$v]. "</strong>";
						}
						break;
					case '8':
						print_r(array_unique($c));
						break;
					case '9':
						$newarr = array_merge($a,$c);
						print_r($newarr);
						break;
					case '10':
						$check = array_search("ios", $newarr);
						echo "$check"."<br/>";
						break;
					case '11':
						$ra = range('a','z');
						print_r($ra);
						break;
					case '12':
						sort($b);
						print_r($b);
						break;
					case '13':
						rsort($b);
						print_r($b);
						break;
					case '14':
						asort($b);
						print_r($b);
						break;
					case '15':
						ksort($ks);
						print_r($ks);
						break;
					case '16':
						shuffle($c);
						print_r($c);
						break;
					case '17':
						echo array_key_exists('21', $ks);
						break;
					case '18':
						$uppercase = array_change_key_case($uc,CASE_UPPER);
						print_r($uppercase);
						break;
					case '19':
						$ac = array_combine($a, $c);
						print_r($ac);
						break;
					case '20':
						echo end($c);
						break;
					case '21':
						$maths = 20;
						$physics = 30;
						$marks = compact("maths", "physics");
						print_r($marks);
						break;
					case '22':
						$fliparray = array_flip($ks);
						print_r($fliparray);
						break;
					case '23':
						print_r (array_diff($ardiff1, $ardiff2));
						break;
					case '24':
						print_r(array_intersect($ardiff1, $ardiff2));
						break;
					case '25':
						$myarr = array_values($ks);
						print_r($myarr);
						break;
					case '26':
						array_push($c , 'python');
						print_r($c);
						break;
					case '27':
						array_pop($c);
						print_r($c);
						break;
					case '28':
						$ex = explode(" ", $exstring);
						print_r($ex);
						break;
					case '29':
						$im = implode(" ", $ex);
						print_r($im);
						break;
					default:
						echo "what you are finding is not here";
						break;
				}
			 } 
		?>
	</form>
</body>
</html>