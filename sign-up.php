<?php
  include "connect.php";
  if (isset($_POST["submit"])){
  
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];
  $passwordHash  = hash("sha256", $password);

  $sql = "INSERT INTO user (fullname,email,phone,passwordHash) VALUES ('$fullname', '$email','$phone','$passwordHash')";
    if ($conn->query($sql) === TRUE) {
      echo "<p style='color: green'>Your Account has been created successfully</p>";
    }
  }
?>

<!DOCTYPE html>
<html>

<?php
  include "./include/head.php";
?>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand">
            <span>
              Bloosom chop
            </span>
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <?php
              include "./include/navbar.php";
              Navbar(2);
           ?>
            <div class="quote_btn-container ">

              <a href="cart.html">
                <img src="images/cart.png" alt="">
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container ">

              <a href="search.html">
                <img src="images/search-icon.png" alt="">
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
    </header>

    <section class="Login_section layout_padding">
      <div class="container">
        <div class="heading_container justify-content-center">
          <h2 class="">
            Sign Up
          </h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6 mx-auto">

              <form id="login-form" onsubmit="return afficher();" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                  <input type="text" placeholder="Full name" name="fullname" />
                  <input type="email" placeholder="Email" id="email" name="email" />
                </div>
                <div>
                  <input type="text" placeholder="Phone number" id="phonenumber" name="phone" />
                  <input type="password" placeholder="Create Password" id="password" name="password" />
                  <input type="password" placeholder="Confirm Password" id="confirm" />
                </div>
                <div class="d-flex mt-4">
                  <input type="submit" value="Sign Up" name="submit">
                </div>
              </form>

              <p class="mt-3 text-center">Already have an account? <a href="Login.html">Log in</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--js code-->
    <script>


      function afficher() {
        // // Get the password input element
        // var passwordInput = document.getElementById("password");
        // var confirmPasswordInput = document.getElementById("confirm");
        // var phonenumberInput = document.getElementById("phonenumber");

        // // Check if the password length is less than 8 characters
        // if (passwordInput.value.length < 8) {
        //   alert("Your password should have at least 8 characters");
        //   return false;
        // }

        // // Check if the password and confirm password match
        // if (passwordInput.value !== confirmPasswordInput.value) {
        //   alert("Your password doesn't match");
        //   return false;
        // }
        // if (!/\d/.test(passwordInput.value)) {
        //   alert("Your password should contain at least one digit");
        // }

        // // Check if the phone number has exactly 8 characters
        // if (phonenumberInput.value.length !== 8) {

        //   alert("Your phone number should have exactly 8 characters");
        //   return false;
        // }

        // All fields are valid
        return true;
      }
    </script>

</body>

</html>