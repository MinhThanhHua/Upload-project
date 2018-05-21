<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		$number = array("one", "two", "three");
		$str= 'Trong cuộc thi chạy thi, khi trọng tài hô one, two, three thì vận động viên bắt đầu chạy. Trong đó, khi trọng tài hô "three" thì vận động viên cần tập chung chạy thật nhanh để về đích nhanh nhất có thể.';
		for($i=0;$i<3;$i++){
			$str=str_replace($number[$i],'<span style="color:red">'.$number[$i].'</span>',$str);
		}
		echo $str;
	 ?>
</body>
</html>