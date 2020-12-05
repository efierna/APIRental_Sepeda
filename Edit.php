<?php
  $id = $_POST['id'];
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$noktp = $_POST['noktp'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$con = mysqli_connect("localhost","root","","DBRentalSepeda");
	$sql = "INSERT INTO tbuser (username , nama, noktp, nohp, alamat) VALUES ('$username', '$nama', '$noktp', '$nohp', '$alamat ')";
	$sql = "UPDATE tbuser SET username='$username', nama='$nama', noktp='$noktp', nohp='$nohp', alamat='$alamat' WHERE id='$id'";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>