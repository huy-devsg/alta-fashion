<?php 
    $tv="select id,ten,loai_menu from menu_ngang order by id";
    $tv_1=mysqli_query($conn,$tv);
    echo '<nav class="navbar navbar-fixed-top">
				<ul class="nav navbar-nav navbar-left">
					<li style="margin-right:1em"><a href="index.php" class="active"><img src="hinh_anh/logo/logo.png" class="logo"></a></li>
					<li><a href="index.php">TRANG CHỦ</a></li>';
					while($tv_2=mysqli_fetch_array($tv_1))
					{
						if($tv_2['loai_menu']==""){$link_menu="?thamso=xuat_mot_tin&id=".$tv_2['id'];}
						if($tv_2['loai_menu']=="gio_hang"){$link_menu="?thamso=gio_hang";}
						if($tv_2['loai_menu']=="tin_tuc"){$link_menu="?thamso=bai_viet";}
						if($tv_2['loai_menu']=="san_pham"){$link_menu="?thamso=xuat_san_pham_2";}
						echo "<li class='nav-item'><a href='$link_menu'>";
							echo $tv_2['ten'];
						echo "</a></li>";
					}
		echo '</ul>';
		echo'<ul class="nav navbar-nav navbar-right">
		<li style="margin-top:9px;">';
		include('chuc_nang/tim_kiem/vung_tim_kiem.php');
		echo '</li>
					<li><a href="quan_tri/index.php"><span class="glyphicon glyphicon-user"></span> Trang admin</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			</ul>
    </nav>';
?>
