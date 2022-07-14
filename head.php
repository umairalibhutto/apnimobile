<?php
//session_start();


include('connection.php');


//     if(!isset($_SESSION['log']))
// {
//   echo '<li class="nav-item">
//       <a class="nav-link btn btn-primary" href="'.webUrl.'/pages/login.php">Login</a>
//     </li>';
// }
// else
// {
//   echo '<li class="nav-item">
//       <a class="nav-link btn btn-danger" href="'.webUrl.'/pages/logout.php">Logout</a>
//     </li>';
//     echo '<li class="nav-item">
//       <a class="nav-link" href="#">'.$_SESSION['uFullName'].'</a>
//     </li>';
// }
    

function myheader(){
  echo '<title>Apni Mobile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="assets/images/favicon/favicon.ico">
  <link rel="stylesheet" href="mycss.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
  <link rel="stylesheet" href="assets/vendor/css/templatemo-seo-dream.css">
  <link rel="stylesheet" href="assets/vendor/css/animated.css">
  <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/css/owl.carousel.min.css">';
}




function navbar()
{
  echo '
  <header id="navbar">
    <nav class="navbar navbar-expand-md mynavigation">
      <a data-tilt class="navbar-brand myanchor" href="index.html"><img data-wow-duration="1s" class="wow rollIn rounded" src="assets/images/logo1.png"alt=""></a>
      <button style="border: rgb(142, 136, 199) 1px solid; padding-bottom: 10px;" class="navbar-toggler d-lg-none" type="button"
        data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
        aria-label="Toggle navigation">
        <span style="color: rgb(71, 255, 83);">|||</span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li data-tilt class=" nav-item active">
            <a class="wow rollIn nav-link a" data-wow-duration="1s" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <span> &nbsp; &nbsp;</span>
          <span> &nbsp; &nbsp;</span>

         

          <li data-tilt class="nav-item active">
            <a class="wow rollIn nav-link a" data-wow-duration="1s" href="view_all_ajax.php">All Mobiles<span class="sr-only">(current)</span></a>
          </li>
          <span> &nbsp; &nbsp;</span>
          <span> &nbsp; &nbsp;</span>
         

          <li data-tilt class="nav-item active">
            <a id="quest" class="wow rollIn nav-link a" data-wow-duration="1s" href="contact_us.php">Contact Us <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        
          

      </div>
    </nav>
  </header>
  ';


  
}

function footer()
{
  echo '
  <footer>
  <div class="container-fluid">
    <div class="row">
      <div data-tilt class="col-md-3">
        <a class="" href="#"><img class="fimage wow bounceInLeft" src="assets/images/logo2.gif" data-wow-duration="2s" alt=""></a>
      </div>
<div class="col-md-3">

</div>
      <div class="col-md-6">
        <ul class=" footer">
          <li class="wow bounceInRight" data-wow-duration="2s">
            <a class="" href="#">Home</a>
          </li>
          <br>
          <li class="wow bounceInRight" data-wow-duration="2s">
            <a class="" href="allmobiles.html">All Mobiles</a>
          </li>
          <br>
          
          <li class="wow bounceInRight" data-wow-duration="2s">
            <a class="" href="#">Contact Us</a>
          </li>
          <br>
        </ul>
      </div>
    </div>

    <br><br> <br><br><br><br>

    <br>
   <div class="row">
     <div class="col-md-12">
       <div class="wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="2s">
         <a class="fa" href="#">Go To Top</a>
       </div>
     </div>
   </div>
  </div>
  
  
</footer>
  
  
  ';
}
function scripts()
{
  echo '
  
  <script src="assets/vendor/js/jquery-1.12.4.min.js"></script>
  <script src="assets/vendor/js/tilt.jquery.js"></script>
  <script src="assets/vendor/js/animation.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  ';
}

?>
