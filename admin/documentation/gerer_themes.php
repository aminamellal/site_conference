<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Administrateur - gérer les thèmes</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="" type="image/x-icon"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">
	<link href="assets/styles.css" rel="stylesheet" />
	<link href="assets/prism.css" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
		<?php
			include 'conn_bd.php';
			include 'header.php';
		?>
		
		<?php
			include 'sidebar.php';
		?>
		<div class="main-panel">
			<div class="content content-documentation">
				<div class="container-fluid">
					<div class="card card-documentation">
						<?php
						include 'main.php';
						?>
						<div class="card-body">
						<?php
                            $today = date("Y-m-d");
                            $sql = "SELECT * FROM conference WHERE date_conference>'$today'";
                            $req = mysqli_query($conn,$sql);
                            $w = mysqli_fetch_array($req);
							$n = mysqli_num_rows($req);

							if ($n == 0) {
								?>

								<h5 style="text-align:center;">Gérer les thématiques</h5>
								<hr>

								
							
								<?php
								echo '<h2 style="text-align:center;">'."Il n'existe aucune conférence - Créez une et gérez ses thématiques".'</h2>';

							}else{
								?>
								<h5 style="text-align:center;">Gérer les thématiques</h5>
								<hr>
                                <h3><b>La conférence :</b> <?php echo $w['titre_conf'];?></h3>
                                <h3><b>Les thématiques :</b></h3>

                                <?php
                                $id = $w['id_conf'];
                        
                                $s = "SELECT * FROM thematique WHERE id_conf='$id'";
                                $r = mysqli_query($conn,$s);
                                $q = mysqli_fetch_array($r);

                                if ($q == null) {
                                    echo '<span style="  text-align:center; color:red;">'."Aucun thème n'existe !".'</span>';
                                }else{
                                ?>
                                
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">thème</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($q=mysqli_fetch_array($r)){
                                        ?>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                        </tr>
                                        <?php }?>
                                        
                                    </tbody>
                                </table>
								
								<?php
							}}
                           
                            ?>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</div>
</body>
<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugin/chart.js/chart.min.js"></script>
<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script type="text/javascript" src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js" charset="utf-8"></script>
<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/js/atlantis.min.js"></script>
<script src="assets/prism.js"></script>
<script src="assets/prism-normalize-whitespace.min.js"></script>
<script type="text/javascript">
	// Optional
	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true,
	});
	
	// handle links with @href started with '#' only
	$(document).on('click', 'a[href^="#"]', function(e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top - 80;

		// animated top scrolling
		$('body, html').animate({scrollTop: pos});
	});
</script>
</html>