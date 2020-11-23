<?php
include('connexion.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Food On Time</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords"
    content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<body>

  <section id="banner">
    <div class="bg-colors">
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Food On Time</h1>
            <h2>Food To fit your lifestyle & health.</h2>
            <p>Specialized in Moroccan Cuisine!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php

  $result = $conn->query("SELECT * FROM plate WHERE   DATE(Jour) = CURDATE() AND  Type ='Special' order by rand () limit 1 " );

    while( $row = mysqli_fetch_array($result)){

        echo"
          <form action='OrderInfos.php' method ='post'>

          <section id='about' class='section-padding'>
            <div class='container'>
              <div class='row'>
                <div class='col-md-12 text-center marb-35'>
                  <h1 class='header-h'>The special dish for the day</h1>
                </div>
                <div class='col-md-1'></div>
                <div class='col-md-10'>
                  <div class='col-md-6 col-sm-6'>
                    <div class='about-info'>
                      <h2 class='heading'>".$row['Nom']."</h2>
                      <p> ".$row['Description']."</p>
                      <div class='details-list'>
                        <ul>
                          <li><i class='fa fa-check'></i>Price : ".$row['Price']." DH</li>
                        </ul>
                      </div>
                      <input class='btn btn-imfo btn-read-more' type='submit' value ='Order'></input>
                    </div>
                  </div>
                  <div class='col-md-6 col-sm-6'>
                    <img src='img/".$row['Image']."' alt='' class='img-responsive'>
                  </div>
                </div>
                <div class='col-md-1'></div>
              </div>
            </div>
          </section>
          </form>";
    }

  ?>
  

  
  <?php

$result = $conn->query(

"SELECT * FROM plate WHERE  DATE(Jour) = CURDATE() AND  Type ='Secandary' order by rand () limit 1 " );

while( $row = mysqli_fetch_array($result)){

echo"
<form action='OrderInfos.php' method ='post'>

  <section id='event'>
    <div class='bg-color' class='section-padding'>
      <div class='container'>
        <div class='row'>
          <div class='col-xs-12 text-center' style='padding:60px;'>
            <h1 class='header-h'>Secandary dishes for today</h1>
          </div>
          <div class='col-md-12' style='padding-bottom:60px;'>
            <div class='item active left'>
              <div class='col-md-6 col-sm-6 left-images'>
                <img src='img/".$row['Image']."' class='img-responsive'>
              </div>
              <div class='col-md-6 col-sm-6 details-text'>
                <div class='content-holder'>
                  <h2>".$row['Nom']."</h2>
                  <p>".$row['Description']."</p>
                    <div class='details-list'>
                      <ul style='color: white;'>
                        <li><i class='fa fa-check'></i>Price : ".$row['Price']."  DH</li>
                      </ul>
                    </div>
                    <input class='btn btn-imfo btn-read-more' type='submit' value ='Order'></input>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </form>";
}
  
?>

  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Food On Time</h4>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float" style="color: white;">
              © Food On Time. All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


</body>

</html>