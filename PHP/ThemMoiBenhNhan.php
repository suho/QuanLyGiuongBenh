<div class="content_bottom">
<?php
	$maPhong=$_GET['maPhong'];
	$maKhoa=$_GET['maKhoa'];
	$maGiuong=$_GET['maGiuong'];
	$loaiPhong=$_GET['loaiPhong'];
?>
<br />
<br />
<br />
<br />
<form action="XuLyThemBenhNhan.php?maKhoa=<?php echo $maKhoa;?>&maPhong=<?php echo $maPhong;?>&loaiPhong=<?php echo $loaiPhong;?>" method="post">
<table align="center">
    <tr>
    	<td>Tên bệnh nhân :</td>
        <td> <input  type="text" name="tenBenhNhan" /></td>
    </tr>
    <tr>
    	<td>Số CMND :</td>
        <td> <input  type="text" name="CMND" /></td>
    </tr>
     <tr>
    	<td>Số điện thoại :</td>
        <td> <input  type="text" name="soDienThoai" /></td>
    </tr>
    <tr>
    	<td>Địa chỉ :</td>
        <td>
        	<textarea name="diaChi" cols="30" rows="3">
            </textarea> 
        </td>
    </tr>
    <tr>
    	<td>Trạng thái bệnh :</td>
        <td>
        	<select name="trangThaiBenh">
            	<option value="0">Bệnh nhẹ</option>
                <option value="1">Bệnh nặng</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Ngày nhập viện :</td>
        <td> <input  type="text" name="ngayNhapVien" /></td>
    </tr>
    <tr>
    	<td>Mã giường :</td>
        <td> <input  type="text" name="maGiuong" value="<?php echo $maGiuong; ?>"/></td>
    </tr>
    <tr align="center">
    	<td colspan="2">
        	<input type="submit" name="add" value="Add	"/>&nbsp;&nbsp;&nbsp;
            <input type="button" name="cancel" value="Cancel" onclick="goback()"/>
        </td>
        
    </tr>
</table>
</form>
</div>