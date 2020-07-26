<?php
$connect =     mysqli_connect("localhost","root","","Android_Networking");
mysqli_query($connect,"SET NAMES 'utf8'");


$querry = "SELECT * FROM User";
$data = mysqli_query($connect,$querry);

while ($row = mysqli_fetch_assoc($data)) {
    echo json_encode($row);
}