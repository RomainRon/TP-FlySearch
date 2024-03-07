<?php
include './partials/header.php';


$manager = new Manager($connexion);

$operators = $manager->getAllOperator();

$operatorsPremium = $manager->getAllOperatorPremium();

// var_dump($operatorsPremium);
//  die;

$operatorsRegular = $manager->getAllOperatorRegular();
// var_dump($operatorsRegular);
//  die;

//  echo "<pre>";
//  var_dump($operators);
//  echo "</pre>";

//  die;
?>

<div class="d-flex vh-100 text-center bg-white">



    <div class="items-center" style="position:absolute; left:44%">
        <h1>Admin Mode</h1>
        <img src="./images/admin.png" alt="" srcset="" width="200px">
    </div>


    <!-- AJOUT UN OPERATEUR  -->

    <div class="container" style="position:absolute; left:38%; top:42%">
        <form class="formadmin" action="./process/process_add_touroperator.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter the name of the New Operator</label>
                <input type="text" class="form-control" name="touroperatorname" placeholder="New Operator" size="4">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- AJOUTER UN DESTINATION  -->

    <div class="container" style="position:absolute; left:10%; top:55%">
        <form class="formadmin">
            <div class="form-group">
                <label for="exampleInputEmail1">Operators List </label>
                <select class="form-control">
                    <?php

                    foreach ($operators as $operator) { ?>
                        <option> <?= $operator['name'] . "\n"; ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label for="exampleInputEmail1">Enter the name of the New Destination</label>
                <input type="email" class="form-control" placeholder="New Destination">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- CHANGER A PREMIUM  -->

    <div class="container" style="position:absolute; left:67%; top:45%">
        <form class="formadmin" action="./process/process_changetopremium.php" method="post">
            <h5>Changer Operateur a Premium<h5>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Operators List </label>
                        <select class="form-control" name="TourOperatorId" id="TourOperatorId">
                            <?php

                            foreach ($operatorsRegular as $operator) { ?>
                                <option value="<?= $operator->getId()?>"> <?= $operator->getName()?>
                                </option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



<!-- CHANGER A REGULAR  -->

<div class="container" style="position:absolute; left:67%; top:70%">
    <form class="formadmin" action="./process/process_changetoregular.php" method="post">
        <div class="form-group text-center">
            <h5>Changer Operateur a Regular<h5>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Operators List </label>
                        <select class="form-control" name="TourOperatorId" id="TourOperatorId">
                            <?php

                            foreach ($operatorsPremium as $operator) { ?>
                                <option value="<?= $operator->getId()?>"> <?= $operator->getName()?>
                                </option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
