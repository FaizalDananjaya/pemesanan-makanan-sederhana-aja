	<?php 
	$namafile ="coba1.txt";
	$filehandle = fopen($namafile, 'a') or die("file gagal ditemukan!");
	$bakso = $_POST['bakso'];
	$soto = $_POST['soto'];
	$mie = $_POST['mie'];
	$degan = $_POST['degan'];
	$campur = $_POST['campur'];
	$teh = $_POST['teh'];
	$jeruk = $_POST['jeruk'];
	$sweet = $_POST['jeruk'];
	$datastring = "<tr><td>$bakso<tr><td>$soti<tr><td>$mie<tr><td>$degan<tr><td>$campur<tr><td>$teh<tr><td>$jeruk<tr><td>$sweet"
	$fwrite($filehandle, $datastring)
	fclose($filehandle);
	header("location : coba2.php")
	?>