<?php

$pdo = new PDO("sqlite:3d_app.db");

$statement = $pdo->query("SELECT * FROM products WHERE id = 3");

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row => $value){
//  echo $value['title']."<br>";
  }
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3D App</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.5.1.min.js"></script>  
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              
              <img src="assets/img/coca-cola.png" alt="Coca Cola" height="40px" width="100px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
            <img src="assets/img/coca-cola.png" height="40px" width="70px" class="img-fluid" alt="">
            <img src="assets/img/sprtie.png" height="40px" width="70px" class="img-fluid" alt="">
            <img src="assets/img/fanta.png" height="40px" width="70px" class="img-fluid" alt="">
          </nav><br>
          <div class="row">
          <div class="col-8">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active btn btn-primary text-white" aria-current="page" href="index.php">Home</a>
                      </li>&nbsp;&nbsp;
                      <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white" href="index.php">CocaCola</a>
                      </li>&nbsp;&nbsp;
                      <li class="nav-item">
                        <a class="nav-link btn btn-warning text-white " href="fanta.php">Fanta</a>
                      </li> &nbsp;&nbsp;
                      <li class="nav-item">
                        <a class="nav-link btn btn-success text-white" href="sprite.php">Sprite</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <div class="sketchfab-embed-wrapper"><br>
                <?php 
                    if($rows){
                      echo "<h4>".$value['title']."</h4>";
                    }else{
                ?>
                <h4>Sprite</h4> <?php } ?>
                <iframe title="Sprite colddrink" frameborder="0" width="550px" height="250px" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/0fc144df57e64514ae6d1a7524331595/embed?autospin=1&autostart=1&camera=0&preload=1"> </iframe>
              </div><br>
              <h4>Description</h4>
              <?php 
              if($rows){
                echo "<p>".$value['description']."</p>";
              }else{
              ?>              
              <p class = "text-justify">Sprite is a colorless, lemon and lime-flavored soft drink created by The Coca-Cola Company. Sprite comes in multiple flavors, including cranberry, cherry, grape, orange, tropical, ginger, and vanilla. Sprite was created to compete primarily against Keurig Dr Pepper's 7 Up.</p>
              <?php } ?>
              <h4>Camera View</h4>
              <button type="button" class="btn btn-primary">top</button>
              <button type="button" class="btn btn-secondary">bottom</button>
              <button type="button" class="btn btn-info">left</button>
              <button type="button" class="btn btn-warning">right</button>
              <button type="button" class="btn btn-success">zoom in</button>
              <button type="button" class="btn btn-danger">zoom out</button>      
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-2">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                  <a class="navbar-brand" href="#">3D Gallery</a>
                  <img src="assets/img/sprtie.png" height="40px" width="50px" class="img-fluid" alt="">           
                </div>
            </nav><br> 
            <div class="sketchfab-embed-wrapper"> <iframe title="Sprite Bottle" frameborder="0" width="195px" height="100px" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/93dcd1e307dc47c2be2b4f45d6fcaa34/embed?autospin=1&autostart=1&camera=0&preload=1"> </iframe> </div> 
            <div class="sketchfab-embed-wrapper"> <iframe title="sprite" frameborder="0" width="195px" height="100px" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/90a12ef248bf4e079ebea4a1e9e322f9/embed?autospin=1&autostart=1&camera=0&preload=1"> </iframe> </div>
            <br>
            <p>Sprite is a colorless, lemon and lime-flavored soft drink created by The Coca-Cola Company. Sprite comes in multiple flavors, including cranberry, cherry, grape, orange, tropical, ginger, and vanilla.       </div>
        </div><br>
        <div class="container">
            <h4>Sprite</h4>
            <?php 
            if($rows){
              echo "<p>".$value['description']."</p>";
            }else{
            ?>              
            <p class = "text-justify">Sprite is a colorless, lemon and lime-flavored soft drink created by The Coca-Cola Company. Sprite comes in multiple flavors, including cranberry, cherry, grape, orange, tropical, ginger, and vanilla. Sprite was created to compete primarily against Keurig Dr Pepper's 7 Up.</p>
            <?php } ?>        
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <div class="copyright"><br>
                <p class="text-white">These web pages are submitted as part requirement for the degree of BSc Computer Science and Artificial Intelligence at the University of Sussex. They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged
                <strong><span> <a href="https://github.com/AhmedYSuwaidi/3dapp.git">https://github.com/AhmedYSuwaidi/3dapp.git</a></span></strong></p>
                </div>
            </div>
          </nav>            
      </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>  
</body>
</html>