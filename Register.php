<?php
    $username = $_POST['username'];
	$password = $_POST['password'];
    $nama = $_POST['nama'];
    $noktp = $_POST['noktp'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$json["hasil"] = array();
	$con = mysqli_connect("localhost","root","","DBRentalSepeda");
	$query = "SELECT id FROM tbuser WHERE username = '$username'";
	$check = mysqli_num_rows(mysqli_query($con, $query));
	if ($check == 0) {
		$sql = "INSERT INTO tbuser(noktp, username, nama, password, nohp, alamat, roleuser) VALUES ('$noktp', '$username', '$nama', '$password', '$nohp', '$alamat', 2)";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$json["hasil"]["STATUS"] = "SUCCESS";
			$json["hasil"]["MESSAGE"] = "SUCCESS";
		} else {
			$json["hasil"]["STATUS"] = "FAILED";
			$json["hasil"]["MESSAGE"] = mysqli_error($con);
		}
	} else {
		$json["hasil"]["STATUS"] = "FAILED";
		$json["hasil"]["MESSAGE"] = "Duplicated Username";
	}
	echo json_encode($json);
?>