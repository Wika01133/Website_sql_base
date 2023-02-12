<?php

class RegistrationForm {

    protected $user;

    function __construct() {
        ?>
        <form action="" method="post">
            Nazwa użytkownika: <br/><input name="userName" /><br/>
            Nazwisko: <br/><input name="fullName" /><br/>
            Haslo: <br/><input name="passwd" /><br/>
            Email: <br/><input name="email" /><br/>

            <?php
            print "</br>";
            print "<input type='submit' name='submit' value='Rejestruj' />";
            print "<input type='submit' name='submit' value='Anuluj' />";
            
            ?>
            
        </form>
            </br>
            <form action="processLogin.php" style="text-align: center;">
                <input type="submit" value="Logowanie" />
            </form>
        <?php
    }

    function checkUser() { // walidacja, sprawdzenie poprawnosci
        if ($_POST['submit'] == 'Anuluj') {
            $_POST = NULL;
        } else {
            $args = [
                'userName' => ['filter' => FILTER_VALIDATE_REGEXP,
                    'options' => ['regexp' => '/^[0-9A-Za-ząęłńśćźżó_-]{2,25}$/']
                ],
                'fullName' => ['filter' => FILTER_VALIDATE_REGEXP,
                    'options' => ['regexp' => '/^[0-9A-Za-ząęłńśćźżó_-]{2,25}$/']
                ],
                'email' => FILTER_VALIDATE_EMAIL,
            ];
            $dane = filter_input_array(INPUT_POST, $args);
            $errors = "";
            foreach ($dane as $key => $val) {
                if ($val === false or $val === NULL) {
                    $errors .= $key . " ";
                }
            }

            if ($errors === "") {
                $this->user = new User($dane['userName'], $dane['fullName'],
                        $dane['email'], $_POST['passwd']);
            } else {
                echo "<p>Błędne dane:$errors</p>";
                $this->user = NULL;
            }
            return $this->user;
        }
    }

}
