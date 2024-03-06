<?php

include './partials/header.php';

$manager = new Manager($connexion);

$destinations = $manager->getAllDestination();

//  echo "<pre>";
//  var_dump($destinations);
//  echo "</pre>";
//  die;
?>


<?php
?>
<div class="row">

    <?php
    $count = 0;
    foreach ($destinations as $destination) {
        // Alternar entre columnas
        if ($count % 2 == 0) {
            echo '<div class="col-md-6 mt-4">';
        }
    ?>
</div>

        <!-- Carrousel PHOTOS Rome -->
        <div class="carousel">
            <h1 class="text-white text-center d-flex justify-content-center align-items-center" style="background-color:#030007; height: 60px;"><img src="./images/Flag<?= $destination->getLocation() ?>.png" width="100px"><?= $destination->getLocation() ?><img src="./images/Flag<?= $destination->getLocation() ?>.png" width="100px"></h1>
            <button class="carousel__button carousel__button--left is-hidden">
                <img src="https://www.iconpacks.net/icons/2/free-arrow-left-icon-3099-thumb.png" alt="left" />
            </button>
            <div class="carousel__track-container">
                <ul class="carousel__track">
                    <li class="carousel__slide current-slide">
                        <img class="carousel__images" src="./images/<?= $destination->getLocation() ?>5.avif" alt="background-image" />
                    </li>
                    <li class="carousel__slide">
                        <img class="carousel__images" src="./images/<?= $destination->getLocation() ?>2.avif" alt="background-image" />
                    </li>
                    <li class="carousel__slide">
                        <img class="carousel__images" src="./images/<?= $destination->getLocation() ?>3.avif" alt="background-image" />
                    </li>
                    <li class="carousel__slide">
                        <img class="carousel__images" src="./images/<?= $destination->getLocation() ?>4.avif" alt="background-image" />
                    </li>
                    <li class="carousel__slide">
                        <img class="carousel__images" src="./images/<?= $destination->getLocation() ?>1.avif" alt="background-image" />
                    </li>
                </ul>
            </div>
            <button class="carousel__button carousel__button--right">
                <img src="https://www.iconpacks.net/icons/2/free-arrow-left-icon-3099-thumb.png" alt="right" />
            </button>
            <div class="carousel__nav">
                <button class="carousel__indicator current-slide"></button>
                <button class="carousel__indicator"></button>
                <button class="carousel__indicator"></button>
                <button class="carousel__indicator"></button>
                <button class="carousel__indicator"></button>
            </div>
            <a href="./DetailDestination.php?destination=<?= $destination->getLocation() ?>" style="text-decoration:none">
                <button type="" class="ButtonSignUp ButtonSignUp text-black text-decoration-none px-3 py-1 rounded-4 d-block mx-auto mt-3">Take a look</button>
            </a>
        </div>
    <?php
        if ($count % 2 != 0) {
            echo '</div>';
        }
        $count++;
    }

    if (count($destinations) % 2 != 0) {
        echo '</div>';
    }
    ?>

    <?php

    include './partials/footer.php';

    ?>