<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$maBenhNhan=$_GET['maBenhNhan'];
	$connect = mysql_connect("localhost","root","") or die("Disconnect database");
    mysql_select_db("quanlygiuongbenh",$connect);
	mysql_set_charset('utf8',$connect);
	$sql="select * from benhnhan where MaBenhNhan=N'".$maBenhNhan."'";
	$query=mysql_query($sql,$connect);
	while($data = mysql_fetch_array($query)){
?>
<form>
<table>
	<tr>
    	<td>Mã bệnh nhân :</td>
        <td> <input  type="text" name="maBenhNhan" disabled="disabled" value="<?php echo $data[0];?>"/></td>
    </tr>
    <tr>
    	<td>Tên bệnh nhân :</td>
        <td> <input  type="text" name="tenBenhNhan" disabled="disabled" value="<?php echo $data[1];?>"/></td>
    </tr>
    <tr>
    	<td>Số CMND :</td>
        <td> <input  type="text" name="CMND" disabled="disabled" value="<?php echo $data[2];?>"/></td>
    </tr>
     <tr>
    	<td>Số điện thoại :</td>
        <td> <input  type="text" name="soDienThoai" disabled="disabled" value="<?php echo $data[3];?>"/></td>
    </tr>
    <tr>
    	<td>Địa chỉ :</td>
        <td>
        	<textarea name="diaChi" cols="30" rows="3" disabled="disabled"><?php echo $data[4];?>
            </textarea> 
        </td>
    </tr>
    <tr>
    	<td>Trạng thái bệnh :</td>
        <td>
        	<select name="trangThaiBenh" disabled="disabled">
            	<option></option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Ngày nhập viện :</td>
        <td> <input  type="text" name="ngayNhapVien" disabled="disabled" value="<?php echo $data[6];?>"/></td>
    </tr>
    
   
</table>
</form>
<?php

	}
?>
</body>
</html>