<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Girlee Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .header {
            background-color: #333;
            color: rgb(248, 0, 99); 
            text-align: center;
            padding: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .back-button {
            padding: 10px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            margin-left: 20px;
            display: inline-block;
        }

        .back-button:hover {
            background-color: #555;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .cart {
            width: 55%;
            border-right: 1px solid #ccc;
            padding-right: 20px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
        }

        .payment {
            width: 40%;
            padding-left: 20px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
        }

        .cart h2 {
            color: #333;
        }

        .cart-list {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        .cart-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .cart-list img {
            width: 60px;
            height: 60px;
            border-radius: 5px;
        }

        .cart-list .item-info {
            display: flex;
            align-items: center;
            flex: 1;
        }

        .cart-list .item-actions {
            display: flex;
            align-items: center;
        }

        .cart-list .item-actions span {
            margin: 0 10px;
        }

        .cart-list button {
            padding: 5px 10px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        .cart-list button:hover {
            background-color: #555;
        }

        .delete-button {
            padding: 5px 10px;
            background-color: #e53935; 
            color: white;
            border: none;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #c62828;
        }

        .clear-cart {
            padding: 10px;
            background-color: #e53935;
            color: white;
            border: none;
            cursor: pointer;
            float: right;
        }

        .clear-cart:hover {
            background-color: #c62828;
        }

        .buy-now {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            float: right;
        }

        .buy-now:hover {
            background-color: #555;
        }

        .payment h2 {
            color: #333;
        }

        .payment-methods {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .payment-methods li {
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .payment-methods img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .price-box {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 15px;
            margin-top: 20px;
        }

        .pay-now {
            background-color: #333;
            color: white;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            float: right;
        }

        .pay-now:hover {
            background-color: #555;
        }

        input[type="text"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            margin-top: 10px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #333;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let cartItems = [
                { name: "T-shirt", price: 1500, quantity: 1, image: "https://www.originswear.lk/wp-content/uploads/2023/11/FLAMINGO.webp" },
                { name: "Jeans", price: 2500, quantity: 1, image: "https://m.media-amazon.com/images/I/716ubXdFWuS._AC_SL1500_.jpg" },
                { name: "Skirt", price: 1200, quantity: 1, image: "https://m.media-amazon.com/images/I/61B0Ww7LCaL._AC_SL1453_.jpg" },
                { name: "Frock", price: 2000, quantity: 1, image: "https://bluemoon.lk/wp-content/uploads/2023/05/IDP_6322-scaled.jpg" },
            ];

            const totalDisplay = document.querySelector(".price-box p");
            const updateTotal = () => {
                const total = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
                totalDisplay.textContent = `Total: LKR ${total.toFixed(2)}`;
            };

            const incrementQuantity = (index) => {
                cartItems[index].quantity += 1;
                renderCart();
            };

            const decrementQuantity = (index) => {
                if (cartItems[index].quantity > 1) {
                    cartItems[index].quantity -= 1;
                }
                renderCart();
            };

            const deleteItem = (index) => {
                cartItems.splice(index, 1);
                renderCart();
            };

            const clearCart = () => {
                cartItems = [];
                renderCart();
            };

            const renderCart = () => {
                const cartList = document.querySelector(".cart-list");
                cartList.innerHTML = "";
                if (cartItems.length === 0) {
                    cartList.innerHTML = "<li>Your cart is empty!</li>";
                     // Display when cart is empty
                } else {
                    cartItems.forEach((item, index) => {
                        const listItem = document.createElement("li");
                        listItem.innerHTML = `
                            <div class="item-info">
                                <img src="${item.image}" alt="${item.name}" />
                                <span>${item.name}</span>
                            </div>
                            <div class="item-actions">
                                <button onclick="decrementQuantity(${index})">-</button>
                                <span>${item.quantity}</span>
                                <button onclick="incrementQuantity(${index})">+</button>
                                <button class="delete-button" onclick="deleteItem(${index})">Delete</button>
                            </div>
                            <span>LKR ${(item.price * item.quantity).toFixed(2)}</span>
                        `;
                        cartList.appendChild(listItem);
                    });
                }
                updateTotal();
            };

            renderCart(); 

            window.incrementQuantity = incrementQuantity;
            window.decrementQuantity = decrementQuantity;
            window.deleteItem = deleteItem;
            window.clearCart = clearCart;
        });
    </script>
</head>
<body>
    <div class="header">
        <h1>Girlee Cart</h1>
    </div>

    <a href="javascript:history.back()" class="back-button">Back</a>

    <div class="container">
        <div class="cart">
            <h2>Your Cart</h2>
            <ul class="cart-list">
              
            </ul>
            <button class="clear-cart" onclick="clearCart()">Clear Cart</button>
            <button class="buy-now">Buy Now</button>
        </div>

        <div class="payment">
            <h2>Payment</h2>
            <ul class="payment-methods">
                <li>
                <!--Radio Buttons to select payment method -->
                    <input type="radio" name="payment-method" id="visa" />
                    <label for="visa">
                        <img src="https://logos-world.net/wp-content/uploads/2020/05/Visa-Logo.png" alt="Visa" />
                        Visa
                    </label>
                </li>
                <li>
                    <input type="radio" name="payment-method" id="mastercard" />
                    <label for="mastercard">
                        <img src="https://logos-world.net/wp-content/uploads/2020/09/Mastercard-Logo.png" alt="Mastercard" />
                        Mastercard
                    </label>
                </li>
                <li>
                    <input type="radio" name="payment-method" id="paypal" />
                    <label for="paypal">
                        <img src="https://www.paypalobjects.com/webstatic/icon/pp258.png" alt="PayPal" />
                        PayPal
                    </label>
                </li>
            </ul>
            <div class="price-box">
                <p>Total: LKR 0.00</p> 
                <!--currency-->
            </div>
            <input type="text" placeholder="Card Number" />
            <input type="text" placeholder="Expiry Date (MM/YY)" />
            <input type="text" placeholder="CVV" />
            <button class="pay-now">Pay Now</button>
        </div>
    </div>
</body>
</html>
