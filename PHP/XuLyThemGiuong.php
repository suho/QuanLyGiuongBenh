<?php
	$maPhong=$_POST['maPhong'];
	$maGiuong=$_POST['maGiuong'];
	
	
		$connect = mysql_connect("localhost","root","") or die("Disconnect database");
        mysql_select_db("quanlygiuongbenh",$connect);
		mysql_set_charset('utf8',$connect);
		$sql = "insert into benhnhan(MaGiuong,MaPhong) values(N'".$maGiuong."',N'".$maPhong."')";
        mysql_query($sql,$connect);



?>
