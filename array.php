<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
				$ceu = array(
		    "Italy" => "Rome",
		    "Luxembourg" => "Luxembourg",
		    "Belgium" => "Brussels",
		    "Denmark" => "Copenhagen",
		    "Finland" => "Helsinki",
		    "France" => "Paris",
		    "Slovakia" => "Bratislava",
		    "Slovenia" => "Ljubljana",
		    "Germany" => "Berlin",
		    "Greece" => "Athens",
		    "Ireland" => "Dublin",
		    "Netherlands" => "Amsterdam",
		    "Portugal" => "Lisbon",
		    "Spain" => "Madrid",
		    "Sweden" => "Stockholm",
		    "United Kingdom" => "London",
		    "Cyprus" => "Nicosia",
		    "Lithuania" => "Vilnius",
		    "Czech Republic" => "Prague",
		    "Estonia" => "Tallin",
		    "Hungary" => "Budapest",
		    "Latvia" => "Riga",
		    "Malta" => "Valetta",
		    "Austria" => "Vienna",
		    "Poland" => "Warsaw"
		);
				foreach ($ceu as $key=>$value) {
					echo "Thủ đô của $key là $value<br> "; 
				}
	 ?>
</body>
</html>