

<?php 
	$id=$_GET['id'];
	$tv="select * from bai_viet where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
    $link_menu = "?thamso=xuat_bai_viet&id=".$tv_2['id'];
    $link_anh="hinh_anh/bai_viet/".$tv_2['anh'];
	$tac_gia=$tv_2['tac_gia'];
	echo '<div class="post">';
	echo '<img src="'.$link_anh.'" style="width: 100%;height: 50%;object-fit: cover;">';
	echo '<div class="post_detail">
			<h2 class="title">'.$tv_2['tieu_de'].'</h2>
			<p class="author">'.$tac_gia.'</p>
			<p class="date">'; include('time_post.php');
  			echo '</p>
		</div>';
	echo '</div>';
echo $tv_2['noi_dung'];

?>

<style>
	.post {
width: 100%;
  background-color: #f5f5f5;
	}
	.post_detail {
		
		position: absolute;
		top:0;
		width: 100%;
		height: 65%;
  background-color: rgba(0, 0, 0, 0.7);
  color: #fff;
}

.post img {
  max-width: 100%;
  opacity: 90%;
}

.post .title {
  font-size: 24px;
  margin-TOP: 25%;
}

.post .author,
.post .date {
  font-size: 16px;
  margin: 5px 0;
}

.post .author::before {
  content: "Tác giả: ";
}

.post .date::before {
  content: "Ngày đăng: ";
}

</style>