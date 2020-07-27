<?php
$connect =     mysqli_connect("localhost","root","","Android_Networking");
mysqli_query($connect,"SET NAMES 'utf8'");


$querry = "SELECT * FROM User";
$data = mysqli_query($connect,$querry);

$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$username = $_POST['username'];
$image = $_POST['image'];
$query = "INSERT INTO User VALUES(null,'$email','$username','$phone','$password','$image')";

if (mysqli_query($connect,$query)){
    echo "Successful";
}else{
    echo "Fail";
}

class User
{
    function User($email, $username,$id, $phone,$password)
    {
        $this->email = $email;
        $this->username = $username;
        $this->id = $id;
        $this->phone = $phone;
        $this->password = $password;

    }
}

$arrayUser = array();

//while ($row = mysqli_fetch_assoc($data)) {
//    array_push($arrayUser, new User($row['email'], $row['username'], $row['id'], $row['phone'],$row['address'],$row['password']));
//    echo json_encode($row);
//}
