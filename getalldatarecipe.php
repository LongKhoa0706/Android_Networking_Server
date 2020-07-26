<?php
$connect =     mysqli_connect("localhost","root","","Android_Networking");
mysqli_query($connect,"SET NAMES 'utf8'");


$querry = "SELECT * FROM recipe";
$data = mysqli_query($connect,$querry);

class Recipe
{
    function Recipe($title, $time, $id, $difficult,$image,$score)
    {
        $this->title = $title;
        $this->time = $time;
        $this->id = $id;
        $this->difficult = $difficult;
        $this->image = $image;
        $this->score = $score;


    }
}

$arrayRecipe = array();

header('Content-Type: application/json');
while ($row = mysqli_fetch_assoc($data)) {
    array_push($arrayRecipe,new Recipe($row['title'],$row['time'],$row['id'],$row['difficult'],$row['image'],$row['score']));
}
//$return['recipe'] = $arrayRecipe;
echo json_encode($arrayRecipe,JSON_PRETTY_PRINT);