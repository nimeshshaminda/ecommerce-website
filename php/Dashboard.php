<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

if ($_SESSION['user_type'] !== 'admin') {
    // If the user is not an admin, redirect them to another page or display an error message
    header("Location: login.php"); // Redirect to unauthorized access page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="./css/Dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="sidebar">
    <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="Dashboard.php">
                  <i class="fas fa-tachometer-alt"></i>
                 <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="orders.php">
                  <i class="fas fa-box"></i>
                 <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="inventory.php">
                  <i class="fas fa-warehouse"></i>
                 <span>Inventory</span>
                </a>
            </li>
            <li>
                <a href="customer Insights.php">
                  <i class="fas fa-users"></i>
                 <span>Customer Insight</span>
                </a>
            </li>
            <li>
                <a href="faq.php">
                  <i class="fas fa-question-circle"></i>
                 <span>FAQ</span>
                </a>
            </li>
            <li>
                <a href="settings.php">
                  <i class="fas fa fa-cog"></i>
                 <span>Settings</span>
                </a>
            </li>
            <li class="logout">
                <a href="signout_process.php">
                  <i class="fas 
                  fa-sign-out-alt"></i>
                 <span>LogOut</span>
                </a>
            </li>
        </ul>
  </div>
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <span>Girlee</span>
        <h2>Dashboard</h2>
      </div>
        <div class="user--info">
          <div class="search--box">
             <i class="fas solid fa-search"></i>
              <input type="text"placeholder="Search"/>
          </div>
           <img src="images/mainlogo.jpg"
            alt=""/>
      </div>
    </div>

    <div class="card--container">
        <h3 class="main--title">Sales Overview</h3>
        <div class="card--wrapper">
            <div class="payment--card
               light-red">
                <div class="card--header">
                    <div class="amount">
                        <span class="title">
                        Revenue for The Day
                        </span>
                        <span class="amount--value">
                            Rs.4550.00
                        </span>
                    </div>
                    <i class= "icont">LKR
                    </i>
                </div>
            </div> 

            <div class="payment--card
            light-blue">
             <div class="card--header">
                 <div class="amount">
                     <span class="title">
                       Total Revenue
                     </span>
                     <span class="amount--value">
                        Rs.57850.00
                    </span>
                 </div>
                 <i class="icont
                 dark-blue">LKR</i>
             </div>
         </div> 

          <div class="payment--card
               light-green">
                <div class="card--header">
                    <div class="amount">
                        <span class="title">
                         Best Selling Prodcts
                        </span>
                    </div>
                    <i class="fas fa-trophy icon
                    dark-green"></i>
                </div>
            </div> 

            <div class="payment--card
            light-purple">
             <div class="card--header">
                 <div class="amount">
                     <span class="title">
                        Orders Processed
                     </span>
                 </div>
                 <i class="fas fa-box icon
                 dark-purple"></i>
              </div>
           </div> 
        </div>
    </div> 
     <div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Finance Data</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Transaction Type</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>2024.05.05</td>
                                <td>Expencess</td>
                                <td>office supplies</td>
                                <td>Rs 11500.00</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <td>2024.05.02</td>
                                <td>Income</td>
                                <td>Sales</td>
                                <td>Rs 5000.00</td>
                                <td>Completed</td>                          
                            </tr>
                            <tr>
                                <td>2024.04.30</td>
                                <td>Income</td>
                                <td>Sales</td>
                                <td>Rs 15500.00</td>
                                <td>In Progress</td>
                            </tr>
                            <tr>
                                <td>2024.04.29</td>
                                <td>Expencess</td>
                                <td>Refund</td>
                                <td>Rs 500.00</td>
                                <td>Refunded</td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>