<?php 
	if(isset($_GET['dieu_huong']))
	{
        $dieu_huong=$_GET['dieu_huong'];
        switch($dieu_huong)
	    {
            case "gio_hang":
            echo '<h2 class="title_admin">GIỎ HÀNG</h2>';
            include("chuc_nang/gio_hang/gio_hang.php");
            break;
            case "don_hang":
                echo '<h2 class="title_admin">ĐƠN HÀNG ĐÃ MUA</h2>';
                include('chuc_nang/profile/hoa_don/hoa_don.php');
            break;
            case "quan_tri":
                echo '<h2 class="title_admin">QUẢN TRỊ WEBSITE</h2>';
                include("quan_tri/chuc_nang/quan_tri_2/index.php");
            break;
            case "thong_tin":
                echo '<h2 class="title_admin">THÔNG TIN CÁ NHÂN</h2>';
                include('chuc_nang/profile/tai_khoan/sua_thong_tin.php');
            break;
            case "them_menu_ngang":
                echo '<h2 class="title_admin">THÊM MENU</h2>';
                include("quan_tri/chuc_nang/menu_ngang/them_menu_ngang.php");
            break;
            case "quan_ly_menu_ngang":
                echo '<h2 class="title_admin">DANH SÁCH MENU</h2>';
                include("quan_tri/chuc_nang/menu_ngang/quan_ly_menu_ngang.php");
            break;
            case "sua_menu_ngang":
                echo '<h2 class="title_admin">SỬA MENU</h2>';
                include("quan_tri/chuc_nang/menu_ngang/sua_menu_ngang.php");
            break;
            case "them_menu_doc":
                echo '<h2 class="title_admin">THÊM DANH MỤC SẢN PHẨM</h2>';
                include("quan_tri/chuc_nang/menu_doc/them_menu_doc.php");
            break;
            case "quan_ly_menu_doc":
                echo '<h2 class="title_admin">DANH SÁCH DANH MỤC</h2>';
                include("quan_tri/chuc_nang/menu_doc/quan_ly_menu_doc.php");
            break;
            case "sua_menu_doc":
                echo '<h2 class="title_admin">SỬA DANH MỤC SẢN PHẨM</h2>';
                include("quan_tri/chuc_nang/menu_doc/sua_menu_doc.php");
            break;
            case "them_san_pham":
                echo '<h2 class="title_admin">THÊM SẢN PHẨM</h2>';
                include("quan_tri/chuc_nang/san_pham/them_san_pham.php");
            break;
            case "quan_ly_san_pham":
                echo '<h2 class="title_admin">DANH SÁCH SẢN PHẨM</h2>';
                include("quan_tri/chuc_nang/san_pham/quan_ly_san_pham.php");
            break;
            case "sua_san_pham":
                echo '<h2 class="title_admin">SỬA SẢN PHẨM</h2>';
                include("quan_tri/chuc_nang/san_pham/sua_san_pham.php");
            break;
            case "hoa_don":
                echo '<h2 class="title_admin">DANH SÁCH HÓA ĐƠN</h2>';
                include("quan_tri/chuc_nang/hoa_don/quan_ly_hoa_don.php");
            break;
            case "xem_hoa_don":
                echo '<h2 class="title_admin">HÓA ĐƠN</h2>';
                include("chuc_nang/profile/hoa_don/xem_hoa_don.php");
            break;
            case "san_pham_trang_chu":
                echo '<h2 class="title_admin">HIỂN THỊ TRANG CHỦ</h2>';
                include("quan_tri/chuc_nang/san_pham_trang_chu/san_pham_trang_chu.php");
            break;
            case "san_pham_noi_bat":
                echo '<h2 class="title_admin">HIỂN THỊ BÁN CHẠY</h2>';
                include("quan_tri/chuc_nang/san_pham_noi_bat/san_pham_noi_bat.php");
            break;
            case "them_slideshow":
                echo '<h2 class="title_admin">THÊM SLIDESHOW</h2>';
                include("quan_tri/chuc_nang/slideshow/them_slideshow.php");
            break;
            case "quan_ly_slideshow":
                echo '<h2 class="title_admin">DANH SÁCH SLIDESHOW</h2>';
                include("quan_tri/chuc_nang/slideshow/quan_ly_slideshow.php");
            break;
            case "sua_slideshow":
                echo '<h2 class="title_admin">SỬA SLIDESHOW</h2>';
                include("quan_tri/chuc_nang/slideshow/sua_slideshow.php");
            break;
            case "them_bai_viet":
                echo '<h2 class="title_admin">THÊM BÀI VIẾT MỚI</h2>';
                include("quan_tri/chuc_nang/bai_viet/them_bai_viet.php");
            break;
            case "quan_ly_bai_viet":
                echo '<h2 class="title_admin">DANH SÁCH BÀI VIẾT</h2>';
                include("quan_tri/chuc_nang/bai_viet/quan_ly_bai_viet.php");
            break;
            case "sua_bai_viet":
                echo '<h2 class="title_admin">SỬA BÀI VIẾT</h2>';
                include("quan_tri/chuc_nang/bai_viet/sua_bai_viet.php");
            break;
            case "sua_banner":
                echo '<h2 class="title_admin">SỬA BANNER</h2>';
                include("quan_tri/chuc_nang/banner/sua_banner.php");
            break;
            case "sua_footer":
                echo '<h2 class="title_admin">SỬA FOOTER</h2>';
                include("quan_tri/chuc_nang/footer/sua_footer.php");
            break;
            case "them_quang_cao_trai":
                echo '<h2 class="title_admin">THÊM QUẢNG CÁO LEFT</h2>';
                include("quan_tri/chuc_nang/quang_cao_trai/them_quang_cao_trai.php");
            break;
            case "quan_ly_quang_cao_trai":
                echo '<h2 class="title_admin">QUẢNG CÁO LEFT</h2>';
                include("quan_tri/chuc_nang/quang_cao_trai/quan_ly_quang_cao_trai.php");
            break;
            case "sua_quang_cao_trai":
                echo '<h2 class="title_admin">SỬA QUẢNG CÁO LEFT</h2>';
                include("quan_tri/chuc_nang/quang_cao_trai/sua_quang_cao_trai.php");
            break;
            case "them_quang_cao_phai":
                echo '<h2 class="title_admin">THÊM QUẢNG CÁO RIGHT</h2>';
                include("quan_tri/chuc_nang/quang_cao_phai/them_quang_cao_phai.php");
            break;
            case "quan_ly_quang_cao_phai":
                echo '<h2 class="title_admin">QUẢNG CÁO RIGHT</h2>';
                include("quan_tri/chuc_nang/quang_cao_phai/quan_ly_quang_cao_phai.php");
            break;
            case "sua_quang_cao_phai":
                echo '<h2 class="title_admin">SỬA QUẢNG CÁO RIGHT</h2>';
                include("quan_tri/chuc_nang/quang_cao_phai/sua_quang_cao_phai.php");
            break;
            case "sua_thong_tin_quan_tri":
                echo '<h2 class="title_admin">QUYỀN HẠN WEBSITE</h2>';
                include("quan_tri/chuc_nang/quan_tri_2/sua_thong_tin_quan_tri.php");
            break;
            default: 
            echo '<h2 class="title_admin">THÔNG TIN CÁ NHÂN</h2>';
            include('chuc_nang/profile/tai_khoan/sua_thong_tin.php');
        }
    }
    else
    {
        echo '<h2 class="title_admin">THÔNG TIN CÁ NHÂN</h2>';
        include('chuc_nang/profile/tai_khoan/sua_thong_tin.php');
    }
