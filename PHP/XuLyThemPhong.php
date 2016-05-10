<?php
	$maPhong=$_GET['maPhong'];
?>
<br>
<br>
<table align="center">
	<tr>
    	<td>Mã phòng :</td>
        <td><input name="maPhong" value="<?php echo $maPhong?>"</td>
    </tr>
    <tr>
    	<td>Mã Giường:</td>
        <td><input name="maGiuong"</td>
    </tr>
    <tr align="center">
    	<td colspan="2">
        	<input type="submit" name="add" value="Add">
            <input type="button" name="cancel" value="Cancel" onClick="goback()">
        </td>
    </tr>
</table>