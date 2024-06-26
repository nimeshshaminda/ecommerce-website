<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="./css/customer Insights.css" />
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
                    <a href="#">
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
            <h2>Customer Insights</h2>
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
            <div class="card--wrapper">
                <div class="payment--card
                   light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                             Number Of Registered Customers
                            </span>
                            <span class="amount--value">
                                237
                            </span>
                        </div>
                        <i class="fa fa-users icon 
                        dark-red" ></i>
                    </div>
                </div> 
    
                <div class="payment--card
                light-blue">
                 <div class="card--header">
                     <div class="amount">
                         <span class="title">
                           Demographics
                         </span>
                     </div>
                     <i class="fas fa-user-friends icon 
                     dark-blue"></i>
                 </div>
             </div> 
    
              <div class="payment--card
                   light-green">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                             Customer Feedback
                            </span>
                        </div>
                        <i class="fas fa-comment icon
                        dark-green"></i>
                    </div>
                </div> 
        </div>        
      </div> 
       
      
      <div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Customer Details</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>UserName</th>
                            <th>Address</th>
                            <th>E-mail</th>
                            <th>Mobile Number</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>Nimesh Shaminda</td>
                                <td>nim_shaminda</td>
                                <td>Beddegama,Bamunakotuwa</td>
                                <td>nimesh@gmail.com</td>
                                <td>076 3452716</td>
                            </tr>
                            <tr>
                                <td>sandeepa Vishwagith</td>
                                <td>san_vi</td>
                                <td>polgahwela</td>
                                <td>savi@gmail.com</td>
                                <td>076 8252716</td>
                            </tr>
                            <tr>
                                <td>Isurindu Wickramasinghe</td>
                                <td>isu_wick</td>
                                <td>Rathmalla,Wariyapola</td>
                                <td>sandeepa@gmail.com</td>
                                <td>076 3425016</td>
                            </tr>
                            <tr>
                                <td>Chamath Sandaru</td>
                                <td>chamath_san</td>
                                <td>Ambepussa</td>
                                <td>chamath@gmail.com</td>
                                <td>076 8725532</td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
 </body>
</html>