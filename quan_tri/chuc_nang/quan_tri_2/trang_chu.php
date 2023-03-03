<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Page Title</title>
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-color: #f8f8f8;
		}

		header {
			background-color: #fff;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 999;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		h1 {
			margin: 0;
			font-size: 36px;
			color: blue;
			text-decoration: none;
		}

		h1:hover {
			color: red;
		}

		nav {
			display: flex;
			align-items: center;
		}

		nav a {
			font-size: 22px;
			text-decoration: none;
			color: blue;
			margin-right: 30px;
		}

		nav a:hover {
			color: red;
		}

		main {
			margin-top: 100px;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
			min-height: calc(100vh - 250px);
		}

		footer {
			background-color: #fff;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		footer p {
			margin: 0;
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
</head>
<body>
	<header>
		<h1>Hi, <?php echo $_SESSION['ky_danh']; ?></h1>
		<nav>
			<a href="index.php">Trang chủ</a>
			<a href="?thamso=menu_doc">Danh mục sản phẩm</a>
			<a href="?thamso=menu_ngang">Menu</a>
			<a href="?thamso=san_pham">Sản phẩm</a>
			<a href="?thamso=hoa_don">Hóa đơn</a>
			<a href="?thamso=thoat">Thoát</a>
		</nav>
	</header>
	<main>
		<?php include("chuc_nang/quan_tri_2/dieu_huong.php"); ?>
	</main>
	<footer>
		<p>Alta Fashion</p>
		<p>Huy Nguyen Thanh (Admin)</p>
	</footer>
</body>
</html>
