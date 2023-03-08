<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
	<style type="text/css">

		.nav_admin {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 20px;
		}

		.menu_admin {
			font-size: 20px;
			text-decoration: none;
			color: blue;
			margin-right: 30px;
		}

		.menu_admin:hover {
			color: red;
		}


		table {
			width: 100%;
			max-width: 990px;
			margin: 0 auto;
		}

		th, td {
			padding: 10px;
			text-align: left;
			vertical-align: top;
		}

		th {
			background-color: #eee;
		}
	</style>
		<nav class="nav_admin">
			<a class="menu_admin"  href="index.php">Trang chủ</a>
			<a class="menu_admin" href="?thamso=profile&dieu_huong=menu_doc">Danh mục</a>
			<a class="menu_admin" href="?thamso=profile&dieu_huong=menu_ngang">Menu</a>
			<a class="menu_admin" href="?thamso=profile&dieu_huong=san_pham">Sản phẩm</a>
			<a class="menu_admin" href="?thamso=profile&dieu_huong=hoa_don">Hóa đơn</a>
			<a class="menu_admin" href="?thamso=profile&dieu_huong=bai_viet">Bài viết</a>
			<a class="menu_admin" href="?thamso=thoat">Thoát</a>
		</nav>
