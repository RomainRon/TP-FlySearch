<?php 
include '../config/connexion.php';

// CREATE A TOUR OPERATOR

$tourOperatorName = $_POST["touroperatorname"];

if(!empty($_POST["touroperatorname"])){
    
        $preparedRequest = $connexion->prepare(
            "INSERT INTO tour_operator (name) VALUE (?) "
        );
        $preparedRequest->execute([ 
        $tourOperatorName
        ]);

        header('Location: ../Admin.php');
        die;
}





