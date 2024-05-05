<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="main" content="width=device-width,initial-scale=1.0">
        <title>GIRLEE CLOTHING</title>
        <link rel="stylesheet" href="girleeStyle.css">
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
                
                <a href="#"><img src="shopping-bag.png" alt="cart" class="cart"></a>

                <button class="login" type="button" onclick="location.href='login.php'">LOGIN</button>

                
            </nav>
        </header>

        <section class="mainH">
            <div class="maintxt">
                <h4>WELCOME TO <br>GIRLEE CLOTHING</h4><br>
                <h3>WE'RE OFFERING HIGH QUALITY PRODUCT TO OUR VALUABLE CUSTOMERS</h3>
                <button class="shop" onclick="location.href='shopMain.php'">SHOP NOW <i class='bx bx-right-arrow-alt' ></i></button>
            </div>
        </section>

        <section>
            <div class="stock">
                <h1>CATEGORIES</h1>
            </div>

            <div class="row">
                <div class="col">
                    <a href="hoodie.php" class="hooimg"><img src="h.webp" alt="hoodies" height="500px" width="250px"></a>
                    <div class="cont">
                        <h3>HOODIES</h3>
                    </div>
                </div>
                <div class="col">
                    <a href="t-shirt.php"><img src="tt.jpg" alt="tSHIRTS" height="500px" width="250px"></a>
                    <h3>T-SHIRTS</h3>
                </div>
                <div class="col">
                    <a href="jacket.php"><img src="OIP.jpeg" alt="jackets" height="500px" width="250px"></a>
                    <h3>JACKETS</h3>
                </div>
                <div class="col">
                    <a href="dress.php"><img src="Women-s-Floral-Print-A-Line-Midi-Dress-Vintage-High-Waist-Pleated-Three-Quarter-Sleeve-Dresses.webp" alt="dresses" height="500px" width="250px"></a>
                    <h3>DRESSESS</h3>
                </div>
                <div class="col">
                    <a href="jeans.php"><img src="OIP (1).jpeg" alt="jeans" height="500px" width="250px"></a>
                    <h3>JEANS</h3>
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

        <!----------------------------------------------------------------------------->

        <script>
            ScrollReveal({
                reset: true,
                distance: '60px',
                duration: 1500,
                delay: 200
            });

            ScrollReveal().reveal('.maintxt h4',{delay:200,origin:'left'});
            ScrollReveal().reveal('.maintxt h3',{delay:200,origin:'right'});
            ScrollReveal().reveal('.maintxt',{delay:200,origin:'bottom'});

            ScrollReveal().reveal('.stock',{delay:200,origin:'bottom'});

            ScrollReveal().reveal('.col',{delay:200,origin:'bottom'});

            ScrollReveal().reveal('.footer-col',{delay:200,origin:'left'});


        </script>
    </body>
</html>