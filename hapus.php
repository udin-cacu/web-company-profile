<?php 
include 'db.php';
$delete = mysqli_query($conn, "DELETE FROM tb_diskusi WHERE id = '".$_GET['id']."'");
if($delete){
	header('location:diskusi.php');
}else{
	echo 'Gagal hapus';
}

 ?>