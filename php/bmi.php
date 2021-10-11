
<?php inlcude 'header.php'?>

<?php

$errh = $errw ="";
$height = $weight="";
$bmipass = "";


if ($_server['request_method'] == "post")
        if (empty($_post['height'])) {
        $errh = "<span style= 'color red font-size:17px; display:block'>height 
                is requried </span>";
        } else {
                 $height = validation  ($_post['height']);
        }

if (empty($_post['weight'])) {
        $errw = "<span style= 'color red font-size:17px; display:block'>
        weight 
        is requried </span>";
        } else {
            $Weight = validation($_post['weight']);
        
        }


if (empty($_POST['height'] && $_POST['weight']) ){
        echo"";
}else {
        $bmi= ($weight / ($height = $height));
        $bmipass = $bmi;
}




function validation($data){
        $data = trim($data);;
        $data = stripclashes($data);
        $data = htmlspecialchars($Data);
        return $data
}
?>



<h2> Bmi test </h2>

    <form action="<?php echo htmlspecialchars
    ($_SERVER['PHP_SELF']);?> "method="POST">    
<Div class=" section1">
        <span> enter here your weight: </span>
        <input type="name" name="weight"
        autocomplete="off" placeholder="killogram"><?php echo $errh; ?>
</div>
<Div class=" section2">
        <span> enter here your height: </span>
        <input type="name" name="height"
        autocomplete="off" placeholder="miter"><?php echo $errw; ?>
</div>
        <Div class=" submit">
                 <input type="submit" name="submit"
                   value="check bmi">
                 <input type="reset" value="clear">
        </div>
</form>


<?php include 'footer.phh'?>