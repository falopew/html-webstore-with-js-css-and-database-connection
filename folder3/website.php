<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Market</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 20px;
        }

        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            display: inline-block;
            width: 48%;
            margin-right: 1%;
            box-sizing: border-box;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        footer {
            background-color: #3498db; 
            color: #fff;
            padding: 1em;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .cart {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .cart p {
            margin: 0;
        }

        .total {
            font-weight: bold;
        }

        .login-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-section {
            display: flex;
            align-items: center;
        }

        .search-input {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        .erase-btn {
            background-color: #e57373;
            color: white;
            padding: 8px 15px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .erase-btn:hover {
            background-color: #c94c4c;
        }

        .filter-section {
            display: flex;
            align-items: center;
        }

        .filter-input {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        .filter-btn {
            background-color: #3498db;
            color: #fff;
            padding: 8px 15px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .filter-btn:hover {
            background-color: #2980b9;
        }

        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        header {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
            text-align: center; 
        }

        .top-list {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            justify-content: center;
        }

        ul li {
            margin-right: 20px;
        }

        ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
            font-size: 16px;
            transition: color 0.3s ease-in-out;
        }

        ul li a:hover {
            color: #0674ec;
        }

        .search {
            display: flex;
            align-items: center;
        }

        input[type="search"] {
            padding: 8px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            margin-right: 10px;
        }

        button {
            background-color: #0674ec;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            cursor: pointer;
            font-size: 14px;
        }
        .feedbacks {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .feedback {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        .avatarcircle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #0674ec;
            margin-right: 10px;
            display: inline-block;
        }

        .feedbackcontent {
            display: inline-block;
            vertical-align: top;
            max-width: calc(100% - 70px);
        }

        .feedback h1 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .feedback h2 {
            font-size: 14px;
            color: #888;
            margin-bottom: 15px;
        }

        .feedback p {
            font-size: 16px;
            line-height: 1.5;
        }


    </style>
</head>
<body>
    <header>
        <div class="top-list">
            <div class="container">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ALL PRODUCTS</a></li>
                    <li><a href="#">LOG IN</a></li>
                    <li><a href="#">SIGN IN</a></li>
                </ul>
                <div class="search">
                    <input type="search" placeholder="Search product here..." id="search-input">
                    <button type="submit" onclick="searchProduct()">Search</button>
                </div>
            </div>
        </div>
    
    <main>
        <section>
            <h2>Featured Products</h2>
            <div class="product">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Green_and_Black%27s_dark_chocolate_bar_2.jpg" alt="Chocolate Bar">
                <h3>Chocolate Bar</h3>
                <p>Indulge in the rich taste of our premium chocolate bar. Perfect for satisfying your sweet tooth.</p>
                <p>Price: ₸300</p>
                <button onclick="addToCart('Chocolate Bar', 300)">Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://www.allrecipes.com/thmb/iRcip7RaCHF_RmbzDV4bC8gqNYs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-504780334-2000-1caaee9e697c40a8935db7b8d9818a85.jpg" alt="Cheese">
                <h3>Cheese</h3>
                <p>Enhance your culinary creations with our finest cheese. A versatile ingredient for various dishes.</p>
                <p>Price: ₸1500</p>
                <button onclick="addToCart('Cheese', 1500)">Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://www.parents.com/thmb/qKThoOlGAzJwGZ-moTTGQVFRvhg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Grass-Fed-vs-Organic-Milk-9fff118133c14e578c2379ed86888817.jpg" alt="Milk">
                <h3>Milk</h3>
                <p>Natural milk. 15%</p>
                <p>Price: ₸500</p>
                <button onclick="addToCart('Milk', 500)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://sugarspunrun.com/wp-content/uploads/2020/03/Homemade-Bread-Recipe-1-of-1-2-300x300.jpg" alt="Bread">
                <h3>Bread</h3>
                <p>Fresh bread/ homemade</p>
                <p>Price: ₸200</p>
                <button onclick="addToCart('Bread', 200)">Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://buttercreamparty.com/wp-content/uploads/2020/06/butter-300x300.jpg" alt="Butter">
                <h3>Butter</h3>
                <p>Experience the classic richness of our premium store-brand butter. Made from high-quality cream, it's the perfect companion for spreading on toast, baking, or adding a flavorful touch to your favorite recipes.</p>
                <p>Price: ₸1200</p>
                <button onclick="addToCart('Butter', 1200)">Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://www.sagefruit.com/wp-content/uploads/2016/08/Gala-300x300.png" alt="Apple">
                <h3>Apple</h3>
                <p>Natural production apple. Price per kilogramm</p>
                <p>Price: ₸400</p>
                <button onclick="addToCart('Apple', 400)">Add to Cart</button>
            </div>
        </section>
        
        <section>
            <h2>Clients feedbacks</h2>

            <div class="feedbacks">
                <div class="feedback">
                    <div class="avatarcircle"></div>
                    <div class="feedbackcontent">
                        <h1>Aigerim</h1>
                        <h2>Software developer</h2>
                        <p>As a software developer, I've had the pleasure of exploring various online marketplaces for high-quality design assets. MartPlace stands out with its intuitive user interface and a vast selection of products. 
                            The seamless payment process and organized code snippets in the products I purchased have significantly boosted my project development speed. The responsive support team is an added bonus, making MartPlace my go-to platform for all my coding needs. Highly recommended!</p>
                    </div>
                </div>

                <div class="feedback">
                    <div class="avatarcircle"></div>
                    <div class="feedbackcontent">
                        <h1>Nursultan</h1>
                        <h2>Graphic Designer</h2>
                        <p>As a software developer, I've had the pleasure of exploring various online marketplaces for high-quality design assets. MartPlace stands out with its intuitive user interface and a vast selection of products.
                           The seamless payment process and organized code snippets in the products I purchased have significantly boosted my project development speed. The responsive support team is an added bonus, making MartPlace my go-to platform for all my coding needs. Highly recommended!</p>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="cart">
            <h2>Shopping Cart</h2>
            <p id="cartContent"></p>
            <p class="total">Total: ₸<span id="totalPrice">0</span></p>
        </div>
    </main>

    <footer>
        &copy; 2024 Online Market. All rights reserved.
    </footer>

    <script>
        let cart = [];
        let totalPrice = 0;

        function addToCart(productName, productPrice) {
            cart.push({ name: productName, price: productPrice });
            totalPrice += productPrice;

            updateCartDisplay();
        }

        function removeFromCart(index) {
            const removedItem = cart.splice(index, 1)[0];
            totalPrice -= removedItem.price;

            updateCartDisplay();
        }

        function updateCartDisplay() {
            const cartContentElement = document.getElementById('cartContent');
            const totalPriceElement = document.getElementById('totalPrice');

            cartContentElement.innerHTML = '';
            cart.forEach((item, index) => {
                cartContentElement.innerHTML += `${item.name} - ₸${item.price} 
                <button onclick="removeFromCart(${index})">Remove</button><br>`;
            });

            totalPriceElement.textContent = totalPrice;
        }

        function eraseSearch() {
            document.querySelector('.search-input').value = '';
            filterProducts('');
        }

        function filterProducts(searchText) {
            const products = document.querySelectorAll('.product');
            products.forEach(product => {
                const productName = product.querySelector('h3').textContent.toLowerCase();
                if (productName.includes(searchText.toLowerCase())) {
                    product.style.display = '';
                } else {
                    product.style.display = 'none';
                }
            });
        }

        function filterByPrice() {
        const minPrice = parseInt(document.getElementById('minPrice').value) || 0;
        const maxPrice = parseInt(document.getElementById('maxPrice').value) || Number.POSITIVE_INFINITY;

        const products = document.querySelectorAll('.product');
        products.forEach(product => {
        const productPriceText = product.querySelector('p').textContent;
        const productPrice = parseInt(productPriceText.replace(/[^\d]/g, ''));

        if (!isNaN(productPrice) && productPrice >= minPrice && productPrice <= maxPrice) {
            product.style.display = 'inline-block';  
        } else {
            product.style.display = 'none';
        }
        });
        }

        function eraseFilter() {
            document.getElementById('minPrice').value = '';
            document.getElementById('maxPrice').value = '';
            const products = document.querySelectorAll('.product');
            products.forEach(product => {
                product.style.display = '';
            });
        }

        function openLoginPage() {
            window.location.href = "index.html";
        }
        function searchProduct() {
        var searchTerm = document.getElementById('search-input').value;
        alert("Searching for: " + searchTerm);
    }
    </script>
</body>
</html>
