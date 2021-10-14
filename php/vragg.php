<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>


        <h1>vraagen lijst</h1>
        
        <div class="vraag">
        <form action="comfurm.php" method="POST">
                 <br><br>
                <span> Is er voldoende gezond aanbod in de kantine op school?
                    <select name="vraag_1" id="vraag_1">
                        <option value="zaterdag">ja</option>
                        <option value="zondag">nee</option>
                    </select>
                </span>
                    <br><br>
                <span> Hoe vaak drink je frisdrank?
                    <select name="vraag_2" id="vraag_1">
                        <option value="zaterdag">Elke dag</option>
                        <option value="zondag">Paar x per week</option>
                        <option value="zondag">Bijna nooit</option>
                    </select>
                </span>
                 <br><br>
                <span> Hoe vaak eet je fruit?
                    <select name="vraag_3" id="vraag_1">
                        <option value="zaterdag">Elke dag</option>
                        <option value="zondag">Paar x per week</option>
                        <option value="zondag">Bijna nooit</option>
                    </select>
                </span>
                    <br><br>
                <span> Hoe vaak ontbijt je?
                    <select name="vraag_4" id="vraag_1">
                        <option value="zaterdag">Elke dag</option>
                        <option value="zondag">Paar x per week</option>
                        <option value="zondag">Bijna nooit</option>
                    </select>
                </span>
                 <br><br>
                <span> Eet je wel eens na 11 uur ‘s avonds
                    <select name="vraag_4" id="vraag_1">
                        <option value="zaterdag">Vaak</option>
                        <option value="zondag">Nooit</option>
                        <option value="zondag">Altijd</option>
                    </select>
                </span>
                 <br><br>
                <span>Wat is je BMI?
                    <select name="vraag_5" id="vraag_1">
                        <option value="zaterdag">Ondergewicht</option>
                        <option value="zondag">Goed</option>
                        <option value="zondag">Overgewicht</option>
                    </select>
                </span>
                    <br><br>
                <span> aantal:
                   <input id="vraag_1" type="date" name="date">
                </span>
                <br><br>
                <input id="submit" type="submit" value="verstuur">
                <br> <br>
        </form>

        </div>


        <?php include 'footer.php';?>