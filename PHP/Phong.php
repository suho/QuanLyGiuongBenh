<div class="content_top">
	
	<div class="content_top_left">
    	<?php 
			$loaiPhong=0;
			if(isset($_GET['loaiPhong'])){
				$loaiPhong=$_GET['loaiPhong'];
			}
		?>
    	<div style="padding-top:10px;margin-left:10px;margin-bottom:10px">
        
                Loai phong: <select id="phong" onchange="loaiPhong()">
                        <option   value="0" <?php if($loaiPhong==0) echo "selected='selected'";?>>Phong benh nhe</option>
                        <option value="1" <?php if($loaiPhong==1)  echo "selected='selected'";?>>Phong benh nang</option>
                    </select>
    	</div>

<?php
	if(isset($_GET['page'])){
		$maKhoa=$_GET['page'];
		$connect = mysql_connect("localhost","root","")  or die("Disconnect database");
         mysql_select_db("quanlygiuongbenh",$connect);
   	     mysql_set_charset('utf8',$connect ); 
		 
			  $sql = "SELECT * FROM phong where MaKhoa=N'".$maKhoa."' and LoaiPhong=".$loaiPhong;
		
             $query = mysql_query($sql, $connect);
			 //switch($maKhoa){
				// case 'K001':
				 	//echo "<h2>Khoa Nội</h2>";
				//	break;
					
			// }
			
			 while($data = mysql_fetch_array($query)){
				 echo "<div style='float:left;margin:10px'><a href='TrangChu.php?page=".$maKhoa."&maPhong=".$data[0]."&loaiPhong=".$loaiPhong."'><button style='width:80px;height:40px;'>".$data[0]."</button></a></div>";
			     
   			 }
			 ?>
			 <div class="CLEAR"></div>
			 <?php
	}
?>
	<!-- xu ly lay ma khoa-->
	 <input type="hidden" id="maKhoa" value="<?php echo $maKhoa?>" />


	</div>
    <div class="content_top_right">
  
    	<button style="margin-top:5px;margin-bottom:10px; margin-left:10px">Them Phong</button>
       
      
        <table border="1" >
        	<caption>Chu thich</caption>
        	<tr>
            	<td>1</td>
                <td>Phong trong</td>
            </tr>
            <tr>
            	<td>1</td>
                <td>Phong da day</td>
            </tr>
        </table>
    </div>
    
    <div class="CLEAR"></div>
</div>
