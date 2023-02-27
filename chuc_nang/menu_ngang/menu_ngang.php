<?php 
    $tv="select id,ten,loai_menu from menu_ngang order by id";
    $tv_1=mysqli_query($conn,$tv);
    echo '<nav class="navbar navbar-inverse navbar-fixed-top">
				<ul class="nav navbar-nav navbar-left">
					<li style="margin-right:5em"><a href="index.php" class="active"><img src="hinh_anh/logo/logo.png" class="logo"></a></li>';
					while($tv_2=mysqli_fetch_array($tv_1))
					{
						if($tv_2['loai_menu']==""){$link_menu="?thamso=xuat_mot_tin&id=".$tv_2['id'];}
						if($tv_2['loai_menu']=="san_pham"){$link_menu="?thamso=xuat_san_pham_2";}
						echo "<li class='nav-item'><a href='$link_menu'>";
							echo $tv_2['ten'];
						echo "</a></li>";
					}
		echo '</ul>';
		echo'<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
    </nav>';
?>
<style>
	.navbar {
    background-color: white !important;
    color: black !important;
    border: none;
	box-shadow: 0 0 4px 0 gray;
}

.navbar a {
    color: black !important;
}

.navbar a:hover {
    background-color: #000 !important;
	color: #fff !important;
	border-radius:8px;
}
.navbar a.active:hover {
    background-color: #fff !important;
}


.navbar-nav.navbar-left {
	display: flex; 
	align-items: center;
 	justify-content: center;
 	margin: 0; 
  	padding: 0;
}
.navbar-nav.navbar-right {
 	margin-top: 12px; 
	margin-right:5px;
}


</style>
