<?php
$connect =     mysqli_connect("localhost","root","","Android_Networking");
mysqli_query($connect,"SET NAMES 'utf8'");

$iduser = $_POST['iduser'];

$querry = "SELECT * FROM recipe WHERE  iduser = '$iduser' ";
$data = mysqli_query($connect,$querry);

class Recipe
{
    function Recipe($title, $time, $id, $difficult,$image,$score,$iduser)
    {
        $this->title = $title;
        $this->time = $time;
        $this->id = $id;
        $this->difficult = $difficult;
        $this->image = $image;
        $this->score = $score;
        $this->iduser = $iduser;

    }
}

$arrayRecipe = array();

header('Content-Type: application/json');
while ($row = mysqli_fetch_assoc($data)) {
    array_push($arrayRecipe,new Recipe($row['title'],$row['time'],$row['id'],$row['difficult'],$row['image'],$row['score'],$row['iduser']));
}
//$return['recipe'] = $arrayRecipe;
echo json_encode($arrayRecipe,JSON_PRETTY_PRINT);