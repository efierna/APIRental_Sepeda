<?php
	$kodesepeda = $_POST['kodesepeda'];
    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $warna = $_POST['warna'];
    $hargasewa = $_POST['hargasewa'];

    $gambar = $_FILES['gambar']['name'];
    $asal = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($asal, 'upload/'.$gambar);

	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$sql = "INSERT INTO tbsepeda (kodesepeda , merk ,jenis, warna , gambar, hargasewa) VALUES ('$kodesepeda', '$merk', '$jenis', '$warna', '$gambar', '$hargasewa')  ";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>