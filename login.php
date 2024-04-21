<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" type="text/css" href="css/admin.css" />

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
              <a href="">
                <img src="images/cartt.webp" alt="">
              </a>
            </div>
    </header>
    <!-- end header section -->
    <section class="Login_section layout_padding">
      <div class="container">
        <div class="heading_container justify-content-center">
          <h2 class="">
            Log In
          </h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <form id="login-form" onsubmit="login(); return false;">
                <div>
                  <input type="email" id="email" placeholder="Email" /> <!-- Add ID for email input -->
                </div>
                <div>
                  <input type="password" id="password" placeholder=" Password" /> <!-- Add ID for password input -->
                </div>
                <div class="d-flex mt-4">
                  <button type="submit">
                    Log In
                  </button>
                </div>
              </form>
              <p id="feedback" class="mt-3 text-center"></p> <!-- Element to display feedback messages -->
              <p class="mt-3 text-center">Don't have an account? <a href="sign-up.php">Sign up</a></p>
              <p class="mt-3 text-center">Log in as Administrator <a href="loginadmini.html">Log in</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      function login() {
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        event.preventDefault();

        let http = new XMLHttpRequest();

        let url = "login-redirect.php";
        let params = "email=" + email + "&password=" + password;

        http.open('POST', url, true);
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        http.onreadystatechange = function() {
          if (http.readyState == 4 && http.status == 200) {
            alert("Welcome");
            window.location.href = "./index.html" ;
            
          } else if (http.status == 401) {
            document.getElementById('feedback').innerHTML = "Incorrect Password";
          } else if (http.status == 404) {
            document.getElementById('feedback').innerHTML = "Account not found";
          }
        }
        http.send(params);
      }
    </script>
</body>

</html>

      
      