<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	$bien_bao_mat="co";
	$conn = mysqli_connect("localhost", "root", "", "shop_fashion");
	if(isset($_SESSION['xac_dinh_dang_nhap']))
	{
		if($_SESSION['xac_dinh_dang_nhap']=="co")
		{
			include("quan_tri/chuc_nang/quan_tri_2/xu_ly_post_get.php");		
		}   
	}
?>
		<?php 
				if($_SESSION['xac_dinh_dang_nhap']=="co")
				{
					echo "<center>";
					include("chuc_nang/quan_tri_2/trang_chu.php");
					echo "</center>";
				}
				else
				{
					thong_bao('Bạn chưa đăng nhập, không có quyền truy cập trang này!');
					trang_truoc();
				}
		?>