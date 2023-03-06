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
	}
	function chuyen_trang($link)
	{
?>
				<script type="text/javascript">
					window.location=$link;
				</script>
		<?php 
	}
	function trang_truoc()
	{
		$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
				<script type="text/javascript">
					window.history.back();
				</script>
		<?php 
	}
	function thong_bao_chuyen_link($chuoi_thong_bao,$link_chuyen_trang)
	{
		if($link_chuyen_trang=="")
		{
			$link=$_SERVER['HTTP_REFERER'];
		}
		else
		{
			$link=$link_chuyen_trang;
		}
		?>
				<script type="text/javascript">
					alert("<?php echo $chuoi_thong_bao; ?>");
					window.location="<?php echo $link; ?>";
				</script>
		<?php 
	}
?>
