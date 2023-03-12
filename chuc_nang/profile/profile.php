<?php
    $id_user=$_SESSION['id_user'];
    $tv="select * from tai_khoan where id='$id_user'";
    $tv_1=mysqli_query($conn,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
?>
<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<a href="?thamso=profile&dieu_huong=them_avatar">
						<?php 
							if($tv_2['avatar']!='')
							{
								echo '<img src="hinh_anh/profile/'.$tv_2['avatar'].'" alt="">';
							}
							else
							{
								echo '<img src="hinh_anh/profile/no_avatar.png" alt="">';
							}
						?>
					</a>
					<div class="border"></div>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $tv_2['ho_ten'] ?>
					</div>
					<div class="profile-usertitle-job">
                    <?php
                      if($tv_2['quyen']=="")
                      {
                        echo 'CUSTOMER';
                      }
                      else
                      {
                        echo $tv_2['quyen'];
                      } ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" onclick="location.href='?thamso=profile&dieu_huong=gio_hang'" class="btn btn-success btn-sm">Giỏ Hàng</button>
					<button type="button" onclick="location.href='?thamso=profile&dieu_huong=don_hang'" class="btn btn-danger btn-sm">Đơn Hàng</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="?thamso=profile&dieu_huong=thong_tin">
							<i class="glyphicon glyphicon-home"></i>
							Thông tin cá nhân </a>
						</li>
						
						<li>
							<a href="?thamso=profile&dieu_huong=dia_chi">
							<i class="fas fa-map-marker-alt"></i>
							&nbsp;Địa chỉ mặc định </a>
						</li>
            <?php if($tv_2['quyen']!="")
                {
            ?>
            <li>
							<a href="?thamso=profile&dieu_huong=quan_tri">
							<i class="glyphicon glyphicon-cog"></i>
							Trang quản trị </a>
						</li>
            <?php } ?>
						<li>
							<a href="?thamso=profile&dieu_huong=doi_mat_khau">
							<i class="glyphicon glyphicon-user"></i>
							Đổi mật khẩu </a>
						</li>
						<li>
							<a href="?thamso=dang_xuat">
							<i class="glyphicon glyphicon-log-out"></i>
              Đăng xuất </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content"> 
				<?php include('chuc_nang/dieu_huong_profile.php'); ?>
            </div>
		</div>
	</div>
  <script>
    window.onload = function() {
  var sidebarHeight = document.querySelector(".profile-sidebar").offsetHeight;
  document.querySelector(".profile-content").style.minHeight = sidebarHeight + "px";
}

  </script>
<style>
body {
  background: #F1F3FA;
}
</style>