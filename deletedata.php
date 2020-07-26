<?php
$connect =     mysqli_connect("localhost","root","","Android_Networking");
mysqli_query($connect,"SET NAMES 'utf8'");


$querry = "SELECT * FROM recipe";
$data = mysqli_query($connect,$querry);

$id = $_POST['id'];


// sql to delete a record
$sql = "DELETE FROM recipe WHERE id = '$id' ";

if ($connect->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $querry->error;
}

$connect->close();

?>