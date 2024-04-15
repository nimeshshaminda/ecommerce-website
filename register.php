<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="main" content="width=device-width,initial-scale=1.0">
        <title>GIRLEE CLOTHING</title>
        <link rel="stylesheet" href="register.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/scrollreveal"></script>
        
    </head>

    <body>
        <header class="header">
            <h3 class="name"><span>GIRLEE</span> CLOTHING</h3>

            <nav class="navbar">
                
                    <a href="Gilee.html">HOME</a>
                    <a href="shopMain.html">SHOP</a>
                    <a href="#">ABOUT US</a>
                    <a href="#">CONTACT US</a>
                
                <a href="#"><img src="shopping-bag (1).png" alt="cart" class="cart"></a>
            </nav>
        </header>

        <main>
            <section>
                <div class="wrap">
                    <form action="">
                        <h1>REGISTRATION</h1>
                        <div class="input">
                            <input type="text" placeholder="NAME" required>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="USERNAME" required>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="ADDRESS" required>
                        </div>
                        <div class="input">
                            <input type="email" placeholder="EMAIL" required>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="MOBILE NUMBER" required>
                        </div>
                        <div class="input">
                            <input type="password" placeholder="PASSWORD" required>
                        </div>
                        <div class="input">
                            <input type="password" placeholder="CONFIRMATION PASSWORD" required>
                        </div>

                        <button type="submit" class="btnResi">REGISTER</button>
                    </form>
                </div>
            </section>
        </main>


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

        <!--------------------------------------------------------------------------->

        <script>
            ScrollReveal({
                reset: true,
                distance: '60px',
                duration: 1500,
                delay: 200
            });

            ScrollReveal().reveal('.wrap h1',{delay:200,origin:'top'});
            ScrollReveal().reveal('.input',{delay:200,origin:'left'});
            
            ScrollReveal().reveal('.btnResi',{delay:200,origin:'right'});
            
            
            ScrollReveal().reveal('.footer-col',{delay:200,origin:'left'});

        </script>
    </body>
</html>