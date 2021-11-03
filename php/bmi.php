<?php 

$page = "bmi";

include 'header.php';
include 'navbar.php';

?>

<?php 
    $errh = $errw = $errl = "";
    $lengte = $gewicht = "";
    $bmipass = "";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['lengte'])) {
            $errh = "<span style='color:#ed4337; font-size:17px; display:block'>lengte is requried</span>";
        } else {
            $lengte = validation($_POST['lengte']);
        }
    
        if (empty($_POST['gewicht'])) {
            $errw = "<span style='color:#ed4337; font-size:17px; display:block'>gewicht is requried</span>";
        } else {
            $gewicht = validation($_POST['gewicht']);
        }

        if (empty($_POST['lengte'] && $_POST['gewicht'])) {
            echo "";
        } else {
            $bmi = ($gewicht / ($lengte * $lengte));
            $bmipass = $bmi;
        }
    }
    
    function validation ($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<h2>Check Your BMI</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="section1">
        <span>type hier je lengte : </span>
        <input type="text" name="lengte" autocomplete="off" placeholder="lengte"><?php echo $errh; ?>
    </div>
    
    <div class="section2">
        <span>type hier je gewicht : </span>
        <input type="text" name="gewicht" autocomplete="off" placeholder="kilogram"><?php echo $errw; ?>
    </div>    
    <div class="section3">
        <span>type hier je leefetijd : </span>
        <input type="text" name="gewicht" autocomplete="off" placeholder="leeftentijd"><?php echo $errl; ?>
    </div>  
    <div class="submit">
        <input type="submit" name="submit" value="Check BMI">
        <input type="reset" value="Clear">
    </div>
    
</form>

<?php
    error_reporting(0);
        echo "<span class='pass'>Your BMI is : ". number_format($bmipass , 2) ."</span>";
    if (isset($_POST['submit'])){
        if ($bmipass >= 13.6 && $bmipass <= 18.5) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px ;margin-right:50px'> je bent te dun ga meer eten.</span>";?>
            <img src="../img/BMI calculator Image-1.png" class="one"><?php
        } elseif ($bmipass > 18.5 && $bmipass < 24.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> nomale gewicht.</span>";?>
            <img src="../img/BMI calculator Image-2.png" class="two"><?php
        } elseif ($bmipass > 25 && $bmipass < 29.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> je bent net wat te dik ga afvallen.</span>";?>
            <img src="../img/BMI calculator Image-3.png" class="three"><?php
        } elseif ($bmipass > 30 && $bmipass < 34.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> je bent gemiddeld dik ga sporten.</span>";?>
            <img src="../img/BMI calculator Image-4.png" class="four"><?php
        } elseif ($bmipass > 35 && $bmipass < 39.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> je word dikker dan dikker ga sporten.</span>";?>
            <img src="../img/BMI calculator Image-5.png" class="five"><?php
        } elseif ($bmipass >= 40) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> te dik.<b style='color:#ed4337'> je gaat dood /b>. .</span>";?>
            <img src="../img/BMI calculator Image-6.png" class="six"><?php
        }
    } else {
        echo "";
    }
?>
<?php include 'footer.php'?>