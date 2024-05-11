<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

$is_admin = false; // Set default value to false
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin') {
    $is_admin = true;
}

include_once "database.php";

// Fetch clothing details from the database table
// Assuming you have a table named 'clothings' with columns 'id', 'name', 'image', 'price', etc.
// Adjust the SQL query according to your table structure
$sql = "SELECT * FROM clothings";
$result = mysqli_query($conn, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Clothing items found, loop through the results
    $clothings = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    // No clothing items found
    $clothings = array(); // Empty array
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="main" content="width=device-width,initial-scale=1.0">
    <title>GIRLEE CLOTHING</title>
    <link rel="stylesheet" href="./css/shopMain.css">
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
            <a href="Contact.php">CONTACT US</a>

            <a href="cart.php">
                <img src="images/shopping-bag.png" alt="Cart" class="cart">
            </a>

            <!-- <a href="#"><img src="shopping-bag.png" alt="cart" class="cart"></a>-->

            <?php if ($is_admin) : ?>
                <button class="login" type="button" onclick="location.href='dashboard.php'">DASHBOARD</button>
            <?php else : ?>
                <button class="login" type="button" onclick="location.href='signout_process.php'">SIGN OUT</button>
            <?php endif; ?>
        </nav>
    </header>

    <section class="stock">
        <div class="title">
            <h2>NEW COLLECTION</h2>
        </div>

        <div class="collection">
            <?php foreach ($clothings as $clothing) : ?>
                <div class="row2">
                    <img src="images/<?php echo $clothing['image']; ?>" alt="<?php echo $clothing['name']; ?>">
                    <!-- Assuming 'image' column contains the image file name -->
                    <div class="rattings">
                        <!-- Assuming you want to display star ratings -->
                        <!-- You can adjust this based on your requirements -->
                        <!-- This part can also be fetched from the database if ratings are stored there -->
                    </div>
                    <div class="price">
                        <h5><?php echo $clothing['name']; ?></h5>
                        <p>RS.<?php echo $clothing['price_low']; ?> - RS.<?php echo $clothing['price_high']; ?></p>
                        <!-- Assuming 'price_low' and 'price_high' columns contain the price range -->
                        <button class="btnCart">ADD TO CART</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row1">
                <div class="footer-col">
                    <ul>
                        <li>
                            <h3><span>GIRLEE</span> CLOTHING (PVT)LTD</h3>
                        </li>
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

        ScrollReveal().reveal('.title h2', {
            delay: 200,
            origin: 'top'
        });
        ScrollReveal().reveal('.row', {
            delay: 200,
            origin: 'left'
        });
        ScrollReveal().reveal('.collection', {
            delay: 200,
            origin: 'bottom'
        });

        ScrollReveal().reveal('.footer-col', {
            delay: 200,
            origin: 'left'
        });
    </script>

</body>

</html>