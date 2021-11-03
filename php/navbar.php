<header>
    <img class="logo" src="../img/beter.png" alt="logo">
    <ul class="nav">
        <li><a href="index.php" class="<?php if ($page == "home") echo "active"; ?>">Home</a></li>
        <li><a href="informatie.php" class="<?php if ($page == "informatie") echo "active"; ?>">informatie</a></li>
        <li><a href="game.php" class="<?php if ($page == "games") echo "active"; ?>">games</a></li>
        <li><a href="bmi.php" class="<?php if ($page == "bmi") echo "active"; ?>">bmi</a></li>
        <li><a href="#" class="<?php if ($page == "recepten") echo "active"; ?>">recepten</a></li>
        <li><a href="vragg.php" class="<?php if ($page == "vragenlijst") echo "active"; ?>">vragenlijst</a></li>
    </ul>
    <a class="button" href="contact.php" class="<?php if ($page == "contact") echo "active"; ?>"><button>Contact</button></a>
</header>