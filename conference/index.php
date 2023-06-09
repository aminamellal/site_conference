<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Site de conférence</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/tes.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="css/jquery.countdown.css" />
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>

<link href="css/font-awesome.css" rel="stylesheet"> 

<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});

  $(window).scroll(function (event) {
    // A chaque fois que l'utilisateur va scroller (descendre la page)
    var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical
 
    //si cette valeur > à 200 on ajouter la class
    if (y >= 150) {
      $('.navbar-default').addClass('fixed');
    } else {
      // sinon, on l'enlève
      $('.navbar-default').removeClass('fixed');
    }
  });

</script>
<style>
  
.row .clearfix
{
  background-color:black;
}
 body { padding-bottom: 0px; }

</style>
</head>
<body>

<?php
  include 'conn_bd.php';
  //include 'topheader.php';
  ?>

<?php
  include 'topheader.php';
  ?>


<!-- banner -->
  <div class="courses_home">
  	<div class="container">
      
  		<p class="description">
          <?php
            $d = date('Y-m-d');
            $sql = "SELECT * FROM conference WHERE '$d' < date_conference";
            $req = mysqli_query($conn,$sql);
            $w = mysqli_fetch_array($req);
            if ($w == null) {
              echo "Il n'existe aucune conférence dans cette periode";
            }else{
              echo $w['titre_conf'];
            }
          ?>
      </p>
      <span class="description" style="font-size: medium; color: white; font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif; font-weight: bolder;">
        <?php
        $d = date('Y-m-d');
        $sql = "SELECT * FROM conference WHERE '$d' < date_conference";
        $req = mysqli_query($conn,$sql);
        $w = mysqli_fetch_array($req);
        $dd = $w['date_conference'];
            if ($w == null) {
              echo "";
            }else{
              echo "Le ".date("d-m-Y",strtotime($dd)) ."   à  ".$w['lieu_conf'];
            }
            ?>
      </span>
      <br>
      
      <br>
      <button class="btn" style="background-image: linear-gradient(to bottom right, #1b5619, #a7f7a4);">S'inscrire à la conférence</button>
  	</div>
  </div>
  <?php
    if ($w == null) {
     echo '<br><br><br><h3 style="text-align:center;">'."Veuillez revenir plutard".'</h3> <br><br><br><br>';
    }else{
      
    
  ?>
 
  <br>
  <div id="about_conf" class="col-md-12" style="padding: 10px; margin-bottom: 20px;">
    <section>
        <h2 style="text-align: center; font-weight: bold;">Rejoindre <?php 
        echo $w['titre_conf'];
      ?></h2>
      <br>
        <br>
        <p style="color:black;text-align:center;font-style:bold; font-size: medium; font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif; font-weight: bolder;">
        "Ne manquez pas cette occasion unique d'approfondir vos connaissances et de discuter avec des experts de l'industrie et du monde universitaire. Notre conférence sur les Communications et Réseaux, ainsi que les techniques d'Intelligence Artificielle pour les Réseaux Mobiles, vous offre une opportunité inestimable de développer votre expertise dans ces domaines passionnants et d'élargir votre réseau professionnel. Rejoignez-nous pour une expérience enrichissante et stimulante !"
      </p>
        <br>
        <br>
        <div>
          <div class="col-md-6" style="text-align: center;">
            <img src="images_pfe/emplacement.png" width="70px"><br>
            <p style="font-weight: bold;"><?php 
        echo $w['lieu_conf'];
      ?></p>
          </div>
          <div class="col-md-6" style="text-align: center;">
            <img src="images_pfe/date.png" width="70px"><br>
            <p style="font-weight: bold;"><?php 
        echo $w['date_conference'];
      ?></p>
          </div>
        </div>
        <br><br><br>
    </section>
    <hr>
  </div>

  
  

  <?php
    }
  include 'footer.php';
  ?>
  

</body>
</html>	