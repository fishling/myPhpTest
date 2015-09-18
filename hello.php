<?php
	$conn = mysql_connect("localhost","root","");
	if($conn)
		echo "连接数据库成功";
	else
		echo "连接数据库失败";
?>