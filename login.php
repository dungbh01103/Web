<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>


  <script>
    function validateForm() {
      var x = document.getElementById("Username").value;
      if (x == null || x == "") {
        alert("Username can not be empty!");
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
    <h1>Login</h1>
  </header>

  <!-- Section -->
  <section>
    <form onsubmit="return validateForm()" method="POST">

      <label for="Username">Username:</label>
      <input type="Username" class="form-control" id="Username" placeholder="Enter your Username" name="Username">


      <label for="Password">Password:</label>
      <input type="Password" class="form-control" id="Password" placeholder="Enter your Password" name="Password" required>

      <button type="submit" name="submit">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="Register.php">Register here</a></p>
      </div>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Your Company</p>
  </footer>

  <?php
    include "conn.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];

        $sql = "select * from Users where Username='$Username' AND PasswordHash= '$Password' ";
        $result = mysqli_query($conn, $sql);

        $check_login = mysqli_num_rows($result);
        if ($check_login == 0) {
            echo "<script>alert('Password or Username, UserRole is incorrect, please try again!')</script>";
            exit();
        }
        if ($check_login > 0) {
          echo "<script>alert('You have logged in successfully !');</script>";
          echo "<script>window.location.href = 'home.php';</script>";
      }
      
    }
    ?>
</body>

</html>