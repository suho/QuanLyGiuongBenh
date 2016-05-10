<?php 
include_once("header.php");
if(isset($_GET['error'])){
	//echo "<script>alert("");
	echo "<script>alert('".$_GET['error']."');</script>";
   
  
}

?>

 <!--content begin-->
<div class="content">
	<?php
		if(isset($_GET['page'])){
			$page=$_GET['page'];
			switch($page){
				case 'K001':
					
						include_once('Phong.php');	

					 if(isset($_GET['maPhong'])){
						include_once('Giuong.php');
						
					}
					break;
				
				case 'themBenhNhan':
					include_once('ThemMoiBenhNhan.php');
					break;
				case 'chinhSua':
					include_once('ChinhSuaBenhNhan.php');
					break;
				case 'themGiuong':
					include_once('ThemGiuongMoi.php');
					break;
				case 'timKiem':
					include_once('timKiem.php');
					break;
					
				
			}
		}
	?>   
</div>
<!-- content end-->

<?php 
include_once("footer.php");
?>