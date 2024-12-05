<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
</head>
<style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    color: #333;
}

nav {
    background-color: burlywood;
    padding: 15px 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 20px;
}

nav ul li a {
    color: #333;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

nav ul li a:hover {
    background-color: #f0f0f0;
    color: #007BFF;
}

header {
    background-color: #fefefe;
    text-align: center;
    padding: 60px 20px;
    border-bottom: 1px solid #e0e0e0;
}

header h1 {
    margin: 0;
    font-size: 32px;
    color: burlywood;
    font-weight: 600;
}

section {
    margin: 30px auto;
    padding: 20px;
    max-width: 1200px;
    text-align: center;
}

section p {
    font-size: 18px;
    color: #777;
    line-height: 1.6;
}

.product-image {
    width: 300px;
}

footer {
    background-color: burlywood;
    color: #777;
    text-align: center;
    padding: 15px;
    margin-top: 30px;
    border-top: 1px solid #e0e0e0;
    font-size: 14px;
}


</style>

<body>

  <!-- Menu -->
  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="cart.php">Cart</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>

  <!-- Header -->
  <header>
    <h1>Your Shopping Cart</h1>
  </header>

  <!-- Product Details Form -->
  <section class="product-details">
    <form action="#" method="POST">
      <div class="product">
        <img src="image\anh1.webp" alt="Product Image" class="product-image">
        <div class="product-info">
          <h2 class="product-name">Product Name</h2>
          <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia.</p>
          <p class="product-price">$49.99</p>
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1">
        </div>
      </div>
      <button type="submit" class="update-cart">Buy Now</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Your Company</p>
  </footer>

</body>

</html>
