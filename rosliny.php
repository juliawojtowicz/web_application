<?php
session_start();

?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" href="styleheader1.css" rel="stylesheet" />
        <link type="text/css" href="styleprodukty.css" rel="stylesheet" />
        <!-- <link type="text/css" href="main.css" rel="stylesheet" /> -->
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
        <title>Sklep</title>
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
            <!-- My account -->
            <div class="icons">
                <!-- shopping cart-->
                <div class="shopping-cart">
                    <div class="sum-prices">
                    <!-- logo -->
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

        <!-- PRODUKTY -->
        <main class="products">
            <section class="product-box">

                <div class="product">    
                            <div class="product-under">
                                <figure class="product-image">
                                    <img src="plant1.png" 
                                    width="300" 
                                    height="300"></img>
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="7"
                                        >
                                            <i class="fas fa-cart-plus"></i>Dodaj do koszyka
                                        </button>
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Monstera</h4>
                                    <h6 class="price">
                                        <span class="priceValue">50</span>
                                    </h6>
                                </div>
                            </div>
                    </div>
            
            </section>
            <section class="product-box">

            <div class="product">
                            <div class="product-under">
                                <figure class="product-image">
                                    <img src="plant2.png" 
                                    width="300" 
                                    height="300"></img>
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="8"
                                        >
                                            <i class="fas fa-cart-plus"></i>Dodaj do koszyka
                                        </button>
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Aglaonema</h4>
                                    <h6 class="price">
                                        <span class="priceValue">15</span>
                                    </h6>
                                </div>
                            </div>
                    </div>
            
            </section>
            
            <section class="product-box">

                <div class="product">    
                            <div class="product-under">
                                <figure class="product-image">
                                    <img src="plant3.png" 
                                    width="300" 
                                    height="300"></img>
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="9"
                                        >
                                            <i class="fas fa-cart-plus"></i>Dodaj do koszyka
                                        </button>
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Peperomia</h4>
                                    <h6 class="price">
                                        <span class="priceValue">17</span>
                                    </h6>
                                </div>
                            </div>
                    </div>
            
            </section>
            <section class="product-box">

                <div class="product">    
                            <div class="product-under">
                                <figure class="product-image">
                                    <img src="plant4.png" 
                                    width="300" 
                                    height="300"></img>
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="10"
                                        >
                                            <i class="fas fa-cart-plus"></i>Dodaj do koszyka
                                        </button>
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Fikus</h4>
                                    <h6 class="price">
                                        <span class="priceValue">10</span>
                                    </h6>
                                </div>
                            </div>
                    </div>
            
            </section>
            <section class="product-box">

            <div class="product">
                            <div class="product-under">
                                <figure class="product-image">
                                    <img src="plant5.png" 
                                    width="300" 
                                    height="300"></img>
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="11"
                                        >
                                            <i class="fas fa-cart-plus"></i>Dodaj do koszyka
                                        </button>
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Zamiokulkas</h4>
                                    <h6 class="price">
                                        <span class="priceValue">10</span>
                                    </h6>
                                </div>
                            </div>
                    </div>
            
            </section>
            
            <section class="product-box">

                <div class="product">    
                            <div class="product-under">
                                <figure class="product-image">
                                    <img src="plant6.png" 
                                    width="300" 
                                    height="300"></img>
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="12"
                                        >
                                            <i class="fas fa-cart-plus"></i>Dodaj do koszyka
                                        </button>
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Areka</h4>
                                    <h6 class="price">
                                        <span class="priceValue">17</span>
                                    </h6>
                                </div>
                            </div>
                    </div>
            
            </section>
            <section class="product-box">

                <div class="product">    
                            <div class="product-under">
                                <figure class="product-image">
                                    <img src="plant7.png" 
                                    width="300" 
                                    height="300"></img>
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="13"
                                        >
                                            <i class="fas fa-cart-plus"></i>Dodaj do koszyka
                                        </button>
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Alokazja</h4>
                                    <h6 class="price">
                                        <span class="priceValue">25</span>
                                    </h6>
                                </div>
                            </div>
                    </div>
            
            </section>
            <section class="product-box">

            <div class="product">
                            <div class="product-under">
                                <figure class="product-image">
                                    <!--zdjecie-->
                                    <img src="plant8.png" 
                                    width="300" 
                                    height="300"></img>
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="14"
                                        >
                                            <i class="fas fa-cart-plus"></i>Dodaj do koszyka
                                        </button>
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Piper</h4>
                                    <h6 class="price">
                                        <span class="priceValue">35</span>
                                    </h6>
                                </div>
                            </div>
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
