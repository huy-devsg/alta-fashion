</div>
</div>
<?php  
	$id=$_GET['id'];
	$tv="select * from bai_viet where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
    $link_menu = "?thamso=xuat_bai_viet&id=".$tv_2['id'];
    $link_anh="hinh_anh/bai_viet/".$tv_2['anh'];
	$tac_gia=$tv_2['tac_gia'];
	$tieu_de=$tv_2['tieu_de'];
	$noi_dung=$tv_2['noi_dung'];
?>
	<style>
		.wrapper
		{
			width: 100%;
			margin:0 auto;
		}
		.post-image {
			border:solid 3px yellow;
			background-image: url('hinh_anh/bai_viet/bai1.jpg');
			background-size: cover;
			height: 300px;
			width: 100%;
			display: flex;
			flex-direction: column;
			position: relative;
		}
		.overlay {
				background-color: rgba(0, 0, 0, 0.7);
				width: 100%;
				height: 100%;
				text-shadow:none;
				position: absolute;
				Border:solid 1px yellow;
				margin: 0 auto;


		}

		.post-info {
			border:solid 1px black;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);

		}
		.post-info h1
		{
			color:#fff;
			text-shadow:none;
			font-weight:bold;
		}
		.content
		{
			width: 80%;
			margin: 0 auto;
			float:left;
			padding: 50px 0;
			border:solid 1px blue;
			display:block;


		}
		.content_left {
			width: 60%;
			text-align:left;
			float:left;
			padding: 20px;
			border:solid 1px black;

		}
		.content_left h2 {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 20px;
		}
		.content_left p {
			font-size: 16px;
			line-height: 1.5;
			margin-bottom: 20px;
		}
		.sidebar {
			width: 30%;
			height: 40%;
			padding: 20px;
			text-align:left;
			float:right;
			border:solid 1px green;


		}
		.sidebar ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		.sidebar ul li {
			margin-bottom: 10px;
		}
		.sidebar ul li a {
			color: #333;
			text-decoration: none;
		}
	</style>
	<div class="wrapper">
		<div class="post-image">
			<div class="overlay">
				<div class="post-info">
				<h1><?php echo $tieu_de ?> </h1>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="content_left">
			<span>Người đăng: <?php echo $tac_gia ?></span>
					<span>Thời gian: <?php include('time_post.php'); ?></span>
				<h2>Nội dung bài viết</h2>
				<p><?php echo $noi_dung ?></p>
			</div>
			<div class="sidebar">
				<h2>Bài viết liên quan</h2>
				<ul>
				<li><a href="#">Bài viết 1</a></li>
				<li><a href="#">Bài viết 2</a></li>
				<li><a href="#">Bài viết 3</a></li>
				<li><a href="#">Bài viết 4</a></li>
				<li><a href="#">Bài viết 5</a></li>
				</ul>
			</div>
		</div>
	</div>