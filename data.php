<?php

$con = mysqli_connect('localhost', 'root','','logininfo');

if ($con) {
    echo "connection successfull";
} else {
    echo "connection request failed";
}

mysqli_select_db($con, 'logininfo');

$email = $_POST['email'];

$password = $_POST['pswd'];

$username= $_POST['username'];

$query = "INSERT INTO logindata (email,password,username) VALUES('$email','$password','$username')";

mysqli_query($con, $query);

header('location:index.php');

?>