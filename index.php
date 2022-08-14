<?php

$pdo = new PDO("sqlite:3d_app.db");

$statement = $pdo->query("SELECT * FROM products WHERE id = 1");

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
                <h4>Diet Coke</h4> <?php } ?>
                <iframe title="Diet Coke Can Color 3D Scan" width="550px" height="250px" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/bbbb22f40d6a49148db682ff9f2da9fe/embed?autospin=1&autostart=1&camera=0&preload=1&transparent=1&ui_infos=0&ui_stop=0&ui_help=0&ui_settings=0&ui_vr=0&ui_fullscreen=0&ui_annotations=0"> </iframe>
              </div><br>
              <h4>Description</h4>
              <?php 
              if($rows){
                echo "<p>".$value['description']."</p>";
              }else{
              ?>
              <p class = "text-justify">Coca-Cola, or Coke, is a carbonated soft drink manufactured by the Coca-Cola Company. Originally marketed as a temperance drink and intended as a patent medicine, it was invented in the late 19th century by John Stith in Atlanta, Georgia.</p>
              <?php } ?>
            <!--  <h4>Camera View</h4>
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
                  <img src="assets/img/coca-cola.png" height="40px" width="70px" class="img-fluid" alt="">           
                </div>
            </nav><br>  
            <div class="sketchfab-embed-wrapper"> <iframe title="Coca-Cola Glass Bottle" frameborder="0" width="195px" height="100px" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/f23ca779d0fd4109998e4b6b19b33532/embed?autospin=1&autostart=1&camera=0&preload=1&transparent=1&ui_infos=0&ui_stop=0&ui_watermark_link=0&ui_watermark=0&ui_help=0&ui_settings=0&ui_vr=0&ui_fullscreen=0&ui_annotations=0"> </iframe> </div>
            <div class="sketchfab-embed-wrapper"> <iframe title="A Can of Coke" frameborder="0" width="195px" height="100px" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/b5a02a8ca1aa41078228bfb5aa74fc07/embed?autospin=1&autostart=1&camera=0&preload=1&transparent=1&ui_infos=0&ui_stop=0&ui_watermark_link=0&ui_watermark=0&ui_help=0&ui_settings=0&ui_vr=0&ui_fullscreen=0&ui_annotations=0"> </iframe> </div>           
            <br>
            <p>Diet Coke also branded as Coca-Cola Light, Coca-Cola Diet or Coca-Cola Light Taste is a sugar-free and no-calorie soft drink produced and distributed by the Coca-Cola Company.        </div>
        </div><br>
        <div class="container">
            <h4>Coca Cola</h4>
            <?php 
            if($rows){
              echo "<p>".$value['description']."</p>";
            }else{
            ?>
            <p class = "text-justify">Coca-Cola, or Coke, is a carbonated soft drink manufactured by the Coca-Cola Company. Originally marketed as a temperance drink and intended as a patent medicine, it was invented in the late 19th century by John Stith in Atlanta, Georgia.</p>
            <?php } ?>        </div>
        <span id="div1"></span>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <div class="copyright"><br>
                <p class="text-white">These web pages are submitted as part requirement for the degree of BSc Computer Science and Artificial Intelligence at the University of Sussex. They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged
                <strong><span> <a href="https://github.com/AhmedYousefAlsuwaidi/3d-app.git">https://github.com/AhmedYousefAlsuwaidi/3d-app.git</a></span></strong></p>
                </div>
            </div>
          </nav>            
      </div>
    </div>
    <script>
      $(document).ready(function(){
      $.ajax({url:"select.php",
      success:function(dataabc){
          //console.log(dataabc);
        $("#content").html(dataabc);		
      }});
    
    
      });
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
</body>
</html>