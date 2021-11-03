<?php 

$page = "vragenlijst";

include 'header.php'; 
include 'navbar.php';


$score = 0;





$score =  $_POST['vraag_1'] + $_POST['vraag_2'] + $_POST['vraag_3'] + $_POST['vraag_4'] + $_POST['vraag_5'] + $_POST['vraag_6'] ; 

echo "Je sccore is: $score";


if($score <= 1){
    echo "\nmeer bewegen";
} else if($score >= 2 && $score <= 5 ){
    echo "\neet gezonder vetzo";
} else if($score >=5 && $score <=9 ){
    echo "\n je eet normaal";
} else if ($score >=9 && $score <= 13 ){
    echo "\n je eet gezonder";
} else if ($score >= 13 && $score <= 17){
    echo "\n je eet preg_filter";
}

?>









<?php

include 'footer.php';

?>