<?php

class Manager
{

    private $_bdd;

    // CONSTRUCTEUR // 

    public function __construct(PDO $bdd)
    {
        $this->_bdd = $bdd;
    }

    // RECUPERER TOUTES LES DESTINATIONS // 

    public function getAllDestination()
    {
        $preparedRequest = $this->_bdd->prepare(
            "SELECT * FROM `destination`"
        );
        $preparedRequest->execute([]);

        $line = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);

        $destinationArray = [];

        foreach ($line as $key ) {
            # code...
            $destination = new Destination($key);
            array_push($destinationArray, $destination);
        }
        return $destinationArray;
    }

    // RECUPERER UN OPERATEUR PAR ID //

    public function getOperateurByDestination()
    {
        $preparedRequest = $this->_bdd->prepare(
            "SELECT * FROM destination where location = ?"
        );
        $preparedRequest->execute([]);

        $line = $preparedRequest->fetch(PDO::FETCH_ASSOC);
        // // // $enclos = new Enclosure($line);
        // // // return $enclos;
    }

    // CREATE A REVIEW //

    public function createReview()
    {
        $preparedRequest = $this->_bdd->prepare(
            "INSERT INTO review"
        );
        $preparedRequest->execute([]);
    }


    // RECUPERER REVIEW SELON L'ID DE L'OPERATEUR //

    public function getReviewByOperatorId()
    {
        $preparedRequest = $this->_bdd->prepare(
            "SELECT * FROM review where tour_operator_id = ?"
        );
        $preparedRequest->execute([]);

        $line = $preparedRequest->fetch(PDO::FETCH_ASSOC);
        // // // $enclos = new Enclosure($line);
        // // // return $enclos;
    }

    // RECUPERER TOUTES LES OPERATEURS // 

    public function getAllOperator()
    {
        $preparedRequest = $this->_bdd->prepare(
            "SELECT * FROM `tour_operator`;"
        );
        $preparedRequest->execute([]);

        $line = $preparedRequest->fetch(PDO::FETCH_ASSOC);
        // // // $enclos = new Enclosure($line);
        // // // return $enclos;
    }

    // UPDATE OPERATOR TO PREMIUM 

    public function updateOperatorToPremium()
    {
        $preparedRequest = $this->_bdd->prepare(
            "UPDATE 'operator' FROM "
        );
        $preparedRequest->execute([]);

        $line = $preparedRequest->fetch(PDO::FETCH_ASSOC);
        // // // $enclos = new Enclosure($line);
        // // // return $enclos;
    }


    // CREATE A TOUR OPERATOR //

    public function createTourOperator()
    {
        $preparedRequest = $this->_bdd->prepare(
            "INSERT INTO ????"
        );
        $preparedRequest->execute([]);
    }


    // CREATE DESTINATION //

    public function createDestination()
    {
        $preparedRequest = $this->_bdd->prepare(
            "INSERT INTO ????"
        );
        $preparedRequest->execute([]);
    }
}
