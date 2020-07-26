<?php
$connect =     mysqli_connect("localhost","root","","Android_Networking");
mysqli_query($connect,"SET NAMES 'utf8'");


$id = $_POST['id'];

$querry = "SELECT * FROM `User` WHERE User.id = '$id'";
$data = mysqli_query($connect,$querry);

$rows=mysqli_num_rows($data);

if ($rows> 0){
    while ($getdata = $data ->fetch_assoc()){
        echo json_encode($getdata);
    }
}

//header('Content-Type: application/json');

//while ($row = mysqli_fetch_assoc($data)) {
// echo $row  ;
//}
//$return['recipe'] = $arrayRecipe;
