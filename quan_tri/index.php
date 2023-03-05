<?php
	$bien_bao_mat="co";
	include("chuc_nang/quan_tri_2/xac_dinh_dang_nhap.php");
	if(isset($xac_dinh_dang_nhap))
	{
		if($xac_dinh_dang_nhap=="co")
		{
			include("chuc_nang/quan_tri_2/xu_ly_post_get.php");
			
		}   
	}
?>
		<?php 
			if(!isset($xac_dinh_dang_nhap))
			{
				include("chuc_nang/quan_tri_2/khung_dang_nhap.php");
			}
			else 
			{
				if($xac_dinh_dang_nhap=="co")
				{
					echo "<center>";
						include("chuc_nang/quan_tri_2/trang_chu.php");
					echo "</center>";
				}
			}
		?>