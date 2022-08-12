<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/imm/style.css" />
    <link rel="stylesheet" href="dist/css/bootstrap.css" />
    <link rel="icon" type="image/jpg" href="/imm/image/kkj.jpg"/>
    <title>Identication</title>
</head>
<body>
    
    <div class="form-bg">
      
        <div class="container">
           <!--  <h1 class="socim">Immobilier SOCIM</h1> -->
                <div class="col-md-offset-4 col-md-4  col-sm-offset-3 col-sm-6">
                   <form class="form-horizontal" action="/imm/traitement/connection/login.php" method="POST" >
                       <div class="form_icon" ><i class="fa fa-user-circle"></i></div>
                       <h3 class="title">S'identifier</h3>
                       <div class="form-group">
                           <span class="input-incon"><i class="fa fa-user"> Nom d'utilisateur</i></span>
                           <input class="form-control" type="text" name="nom" placeholder="username"  >
                       </div>
                       <div class="form-group">
                        <span class="input-incon"><i class="fa fa-lock"> Mot de passe</i></span>
                        <input class="form-control" type="password" name="mdp" placeholder="password">
                    </div>
                    <button class="btn signin"> Se Connecter</button>
                    <?php
                        if (isset($_GET['error']))
                        {
                            $erreur=$_GET['error'];
                            $class='alert alert-info col-lg-7';
                        }
                    ?>
                    <?php  echo (" 
                            <div class='$class'>
                            <strong>
                               $erreur 
                            </strong>
                            </div>
                    "); ?>
                   </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
