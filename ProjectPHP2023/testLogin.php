<?php
include_once("klasy/klasa.php");
include_once("klasy/Baza.php");
include_once("klasy/UserMenager.php");
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    session_start();
    $db = new Baza("localhost", "root", "", "klienci");
    $um = new UserMenager();
    $sessionId = session_id();
    $userId = $um->getLoggedInUser($db, $sessionId);
    
    if ($userId == -1)
        header("location:processLogin.php");

    echo "<p><a href='processLogin.php?akcja=wyloguj'>Wyloguj</a></p>"; //link do wylogowania
    
   $userId = (strip_tags($userId)); //zwraca string ze znacznikami HTML i PHP
   echo $db->select("SELECT * FROM users WHERE id = '$userId'",["id","userName","fullName","email"]);
   
    ?>

</body>

</html>
