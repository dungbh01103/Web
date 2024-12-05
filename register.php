<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="dung.css">
</head>
<script>
  function validateForm() {
    var x = document.getElementById("Username").value;
    var y = document.getElementById("Email").value;
    if (x == null || x == "" &y == null || y == ""  ) {
      alert("Username or Email can not be empty!");
      return false;
    }
  }
</script>
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
    margin: 1px;
    font-size: 32px;
    color: #555;
    font-weight: 600;
  }

  section {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 160px);
    padding: 20px;
  }

  form {
    background-color: #ffffff;
    padding: 30px;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 1px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    box-sizing: border-box;
  }

  form label {
    display: block;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 5px;
    color: #555;
  }

  form input,
  form textarea,
  form button {
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    box-sizing: border-box;
  }

  form textarea {
    resize: vertical;
    height: 100px;
  }

  form button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  form button:hover {
    background-color: #0056b3;
  }

  footer {
    background-color: #f8f9fa;
    color: #777;
    text-align: center;
    padding: 15px;
    margin-top: 30px;
    border-top: 1px solid #e0e0e0;
    font-size: 14px;
  }

  section {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    /* Thay đổi từ center thành flex-start */
    min-height: calc(100vh - 160px);
    padding: 20px;
    margin-top: 20px;
    /* Tăng khoảng cách từ trên xuống */
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
    <h1>Register</h1>
  </header>

  <!-- Section -->
  <section>
    <form onsubmit="return validateForm()" method="POST">
      <label for="Username">Username:</label>
      <input type="Username" class="form-control" id="Username" placeholder="Enter your Username" name="Username">
     
        <label for="Password">Password:</label>
        <input type="Password" class="form-control" id="Password" placeholder="Enter your Password" name="Password" required>
     
        <label for="Email">Email:</label>
        <input type="Email" class="form-control" id="Email" placeholder="Enter your Email" name="Email">
      </div>
      <button type="submit">Register</button>
      <p>Don't have an account? <a href="login.php"> Login Now</a></p>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Your Company</p>
  </footer>

  <?php
    include "conn.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Email = $_POST["Email"];
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $Email = $_POST["Email"];


        $sql = "INSERT INTO Users ( Username, PasswordHash, Email) VALUES ( '$Username', '$Password', '$Email')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Add successfully !')</script>";
        } else {
            echo "<script>alert('Add Error !')</script>";
        }
        mysqli_close($conn);
    }
    ?>
</body>
</body>

</html>