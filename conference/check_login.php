<?php session_start();

include "conn_bd.php";

// Retrieve username and password from database according to user's input
try {

    if(empty($_POST["username"]) || empty($_POST["mdp"])){  
        header("location:index.html");  
    }else{ 
        $sql = "SELECT * FROM admin WHERE nom_util='".htmlspecialchars($_POST['username'])."' AND mdp='".htmlspecialchars($_POST['mdp'])."' ";
        $req = mysqli_query($conn,$sql);
        $nb = mysqli_num_rows($req);
        if ($nb >0) {
                $_SESSION['username'] = $_POST['username'];
                $user = $_POST['username'];
                $_SESSION['usermdp'] = $_POST['mdp'];

                $profile = "SELECT *  FROM admin  WHERE nom_util= '".$user."'";
                $statpros = mysqli_query($conn,$profile);
                foreach($statpros as $statpro){
                    $_SESSION['nom']= $statpro['nom'];
                    $_SESSION['prenom']= $statpro['prenom'];
                    $_SESSION['age']= $statpro['sexe'];
                    $_SESSION['profession']= $statpro['birthday'];
                    $_SESSION['tel']= $statpro['tel'];
                    $_SESSION['mail']= $statpro['mail'];
                    $_SESSION['adresse']= $statpro['adresse'];
                }
            ?> 
            <script>window.location ="../admin/documentation/index.php"</script> 
            <?php
        }else{ 
            $sql = "SELECT * FROM president WHERE nom_util_p='".htmlspecialchars($_POST['username'])."' AND mdp_p='".htmlspecialchars($_POST['mdp'])."' ";
            $req = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($req);
            
            if ($count > 0){
                $_SESSION['username'] = $_POST['user'];
                $_SESSION['usermdp'] = $_POST['password'];
                $user= $_SESSION['username'] ;

                $var = $_SESSION['username'];

                $profile = "SELECT *  FROM utilisateur  WHERE username= '".$user."'";
                $statpros = mysqli_query($conn,$profile);

                foreach($statpros as $statpro){
                    $_SESSION['nom']= $statpro['nom'];
                    $_SESSION['prenom']= $statpro['prenom'];
                    $_SESSION['sexe']= $statpro['sexe'];
                    $_SESSION['datenais']= $statpro['birthday'];
                    $_SESSION['tel']= $statpro['tel'];
                    $_SESSION['mail']= $statpro['mail'];
                    $_SESSION['adresse']= $statpro['adresse'];
                    $_SESSION['date_insc']= $statpro['date_insc'];

                ?>
                <script>window.location ="user/index.php? var=<?php echo $var;?>"</script> 
                <?php 
                }
            }else{ 
                //Region Log In 
                $sql = "SELECT * FROM region WHERE user='".htmlspecialchars($_POST['user'])."' AND pass='".htmlspecialchars($_POST['password'])."' ";
                $req = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($req);
                if ($count > 0){
                    $_SESSION['username'] = $_POST['user'];
                    $_SESSION['user'] = $_POST['password'];
                    $user= $_SESSION['username'] ;
           
           
                    $profile = "SELECT *  FROM region WHERE user= '".$user."'";
                    $statpros = mysqli_query($conn,$profile);
                    foreach($statpros as $statpro){
                        $_SESSION['region']= $statpro['desfr'];
                        $_SESSION['codr']= $statpro['codr'];
                    }
        
               ?> 

                    <script>window.location ="region/index.php"</script> 
                    
             <?php 
                }else{ 
                    echo "mot de passe incorect";
                    $_SESSION['user'] = 0;
        ?> 
                    <script>
                         alert("Votre Log In informations sont incorrect !");
                         window.location ="index.html";
                    </script>
       <?php 
                }

            }
        }
    }   
}
catch(PDOException $error){  
    $message = $error->getMessage();  
}



;?>