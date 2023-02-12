<?php

include_once ("klasy/Baza_logowanie.php");

class UserMenager {
    function loginForm() {
    ?>
  <div class="page-container">
  <div class="login-container">
    <div>
      <h3 style="text-align: center;">Formularz logowania</h3>
      <p style="text-align: center;">
        <form action="processLogin.php" method="post">
          Login: <br/><input name="login" /><br/>
          Hasło: <br/><input name="passwd" type="password"/><br/>
          <br>
          <div style="display: flex; justify-content: center;">
              <button type="reset">Anuluj</button>
              <input type="submit" value="Zaloguj" name="zaloguj" />
          </div>
        </form>
      <form action="Szkolka_Jogi.php" style="text-align: center;">
        <input type="submit" value="Powrót" />
      </form>
    </div>
  </div>
</div>
 <?php
    }
    
    function login($db) { //filtruje dane, sprawdza czy jest taki użytkownik i zwraca jego id
       $args = [
            'login' => FILTER_SANITIZE_ADD_SLASHES ,
            'passwd' => FILTER_SANITIZE_ADD_SLASHES 
            ];
           
    $dane = filter_input_array(INPUT_POST, $args); //filtrowanie danych, post
    //var_dump($dane);
    
    $id = $db->selectUser($dane['login'], $dane['passwd'], "users"); //sprawdzanie czy podany użytkownik jest w tabeli users
    $login = $dane["login"];
    $passwd = $dane["passwd"];
    $userId = $db->selectUser($login, $passwd, "users");
    
    if ($userId >= 0) { //jeśli poprawne dane...
        session_start(); //rozpoczęcie sesji
        $new_session = session_id();
        
        $db->delete("DELETE FROM `logged_in_users` where `logged_in_users`.`sessionId` = '$new_session'"); //czyszczenie wpisów historycznych
        
        
        echo "data" .date("Y/m/d") . "</br>";
        echo "czas" .date("h:i:sa");
        $new_date = (new DateTime()) -> format("Y/m/d H:i:s");
        $new_session = session_id();
        
        $sql = "INSERT INTO logged_in_users VALUES ('$new_session', '$userId', '$new_date')";
        $db -> insert($sql);
        
        echo $this ->getLoggedInUser($db, $new_session);
       

        return $userId;
    }
    else
        return -1;
    }

    public function logout($db)
    {
        if (!session_id()) 
            session_start();
        
        // usuwa z tabeli rekord z bieżącej sesji
            $db->delete("DELETE FROM `klienci`.`logged_in_users` where sessionId ='".session_id()."'");
            
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 42000, '/');
        }
        session_destroy(); //usuwanie całej sesji
    }

    public function getLoggedInUser($db,$sessionId)
    {
        //sprawdzanie czy użytkownik się zalogował
        $userId = $db->select("SELECT userId FROM logged_in_users WHERE sessionId='$sessionId'",["userId"]); 
        if (!$userId)
            return -1; //jesli nie to zwracamy -1
        else
            return $userId; //jesli tak to id użytkownika
    }
}

?>