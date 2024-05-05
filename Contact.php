<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <meta name="main" content="width=device-width,initial-scale=1.0">
            <title>GIRLEE CLOTHING</title>
            <link rel="stylesheet" href="Contact.css">
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

        <main>
            <section class="contact"> 
                <div class="conct">
                    <h2>GET IN TOUCH</h2>
                    <P>WE LOVE TO HEAR FROM YOUR. LET US KNOW IF YOU ARE ANY INQUERY, SUGGESTIONS OR FEEDBACK. TEAM "GIRLEE" WILL GET BACK YOU WITH IN HOURS.</P>
                </div>

                <div class="container1">
                    <div class="contInfo">
                        <div class="box">
                            <div class="content">
                                <h3>ADDRESS</h3><br>
                                <ul>
                                    <li><h3><span>GIRLEE</span> CLOTHING (PVT)LTD</h3></li>
                                    <li>Kegalle,</li>
                                    <li>Sri Lanka.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="box">
                            <div class="content">
                                <h3>MOBILE NUMBER</h3><br>
                                <p>+94777847417</p>
                            </div>
                        </div>

                        <div class="box">
                            <div class="content">
                                <h3>EMAIL</h3><br>
                                <p>hello@girlee.lk</p>
                            </div>
                        </div>
                    </div>
                    
                <div class="conForm">
                    <form>
                        <h3>SEND YOUR FEEDBACK</h3>

                        <div class="inputBox">
                            <input type="text" name="" placeholder="NAME" required>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="" placeholder="EMAIL" required>
                        </div>

                        <div class="inputBox">
                            <textarea name="text" placeholder="COMMENT" required></textarea>
                        </div>

                        <button type="submit" class="btnSend">SEND</button>
                    </form>
                </div>

                </div>
            </section>
        </main>

        <!--------------------------------------------------------------------------------------------->

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

        <!--------------------------------------------------------------->

        <script>

            ScrollReveal({
                reset: true,
                distance: '60px',
                duration: 1500,
                delay: 200
            });

            scrollreveal().reveal('.contInfo',{delay:200,origin:'top'});


            ScrollReveal().reveal('.footer-col',{delay:200,origin:'left'});         
        
        </script>
    </body>
</html>