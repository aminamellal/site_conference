<!DOCTYPE HTML>
<html>
<head>
<title>Reviewers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
<script>
  $(window).scroll(function (event) {
    // A chaque fois que l'utilisateur va scroller (descendre la page)
    var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical
 
    //si cette valeur > à 200 on ajouter la class
    if (y >= 135) {
      $('.nav_bottom').addClass('fixed');
    } else {
      // sinon, on l'enlève
      $('.nav_bottom').removeClass('fixed');
    }
  });
</script>
</script>
<style>
.row .clearfix
{
  background-color:black;
}
 body { padding-bottom: 0px; 
    font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;}

table{
    border-collapse: collapse;
    
}
table tr td{
    color: black;
    padding : 19px;
    font-size:17px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>

<?php
  include 'topheader.php';
  ?>

<?php
  include 'header.php';
  ?>


<!-- banner -->
  <div class="courses_home">
  	<div class="container">
      <br>
  	  <p class="description">
          Titre de la conférence
      </p>
      
  	</div>
  </div>
 
  <br>
  <h2 style="text-align: center;">Comité d'organisation</h2>
  <hr>
  <br>
  <table class="center">
    <tr>
        <td>Nom</td>
        <td>Description</td>
    </tr>
    <tr>
        <td>a</td>
        <td>v</td>
    </tr>

  </table>
  <br><br>
  <hr>

  <?php
  include 'footer.php';
  ?>
  


  

 

 
</body>
</html>	