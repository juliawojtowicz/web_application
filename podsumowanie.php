<?php

	session_start();

?>

<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" href="styleheader1.css" rel="stylesheet" />
        <link type="text/css" href="stylepodsumowanie.css" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous"
        />
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="jquery-3.5.1.min.js"></script>
        <script src="multislider.min.js"></script>
        <title>ProjekcikGrochocika</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    
        <body>
        <div class="containerHeader" style="display: none">
            <!--header-->
            <header class="box" >
                <button id="menuButton"><i class="fas fa-bars"></i></button>
                <!--Logo-->
                <h2 class="logo"><a href="sklep.php">candles&plants</a></h2>
                <nav class="links">
                    <a>podstrona1</a>
                    <a>podstrona2</a>
                    <a href="contactpage.php">Kontakt</a>
                </nav>
                <!--My account -->
                <div class="icons">
                    <div class="account">
                        <a href="stronalog.php">
                        <button class="account-btn"> <i class="fas fa-user-alt" style="font-size:24px"></i></button>
                        <span class="account-text">Moje konto</span>
                        </a>
                    </div>
                    <!-- shoppin cart-->
                    <div class="shopping-cart">
                        <div class="sum-prices">
                        <!-- logo -->
                        <i class="fas fa-shopping-cart shoppingCartButton" style="font-size:24px"></i>
                        <!-- amount-->
                        <h6 id="sum-prices"></h6>
                    </div>
                </div>
                <div class="producstOnCart hide"> 
                    <div class="overlay"></div>
                    <div class="top">
                        <button id="closeButton">
                            <i class="fas fa-times-circle"></i>
                        </button>
                        <h3>Koszyk</h3>
                    </div>
                    <ul id="buyItems">
                        <h4 class="empty">koszyk jest pusty</h4>
                    </ul>
                    <div class="suma-display">
                        <div style="display: none" id="suma"></div><h6 id="sum-all-prices"></h6>
                    </div>
                        <form action="stronalog.php" method="post">
                        <button class="checkout">Złóż zamówienie</button>
                    </form>
                </div>
            
            </header>
            </div>

        <div class="container">
            <div class="box">
                <div class="podsumowanietekst">Podsumowanie Twojego zamówienia</div>
                <div class="containersum">
                    <div class="podsumowaniediv"> 
                        <div class="twojezamowienie">Twoje zamówienie:</div>
                        <ul id="podsumowanie">
                            <h4 class="empti">koszyk jest pusty</h4>
                        </ul>
                        <div class="summary_suma-display">
                            <div id="summary_suma"></div><h6 id="summary_sum-all-prices"></h6>
                        </div>
                    </div>

                    <div class="shipment">
                        <div class="info">Informacje do wysyłki:</div>
                
                        <div class="wiersz"><?php echo $_SESSION["imie"];?> <?php echo $_SESSION["nazwisko"]?><br></div>
                        <div class="wiersz"><?php echo $_SESSION["email"]?><br></div>
                        <div class="wiersz"><?php echo $_SESSION["numer"]?><br></div>
                        <div class="wiersz"><?php echo $_SESSION["ulica"]?> <?php echo $_SESSION["numerdomu"]?><br></div>
                        <div class="wiersz"><?php echo $_SESSION["miasto"]?> <?php echo $_SESSION["kod"]?></div>
                    </div>
                </div>
                <div class="powrot"><a href="sklep.php" class="submit-btn">Powrót do sklepu</a></div>
               
            </div>
        </div>
        <script src="script.js"></script>
        <script src="shopping-cart.js"></script>
    </body>
</html>

