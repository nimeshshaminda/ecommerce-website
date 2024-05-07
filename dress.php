<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="main" content="width=device-width,initial-scale=1.0">
        <title>GIRLEE CLOTHING</title>
        <link rel="stylesheet" href="dress.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/scrollreveal"></script>
    </head>
    <body>
        <header class="header">
            <h3 class="name"><span>GIRLEE</span> CLOTHING</h3>

            <nav class="navbar">
                
                    <a href="Gilee.php">HOME</a>
                    <a href="shopMain.php">SHOP</a>
                    <a href="#">ABOUT US</a>
                    <a href="Contact.php">CONTACT US</a>
                
                <a href="#"><img src="images/shopping-bag.png" alt="cart" class="cart"></a>

                <button class="login" type="button" onclick="location.href='login.php'">LOGIN</button>
            </nav>
        </header> 

        <section class="hoodieStock">
            <div class="title">
                <h2>DRESS COLLECTION</h2>
            </div>
            
            <div class="row">
                <div>
                    <button type="button" class="menuB" onclick="location.href='shopMain.php'">ALL</button>
                    <button type="button" class="menuB">BEST SELLERS</button>
                    <button type="button" class="menuB">NEW ARRIVAL</button>
                </div>
            </div>

            <div class="collection">

                <div class="row2">
                    <img src="images/AlineScriptcasuald2.webp" alt="">
                    <div class="rattings">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                    <div class="price">
                        <h5>A LINE SCRIPT CASUAL DRESSES</h5>
                        <p>RS.1000.00 - RS.1500.00</p>
                        <button class="btnCart">ADD TO CART</button>
                    </div>
                </div>

                <div class="row2">
                    <img src="images/longSleeveBohemainFlorald1.webp" alt="">
                    <div class="rattings">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                    <div class="price">
                        <h5>BOHEMAIN FLORA DRESSES</h5>
                        <p>RS.1000.00 - RS.1500.00</p>
                        <button class="btnCart">ADD TO CART</button>
                    </div>
                </div>

                <div class="row2">
                    <img src="images/summerd4.jpeg" alt="">
                    <div class="rattings">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                    <div class="price">
                        <h5>SUMMER DRESSES</h5>
                        <p>RS.1000.00 - RS.1500.00</p>
                        <button class="btnCart">ADD TO CART</button>
                    </div>
                </div>

                <div class="row2">
                    <img src="images/Women-s-Floral-Print-A-Line-Midi-Dress-Vintage-High-Waist-Pleated-Three-Quarter-Sleeve-Dresses.webp" alt="">
                    <div class="rattings">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                    <div class="price">
                        <h5>MIDI DRESSES</h5>
                        <p>RS.1000.00 - RS.1500.00</p>
                        <button class="btnCart">ADD TO CART</button>
                    </div>
                </div>

                <div class="row2">
                    <img src="images/MINIDRE.jpeg" alt="">
                    <div class="rattings">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                    <div class="price">
                        <h5>MINI DRESSES</h5>
                        <p>RS.1000.00 - RS.1500.00</p>
                        <button class="btnCart">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row1">
                    <div class="footer-col">
                        <ul>
                            <li><h3><span>GIRLEE</span> CLOTHING (PVT)LTD</h3></li>
                            <li>Kegalle,</li>
                            <li>Sri Lanka.</li>
                            <li></li><br>
                            <li>Phone : 0777847417</li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>FOLLOW US</h4><br><br>
                        <div class="socialMdia">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        
        <div class="copyWrite">
            <p>COPYWRITE 2024 GIRLEE CLOTHING(PVT)LTD. ALL RIGHTS RESERVED.</p>
        </div>

        <!----------------------------------------------------------------------->

        <script>
            ScrollReveal({
                reset: true,
                distance: '60px',
                duration: 1500,
                delay: 200
            });

            ScrollReveal().reveal('.title h2',{delay:200,origin:'top'});
            ScrollReveal().reveal('.row',{delay:200,origin:'left'});
            ScrollReveal().reveal('.collection',{delay:200,origin:'bottom'});
            
            ScrollReveal().reveal('.footer-col',{delay:200,origin:'left'});

        </script>
    </body>
</html>