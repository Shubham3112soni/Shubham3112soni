<?php
echo "welocme to php";
echo "<h1>I am H1 tag in php</h1>";
?>
<html>
	<head>
		<title>PHP HTML code</title>
	</head>
	<body>
		<p>welcome to HTML code</p>
		<?php 
			echo "I am PHP inside HTML";
		?>
	</body>
</html>


<?php
	//variable  
	$a = 20;
	$b = 40;
	//method 1
	echo "A value is :".$a;
	echo "<br/>B value is :".$b;
	//method 2
	echo "<br/>A value is :".$a."<br/>B value is :".$b;
	//method 3
	echo "<br/>A value is :$a.<br/>B value is :$b";
	//method 4
	echo '<br/>A value is :$a.<br/>B value is :$b';
	//method 5
	echo "<br/>A value is :$a.<br/>B value is :$b Sum is ".($a+$b);
?>