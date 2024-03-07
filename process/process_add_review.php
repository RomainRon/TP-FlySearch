<?php

include '../config/connexion.php';

$TOid = $_GET["tour_operator_id"];

if(!empty($_POST["username"]) && !empty($_POST["comment"])){

    $preparedRequest = $connexion->prepare(
        "INSERT INTO review(message, author, tour_operator_id) VALUE (?,?,?)"
    );
    $preparedRequest->execute([
        $_POST["comment"],
        $_POST["username"],
        $_GET["tour_operator_id"]

    ]);
        header('Location: ../ReviewsOperator.php?tour_operator_id='.$TOid);
        die;
} echo "c'est pas bon";


?>
