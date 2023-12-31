<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3D Navbar Animation</title>
    <link rel="stylesheet" href="Style.css">
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
              <div class="inner">
                <h2 class="title">Future is here</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Laudantium illum tenetur consequatur veritatis?
                </p>
                <button class="btn">Read more</button>
              </div>
            </div>
          </header>
        </div>
        <div class="shadow one"></div>
        <div class="shadow two"></div>
        <div class="links">
          <ul>
            <li>
              <a href="http://127.0.0.1:5500/" style="--i: 0.05s;">Home</a>
            </li>
            <li>
              <a href="http://localhost/responsible/index.php" style="--i: 0.1s;">Services</a>
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
              <a href="http://localhost/responsible/login.php" style="--i: 0.3s;">Login</a>
          </li>
          </ul>
        </div>
        <script src="app.js"></script>
    </body>
</html>