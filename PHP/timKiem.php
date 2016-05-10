


<?php 
	$tim=$_GET['id'];
	
		$connect = mysql_connect("localhost","root","")  or die("Disconnect database");
         mysql_select_db("quanlygiuongbenh",$connect);
   	     mysql_set_charset('utf8',$connect ); 
         $sql = "select a.TenBenhNhan,a.CMND,b.MaGiuong,c.MaPhong,d.TenKhoa from benhnhan as a,giuong as b,phong as c,khoa as d where a.MaGiuong= b.MaGiuong and b.MaPhong = c.MaPhong and c.MaKhoa=d.MaKhoa and ( a.TenBenhNhan like '".$tim."%' or a.CMND='".$tim."')";
         $query = mysql_query($sql, $connect);
		  $count = mysql_num_rows($query);
		 if($count>0){
?>
		<table>
        	<tr>
            	<td>Họ Tên</td>
                <td>Số CMND</td>
                <td>Mã Giường</td>
                <td>Mã Phòng</td>
                <td>Tên Khoa</td>
            </tr>
       
<?php
			  while($data = mysql_fetch_array($query)){
				echo "<tr><td>".$data[0]."</td><td>".$data[1]."</td><td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td>
</tr>";
				  
			  }
?>
		</table>
<?php 
		 }
		 else echo "<h2>Không tồn tại, Vui lòng nhập đúng tên hoặc số CMND !!!</h2>";

?>