<?php 

$page = "vragenlijst";

include 'header.php'; 
include 'navbar.php';


$score = 0;





$score =  $_POST['vraag_1'] + $_POST['vraag_2'] + $_POST['vraag_3'] + $_POST['vraag_4'] + $_POST['vraag_5']; 

echo "Je sccore is: $score";


if($score <= 1){
    echo "\nmeer bewegen";
} else if($score >= 2 && $score <= 5 ){
    echo "\nje gaat de goeie richtig op";
}

?>









<?php

include 'footer.php';

?>