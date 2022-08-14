<?php

$pdo = new PDO("sqlite:3d_app.db");

$statement = $pdo->query("SELECT * FROM products WHERE id = 2");

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row => $value){
//  echo $value['title']."<br>";
  }
?>
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
                <h4>Fanta</h4> <?php } ?>
                  <iframe title="Fanta Colddrink" frameborder="0" width="550px" height="250px" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/c3f570d3c0724a73b16a8fcb2b64f64a/embed?autospin=1&autostart=1&camera=0&preload=1"> </iframe>
              </div><br>
              <h4>Description</h4>
              <?php 
              if($rows){
                echo "<p>".$value['description']."</p>";
              }else{
              ?>
              <p class = "text-justify">Fanta is a brand of fruit-flavored carbonated soft drinks created by Coca-Cola Deutschland under the leadership of German businessman Max Keith. There are more than 200 flavors worldwide. Fanta originated in Germany as a Coca-Cola substitute in 1940 due to the American trade embargo of Nazi Germany which affected the availability of Coca-Cola ingredients.</p>
              <?php } ?>
          <!--    <h4>Camera View</h4>
              <button type="button" class="btn btn-primary">top</button>
              <button type="button" class="btn btn-secondary">bottom</button>
              <button type="button" class="btn btn-info">left</button>
              <button type="button" class="btn btn-warning">right</button>
              <button type="button" class="btn btn-success">zoom in</button>
              <button type="button" class="btn btn-danger">zoom out</button>   
          !-->       
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-2">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                  <a class="navbar-brand" href="#">3D Gallery</a>
                  <img src="assets/img/fanta.png" height="40px" width="70px" class="img-fluid" alt="">          
                </div>
            </nav><br>  
            <div class="sketchfab-embed-wrapper"> <iframe title="330ml can of Fanta Coconut" frameborder="0" width="195px" height="100px" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/8ed00b819e944ef48f28267ccddd16be/embed?autospin=1&autostart=1&camera=0&preload=1"> </iframe> </div>
            <div class="sketchfab-embed-wrapper"> <iframe title="Fanta 600 Ml" width="195px" height="100px" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/f166a9e2e04d4f09a33566c2f0b66f72/embed?autospin=1&autostart=1&camera=0&preload=1"> </iframe> </div>            <br>
            <p>Fanta is a brand of fruit-flavored carbonated soft drinks created by Coca-Cola Deutschland under the leadership of German businessman Max Keith.</div>
        </div><br>
        <div class="container">
            <h4>Fanta</h4>
            <?php 
            if($rows){
              echo "<p>".$value['description']."</p>";
            }else{
            ?>
            <p class = "text-justify">Fanta is a brand of fruit-flavored carbonated soft drinks created by Coca-Cola Deutschland under the leadership of German businessman Max Keith. There are more than 200 flavors worldwide. Fanta originated in Germany as a Coca-Cola substitute in 1940 due to the American trade embargo of Nazi Germany which affected the availability of Coca-Cola ingredients.</p>
            <?php } ?>        </div>
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