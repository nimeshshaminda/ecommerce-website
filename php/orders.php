<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="./css/orders.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
 <body>
    <div class="sidebar">
        <div class="logo"></div>
            <ul class="menu">
                <li >
                    <a href="Dashboard.php">
                      <i class="fas fa-tachometer-alt"></i>
                     <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
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
                    <a href="#">
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
            <h2>Orders</h2>
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

        <div class="tabular--wrapper">
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>OrderId</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>2024.05.06</td>
                                <td>os2356</td>
                                <td>Dress</td>
                                <td>Rs 7500.00</td>
                                <td>In progress</td>
                            </tr>
                            <tr>
                                <td>2024.05.05</td>
                                <td>os1245</td>
                                <td>Casual t-shirt</td>
                                <td>Rs 1500.00</td>
                                <td>Shipped</td>
                            </tr>
                            <tr>
                                <td>2024.05.02</td>
                                <td>os1345</td>
                                <td>Hodiee</td>
                                <td>Rs 5000.00</td>
                                <td>Completed</td>                          
                            </tr>
                            <tr>
                                <td>2024.04.30</td>
                                <td>os2356</td>
                                <td>Jeans</td>
                                <td>Rs 4500.00</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>2024.04.29</td>
                                <td>os2356</td>
                                <td>Dress</td>
                                <td>Rs 8600.00</td>
                                <td>Completed</td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
 </body>
</html>