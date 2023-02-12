<?php

class Rezerwacja_Form {

    protected $rezerwacja;

    function __construct() {
        ?>
        <div style="margin: 0 auto;">
            <form method="post">
                    <div>Numer telefonu: </div>
                    <div><input type="text" name="nrtel" id="nrtel"></div></br>
                    <div>Rodzaje zajęć: </div>
                        <select name="zajecia" id="zajecia">
                            <option value="Joga" selected="selected">Joga</option>
                            <option value="Aerial Joga">Aerial Joga</option>
                            <option value="Joga Vinyasa">Joga Vinyasa</option>
                            <option value="Zoga">Zoga</option>
                            <option value="Gimnastyka słowiańska">Gimnastyka słowiańska</option>
                            <option value="Joga dla Seniora">Joga dla Seniora</option>
                            </select></br></br>
			<div>Wybierz datę: </div>
			<div><input type="date" id="data" name="data"></div></br>
			<div>Dostępne godziny: </div>
			<div><input name="godzina" id="godzina" type="radio" value="12:30" /> 12:30</div>
			<div><input name="godzina" id="godzina" type="radio" value="14:00" /> 14:00</div>
			<div><input name="godzina" id="godzina" type="radio" value="16:30"/> 16:30 </div>
                        
                        <input type='submit' name='submit' value='Zapisz' />
                        <input type='submit' name='submit' value='Pokaż' />
            </form>
        </div>
                            <?php
    }

    function checkRezerwacja() { 
        if ($_POST['submit'] == 'Anuluj') {
            $_POST = NULL;
        } else {
            $args = array(
            'nrtel' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^(?:(?:\+|00)?48)? ?[1-9]\d{8}$/')
            ),
            'zajecia' => FILTER_SANITIZE_STRING,
            'data' => FILTER_SANITIZE_STRING,
            'godzina' => FILTER_SANITIZE_STRING
            );
            $dane = filter_input_array(INPUT_POST, $args);
            $errors = "";
            foreach ($dane as $key => $val) {
                if ($val === false or $val === NULL) {
                    $errors .= $key . " ";
                }
            }

            if ($errors === "") {
                $this->rezerwacja = new Rezerwacja($dane['nrtel'], $dane['zajecia'],
                        $dane['data'], $dane['godzina']);
            } else {
                echo "<p>Błędne dane:$errors</p>";
                $this->rezerwacja = NULL;
            }
            return $this->rezerwacja;
        }
    }

}
