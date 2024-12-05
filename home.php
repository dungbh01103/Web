<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

.products_box {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 40px auto;
    padding: 0 20px;
    max-width: 1200px;
}

.single_product {
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    padding: 20px;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.single_product:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

.single_product img {
    width: 150px;
    max-width: 200px;
    height: auto;
    margin-bottom: 15px;
    border-radius: 5px;
}

.single_product h3 {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.single_product p {
    font-size: 14px;
    color: #777;
    margin-bottom: 15px;
}

.single_product b {
    color: #007BFF;
    font-size: 16px;
}

.single_product a {
    display: inline-block;
    margin: 10px 0;
    font-size: 14px;
    color: #007BFF;
    text-decoration: none;
}

.single_product button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 14px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.single_product button:hover {
    background-color: #0056b3;
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
</head>

<body>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <header>
        <h1>Welcome to Our Website</h1>
    </header>

    

    <div class="products_box">
        <?php
        include "conn.php";
        
        $sql = "SELECT * FROM Products LIMIT 8";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row_product = mysqli_fetch_assoc($result)) {
                $ProductID = $row_product['ProductID'];
                $Name = $row_product['Name'];
                $Description = $row_product['Description'];
                $Price = $row_product['Price'];
                $Stock = $row_product['Stock'];
                $CategoryID = $row_product['CategoryID'];
                $ImageURL = $row_product['ImageURL'];
        ?>
                <form class="single_product" action="Cart.php" method="POST">
                    <h3><?php echo htmlspecialchars($Name); ?></h3>
                    <img src="<?php echo htmlspecialchars("image/$ImageURL"); ?>" alt="<?php echo htmlspecialchars($Name); ?>">
                    <p style="margin: 10px;"><?php echo htmlspecialchars($Description); ?></p>
                    <p><b>Price: <?php echo number_format($Price, 0, ',', '.'); ?> VNĐ</b></p>
                    <a href="ProductDetail.php?id=<?php echo $ProductID ?>" >Details</a>
                    <input type="hidden" name="ProductID" value="<?php echo $ProductID; ?>">
                    <input type="hidden" name="Quantity" value="1">
                    <button type="submit" class="btn btn-success">Add to Cart</button>
                </form>
        <?php
            }
        } else {
            echo "<p class='text-center'>No products found.</p>";
        }
        ?>
    </div>

    <section>
        <p>Explore our products and services.</p>
    </section>

    <footer>
        <p>&copy; 2024 Your Company</p>
    </footer>
</body>

</html>
