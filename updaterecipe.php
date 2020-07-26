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
$id = $_POST['id'];

$query = "UPDATE recipe SET title = '$title', time = '$time', difficult = '$difficult', image = '$image', score = '$score' WHERE  id='$id'";

if (mysqli_query($connect,@$query)){
    echo "THANH COMG";
}else{
    echo  "CC";
}
