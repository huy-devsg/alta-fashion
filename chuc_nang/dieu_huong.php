<?php 
	if(isset($_GET['thamso']))
	{$tham_so=$_GET['thamso'];
		if($tham_so=='profile'||$tham_so=='bai_viet'||$tham_so=='xuat_bai_viet')
		{
			echo '<div style="margin-top:95px;">';
		}
		else
		{
			echo '<div style="margin-top:95px;">';
			echo '<div class="khung">';
		}
	}
	else{$tham_so="";
	}
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
		case "dang_nhap":
		case "dang_ky":
			include("quan_tri/chuc_nang/quan_tri_2/khung_dang_nhap.php");
		break;
		case "dang_xuat":
			session_destroy();
			thong_bao('Đăng xuất thành công');
			break;
		case "profile":
			if(!isset($_SESSION['xac_dinh_dang_nhap']))
			{header('location:index.php'); }
			else
			{include("chuc_nang/profile/profile.php");}
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
<!--------------------------------------------------->
