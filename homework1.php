<html>

<head>
	<title>
		<?php echo "Домашна работа";  
		?>
	</title>
</head>

<body>

	<form action="homework1.php" method="get">
		Въведи число: <input type="text" name="number" />
					  <input type="submit" />
	</form>
	
	<?php
		function IsPrime($number)
		{
			if ($number < 2) 
			{ 
					return FALSE;
			}
			for ($i=2; $i<=($number / 2); $i++) 
			{
					if($number % $i == 0) 
					{ 
							return FALSE;
					}
			}
			return TRUE;
		}
		
		function CheckN($number)
		{
			if(!(is_numeric($number)))
			{
				echo "<font color='red'> The parameter is not a number</font>";
			}
			else if (!((0 <= $number) && ($number <= 19999))) 
			{
				echo "<font color='red'> The parameter is not within the range [0,19999]</font>";
			}
			else if (!(IsPrime($number)))
			{
                echo "<font color='blue'> The number " . $number . " is NOT prime!</font>";
			}
			else
				echo "The number " . $number . " is prime!";
		}
		
		echo CheckN($_GET["number"]);
	?>
</body>

</html>