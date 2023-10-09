<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3D Navbar Animation</title>
    <link rel="stylesheet" href="Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="menu">
          <h3 class="logo">Brand<span>Name</span></h3>
          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </div>

      <div class="main-container">
        <div class="main">
          <header>
            <div class="overlay">
            <div class="wrapper">
              <div class="switch">
                <div class="login" onclick="tab1();">Login</div>
                <div class="signup" onclick="tab2();">Signup</div>
              </div>
              <div class="outer">
                  <form id="form" action="db_conn.php" method="post">
                    <div id="page">
                        <label>Login form</label>
                        <div class="element">
                          <input type="text" placeholder="username" name="username" required>
                          <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="element">
                          <input type="password" id="password" placeholder="password" name="password" required>
                          <i class="fa-solid fa-lock"></i>
                          <img src="img/eye-open.png" id="eyeicon">
                        </div>
                        <button id="btn" name="login">Login</button>
                    </div>
                    <!--<div id="page">
                        <label>Signup form</label>
                        <div class="element">
                          <input type="text" placeholder="username" name="username" required>
                          <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="element">
                          <input type="password" placeholder="password" name="password" required>
                          <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="element">
                          <input type="text" placeholder="email" name="email" required>
                          <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="box">
                          <p>
                            Confirm regulamin
                          </p>
                          <input type="checkbox" required>
                        </div>
                        <button id="btn" name="register">Register</button>-->
                    </div>
                  </form>
              </div>
            </div>
          </header>
        </div>
        <div class="shadow one"></div>
        <div class="shadow two"></div>
        <div class="links">
          <ul>
            <li>
              <a href="#" style="--i: 0.05s;">Home</a>
            </li>
            <li>
              <a href="#" style="--i: 0.1s;">Services</a>
            </li>
            <li>
              <a href="#" style="--i: 0.15s;">Portfolio</a>
            </li>
            <li>
              <a href="#" style="--i: 0.2s;">Testimonials</a>
            </li>
            <li>
              <a href="#" style="--i: 0.25s;">About</a>
            </li>
            <li>
              <a href="#" style="--i: 0.3s;">Contact</a>
            </li>
            <li>
                <a href="http://127.0.0.1:5500/login.html" style="--i: 0.3s;">Login</a>
            </li>
          </ul>
        </div>
       <script src="app.js"></script>
    </body>
</html>