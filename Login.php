<?php
    $username = $_POST['username'];
	$password = $_POST['password'];
	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$sql = "SELECT * from tbuser where username = '$username' and password = '$password' and roleuser = 2";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
	if($count > 0){
		$json["PAYLOAD"]["respon"]=true;
		if ($row["roleuser"] == 1) {
          $json["PAYLOAD"]["roleuser"] = "admin";
        } elseif ($row["roleuser"] == 2) {
          $json["PAYLOAD"]["roleuser"] = "customer";
        }
	}else{
		$json["PAYLOAD"]["respon"]=false;
	}
	echo json_encode($json);
?>