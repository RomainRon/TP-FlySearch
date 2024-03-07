<?php
include './partials/header.php';


$TourOperatorId = $_GET["tour_operator_id"];

$manager = new Manager($connexion);

$reviews = $manager->getReviewsByOperatorId($TourOperatorId);

?>

<!-- COMMENTAIRES ET FORM INPUT  -->
<h1 class="text-white text-center">Users Reviews</h1>
<div class="container mt-5 comment-box">
    <div id="scroll" class="border rounded-3 border-dark border-2 p-1 row">
        <div id="listComment">
            <?php
    foreach ($reviews as $review) {
        ?>
        <div class="border border border-4">
            <h4><?=$review->getAuthor();?>:</h4>
            <p><?=$review->getMessage();?></p>
        </div>
        <?php
        }
        ?>
        </div>
    </div>

    <h1 class="text-center mt-5">Write your own review</h1>
    <div class="mt-5" id="message_send_comment"></div>
    <div class="user"> 
        </div>
        <form action="./process/process_add_review.php?tour_operator_id=<?= $TourOperatorId ?>" method="post">
        <i class="fa-solid fa-user fa-2xl"></i> <input type="text" placeholder="Username" name="username">
        <textarea name="comment" placeholder="Write your comment here..." class="w-100"></textarea>
        <button type="submit" class="submit">Comment</button>
        </form>
    </div>
