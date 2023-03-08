<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_SESSION['id_user'];
	$tv="select * from tai_khoan where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ho_ten=$_POST['ho_ten'];	
	$email=$_POST['email'];	
	$dia_chi=$_POST['dia_chi'];
	$mat_khau=$tv_2['mat_khau'];
	$mat_khau_tu_form=$_POST['mat_khau'];
	if($mat_khau_tu_form!="")
	{
		$mat_khau=md5($mat_khau_tu_form);
		$mat_khau=md5($mat_khau);
	}
	$tv="
	UPDATE tai_khoan SET 
	ho_ten = '$ho_ten',
	email = '$email',
	dia_chi = '$dia_chi',
	mat_khau = '$mat_khau' 
	WHERE id='$id';
	";
	mysqli_query($conn,$tv);
	
	$_SESSION['ky_danh']=$ky_danh;
	$_SESSION['mat_khau']=$mat_khau;	
?>