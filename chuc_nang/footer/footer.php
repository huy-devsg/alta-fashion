<?php 
	echo '<div style="color:#000;padding:12px">';
	$tv="select * from footer limit 0,1";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	echo $tv_2['html'];
	echo '</div>';
?>