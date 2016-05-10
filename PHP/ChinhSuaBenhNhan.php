<div class="content_bottom">
<?php
	$maKhoa=$_GET['maKhoa'];
	$maPhong=$_GET['maPhong'];
	$maBenhNhan=$_GET['maBenhNhan'];
	$loaiPhong=$_GET['loaiPhong'];
	
	
	$connect = mysql_connect("localhost","root","") or die("Disconnect database");
    mysql_select_db("quanlygiuongbenh",$connect);
	mysql_set_charset('utf8',$connect);
	$sql="select * from benhnhan where MaBenhNhan=N'".$maBenhNhan."'";
	$query=mysql_query($sql,$connect);
	while($data = mysql_fetch_array($query)){
?>
<br>
<br>
<br>
<br>
<br>
<form action="CapNhatBenhNhan.php?maKhoa=<?php echo $maKhoa;?>&maPhong=<?php echo $maPhong;?>&loaiPhong=<?php echo $loaiPhong;?>" method="post">
<table align="center">
	<tr>
    	<td>Mã bệnh nhân :</td>
        <td> <input  type="text" name="maBenhNhan" value="<?php echo $data[0];?>"/></td>
    </tr>
    <tr>
    	<td>Tên bệnh nhân :</td>
        <td> <input  type="text" name="tenBenhNhan" value="<?php echo $data[1];?>"/></td>
    </tr>
    <tr>
    	<td>Số CMND :</td>
        <td> <input  type="text" name="CMND" value="<?php echo $data[2];?>"/></td>
    </tr>
     <tr>
    	<td>Số điện thoại :</td>
        <td> <input  type="text" name="soDienThoai" value="<?php echo $data[3];?>"/></td>
    </tr>
    <tr>
    	<td>Địa chỉ :</td>
        <td>
        	<textarea name="diaChi" cols="30" rows="3"><?php echo $data[4];?>
            </textarea> 
        </td>
    </tr>
    <tr>
    	<td>Trạng thái bệnh :</td>
        <td>
        	<select name="trangThaiBenh">
            	<option  value="0" <?php if($data[4]==0) echo "selected='selected'";?>>Bệnh nhẹ</option>
                <option value="1" <?php if($data[4]==1) echo "selected='selected'";?>>Bệnh nặng</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Ngày nhập viện :</td>
        <td> <input  type="text" name="ngayNhapVien" value="<?php echo $data[6];?>"/></td>
    </tr>
    <tr>
    	<td>Mã giường :</td>
        <td> <input  type="text" name="maGiuong" value="<?php echo $data[8];?>"/></td>
    </tr>
    <tr align="center">
    	<td colspan="2">
        	<input type="submit" name="save" value="Save"/>&nbsp;&nbsp;&nbsp;
            <input type="button" name="cancel" value="Cancel" onclick="goback()"/>
        </td>
        
    </tr>
</table>
</form>
<?php

	}
?>
</div>