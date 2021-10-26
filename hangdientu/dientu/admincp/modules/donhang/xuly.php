<?php
	include('../config.php'); 
	if(isset($_GET['id'])){
		$tam=$_GET['id'];
	}else{
		$tam='';
		}
		$PGSQL="delete from cart where id='$tam'";
		pg_query($PGSQL);
		header('location:../../index.php?quanly=donhang&ac=lietke');
?>