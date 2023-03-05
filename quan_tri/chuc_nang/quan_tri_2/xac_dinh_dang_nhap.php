<?php 
	if(!isset($bien_bao_mat)){exit();}
	function thong_bao_abc($c)
	{
		$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Thông báo</title></head>
			<body>
				<style type="text/css">
				a.trang_truoc_c8w{text-decoration:none;color:blue;font-size:36px;margin-left:50px}
				a.trang_truoc_c8w:hover{color:red;}
				</style>
				<br><br><br><br>
				<a href="<?php echo $lien_ket_trang_truoc; ?>" class="trang_truoc_c8w" >Bấm vào đây để trở về trang trước</a>
				<script type="text/javascript">
					alert("<?php echo $c; ?>");
				</script>
			</body>
			</html>		
		<?php 
		exit();
	}
	function trang_truoc_abc()
	{
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Đang chuyển về trang trước</title></head>
			<body>
				<script type="text/javascript">
					window.history.back();
				</script>	
			</body>
			</html>
		<?php 
	}
	function trang_truoc_html()
	{
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Đang chuyển về trang trước</title></head>
			<body>
				<script type="text/javascript">
					window.history.back();
				</script>	
			</body>
			</html>
		<?php 
	}
	
	if(isset($_POST['dang_nhap_quan_tri']))
	{
		$ky_danh=$_POST['ky_danh'];
		$ky_danh=str_replace("'","",$ky_danh);
		$ky_danh=str_replace('"',"",$ky_danh);
		$mat_khau=md5($_POST['mat_khau']);
		$mat_khau=md5($mat_khau);
		$tv="select count(*) from tai_khoan where ky_danh='$ky_danh' and mat_khau='$mat_khau' ";
		$tv_1=mysqli_query($conn,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2[0]==1)
		{
			$_SESSION['ky_danh']=$ky_danh;
			$_SESSION['mat_khau']=$mat_khau;
		}
		else 
		{
			thong_bao_abc("Thông tin nhập vào không đúng");
		}
		trang_truoc_abc();
	}

	if(isset($_POST['dang_ky']))
	{
		$ky_danh=$_POST['ky_danh'];
		$ky_danh=str_replace("'","",$ky_danh);
		$ky_danh=str_replace('"',"",$ky_danh);
		$ho_ten=$_POST['ho_ten'];
		$email=$_POST['email'];
		$mat_khau=md5($_POST['mat_khau']);
		$mat_khau=md5($mat_khau);
		$tv="select count(*) from tai_khoan where ky_danh='$ky_danh' or email='$email'";
		$tv_1=mysqli_query($conn,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2[0]>0)
		{
			thong_bao_abc("Tài khoản đã tồn tại");
		}
		else 
		{
			$tv="
			INSERT INTO tai_khoan (id ,ho_ten,email,ky_danh,mat_khau,quyen)
			VALUES (NULL,'$ho_ten','$email','$ky_danh','$mat_khau','')";
			mysqli_query($conn,$tv);	
			$_SESSION['ky_danh']=$ky_danh;
			$_SESSION['mat_khau']=$mat_khau;
			thong_bao_html("Đăng kí thành công");	
		}
		trang_truoc_abc();

	}
	if(isset($_SESSION['ky_danh']))
	{
		$ky_danh=$_SESSION['ky_danh'];
		$mat_khau=$_SESSION['mat_khau'];
		$tv="select count(*) from tai_khoan where ky_danh='$ky_danh' and mat_khau='$mat_khau' ";
		$tv_1=mysqli_query($conn,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2[0]==1)
		{	
			$xac_dinh_dang_nhap="co";
		}
	}
?>