<?php 

$page = "vragenlijst";

include 'header.php'; 
include 'navbar.php';

?>

        <h1>vragenlijst</h1>
        
        <div class="vraag">
        <form action="confirm.php" method="POST">
                 <br><br>
                <span> Is er voldoende gezond aanbod in de kantine op school?
                    <select name="vraag_1" class="vraag_1">
                        <option value="2">ja</option>
                        <option value="2">nee</option>
                    </select>
                </span>
                    <br><br>
                <span> Hoe vaak drink je frisdrank?
                    <select name="vraag_2" class="vraag_1">
                        <option value="0">Elke dag</option>
                        <option value="1">Paar x per week</option>
                        <option value="3">Bijna nooit</option>
                    </select>
                </span>
                 <br><br>
                <span> Hoe vaak eet je fruit?
                    <select name="vraag_3" class="vraag_1">
                        <option value="3">Elke dag</option>
                        <option value="1">Paar x per week</option>
                        <option value="0">Bijna nooit</option>
                    </select>
                </span>
                    <br><br>
                <span> Hoe vaak ontbijt je?
                    <select name="vraag_4" class="vraag_1">
                        <option value="3">Elke dag</option>
                        <option value="1">Paar x per week</option>
                        <option value="0">Bijna nooit</option>
                    </select>
                </span>
                 <br><br>
                <span> Eet je wel eens na 11 uur ‘s avonds
                    <select name="vraag_5" class="vraag_1">
                        <option value="1">Vaak</option>
                        <option value="3">Nooit</option>
                        <option value="1">Altijd</option>
                    </select>
                </span>
                 <br><br>
                <span>Wat is je BMI?
                    <select name="vraag_6" class="vraag_1">
                        <option value="3">Ondergewicht</option>
                        <option value="1">Goed</option>
                        <option value="0">Overgewicht</option>
                    </select>
                </span>
                    <br><br>
                <span> aantal:
                   <input class="vraag_1" type="date" name="date">
                </span>
                <br><br>
                <input vraag="submit" type="submit" value="verstuur">
                <br> <br>
        </form>

        </div>


        <?php include 'footer.php';?>