

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
	include('time_post.php');
  			echo '</p>
		</div>';
	echo '</div>';
?>
	<style>
		.post-image {
			background-image: url('hinh_anh/bai_viet/bai1.jpg');
			background-size: cover;
			height: 300px;
			width: 100%;
			position: relative;
			text-align: center;
			color: #fff;
			font-size: 36px;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
		}
		.overlay {
				background-color: rgba(0, 0, 0, 0.5);
				position: absolute;
				bottom: 0;
				left: 0;
				width: 100%;
				height: 100%;
				z-index: 1;
		}

		.post-image h1 {
			margin: 0;
			padding: 0;
			font-weight: bold;
			text-shadow: 2px 2px #000;
		}
		.post-info {
			position: absolute;
			bottom: 20px;
			left: 50%;
			transform: translateX(-50%);
			padding: 10px 20px;
			border-radius: 5px;
		}
		.post-info span {
			display: block;
			color: #fff;
			font-size: 14px;
			margin-bottom: 5px;
		}
		.content
		{
			width: 90%;
			margin: 0 auto;
			float:left;
			padding: 50px 0;
			border:solid 1px blue;


		}
		.content_left {
			width: 70%;
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
			width: 28%;
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
	<div class="post-image">
	<div class="overlay">

		<div class="post-info">
		<h1><?php echo $tieu_de ?> </h1>
			<span>Người đăng: <?php echo $tac_gia ?></span>
			<span>Thời gian: <?php include('time_post.php'); ?></span>
		</div>
	</div>
	</div>
	<div class="content">
	<div class="content_left">
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