<?php
session_start();

?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" href="stylesklep.css" rel="stylesheet" />
        <link type="text/css" href="styleheader1.css" rel="stylesheet" />
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
            <!--My account -->
            <div class="icons">
                <!-- shopping cart-->
                <div class="shopping-cart">
                    <div class="sum-prices">
                    <!-- logo -->
                    <i class="fas fa-shopping-cart shoppingCartButton" style="font-size:24px"></i>
                    <!-- ammount -->
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

        <!-- PRODUCTS -->
        <main>
            <section class="main-section">
                <div class="slideshow-bestseller-box">
                <div class="bestseller">Bestsellery</div>
                <div class="mySlides fade">
                <div class="product-container"> 
                    <div class="products">
                        <!-- product1-->
                        <div class="product">    
                            <div class="product-under">
                                <figure class="product-image">
                                    <img src="candle1.jpg" 
                                    width="300" 
                                    height="300"></img>
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="1"
                                        >
                                            <i class="fas fa-cart-plus"></i>Dodaj do koszyka
                                        </button>
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Lavender Vanilla</h4>
                                    <h6 class="price">
                                        <span class="priceValue">25</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end product1-->
                        <!-- product2-->
                        <div class="product">
                            <div class="product-under">
                                <figure class="product-image">
                                    <img src="candle5.jpg" 
                                    width="300" 
                                    height="300"></img>
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="5"
                                        >
                                            <i class="fas fa-cart-plus"></i>Dodaj do koszyka
                                        </button>
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Grow</h4>
                                    <h6 class="price">
                                        <span class="priceValue">15</span>
                                    </h6>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                   </div>   


                <div class="mySlides fade">
                <div class="product-container"> 
                    <div class="products">
                        <!-- product1-->
                        <div class="product">
                            <div class="product-under">
                                <figure class="product-image">
                                    <!--picture-->
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
                        <!-- product2-->
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
                        <!-- end product2-->
                        </div>
                    </div>
                    </div>   

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                </div>   
                <br>

                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                
                </div>
            </section>

            <script> //support slide show bestsellers
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            }
            </script>

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
