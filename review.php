<?php 
include './partials/header.php';
 $review = new Review([]);
 $reviews = $review->getAllMessage();
 echo "<pre>";
 var_dump($reviews);
 echo "</pre>"; 
