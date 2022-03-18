<?php
session_start();
echo "welcome admain: " . $_SESSION["user"];
echo "<br><br>";
echo "<a href=\"logout.php\">logout</a>";