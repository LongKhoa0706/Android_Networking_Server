<?php
$connect =     mysqli_connect("localhost","root","","Android_Networking");
mysqli_query($connect,"SET NAMES 'utf8'");

$email = $_POST['email'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$image = $_POST['image'];
$id = $_POST['id'];


$querry = "UPDATE User SET email = '$email', username = '$username', phone = '$phone', image = '$image'  WHERE  id = '$id'";
if (mysqli_query($connect,$querry)){
    echo "THANH CONG";
}else{
    echo "THAT BAI";
}


