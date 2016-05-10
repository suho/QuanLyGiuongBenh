// JavaScript Document
function goback() {
    history.back(-1);
}

function timKiem(){
	var tim=document.getElementById('timKiem').value;
	if(tim==""){
		window.location="TrangChu.php?error=Vui lòng nhập tên hoặc số CMND cần tìm kiếm";
	}
	else{
	window.location="TrangChu.php?page=timKiem&id="+tim;
	}
}

function loaiPhong(){
	var loaiPhong=document.getElementById('phong').value;
	var maKhoa=document.getElementById('maKhoa').value;
	window.location="TrangChu.php?page="+maKhoa+"&loaiPhong="+loaiPhong;
}