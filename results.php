<?php
	// get the base and height from the textfields
	$radius = $_POST['radius'];
	const PI = Math.PI

	// calculate the area
	$volume = (4/3) * PI * $radius**3
?>
	<h3>Results:</h3>
	The volume of the sphere is <?php echo "$volume" ?>cm<sup>2</sup>.