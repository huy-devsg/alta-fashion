<?php 
	$tv="select id,ten,loai_menu from menu_ngang order by id";
	$tv_1=mysqli_query($conn,$tv);
	echo '<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li style="margin-right:5em"><a href="index.php"><img src="hinh_anh/logo/logo.png" width=80%"></a></li>';
	  while($tv_2=mysqli_fetch_array($tv_1))
	  {
		  if($tv_2['loai_menu']==""){$link_menu="?thamso=xuat_mot_tin&id=".$tv_2['id'];}
		  if($tv_2['loai_menu']=="san_pham"){$link_menu="?thamso=xuat_san_pham_2";}
		  echo "<li class='nav-item'><a href='$link_menu'>";
			  echo $tv_2['ten'];
		  echo "</a></li>";
	  }
?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class='nav-item'><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class='nav-item'><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<style>
	.nav-item{
		margin-top:8px;
	}
	.navbar-nav {
  display: flex;
  flex-direction: row;
  justify-content: center;
}

.navbar-inverse .navbar-nav>li>a:first-child:hover {
}
.narbar .navbar-inverse .navbar-nav>li>a:focus,
.navbar-inverse .navbar-nav>li>a:not(:first-child):hover {
	background-color: #000;
  color: #fff;
  border-radius: 20px;
}

/*Thiết lập màu chữ cho các liên kết active và hover*/
</style>