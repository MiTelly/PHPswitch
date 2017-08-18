<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php

	     $random = rand(0,3);
	     switch ($random) {
	         case 0:
	             echo "The value is 0\n";
	             break;
	         case 1:
	             echo "The value is 1\n";
	             break;
	         case 2:
	             echo "The value is 2\n";
	             break;
	         default:
	             echo "The value isn't 0, 1 or 2\n";
	     }

	     $myArray = array("Jim", "Joe", "Jerry", "Jack");
	     $lengthArray = count($myArray);
	     echo $myArray[2];

			 for ($i = 0; $i <= 20; $i++) {
				 	echo $i;
			 }

			 $sentence = array("The ", "cheese ", "is", "old ", "and ", "moldy");

			 foreach ($sentence as $word) {
				 	echo $word;
			 }

			 

	     ?>
    </body>
</html>
