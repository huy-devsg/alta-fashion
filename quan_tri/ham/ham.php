<?php 
	function thong_bao($c)
	{
		$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
				<script type="text/javascript">
					alert("<?php echo $c; ?>");
					window.history.back();
				</script>
		<?php 
		exit();
	}
	function chuyen_trang($link)
	{
?>
				<script type="text/javascript">
					window.location.href=$link;
				</script>
		<?php 
		exit();
	}
?>
