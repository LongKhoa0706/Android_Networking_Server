<?php
$connect =     mysqli_connect("localhost","root","","Android_Networking");
mysqli_query($connect,"SET NAMES 'utf8'");


$querry = "SELECT * FROM User";
$data = mysqli_query($connect,$querry);

$email = $_POST['email'];
$password = $_POST['password'];

//
//$email = "b9";
//$password = "1v";

$query = "SELECT * FROM User WHERE User.email = '$email'  AND User.password = '$password'";

//
//while ($a = mysqli_query($connect,$query)){
//    echo $a['id'];
//}

$result=mysqli_query($connect,$query) ;

$rows=mysqli_num_rows($result);//lay so hang

if($rows>0) //neu co hang tuc la co user
{
    $abc = array();

    while ($fetchdata = $result ->fetch_assoc()){
//        $abc [] = $fetchdata;
//        echo json_encode($fetchdata);
        $fetchdata['code'] = '1';

        $fetchdata['message'] = 'success message.';
        header('Content-Type: application/json');
        echo json_encode($fetchdata,JSON_PRETTY_PRINT);
    }

    return $result;
}
else
{

    $fail['code'] = '2';
    $fail['message'] = 'Email and password not valid';
    echo json_encode($fail);


    return false;
}
