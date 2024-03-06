<?php
include './partials/header.php';


$TourOperatorId = $_GET["tour_operator_id"];

$manager = new Manager($connexion);

$reviews = $manager->getReviewsByOperatorId($TourOperatorId);

?>




<form action="#" class="comment-box">
    <div id="scroll" class="border rounded-3 border-dark border-2 p-1 row">
        <div id="listComment">
    <?php
    foreach ($reviews as $review) {
        ?>
        <div class="border border border-4">
        <h4><?=$review->getAuthor();?></h4>
        <p><?=$review->getMessage();?></p>
        </div>
        <?php
        }
        ?>
        </div>
    </div>
    <div class="" id="message_send_comment"></div>
    <div class="user">
        </div>
        <div class="name" data-user-id="123">John Doe</div>
    </div>
    <textarea name="comment" placeholder="Write your comment here..." class="w-100"></textarea>
    <button type="submit" class="submit">Comment</button>
    </form>

