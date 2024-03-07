<?php

include './partials/header.php';


$destinationName = $_GET["destination"];

$manager = new Manager($connexion);

$destination = $manager->getDestinationByName($destinationName);

$operators = $manager->getTourOperatorsByDestination($destination->getLocation());

?>

<h1 class="text-white text-center">Operators for this destination:</h1>

<div class="row">
    <?php foreach ($operators as $operator) {
    ?>
        <!-- Image Overlay Cards -->

        <div class="col-md-6">
            <div class="card bg-secondary">
                <div class="text-center">
                    <img src="./images/<?= $operator->getName() ?>.png" alt="" srcset="" width="" height="200px" class="rounded-3">
                </div>
                <div class="card__details">
                    <ul>
                        <li>
                            <?php if ($operator->getGradeCount() == 0) { ?>
                                <h3>Grade:<i class="fa-regular fa-star fa-xl" style="color: #FFD43B;"></i></h3>
                            <?php } elseif ($operator->getGradeCount() == 1) { ?>
                                <h3>Grade:<i class="fa-solid fa-star fa-xl" style="color: #FFD43B;"></i></h3>
                            <?php } elseif ($operator->getGradeCount() == 2) { ?>
                                <h3>Grade:<i class="fa-solid fa-star fa-xl" style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-xl" style="color: #FFD43B;"></i></h3>
                            <?php } elseif ($operator->getGradeCount() == 3) { ?>
                                <h3>Grade:<i class="fa-solid fa-star fa-xl" style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-xl" style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-xl" style="color: #FFD43B;"></i></h3>
                            <?php } ?>
                        </li>


                        <?php
                        if ($operator->getIsPremium()) { ?>

                            <li>
                                <h5 class="bg-white">Link to Site: <p class="text-primary"><?= $operator->getLink() ?></p>
                                    <div class="text-start">
                                        <a href="#"><button type="button" class="btn btn-danger btn-lg">Visit Operator Site</button></a>
                                    </div>
                                </h5>
                            </li>
                        <?php
                        }

                        ?>

                    </ul>
                </div>
                <div class="card__side">
                    <div class="card__price-box text-center">
                        <p class="card__price-value fw-bold fs-5">Price: <?= $destination->getPrice() ?>$</p>
                        <div class="buttonselect text-center">
                            <a href="./ReviewsOperator.php?tour_operator_id=<?= $operator->getId() ?>"><button type="button" class="btn btn-primary btn-lg">Show Reviews</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>