
<div class="content_bottom">
    
<?php
	if(isset($_GET['page'])){
		$maKhoa=$_GET['page'];
		$maPhong=$_GET['maPhong'];
		$connect = mysql_connect("localhost","root","")  or die("Disconnect database");
             mysql_select_db("quanlygiuongbenh",$connect);
   	     mysql_set_charset('utf8',$connect ); 
		 	$sql="select giuong.MaGiuong,benhnhan.TenBenhNhan,benhnhan.TrangThaiBenh,benhnhan.MaBenhNhan,phong.LoaiPhong from giuong join phong on giuong.MaPhong= phong.MaPhong left join benhnhan on giuong.MaGiuong=benhnhan.MaGiuong where phong.MaPhong='".$maPhong."'";
           
             $query = mysql_query($sql, $connect);
			 
?>	
<br>
<a href="TrangChu.php?page=themGiuong&maPhong=<?php echo $maPhong;?>"><button style="margin-top:10px;margin-left:10px">Thêm giường</button></a>
<div class="CLEAR"></div>
<br>
		<table align="center">
			<tr>
                <td>Mã giường</td>
                 <td>Tên bệnh nhân</td>
                 <td>Trạng thái bệnh</td>
                 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>	
            </tr>	
<?php
            $total = mysql_num_rows($query);
            echo $total;
            $ar = array();
            while($data = mysql_fetch_array($query)){
                $tru = 0;
                array_push($ar, "1");
				 if($data[3]!=null){
				    $tru = $tru + 1;
					 $trangThaiBenh="";
					 if($data[2]==0){
						 $trangThaiBenh="Bệnh nhẹ";
						 echo "<tr><td>".$data[0]."</td><td>".$data[1]."</td><td>".$trangThaiBenh."</td><td><a href='TrangChu.php?page=themBenhNhan&maPhong=".$maPhong."&maGiuong=".$data[0]."&maKhoa=".$maKhoa."&loaiPhong=".$data[4]."'><button disabled>Thêm</button></a>&nbsp;&nbsp;<a href='TrangChu.php?page=chinhSua&maPhong=".$maPhong."&maBenhNhan=".$data[3]."&maKhoa=".$maKhoa."&loaiPhong=".$data[4]."'><button>Chỉnh sửa</button></a>&nbsp;&nbsp;<a href='#'><button>Xóa</button></a>&nbsp;&nbsp;<a href='#'><button disabled>Chuyển phòng</button></a></td></tr>"; 
					 }
					 else{
						  $trangThaiBenh="Bệnh nặng";
						  echo "<tr><td>".$data[0]."</td><td>".$data[1]."</td><td>".$trangThaiBenh."</td><td><a href='TrangChu.php?page=themBenhNhan&maPhong=".$maPhong."&maGiuong=".$data[0]."&maKhoa=".$maKhoa."&loaiPhong=".$data[4]."'><button disabled>Thêm</button></a>&nbsp;&nbsp;<a href='TrangChu.php?page=chinhSua&maPhong=".$maPhong."&maBenhNhan=".$data[3]."&maKhoa=".$maKhoa."&loaiPhong=".$data[4]."'><button>Chỉnh sửa</button></a>&nbsp;&nbsp;<a href='#'><button>Xóa</button></a>&nbsp;&nbsp;<a href='#'><button >Chuyển phòng</button></a></td></tr>"; 
					 }
					 
				 }
				 else{
				    
					 echo "<tr><td>".$data[0]."</td><td>".$data[1]."</td><td>".$data[2]."</td><td><a href='TrangChu.php?page=themBenhNhan&maPhong=".$maPhong."&maGiuong=".$data[0]."&maKhoa=".$maKhoa."&loaiPhong=".$data[4]."'><button >Thêm</button></a>&nbsp;&nbsp;<a href='TrangChu.php?page=chinhSua&maPhong=".$maPhong."&maBenhNhan=".$data[3]."&maKhoa=".$maKhoa."&loaiPhong=".$data[4]."'><button disabled>Chỉnh sửa</button></a>&nbsp;&nbsp;<a href='#'><button disabled>Xóa</button></a>&nbsp;&nbsp;<a href='#'><button disabled>Chuyển phòng</button></a></td></tr>"; 
				 }
			 }
 echo "</table>";
 echo $total - $tru;
 print_r($ar);
	}
?>
</div>
</body>
</html>