<!DOCTYPE HTML>
<html>
<head>
<title>About Conference</title>
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
<link href="css/c/test.css" rel='stylesheet' type='text/css' />
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

</script>

<style>
.row .clearfix
{
  background-color:black;
}
 body { padding-bottom: 170px; }

.col-md-12 .wrap .row
{
  height:50px;
  width: auto;
  background-color:black;
}
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
  <div class="courses_banner">
  	<div class="container">
  		<!-- <h3>About</h3>
  		<p class="description">
            ICI CSE
        </p> -->
        <div class="breadcrumb1">
           <!--  <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="current-page">About</li>
            </ul> -->
        </div>
  	</div>
  </div>

  <br>
  <div class="col-md-12">

   <h1 style="text-align:center"> Appel à communication</h1>
    <p style="text-align:justify; text-indent: 50px;word-spacing:4px;font-style:bold">
 <pre style="font-family:bold;font-size:20px;word-wrap:break-word">
 Nous avons le plaisir d'annoncer notre prochaine conférence sur les Communications et Réseaux, qui se tiendra à [lieu] du [date] au [date]. Nous invitons les chercheurs et les professionnels de l'industrie à soumettre leurs travaux pour une présentation lors de cette conférence.
Les thèmes de la conférence comprennent, mais ne sont pas limités à :

</pre>
 </p>


</div>
<br>
<div class="col-md-12">
  <h2 align="center"> THEMES </h2><br>
 <div class="col-md-4">

    <ul class="list-group">
   <h3> Communications Habilitées par l'Intelligence Artificielle </h3>

      <li class="list-group-item">Logiciels de Communication et Multimédia Habilités par l'IA</li></li>
        <li class="list-group-item">Réseaux et Internet de Prochaine Génération Habilités par l'IA</li>
        <li class="list-group-item">Traitement du Signal pour les Communications Habilitées par l'IA</li>
        <li class="list-group-item">   Zones Sélectionnées en Communications Habilitées par l'IA</li>
<li class="list-group-item">Apprentissage Automatique pour les Communications</li>

    </ul>
    <ul class="list-group">
   <h3> Sécurité des Systèmes de Communication et d'Information</h3>

      <li class="list-group-item">Sécurité et Confidentialité des Systèmes de Communication et d'Information Habilités par l'IA</li>
       <li class="list-group-item">Human Computer Interaction</li>


    </ul>
  </div>

  <div class="col-md-4">
    <ul class="list-group">
   <h3> Réseaux de Communication Écologiques et Durables</h3>

      <li class="list-group-item">Systèmes et Réseaux de Communication Écologiques Habilités par l'IA</li>
       
       

    </ul>
    <ul class="list-group">
   <h3>Communications Avancées</h3>

      <li class="list-group-item">Réseaux Mobiles et Sans Fil Habilités par l'IA
</li>
       <li class="list-group-item">Réseaux et Systèmes Optiques Habilités par l'IA</li>
 <li class="list-group-item">Communications sans Fil Habilitées par l'IA</li>
<li class="list-group-item">Communications Aériennes Habilitées par l'IA</li>
     <li class="list-group-item">Backhaul et Fronthaul : Communications, Réseaux et Traitement du Signal Habilités par l'IA</li>
<li class="list-group-item">Terahertz Communications</li>
    </ul>

    
  </div>

  <div class="col-md-4">


    <ul class="list-group">
   <h3>Données et Informatique en Nuage</h3>

      <li class="list-group-item">Big Data Habilité par l'IA</li>
       <li class="list-group-item">Cloud/Edge Computing, Réseaux et Stockage de Données Habilités par l'IA</li></li>
        <li class="list-group-item">Pervasive Computing</li>
        <li class="list-group-item">Storage Area Networks</li>
        <li class="list-group-item">Network on Chip</li>
         <li class="list-group-item">Grid Computing</li>
    </ul>

    <ul class="list-group">
   <h3>Autres applications de l'IA en communication</h3>

      <li class="list-group-item">E-Santé Habilitée par l'IA</li>
       <li class="list-group-item">Capteurs et Communications Intégrées</li>
        <li class="list-group-item">Social Networks</li>
        <li class="list-group-item">Quantum Communications & Computing</li>
        <li class="list-group-item">Reconfigurable Intelligent Surfaces</li>
    </ul>

  </div>
   <!-- <div class="col-md-1"></div> -->
   </div>
 <br>
<br>
<br>
<?php

  include 'footer.php';
  ?>

 </div><!--col-md-12-->




</body>
</html>
