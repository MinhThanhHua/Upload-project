<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$tt=3;
	for($i=1;$i<=3;$i++){
		for($j=1;$j<=5;$j++){
			if( $j-$i<$tt && $j+$i>$tt){
				echo '*';
			}else{
				echo '&nbsp;&nbsp;';
			}
		}
		echo '<br>';
	}
	?>
</body>
</html>