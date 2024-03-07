<?php 

include '../config/connexion.php';

$idTO = $_POST["TourOperatorId"];
// var_dump($_POST["TourOperatorId"]);
// die;

if(!empty($_POST["TourOperatorId"])){


    $preparedRequest = $connexion->prepare(
        "UPDATE tour_operator SET is_premium = 0  WHERE id = ?"
    );
    $preparedRequest->execute([
        $idTO
    ]);
header('Location: ../Admin.php?SuccessChange to Regular');
} else {
    echo "errrrrrrror";
}