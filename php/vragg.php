<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vragg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="../img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="manifest" href="../img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>vraag</title>
</head>
    <body>

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








    </body>
</html>