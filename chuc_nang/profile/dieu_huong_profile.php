<?php 
	if(isset($_GET['dieu_huong']))
	{
        $dieu_huong=$_GET['dieu_huong'];
        switch($dieu_huong)
	    {
            case "gio_hang":
                include("chuc_nang/gio_hang/gio_hang.php");
            break;
            case "don_hang":
                echo '<h2>ĐƠN HÀNG</h2><br><br>Chưa có thông tin đơn hàng';
            break;
            case "cap_nhat":
                echo '<h2>CẬP NHẬT THÔNG TIN</h2><br><br>Chưa có thông tin';
            break;
            case "quan_tri":
                echo '<h2>QUẢN TRỊ WEBSITE</h2><br><br>';
                include("quan_tri/index.php");
            break;
            case "thong_tin":
                echo '<h2>THÔNG TIN</h2><br><br>Chưa có thông tin';
            break;
            case "menu_ngang":
                include("quan_tri/chuc_nang/menu_ngang/lien_ket_menu_ngang.php");
            break;
            case "them_menu_ngang":
                include("quan_tri/chuc_nang/menu_ngang/them_menu_ngang.php");
            break;
            case "quan_ly_menu_ngang":
                include("quan_tri/chuc_nang/menu_ngang/quan_ly_menu_ngang.php");
            break;
            case "sua_menu_ngang":
                include("quan_tri/chuc_nang/menu_ngang/sua_menu_ngang.php");
            break;
            case "menu_doc":
                include("quan_tri/chuc_nang/menu_doc/lien_ket_menu_doc.php");
            break;
            case "them_menu_doc":
                include("quan_tri/chuc_nang/menu_doc/them_menu_doc.php");
            break;
            case "quan_ly_menu_doc":
                include("quan_tri/chuc_nang/menu_doc/quan_ly_menu_doc.php");
            break;
            case "sua_menu_doc":
                include("quan_tri/chuc_nang/menu_doc/sua_menu_doc.php");
            break;
            case "san_pham":
                include("quan_tri/chuc_nang/san_pham/lien_ket_san_pham.php");
            break;
            case "them_san_pham":
                include("quan_tri/chuc_nang/san_pham/them_san_pham.php");
            break;
            case "quan_ly_san_pham":
                include("quan_tri/chuc_nang/san_pham/quan_ly_san_pham.php");
            break;
            case "sua_san_pham":
                include("quan_tri/chuc_nang/san_pham/sua_san_pham.php");
            break;
            case "hoa_don":
                include("quan_tri/chuc_nang/hoa_don/quan_ly_hoa_don.php");
            break;
            case "xem_hoa_don":
                include("quan_tri/chuc_nang/hoa_don/xem_hoa_don.php");
            break;
            case "san_pham_trang_chu":
                include("quan_tri/chuc_nang/san_pham_trang_chu/san_pham_trang_chu.php");
            break;
            case "san_pham_noi_bat":
                include("quan_tri/chuc_nang/san_pham_noi_bat/san_pham_noi_bat.php");
            break;
            case "slideshow":
                include("quan_tri/chuc_nang/slideshow/lien_ket_slideshow.php");
            break;
            case "them_slideshow":
                include("quan_tri/chuc_nang/slideshow/them_slideshow.php");
            break;
            case "quan_ly_slideshow":
                include("quan_tri/chuc_nang/slideshow/quan_ly_slideshow.php");
            break;
            case "sua_slideshow":
                include("quan_tri/chuc_nang/slideshow/sua_slideshow.php");
            break;
            case "bai_viet":
                include("quan_tri/chuc_nang/bai_viet/lien_ket_bai_viet.php");
            break;
            case "them_bai_viet":
                include("quan_tri/chuc_nang/bai_viet/them_bai_viet.php");
            break;
            case "quan_ly_bai_viet":
                include("quan_tri/chuc_nang/bai_viet/quan_ly_bai_viet.php");
            break;
            case "sua_bai_viet":
                include("quan_tri/chuc_nang/bai_viet/sua_bai_viet.php");
            break;
            case "sua_banner":
                include("quan_tri/chuc_nang/banner/sua_banner.php");
            break;
            case "sua_footer":
                include("quan_tri/chuc_nang/footer/sua_footer.php");
            break;
            case "them_quang_cao_trai":
                include("quan_tri/chuc_nang/quang_cao_trai/them_quang_cao_trai.php");
            break;
            case "quan_ly_quang_cao_trai":
                include("quan_tri/chuc_nang/quang_cao_trai/quan_ly_quang_cao_trai.php");
            break;
            case "sua_quang_cao_trai":
                include("quan_tri/chuc_nang/quang_cao_trai/sua_quang_cao_trai.php");
            break;
            case "them_quang_cao_phai":
                include("quan_tri/chuc_nang/quang_cao_phai/them_quang_cao_phai.php");
            break;
            case "quan_ly_quang_cao_phai":
                include("quan_tri/chuc_nang/quang_cao_phai/quan_ly_quang_cao_phai.php");
            break;
            case "sua_quang_cao_phai":
                include("quan_tri/chuc_nang/quang_cao_phai/sua_quang_cao_phai.php");
            break;
            case "sua_thong_tin_quan_tri":
                include("quan_tri/chuc_nang/quan_tri_2/sua_thong_tin_quan_tri.php");
            break;
            default: 
            echo '<h2>THÔNG TIN</h2><br><br>';
        }
    }
    else
    {
        echo '<h2>THÔNG TIN</h2><br><br>';
    }
?>