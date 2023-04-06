<?php
session_start();

if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==1))
{
    header('Location: formpage.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous"
        />
        <link type="text/css" href="stylelog.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
        <script src="JS/jquery-3.5.1.min.js"></script>
        <script src="JS/multislider.min.js"></script>
        <title></title>
    </head>

    <body>
        <div class="container">
            
                <div class="formbox">
                    <div class="buttonbox">
                        <div id="opis1" class="opis">Jeśli masz konto:</div>
                        <button type="button" class="guziktoggle" id="login-btn" onclick="login()">Zaloguj się</button>
                        <div id="opis2" class="opis">Jeśli nie masz konta:</div>
                        <button type="button" class="guziktoggle" id="register-btn" onclick="register()" >Zarejestruj się</button>
                    </div>

                    
                        <form id="login" class="input-group-login" action="logowanie.php" method="post">
                            <label class="labelform">Login</label><input type="text" name="login" placeholder="Login" class="input-field">
                            <label class="labelform">Hasło</label><input type="password" name="haslo" placeholder="Hasło" class="input-field">
                            <input type="submit" id="przycisk" value="zaloguj" name="zaloguj" class="submit-btn">
                            <?php
	                            if(isset($_SESSION['blad'])){
                                echo $_SESSION['blad'];
                                unset($_SESSION['blad']);
                                }
                            ?>
                        </form>
                  

                   
                        <form id="register" class="input-group-register" action="rejestracja.php" method="post">
                            <label class="labelform">Imię i nazwisko</label> <input type="text" name="imienazwisko" placeholder="Imię i nazwisko" class="input-field">
                            <label class="labelform">Login</label> <input type="text" name="loginre" placeholder="Login" class="input-field">
                            <label class="labelform">Hasło</label> <input type="password" name="haslore" placeholder="Hasło" class="input-field">
                            <input type="submit" id="przyciskre" value="zarejestruj" name="zarejestruj" class="submit-btn">
                            <?php
	                            if(isset($_SESSION['blad'])){
                                echo $_SESSION['blad'];
                                unset($_SESSION['blad']);
                                }
                            ?>
                        </form>
                
                    

                </div>
         
            
        </div>

        <script src="script.js"></script>
        <script src="shopping-cart.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    </body>
</html>
