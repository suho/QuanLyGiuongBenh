<?php
         $CMND=$_POST['CMND'];
	 $tenBenhNhan=$_POST['tenBenhNhan'];
	$soDienThoai=$_POST['soDienThoai'];
	 $diaChi=$_POST['diaChi'];
	 $trangThaiBenh=$_POST['trangThaiBenh'];
	 $ngayNhapVien=$_POST['ngayNhapVien'];
		$maGiuong=$_POST['maGiuong'];
		$maKhoa=$_GET['maKhoa'];
		$maPhong=$_GET['maPhong'];
		$loaiPhong=$_GET['loaiPhong'];
	 
		
		$connect = mysql_connect("localhost","root","") or die("Disconnect database");
        	mysql_select_db("quanlygiuongbenh",$connect);
		mysql_set_charset('utf8',$connect);
		$sql = "insert into benhnhan(TenBenhNhan,CMND,SoDienThoai,DiaChi,TrangThaiBenh,NgayNhapVien,MaGiuong) values(N'".$tenBenhNhan."','".$CMND."','".$soDienThoai."',N'".$diaChi."',N'".$trangThaiBenh."','".$ngayNhapVien."','".$maGiuong."')";
		
        	mysql_query($sql,$connect);
         header("location:trangchu.php?page=$maKhoa&maPhong=$maPhong&loaiPhong=$loaiPhong");	
		
	

?>
