<?php 
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/test.js"></script>
<!-- Custom Theme files -->
<link href="css/c/style.css" rel='stylesheet' type='text/css' />
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
</script>
<style>
.row .clearfix
{
  background-color:black;
}
 body { padding-bottom: 170px; }
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
  
  
  
  <div class="login-page">
  <div class="form">
    <form class="login-form" method="POST">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit">login</button>
      <?php if(isset($error_msg)){ ?>
        <p class="error"><?php echo $error_msg; ?></p>
      <?php } ?>
    </form>
  </div>
  <div class="col-md-12">



   <h1 style="text-align:center; font-weight:bold;">informations&nbsp;d'auteur</h1>
    <p style="text-align:justify; text-indent: px;word-spacing:4px;font-style:bold">
    
</p>

 </div><!--col-md-12-->
 

 <form method="post" enctype="multipart/form-data" action="submit-paper.php">
  <div>
    <label for="nom">Nom de l'auteur :</label>
    <input type="text" id="nom" name="nom" required>
  </div>
  <div>
    <label for="prenom">Prenom de l'auteur :</label>
    <input type="text" id="prenom" name="prenom" required>
  </div>
  <div>
    <label for="prefix">Prefix :</label>
    <select id="prefix" name="prefix">
      <option value=""></option>
      <option value="Dr.">Dr.</option>
      <option value="Prof.">Prof.Dr</option>
      <option value="M.">M.</option>
      <option value="Mme.">Mme.</option>
      <option value="Mlle.">Mlle.</option>
    </select>
  </div>
  <div>
    <label for="email">Adresse e-mail :</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div>
    <h1 style="text-align:center; font-weight:bold;">Information de papier</h1>
    <p style="text-align:justify; text-indent: 50px; word-spacing:4px; font-style:bold;"></p>
  </div>
  <div>
    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" required>
  </div>
  <div>
    <label for="keywords">Mots-clés :</label>
    <textarea id="keywords" name="keywords" required rows="5"></textarea>
  </div>
  <div>
    <label for="abstract">Résumé :</label>
    <textarea id="abstract" name="abstract" required rows="8"></textarea>
  </div>
  <div>
    <label for="paper">Joindre votre fichier :</label>
    <input type="file" id="paper" name="paper" required accept=".pdf">
  </div>
  <div>
    <input type="submit" value="Soumettre">
  </div>
</form>

<?php

  include 'footer.php';
  ?>
</body>
</html>
