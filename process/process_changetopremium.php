<?php 

include '../config/connexion.php';

$idTO = $_POST["TourOperatorId"];
// var_dump($_POST["TourOperatorId"]);
// die;

if(!empty($_POST["TourOperatorId"])){


    $preparedRequest = $connexion->prepare(
        "UPDATE tour_operator SET is_premium = 1  WHERE id = ?"
    );
    $preparedRequest->execute([
        $idTO
    ]);
    header('Location: ../Admin.php?Successchange to premium');
}else{
    echo "errrrrrrror";
}