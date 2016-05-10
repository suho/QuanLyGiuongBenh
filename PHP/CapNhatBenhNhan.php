<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$maBenhNhan=$_POST['maBenhNhan'];
	 $CMND=$_POST['CMND'];
	 $tenBenhNhan=$_POST['tenBenhNhan'];
	$soDienThoai=$_POST['soDienThoai'];
	 $diaChi=$_POST['diaChi'];
	 $trangThaiBenh=$_POST['trangThaiBenh'];
	 $ngayNhapVien=$_POST['ngayNhapVien'];
	$maGiuong=$_POST['maGiuong'];
	
	$loaiPhong=$_GET['loaiPhong'];
	$maKhoa=$_GET['maKhoa'];
	$maPhong=$_GET['maPhong'];
	
	$connect = mysql_connect("localhost","root","") or die("Disconnect database");
     mysql_select_db("quanlygiuongbenh",$connect);
	mysql_set_charset('utf8',$connect);
	$sql = "UPDATE benhnhan set TenBenhNhan=N'".$tenBenhNhan."', CMND='".$CMND."',SoDienThoai='".$soDienThoai.
	"',DiaChi=N'".$diaChi."',TrangThaiBenh=".$trangThaiBenh.",NgayNhapVien='".$ngayNhapVien."',MaGiuong='".$maGiuong.
	"' where MaBenhNhan='".$maBenhNhan."'";
 
    mysql_query($sql,$connect);
	
	header("location:trangchu.php?page=$maKhoa&maPhong=$maPhong&loaiPhong=$loaiPhong");
	
?>
</body>
</html>