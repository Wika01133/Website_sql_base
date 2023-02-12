<?php
include_once ("klasy/User.php");
include_once ("klasy/Baza_logowanie.php");
include_once ("klasy/LoginForm.php");

?>
<link href="css/login.css" rel="stylesheet" />
<!DOCTYPE html>
<html>

<body>
<?php
$um = new UserMenager();
$db = new Baza1("localhost", "root", "", "klienci");
//parametr z GET – akcja = wyloguj
if (filter_input(INPUT_GET, "akcja")=="wyloguj") {
    $um->logout($db);
    }

    //kliknięto przycisk submit z name = zaloguj
if (filter_input(INPUT_POST, "zaloguj")) {
    $userId=$um->login($db); //sprawdź parametry logowania
    if ($userId > 0) {
    echo "<p>Poprawne logowanie.<br />"; 
    echo "Zalogowany użytkownik o id=$userId <br />";
    echo "<a href='processLogin.php?akcja=wyloguj' >Wyloguj</a> </p>";
    header("location:Szkolka_Jogi_log.php");  //przekierowanie funkcja header
} 
else {
 echo "<p>Błędna nazwa użytkownika lub hasło</p>";
 $um->loginForm(); //Pokaż formularz logowania
 }
 } else {
 //pierwsze uruchomienie skryptu processLogin
 $um->loginForm();
 }
 ?>

</body>

</html>