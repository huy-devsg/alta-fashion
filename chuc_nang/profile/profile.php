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
					<img src="hinh_anh/profile/1.jpg" alt="">
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
							<a href="?thamso=profile&dieu_huong=cap_nhat">
							<i class="glyphicon glyphicon-user"></i>
							Cập nhật thông tin </a>
						</li>
            <?php if($tv_2['quyen']!="")
                {
            ?>
            <li>
							<a href="?thamso=profile&dieu_huong=quan_tri">
							<i class="glyphicon glyphicon-ok"></i>
							Trang quản trị </a>
						</li>
            <?php } ?>
            <li>
							<a href="?thamso=profile&dieu_huong=doi_mat_khau">
							<i class="glyphicon glyphicon-wrench"></i>
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
    /***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
    border-radius: 20px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 53%;
  height: 20%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
    text-align: left;
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
    border-radius: 20px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  padding: 20px;
  background: #fff;
}
</style>