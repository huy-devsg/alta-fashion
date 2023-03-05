<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
	<style type="text/css">

		nav {
			display: flex;
			justify-content: space-between;
			align-items: center;
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
			border-collapse: collapse;
			width: 100%;
			max-width: 990px;
			margin: 0 auto;
		}

		th, td {
			padding: 10px;
			border: 1px solid #ccc;
			text-align: left;
			vertical-align: top;
		}

		th {
			background-color: #eee;
		}
	</style>
		<nav>
			<a class="menu_admin"  href="index.php">Trang chủ</a>
			<a class="menu_admin" href="?thamso=menu_doc">Danh mục</a>
			<a class="menu_admin" href="?thamso=menu_ngang">Menu</a>
			<a class="menu_admin" href="?thamso=san_pham">Sản phẩm</a>
			<a class="menu_admin" href="?thamso=hoa_don">Hóa đơn</a>
			<a class="menu_admin" href="?thamso=bai_viet">Bài viết</a>
			<a class="menu_admin" href="index.php">Thoát</a>
		</nav>
			<?php include("quan_tri/chuc_nang/quan_tri_2/dieu_huong.php"); ?>
