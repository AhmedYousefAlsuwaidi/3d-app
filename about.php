<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3D App</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <style>
      .logo{
        height: 35px;
        width: 120px;
        background: repeating-linear-gradient(
        45deg,
        #ffff,
        #ffff 3px,
        #808080 3px,
        #808080 5px
      );
      text-align: center;
      font-size: 22px;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      color: red;
      }
      .logo-1{
        height: 35px;
        width: 120px;
        text-align: center;
        font-size: 22px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        background-color: red;
        color: white;
      }
      .logo-2{
        height: 35px;
        width: 120px;
        text-align: center;
        font-size: 22px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        color: green;
      }
      .logo-3{
        height: 35px;
        width: 120px;
        text-align: center;
        font-size: 22px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        color: orange;
      }
    </style>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <div class="logo-1">Coca Cola</div>
            <!--  <img src="assets/img/coca-cola.png" alt="Coca Cola" height="40px" width="100px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; !-->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Brands
                    </a>
                    <ul class="dropdown-menu bg-light">
                      <li><a class="dropdown-item" href="index.php">Coca Cola</a></li>
                      <li><a class="dropdown-item" href="fanta.php">Fanta</a></li>
                      <li><a class="dropdown-item" href="sprite.php">Sprite</a></li>
                    </ul>
                </ul>
              </div>
            </div>
          </nav><br>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <div class="copyright"><br>
                <p class="text-white">These web pages are submitted as part requirement for the degree of BSc Computer Science and Artificial Intelligence at the University of Sussex. They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged
                </div>
            </div>
          </nav>            
      </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
</body>
</html>

