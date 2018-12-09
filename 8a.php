<html>
<head>
<style>
	table,td,th
	{
		text-align:center;
		width:35%;
		border: 1px solid black;
	}
	table{margin:auto;}
	input,p{text-align:right;}
	h2{
		top-left=50%;
	}
</style>
<body>
	<form method="post">
		<h2> Simple Calculator </h2>
		<table>
		<tr><td>First number:</td><td><input type=text name=num1></td><td><input type=submit name=submit value=calculate></td></tr>
		<tr rowspan=2><td>Second number:</td><td><input type=text name=num2></td></tr>
	</form>
	
	<?php
	if(isset($_POST['submit']))
	{
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		
		if(is_numeric($num1) and is_numeric($num2))
		{
			echo "<tr><td>Addition:</td><td><p>".($num1+$num2)."</p></td>";
			echo "<tr><td>Subtraction:</td><td><p>".($num1-$num2)."</p></td>";
			echo "<tr><td>Multiplication:</td><td><p>".($num1*$num2)."</p></td>";
			echo "<tr><td>Division:</td><td><p>".($num1/$num2)."</p></td>";
		}
		else
		{
			echo "<script type=text/javascript>alert<Enter valid number></script>";
		}
	}
	?>
	</body>
	</html>
	