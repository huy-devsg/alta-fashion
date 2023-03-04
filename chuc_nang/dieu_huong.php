<?php 
	if(isset($_GET['thamso']))
	{$tham_so=$_GET['thamso'];
		echo '<div style="margin:95px 0 0 0;">';
		echo '<div class="khung">';
	}
	else{$tham_so="";}
	switch($tham_so)
	{
		case "xuat_san_pham":
			include("chuc_nang/san_pham/xuat.php");
		break;
		case "chi_tiet_san_pham":
			include("chuc_nang/san_pham/chi_tiet_san_pham.php");
		break;
		case "xuat_san_pham_2":
			include("chuc_nang/san_pham/xuat_toan_bo_san_pham.php");
		break;
		case "bai_viet":
			include("chuc_nang/bai_viet/tat_ca_bai_viet.php");
		break;
		case "xuat_bai_viet":
			include("chuc_nang/bai_viet/xuat_bai_viet.php");
		break;
		case "xuat_mot_tin":
			include("chuc_nang/xuat_mot_tin.php");
		break;
		case "tim_kiem":
			include("chuc_nang/tim_kiem/xuat_san_pham_tim_kiem.php");
		break;
		case "gio_hang":
			include("chuc_nang/gio_hang/gio_hang.php");
		break;
		default:
			include("chuc_nang/san_pham/san_pham_trang_chu.php");	
			include("chuc_nang/danh_muc/xuat_danh_muc_san_pham.php");
			include("chuc_nang/san_pham/san_pham_noi_bat.php");	
			include("chuc_nang/bai_viet/bai_viet.php");
	}
	echo '</div>';
?>
</div>