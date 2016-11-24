<?php
	header("Content-type:text/html;charset=utf-8");
	$host = '127.0.0.1';
	$user = 'root';
	$password = '';
	if($con = mysqli_connect($host,$user,$password)){
		echo '链接成功';
	}else{
		echo '链接失败';
	}
	mysqli_select_db($con,'test');
	// if(mysqli_query($con,'INSERT INTO table1(username,password) VALUES("Tom","T123")')){
	// 	echo '插入成功';
	// }else{
	// 	echo '插入失败';
	// 	var_dump(mysql_error($con));
	// }
	if($query = mysqli_query($con,'UPDATE table1 SET password = "0001" WHERE id > 2')){
		echo '修改成功';
		echo '<br/>';
		echo '修改的数据条数为'.mysqli_affected_rows($con);
	}else{
		echo '修改失败';
	}

?>