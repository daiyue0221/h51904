<?php
	$conn=mysqli_connect("127.0.0.1","root","","carousel",3306);
	$sql="SELECT imgs_src FROM imgs";
	mysqli_query($conn,"SET NAMES UTF8");
	$rs=mysqli_query($conn,$sql);
	$arr=[];
	while($row=mysqli_fetch_row($rs)){
		array_push($arr,$row[0]);
	}
	echo JSON_encode($arr);
?>