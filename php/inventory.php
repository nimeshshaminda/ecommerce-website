<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="./css/inventory.css" />
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
                <li>
                    <a href="orders.php">
                      <i class="fas fa-box"></i>
                     <span>Orders</span>
                    </a>
                </li>
                <li class="active">
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
                    <a href="#">
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
            <h2>Inventory</h2>
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
                            Product Categories
                            </span>
                        </div>
                        <i class="fa fa-list-alt icon 
                        dark-red" ></i>
                    </div>
                </div> 
    
                <div class="payment--card
                light-blue">
                 <div class="card--header">
                     <div class="amount">
                         <span class="title">
                          Availability
                         </span>
                     </div>
                     <i class="fas fa-check-circle icon 
                     dark-blue"></i>
                 </div>
             </div> 
    
              <div class="payment--card
                   light-green">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                             Quantity in stock
                            </span>
                        </div>
                        <i class="fas fa-cubes icon
                        dark-green"></i>
                    </div>
                </div> 

                <div class="payment--card
                light-purple">
                 <div class="card--header">
                     <div class="amount">
                         <span class="title">
                          suppliers
                         </span>
                     </div>
                     <i class="fas fa-truck icon
                     dark-purple"></i>
                  </div>
               </div> 
               <div class="payment--card
               light-yellow">
                <div class="card--header">
                    <div class="amount">
                        <span class="title">
                           Ware House Locations
                        </span>
                    </div>
                    <i class="fas fa-map-marker-alt icon
                    dark-yellow"></i>
                 </div>
              </div> 
        </div>        
      </div> 

      <div class="add-item--form">
      <h2>Add New Item</h2>
      <form action="add_item_process.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="image">Image URL:</label>
          <input type="text" id="image" name="image" required>
        </div>
        <div class="form-group">
          <label for="price_low">Price (Low):</label>
          <input type="text" id="price_low" name="price_low" required>
        </div>
        <div class="form-group">
          <label for="price_high">Price (High):</label>
          <input type="text" id="price_high" name="price_high" required>
        </div>
        <button type="submit">Add Item</button>
      </form>
    </div>
       

 </body>
</html>