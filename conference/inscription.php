
<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>inscription</title>
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
  
  ?>

<?php
  include 'topheader.php';
 ?>
  <div class="courses_ins">
  	<div class="container">
    
  		
          <?php
            $d = "tarif_auditeur";
            $sql = "SELECT * FROM conference ";
            $req = mysqli_query($conn,$sql);
            $w = mysqli_fetch_array($req);
           
          ?>
      
      
        <?php
        $d = "tarif_auteur"; // correction de la variable $d
        $sql = "SELECT * FROM conference ";
        $req = mysqli_query($conn,$sql);
        $w = mysqli_fetch_array($req);
        $dd = $w['tarif_auteur'];
       
        ?>
      
      <br>
      
      <br>
  </div>
</div>


<br><br> 

<div id="insc" class="col-md-12" style="padding: 10px; margin-bottom: 20px; background-color:#dddddd;">
  <section>
      <h2 style="text-align: center; font-weight: bold;">INSCRIPTION</h2>
      <br>
      <br>
      <p style="color:black;text-align:left;font-style:bold; font-size: medium; font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif; font-weight: bolder; padding-left:15px;">
      - L'inscription à la conférence couvre le kit de conférence, les pauses café, le déjeuner et le banquet. L'inscription ne couvre pas l'hébergement, le transport, etc. <br>
      - Tous les papiers acceptés seront publiés. Un auteur d'un papier accepté doit s'inscrire à la conférence. Si un auteur a plus d'un papier accepté, chaque papier doit également être inscrit.
      </p>
      <br>
      <div>
        <div class="col-md-6" style=" padding-top:20px; text-align:center;">
            <h2><b style="color:orange;">Inscription auteur</b></h2>

            <h3><?php 
      echo $w['tarif_auteur'];
    ?></h3>
        </div>
        <div class="col-md-6" style=" padding-top:20px; text-align:center;">
            <h2><b style="color:red;">Inscription auditeur</b></h2>
            <h3><?php 
      echo $w['tarif_auditeur'];
    ?> </h3>
        </div>

      </div>
      
      <br><br>
  </section>
</div>
<br><br>
</main>

  <?php  
  include 'footer.php';
  ?>
  

</body>
</html>	
