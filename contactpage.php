<?php
session_start();

?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" href="styleheader1.css" rel="stylesheet" />
        <link type="text/css" href="stylecontact.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous"
        />
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="jquery-3.5.1.min.js"></script>
        <script src="multislider.min.js"></script>
        <title></title>
    </head>

    <body>
        <div class="containerHeader">
            <!--header-->
            <header class="box">
                <button id="menuButton"><i class="fas fa-bars"></i></button>
                <!--Logo-->
                <h2 class="logo"><a href="sklep.php">candles&plants</a></h2>
                
                <nav class="links">
            <div class="dropdown">
                <a href="produkty.php">Produkty</a>
                <div class="dropdown-content">
                    <a href="swiece.php">Świece</a>
                    <a href="rosliny.php">Rośliny</a>
                </div>
                </div>
                <a href="contactpage.php">Kontakt</a>
            </nav>

                <!--Moje konto -->
                <div class="icons">
                    <!-- Shopping cart-->
                    <div class="shopping-cart">
                        <div class="sum-prices">
                        <!-- logo shopping cart-->
                        <i class="fas fa-shopping-cart shoppingCartButton" style="font-size:24px"></i>
                        <!-- amount -->
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

        <main>
        <section class="main-section">
            <div class="info">
                <div class="info-text">
                    <div class="oHours">
                    <h1>Godziny otwarcia</h1>
                    <span>
                        pon.-pt.: 10:00 - 17:00<br>
                        sb.: 9:00 - 14:00
                    </span>
                    </div>
                    <div class="contactDetails">
                    <h1>Dane kontaktowe</h1>
                    <span>
                        candlesandplants@cp.pl<br>
                        +48 123 456 788
                    </span>
                    </div>
                </div>
                <div class="map">
                <h2>Odwiedź candles&plants stacjonarnie</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2562.199238805662!2d19.94473983837585!3d50.0450988755325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b43649d16c3%3A0x8843d3aa10e5c73d!2zUnluZWsgUG9kZ8OzcnNraSwgS3Jha8Ozdw!5e0!3m2!1spl!2spl!4v1655155359603!5m2!1spl!2spl" width="460" height="345" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="formbox">
                    <h1>Formularz kontaktowy</h1>
                    <form name="contactForm" onsubmit="return validateForm()" method="post">
                            <input type="text" name="mobile" placeholder="Numer telefonu*" class="firstInForm">
                            <input type="text" name="email" placeholder="Adres email*" class="firstInForm">
                            <textarea type="message" id="messageContact" name="message" placeholder="Treść wiadomości*" class="secondInForm"></textarea>
                            <input type="submit" value="Wyślij" class="sendMessage-btn">

                    </form>
                    <h6>Informujemy, iż odpowiedź na Państwa pytanie zostanie udzielona na podany adres e-mail.</h6>
                    <div  id="approved"></div>
                    <font color="red"><div id="error"></div></font>
            </div>
        </section>
        <div class="podsumowanie hide"> 
            <div class="overlay"></div>
                <div class="top">
                    <h3>Koszyk</h3>
                </div>
                <ul id="podsumowanie">
                    <h4 class="empti">koszyk jest pusty</h4>
                </ul>
                <div class="suma-display">
                    <div style="display: none" id="suma"></div><h6 id="sum-all-prices"></h6>
                </div>
        </div>
        </main>

        <script src="script.js"></script>
        <script src="shopping-cart.js"></script>
        </div>
    </body>
</html>
