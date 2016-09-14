<?php

	$firstName = "Siim";
	$lastName = "Hütsi";
	// echo tükib välja muutuja nime
	//echo $firstName;
	//echo $lastName;
	
	echo $firstName." ".$lastName;
?>

<br>

<?php

	$age = 21;
	
	if ($age < 18) {
		
		// kui vastus on tõene (true)
		echo "Alaealine";
	} else {
		// kui vastus on vale (false)
		echo "Täisealine";
		
	}
?>

<br>

<?php

	for($i = 1; $i <= $age; $i = $i + 1)
	{
		echo $i."Palju ";
	}
	
	echo "õnne";
?>

<br>

<?php

	echo date("D, d M Y H:i:s");

?>