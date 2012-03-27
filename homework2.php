<html>

<head>
	<title>
		<?php echo "Домашна работа";  
		?>
	</title>
</head>

<body>
	
	<?php
		$array = range (20, 1000, 37);
		
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
		
		function find_3_prime()
		{
			/*foreach ( $GLOBALS['array'] as $value ) 
			{
				echo $value . " ";
			}*/
			$count = 0;
			foreach ($GLOBALS['array'] as $value)
			{
				if (IsPrime($value))
				{
					++$count;
					if($count == 3)
					{
						echo "The third prime number in array is: " . $value . ";<br>";
					}
				}
			}
		}
		
		function check_exists()
		{
			global $array;
			if (in_array(146, $array))
			{
				echo "The number 146 does exist in the array.<br>";
			}
			else 
				echo "The number 146 does not exist in the array.<br>";
			if (in_array(284, $array))
			{
				echo "The number 284 does exist in the array.<br>";
			}
			else 
				echo "The number 284 does not exist in the array.<br>";
			if (in_array(871, $array))
			{
				echo "The number 871 does exist in the array.<br>";
			}
			else 
				echo "The number 871 does not exist in the array.<br>";
		}
		find_3_prime();
		check_exists();
	?>
</body>

</html>