<?php

	session_start();
	

    if (!isset($_SESSION['zalogowany'])) 
	{
		header('Location: stronalog.php');
		exit();
	}
	
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <title>Sklep</title>
        <script src="code.js"></script>
        <link rel="stylesheet" href="styleform.css" type="text/css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" rel="stylesheet" />
        
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="jquery-3.5.1.min.js"></script>
        <script src="multislider.min.js"></script>

    </head>
    <body>

        <!-- FORM -->
        
            <div class="container">
                <div class="formbox">
                    <div class="powitanie" style="font-size:48px;">
                        <?php
                            if ($_SESSION['zalogowany'] = 1) {
                            echo $_SESSION['login'].', witaj na stronie! ';
                            }
                        ?>
                    </div>
                    <div class="tekst">Proszę wypełnij dane do wysyłki:)</div>
                    <div id="formularz">
                        <?php
	                        if(isset($_SESSION['blad'])){
                            echo $_SESSION['blad'];
                            unset($_SESSION['blad']);
                            }
                        ?>
                    <form method="POST" name="user_data" action="check.php">

                    <div class="kolumnycontainer">
                        <div class="kolumna" style="padding-right: 5%;">
                            <div class="row">
                                <div class="labelform"><span class="spanform">Imię *</span></div>
                                <div class="inputfield"><input class="inputform" type="text" name="imie" value="<?php if(isset($_SESSION["imie"])) {echo $_SESSION["imie"]; unset($_SESSION["imie"]);} ?>"></div>
                            </div>
                            <?php
                                if (isset($_SESSION["imie_error"])) {
                                    echo $_SESSION["imie_error"];
                                    unset($_SESSION["imie_error"]);
                                }
                            ?>
                            <div class="row">
                                <div class="labelform"><span class="spanform">Nazwisko *</span></div>
                                <div class="inputfield"><input class="inputform" type="text" name="nazwisko" value="<?php if(isset($_SESSION["nazwisko"])) {echo $_SESSION["nazwisko"]; unset($_SESSION["nazwisko"]);} ?>"></div>
                            </div>
                            <?php
                                if (isset($_SESSION["nazwisko_error"])) {
                                    echo $_SESSION["nazwisko_error"];
                                    unset($_SESSION["nazwisko_error"]);
                                }
                            ?>
                       
                            <div class="row">
                                <div class="labelform"><span class="spanform">Adres e-mail *</span></div>
                                <div class="inputfield"><input type="email" class="inputform" name="email" value="<?php if(isset($_SESSION["email"])) {echo $_SESSION["email"]; unset($_SESSION["email"]);} ?>"></div>
                            </div>
                            <?php
                                if (isset($_SESSION["email_error"])) {
                                echo $_SESSION["email_error"];
                                unset($_SESSION["email_error"]);
                                }
                            ?>
                            <div class="row">
                                <div class="labelform"><span class="spanform">Numer telefonu *</span></div>
                                <div class="inputfield"><input type="tel" class="inputform" name="numer" value="<?php if(isset($_SESSION["numer"])) {echo $_SESSION["numer"]; unset($_SESSION["numer"]);} ?>"></div>
                            </div>
                            <?php
                                if (isset($_SESSION["numer_error"])) {
                                    echo $_SESSION["numer_error"];
                                    unset($_SESSION["numer_error"]);
                                }
                            ?>
                        </div>

                        <div class="kolumna" style="padding-right: 5%;"">
                            <div class="row">
                                <div class="labelform"><span class="spanform">Nazwa ulicy</span></div>
                                <div class="inputfield"><input type="text" class="inputform" name="ulica" value="<?php if(isset($_SESSION["ulica"])) {echo $_SESSION["ulica"]; unset($_SESSION["ulica"]);} ?>"></div>
                        </div>
                            <?php
                                if (isset($_SESSION["ulica_error"])) {
                                    echo $_SESSION["ulica_error"];
                                    unset($_SESSION["ulica_error"]);
                                }
                            ?>
                        <div class="row">
                            <div class="labelform"><span class="spanform">Numer domu/mieszkania</span></div>
                            <div class="inputfield"><input type="text" name="numerdomu" class="inputform" value="<?php if(isset($_SESSION["numerdomu"])) {echo $_SESSION["numerdomu"]; unset($_SESSION["numerdomu"]);} ?>"></div>
                        </div>
                            <?php
                                if (isset($_SESSION["numerdomu_error"])) {
                                    echo $_SESSION["numerdomu_error"];
                                    unset($_SESSION["numerdomu_error"]);
                                }
                            ?>
                    
                            <div class="row">
                                <div class="labelform"><span class="spanform">Kod pocztowy</span></div>
                                <div class="inputfield"><input type="text" name="kod" class="inputform" value="<?php if(isset($_SESSION["kod"])) {echo $_SESSION["kod"]; unset($_SESSION["kod"]);} ?>"></div>
                            </div>
                            <?php
                                if (isset($_SESSION["kod_error"])) {
                                    echo $_SESSION["kod_error"];
                                    unset($_SESSION["kod_error"]);
                                }
                            ?>
                            <div class="row">
                                <div class="labelform"><span class="spanform">Miasto</span></div>
                                <div class="inputfield"><input type="text" name="miasto" class="inputform" value="<?php if(isset($_SESSION["miasto"])) {echo $_SESSION["miasto"]; unset($_SESSION["miasto"]);} ?>"></div>
                            </div>
                            <?php
                                if (isset($_SESSION["miasto_error"])) {
                                    echo $_SESSION["miasto_error"];
                                    unset($_SESSION["miasto_error"]);
                                }
                            ?>
                        </div>
                        
                    </div>
                    <div class="dostawa">

                        <div class="spanform">Sposób dostawy</div>
                        <div class="checkbox"><input class="checkboxinput" type="radio" name="dostawa" value="1"><label>Kurier DPD</label></div>
                        <div class="checkbox"><input type="radio" class="checkboxinput" name="dostawa" value="2"><label>Poczta Polska</label></div>
                        <div class="checkbox"><input type="radio" class="checkboxinput" name="dostawa" value="3"><label>Kurier GLS</label></div>
                    <div>
                    <div class="warunek">
                        <div><input type="checkbox"></div><div class="regulamin">Przeczytałem(am) i zrozumiałem(am) informacje dotyczące korzystania z moich danych osobowych wyjaśnione w Polityce Prywatności</div>
                            </div>
                    <div class="guziki">
                        <div class="przeslij" style="margin-top: 15px;">
                            <input class="submit-btn" type="submit" value="Prześlij">
                        </div>
                    </div>
                    </form>
                    
                    <form action="wylogowanie.php" method="post" id="wyloguj">
                        <input type="submit" class="submit-btn" value="Wyloguj się" name="wyloguj">
                    </form>
                    </div>
                    </div>
                       
  
    
    </body>
    <script src="script.js"></script>
    <script src="shopping-cart.js"></script>
</html>

