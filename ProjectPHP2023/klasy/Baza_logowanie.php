<?php
    
class Baza1
{
    private mysqli $mysqli; // uchwyt do BD

    public function __construct(string $hostname, string $username, string $password, string $database) //konstruktor
    {
        $this->mysqli = new mysqli($hostname, $username, $password, $database);
        if ($this->mysqli->connect_errno) {
            printf("Nie udało sie połączenie z serwerem: %s\n", $this->mysqli->connect_error);
            exit();
        }
        if ($this->mysqli->set_charset("utf8")){
    }
    }  
    
    function __destruct() //destruktor
    {
        $this->mysqli->close();
    }

    public function select($sql, $pola) {
//parametr $sql – łańcuch zapytania select
//parametr $pola - tablica z nazwami pol w bazie
//Wynik funkcji – kod HTML tabeli z rekordami (String)
        $tresc = "";
        if ($result = $this->mysqli->query($sql)) {
            $ilepol = count($pola); //ile pól
            $ile = $result->num_rows; //wiersze

// pętla po wyniku zapytania $results
            $tresc .= "<table><tbody>";
            while ($row = $result->fetch_object()) {
                $tresc .= "<tr>";
                for ($i = 0; $i < $ilepol; $i++) {
                    $p = $pola[$i];
                    $tresc .= "<td>" . $row->$p . "</td>";
                }
                $tresc .= "</tr>";
            }
            $tresc .= "</table></tbody>";
            $result->close(); /* zwolnij pamięć */
        }
        return $tresc;
    }

    public function insert($sql)
    {
        if( $this->mysqli->query($sql)) return true; else return false;
    }


    public function delete($sql)
    {
        if( $this->mysqli->query($sql)) return true; else return false;
    }

    public function getMysqli()
    {
        return $this->mysqli;
    }
    
    public function selectUser($login, $passwd, $tabela) {
        $id = -1;
        $sql = "SELECT * FROM $tabela WHERE userName='$login'";
        if ($result = $this->mysqli->query($sql)) { //jeśli podany login się zgadza
        $ile = $result->num_rows; //ktory wiersz
        if ($ile == 1) { //jesli pierwszy to...
        $row = $result->fetch_object(); //pobiera rekord z użytkownikiem
        $hash = $row->passwd; //pobiera zaszyfrowane hasło
        //
        //sprawdź czy pobrane hasło pasuje do tego z tabeli bazy danych:
        if (password_verify($passwd, $hash))
        $id = $row->id; //jeśli hasła się zgadzają - pobierz id użytkownika
            }
        }
        return $id; //id zalogowanego użytkownika lub -1
       }
 
}


