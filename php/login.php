<?php
// Start the session
session_start();

require_once 'database.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check if the username and password exist in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = executeQuery($sql);

    if ($result->num_rows > 0) {
        // Fetch user data from the result
        $user = $result->fetch_assoc();

        // Store user ID and user type in session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_type'] = $user['type'];

        // Redirect the user based on user type
        if ($user['type'] == 'admin') {
            // Redirect admin user to dashboard
            header("Location: main.php");
            exit();
        } else {
            // Redirect regular user to main page
            header("Location: main.php");
            exit();
        }
    } else {
        // Username or password is incorrect
        echo "Invalid username or password";
    }
}



echo '
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="main" content="width=device-width,initial-scale=1.0">
        <title>GIRLEE CLOTHING</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link href=\'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\' rel=\'stylesheet\'>
        <script src="https://unpkg.com/scrollreveal"></script>
    </head>
    <body>
        <header class="header">
            <h3 class="name"><span>GIRLEE</span> CLOTHING</h3>

            <nav class="navbar">
                
                    <a href="Gilee.php">HOME</a>
                    <a href="main.php">SHOP</a>
                    <a href="#">ABOUT US</a>
                    <a href="Contact.php">CONTACT US</a>
                
                    <a href="cart.php"><img src="images/shopping-bag.png" alt="cart" class="cart"></a>

                
            </nav>
        </header>
        <main>
            <section>
                <div class="wrp">
                    <form action="" method="post">
                        <h1>LOGIN</h1>
                        <div class="txtBox">
                            <input type="text" placeholder="USERNAME" name="username" required>
                            <!--<i class=\'bx bx-user\'></i>-->
                        </div>
                        <div class="txtBox">
                            <input type="password" placeholder="PASSWORD" name="password" required>
                            <!--<i class=\'bx bxs-lock\' ></i>-->
                        </div>
                        <div class="chkMe">
                            <label><input type="checkbox">&nbsp;REMEMBER ME</label>
                            <a href="#">FORGOT PASSWORD?</a>
                        </div>

                        <BUtton type="submit" class="btnLogin">LOGIN</BUtton>

                        <div class="register">
                            <p>DON\'T HAVE AN ACCOUNT? <a href="#" onclick="location.href=\'register.php\'">REGISTER</a></p>
                        </div>
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
                distance: \'60px\',
                duration: 1500,
                delay: 200
            });

            ScrollReveal().reveal(\'.wrp h1\',{delay:200,origin:\'top\'});
            ScrollReveal().reveal(\'.txtBox\',{delay:200,origin:\'left\'});
            ScrollReveal().reveal(\'.chkMe\',{delay:200,origin:\'bottom\'});
            ScrollReveal().reveal(\'.btnLogin\',{delay:200,origin:\'right\'});
            ScrollReveal().reveal(\'.register\',{delay:200,origin:\'bottom\'});
            
            ScrollReveal().reveal(\'.footer-col\',{delay:200,origin:\'left\'});

        </script>
    </body>
</html>
';
?>