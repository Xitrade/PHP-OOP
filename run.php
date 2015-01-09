<?php
	
//EXAMPLE 1

	if (is_integer("69")) echo "This is numba"; 
		else
			echo "this no number";
			var_dump(is_integer(7843));
			var_dump(is_integer(789879));
			var_dump(is_integer(96));
			var_dump(is_integer(false));
	
//EXAMPLE 2

	$trigger = true;
	$marker = 0;

	// Since $a is a boolean, it will return true
	if (is_bool($trigger) === false) {
	    echo "Yes, this is a boolean";
	}

	// Since $b is not a boolean, it will return false
	if (is_bool($marker) === false) {
	    echo "No, this is not a boolean";
	}

//EXAMPLE 3

?>