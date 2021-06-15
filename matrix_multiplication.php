<html>
<head>
	<title>Matrix Multiplication</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="day2_css.css">
</head>
<body>
	<?php 
		$a=array(array(1,3), array(2,4));
		$b=array(array(2,4), array(1,8));
	?>
	<center>
	<fieldset style="width: 560px;">
		<legend>Matrix Multiplication</legend>
	<center>
	<table border=1px style="font-size: 22px; margin: 35px; color: white;">
	<tr>
		<th>Matrix 1</th>
		<th rowspan="2">X</th>
		<th>Matrix 2</th>
		<th rowspan="2">=</th>
		<th>Addition</th>
	</tr>
	<tr>
		<td><?php 
			for($i=0;$i<2;$i++)
			{
				for($j=0;$j<2;$j++)
				{
					echo $a[$i][$j], " ";
				}
				echo "<br/>";
			}
			?></td>
		<td><?php 
			for($i=0;$i<2;$i++)
			{
				for($j=0;$j<2;$j++)
				{
					echo $b[$i][$j], " ";
				}
				echo "<br/>";
			}
			?></td>
		<td><?php 
			for($i=0;$i<2;$i++)
			{
				for($j=0;$j<2;$j++)
				{
					echo $a[$i][$j]*$b[$i][$j], " ";
				}
				echo "<br/>";
			}
			?>		
		</td>
		</tr>
	</center>
	</center>
	</fieldset>
	</table>
	</center>
</body>
</html>