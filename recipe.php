<?php
$connect =     mysqli_connect("localhost","root","","Android_Networking");
mysqli_query($connect,"SET NAMES 'utf8'");


$querry = "SELECT * FROM recipe";
$data = mysqli_query($connect,$querry);

$title = $_POST['title'];
$time = $_POST['time'];
$difficult = $_POST['difficult'];
$image = $_POST['image'];
$score = $_POST['score'];

$query = "INSERT INTO recipe VALUES (null ,'$title','$score','$difficult','$time','$image')";

if (mysqli_query($connect,$query)){
    echo 'Thanh cong';
}else{
    echo  'That bai ';
}

