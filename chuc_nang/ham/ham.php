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
	
?>
