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

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Blossom shop</title>

 

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

 
  <!-- Custom styles for this template -->
  <link href="css/login.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  
</head>

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
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="gallery.html"> Gallery </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="sign-up.php">Sign up</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="buy.html">Buy now</a>


                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="loginadmini.html">Administrator</a>
  
  
                </li>
              </ul>

            </div>
            <div class="quote_btn-container ">
              
              <a href="userspace.html">
                <img src="images/eyaaa.jpeg" alt="">
              </a>
              
            </div>

           
            <div class="quote_btn-container ">
              
              <a href="cart.html">
                <img src="images/cartt.webp" alt="">
              </a>
              
            </div>
            
    </header>

    <section class="Login_section layout_padding">
      <div class="container">
        <div class="heading_container justify-content-center">
          <h2 class="">
            Sign-up
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
                  <input type="submit" value="sign-up" name="submit">
                </div>
              </form>

              <p class="mt-3 text-center">Already have an account? <a href="login.php">Log in</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--js code-->
    <script>


      function afficher() {
        // // Get the password input element
         var passwordInput = document.getElementById("password");
         var confirmPasswordInput = document.getElementById("confirm");
         var phonenumberInput = document.getElementById("phonenumber");
         //vide
         if (passwordInput.value === "" || confirmPasswordInput.value === "" || phonenumberInput.value === "") {
      alert("Enter your informations please");
      return false;
    }
        // // Check if the password length is less than 8 characters
         if (passwordInput.value.length < 8) {
           alert("Your password should have at least 8 characters");
        //   return false;
         }

        // // Check if the password and confirm password match
         if (passwordInput.value !== confirmPasswordInput.value) {
          alert("Your password doesn't match");
           return false;
         }
         if (!/\d/.test(passwordInput.value)) {
        // 
        
        alert("Your password should contain at least one digit");
         }

        // // Check if the phone number has exactly 8 characters
         if (phonenumberInput.value.length !== 8) {

          alert("Your phone number should have exactly 8 characters");
          return false;
         }

        // All fields are valid
        alert("Your account has been created successfully! Please Login now");
        window.location.href = "./login.php" ;
        return true;
      }
    </script>

</body>

</html>