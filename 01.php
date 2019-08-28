<?php
//	$num=$_POST["dy"];
//	if($num==1){
//		echo("[1,2,3,4,5]");
//	}else if($num==2){
//		echo("[6,7,8,9,0]");
//	}
	$arr=[1,2,3,4,5,6,7,8,9,0];
	echo $_GET["dy"]."(".JSON_encode($arr).")";
?>