/*  <----------------------------------------------->  */
    if(isset($_POST['bieu_mau_them_menu_ngang']))
        {
            include("quan_tri/chuc_nang/menu_ngang/them_menu_ngang_vao_csdl.php");
            thong_bao("Thêm menu thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_menu_ngang']))
        {
            include("quan_tri/chuc_nang/menu_ngang/sua_menu_ngang_o_trong_csdl.php");
            thong_bao("Sửa menu thành công");
            trang_truoc();
        }
        if(isset($_GET['xoa_menu_ngang']))
        {
            include("quan_tri/chuc_nang/menu_ngang/xoa_menu_ngang.php");
            thong_bao("Xóa menu thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_them_menu_doc']))
        {
            include("quan_tri/chuc_nang/menu_doc/them_menu_doc_vao_csdl.php");
            thong_bao("Thêm danh mục thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_menu_doc']))
        {
            include("quan_tri/chuc_nang/menu_doc/sua_menu_doc_o_trong_csdl.php");
            thong_bao("Sửa danh mục thành công");
            trang_truoc();
        }
        if(isset($_GET['xoa_menu_doc']))
        {
            include("quan_tri/chuc_nang/menu_doc/xoa_menu_doc.php");
            thong_bao("Xóa danh mục thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_them_san_pham']))
        {
            include("quan_tri/chuc_nang/san_pham/them_san_pham_vao_csdl.php");
            thong_bao("Thêm sản phẩm thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_san_pham']))
        {
            include("quan_tri/chuc_nang/san_pham/sua_san_pham_o_trong_csdl.php");
            thong_bao("Sửa sản phẩm thành công");
            trang_truoc();
        }
        if(isset($_GET['xoa_san_pham']))
        {
            include("quan_tri/chuc_nang/san_pham/xoa_san_pham.php");
            thong_bao("Xóa sản phẩm thành công");
            trang_truoc();
        }
        if(isset($_GET['xoa_hoa_don']))
        {
            include("quan_tri/chuc_nang/hoa_don/xoa_hoa_don.php");
            thong_bao("Xóa đơn thành công");
            trang_truoc();
        }
        if(isset($_GET['xoa_hoa_don_o_trang_chi_tiet']))
        {
            include("quan_tri/chuc_nang/hoa_don/xoa_hoa_don_o_trang_chi_tiet.php");
            thong_bao("Xóa hóa đơn thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_san_pham_trang_chu']))
        {
            include("quan_tri/chuc_nang/san_pham_trang_chu/sua_san_pham_trang_chu.php");
            thong_bao("Hiển thị trang chủ thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_san_pham_noi_bat']))
        {
            include("quan_tri/chuc_nang/san_pham_noi_bat/sua_san_pham_noi_bat.php");
            thong_bao("Hiển thị sản phẩm bán chạy thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_them_slideshow']))
        {
            include("quan_tri/chuc_nang/slideshow/them_slideshow_vao_csdl.php");
            thong_bao("Thêm slideshow thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_slideshow']))
        {
            include("quan_tri/chuc_nang/slideshow/sua_slideshow_o_trong_csdl.php");
            thong_bao("Sửa slideshow thành công");
            trang_truoc();
        }
        if(isset($_GET['xoa_slideshow']))
        {
            include("quan_tri/chuc_nang/slideshow/xoa_slideshow.php");
            thong_bao("Xóa slideshow thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_them_bai_viet']))
        {
            include("quan_tri/chuc_nang/bai_viet/them_bai_viet_vao_csdl.php");
            thong_bao("Thêm bài viết mới thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_bai_viet']))
        {
            include("quan_tri/chuc_nang/bai_viet/sua_bai_viet_o_trong_csdl.php");
            thong_bao("Sửa bài viết thành công");
            trang_truoc();
        }
        if(isset($_GET['xoa_bai_viet']))
        {
            include("quan_tri/chuc_nang/bai_viet/xoa_bai_viet.php");
            thong_bao("Xóa bài viết thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_banner']))
        {
            include("quan_tri/chuc_nang/banner/sua_banner_o_trong_csdl.php");
            thong_bao("Sửa banner thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_footer']))
        {
            include("quan_tri/chuc_nang/footer/sua_footer_o_trong_csdl.php");
            thong_bao("Sửa footer thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_them_quang_cao_trai']))
        {
            include("quan_tri/chuc_nang/quang_cao_trai/them_quang_cao_trai_vao_csdl.php");
            thong_bao("Thêm nội dung quảng cáo trái thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_quang_cao_trai']))
        {
            include("quan_tri/chuc_nang/quang_cao_trai/sua_quang_cao_trai_o_trong_csdl.php");
            thong_bao("Sửa nội dung quảng cáo trái thành công");
            trang_truoc();
        }
        if(isset($_GET['xoa_quang_cao_trai']))
        {
            include("quan_tri/chuc_nang/quang_cao_trai/xoa_quang_cao_trai.php");
            thong_bao("Xóa nội dung quảng cáo trái thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_them_quang_cao_phai']))
        {
            include("quan_tri/chuc_nang/quang_cao_phai/them_quang_cao_phai_vao_csdl.php");
            thong_bao("Thêm nội dung quảng cáo phải thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_quang_cao_phai']))
        {
            include("quan_tri/chuc_nang/quang_cao_phai/sua_quang_cao_phai_o_trong_csdl.php");
            thong_bao("Sửa nội dung quảng cáo phải thành công");
            trang_truoc();
        }
        if(isset($_GET['xoa_quang_cao_phai']))
        {
            include("quan_tri/chuc_nang/quang_cao_phai/xoa_quang_cao_phai.php");
            thong_bao("Xóa nội dung quảng cáo phải thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_thong_tin_quan_tri']))
        {
            include("quan_tri/chuc_nang/quan_tri_2/sua_thong_tin_quan_tri_o_trong_csdl.php");
            thong_bao("Đổi mật khẩu thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_thong_tin']))
        {
            include("chuc_nang/profile/tai_khoan/sua_thong_tin_o_trong_csdl.php");
            thong_bao("Cập nhật thông tin thành công");
            trang_truoc();
        }
?>