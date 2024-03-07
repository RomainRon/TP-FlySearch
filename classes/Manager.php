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
            "SELECT * FROM `destination` GROUP BY location"
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

    // RECUPERER UN Destination PAR Name //
    public function getDestinationByName(string $destinationName)
{
    $preparedRequest = $this->_bdd->prepare(
        "SELECT * FROM destination WHERE location = ?"
    );
    $preparedRequest->execute([$destinationName]);

    $line = $preparedRequest->fetch(PDO::FETCH_ASSOC);    

    if (!$line) {
        return null; // Destinación no encontrada
    }

    return new Destination($line);
}

// RECUPERER UN Operator par le name de la destination //
public function getTourOperatorsByDestination(string $destinationName)
{
    $preparedRequest = $this->_bdd->prepare(
        "SELECT * FROM tour_operator JOIN destination ON tour_operator.id = destination.tour_operator_id WHERE destination.location = ?"
    );
    $preparedRequest->execute([$destinationName]);
    $test = $preparedRequest->fetchAll(PDO::FETCH_ASSOC); 
    

    $tourOperators = [];
    foreach ($test as $key) {
        $operator = new TourOperator($key);
        array_push($tourOperators, $operator);
    }
    

    return $tourOperators;
}


    // CREATE A REVIEW //

    public function createReview()
    {
        $preparedRequest = $this->_bdd->prepare(
            "INSERT INTO review"
        );
        $preparedRequest->execute([]);
    }


    // RECUPERER REVIEWS SELON L'ID DE L'OPERATEUR //

    public function getReviewsByOperatorId(int $TourOperatorId)
    {
        $preparedRequest = $this->_bdd->prepare(
            "SELECT * FROM review where tour_operator_id = ?"
        );
        $preparedRequest->execute([$TourOperatorId]);

        $line = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
        $reviewsArray = [];

        foreach ($line as $key) {
            $reviews = new Review($key);
         
            array_push($reviewsArray, $reviews);
        }
        return $reviewsArray;
    }

    // RECUPERER TOUTES LES OPERATEURS // 

    public function getAllOperator()
    {
        $preparedRequest = $this->_bdd->prepare(
            "SELECT * FROM `tour_operator`;"
        );
        $preparedRequest->execute([]);

        $line = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);

        return $line;
    }

    public function getAllOperatorPremium()
    {
        $preparedRequest = $this->_bdd->prepare(
            "SELECT * FROM `tour_operator` WHERE is_premium = 1;"
        );
        $preparedRequest->execute([]);

        $line = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);

        $TOArray = [];

        foreach ($line as $key ) {
            $TO = new TourOperator($key);
            array_push($TOArray, $TO);
        }
        return $TOArray;
    }

    public function getAllOperatorRegular()
    {
        $preparedRequest = $this->_bdd->prepare(
            "SELECT * FROM `tour_operator` WHERE is_premium = 0;"
        );
        $preparedRequest->execute([]);

        $line = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);

        $TOArray = [];

        foreach ($line as $key ) {
            $TO = new TourOperator($key);
            array_push($TOArray, $TO);
        }
        return $TOArray;
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
