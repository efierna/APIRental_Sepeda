<?php
  $id = $_POST['id'];
	$kodesepeda = $_POST['kodesepeda'];
	$merk = $_POST['merk'];
	$jenis = $_POST['jenis'];
	$warna = $_POST['warna'];
	$hargasewa = $_POST['hargasewa'];

	$gambar = $_FILES['gambar']['name'];
	$asal = $_FILES['gambar']['tmp_name'];
	
	$con = mysqli_connect("localhost","root","","DBRentalSepeda");
	$sql = "INSERT INTO tbsepeda (kodesepeda , merk, jenis, warna, gambar,hargasewa) VALUES ('$kodesepeda', '$merk', '$jenis', '$warna', '$gambar','$hargasewa ')";
	$sql = "UPDATE tbsepeda SET kodesepeda='$kodesepeda', merk='$merk', jenis='$jenis', warna='$warna', gambar='$gambar', hargasewa='$hargasewa' WHERE id='$id'";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>