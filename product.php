<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Management</title>
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
    width: 100%;
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

.main-content {
    display: flex;
    flex-wrap: wrap; /* Cho phép nội dung xuống dòng nếu không đủ không gian */
    gap: 120px; /* Khoảng cách giữa các phần tử */
    justify-content: center; /* Canh giữa nội dung */
    align-items: flex-start; /* Canh trên cùng */
    padding: 20px;
}

.form-container {
    flex: 1; /* Chiếm một phần không gian (co dãn nếu cần) */
    max-width: 400px; /* Đặt chiều rộng tối đa */
}

.products-box {
    flex: 2; /* Chiếm không gian gấp đôi form */
    max-width: 800px; /* Đặt chiều rộng tối đa */
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
    <h1>Product Management</h1>
  </header>

  <div class="main-content">
  <!-- Form thêm/sửa sản phẩm -->
  <div class="form-container" style="background: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 20px 30px; font-family: Arial, sans-serif;">
    <h2 style="font-size: 24px; margin-bottom: 20px; color: #333; text-align: center;">Add / Edit Product</h2>
    <form action="product_management.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="ProductID" id="ProductID">
      <label for="Name" style="display: block; font-size: 14px; color: #555; margin-bottom: 6px;">Name:</label>
      <input type="text" name="Name" id="Name" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
      <label for="Description" style="display: block; font-size: 14px; color: #555; margin-bottom: 6px;">Description:</label>
      <textarea name="Description" id="Description" rows="4" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;"></textarea>
      <label for="Price" style="display: block; font-size: 14px; color: #555; margin-bottom: 6px;">Price:</label>
      <input type="number" name="Price" id="Price" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
      <label for="Quantity" style="display: block; font-size: 14px; color: #555; margin-bottom: 6px;">Quantity:</label>
      <input type="number" name="Quantity" id="Quantity" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
      <label for="Category" style="display: block; font-size: 14px; color: #555; margin-bottom: 6px;">Category:</label>
      <input type="text" name="Category" id="Category" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
      <label for="Image" style="display: block; font-size: 14px; color: #555; margin-bottom: 6px;">Product Image:</label>
      <input type="file" name="Image" id="Image" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
      <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">Submit</button>
    </form>
  </div>

  <!-- Danh sách sản phẩm -->
  <div class="products-box">
    <h2 style="margin-left: 300px;">Product List</h2>
    <div class="products_box">
      <!-- PHP code để hiển thị sản phẩm -->
      <?php
      include "conn.php";
      $sql = "SELECT * FROM Products LIMIT 4";
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
                  <p><?php echo htmlspecialchars($Description); ?></p>
                  <p><b>Price: <?php echo number_format($Price, 0, ',', '.'); ?> VNĐ</b></p>
                  <a href="ProductDetail.php?id=<?php echo $ProductID ?>" >Details</a>
                  <input type="hidden" name="ProductID" value="<?php echo $ProductID; ?>">
                  <input type="hidden" name="Quantity" value="1">
                  <button type="submit" class="btn btn-success">Add to Cart</button>
              </form>
      <?php
          }
      } else {
          echo "<p>No products found.</p>";
      }
      ?>
    </div>
  </div>
</div>

  </div>

  <footer>
    <p>&copy; 2024 Product Management</p>
  </footer>
</body>

</html>
