<?php
// Include the database connection file
require_once 'database.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Insert data into the database
    $sql = "INSERT INTO users (name, username, address, email, mobile_number, password) VALUES ('$name', '$username', '$address', '$email', '$mobile_number', '$password')";

    if (executeQuery($sql)) {
        // Registration successful
        echo "Registration successful";
        // Redirect the user to the login page or any other page
        header("Location: main.php");
        exit();
    } else {
        // Registration failed
        echo "Registration failed";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="main" content="width=device-width,initial-scale=1.0">
    <title>GIRLEE CLOTHING</title>
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <header class="header">
        <h3 class="name"><span>GIRLEE</span> CLOTHING</h3>
        <nav class="navbar">
            <a href="Gilee.php">HOME</a>
            <a href="main.php">SHOP</a>
            <a href="#">ABOUT US</a>
            <a href="#">CONTACT US</a>
            <a href="cart.php"><img src="images/shopping-bag.png" alt="cart" class="cart"></a>
        </nav>
    </header>
    <main>
        <section>
            <div class="wrap">
                <form action="" method="post">
                    <h1>REGISTRATION</h1>
                    <div class="input">
                        <input type="text" placeholder="NAME" name="name" required>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="USERNAME" name="username" required>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="ADDRESS" name="address" required>
                    </div>
                    <div class="input">
                        <input type="email" placeholder="EMAIL" name="email" required>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="MOBILE NUMBER" name="mobile_number" required>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="PASSWORD" name="password" required>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="CONFIRMATION PASSWORD" name="confirm_password" required>
                    </div>
                    <button type="submit" class="btnResi">REGISTER</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <!-- Footer content -->
    </footer>
    <div class="copyWrite">
        <p>COPYWRITE 2024 GIRLEE CLOTHING(PVT)LTD. ALL RIGHTS RESERVED.</p>
    </div>
    <script>
        // ScrollReveal settings
    </script>
</body>
</html>
