<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Immobilier SOCIM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/imm/style2.css" />
    <link rel="icon" type="image/jpg" href="/imm/image/images.jpeg"/>

  </head>
  <div class="sty">
        <body>
                    <div class="panel panel-default col-lg-11">
                        <div class="panel-heading"><h2><small>IMMOBILIER SOCIM</small></h2></div>

                                <nav class="navbar navbar-inverse col-lg-10">
                                        <div class="container-fluid">
                                            <div class="navbar-header">
                                            <a class="navbar-brand" href="/imm/accueil.php" >HOME</a>
                                                
                                            </div>
                                                <ul class="nav navbar-nav">
                                                    <li><a href="frm_imeuble.php">Immeuble</a></li>
                                                    <li><a href="frm_appart.php">Appart</a></li>
                                                    <li>

                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestion du client
                                                            <span class="caret"></span>
                                                        </a>
                                                            <ul class="dropdown-menu">
                                                                    <li><a href="frm_clt.php"><span class="glyphicon glyphicon-user"></span>Nouveau client</a></li>
                                                                    <li><a href="frm_rech_clt.php"><span class="glyphicon glyphicon-search"></span>Rechercher Client</a></li>
                                                                    <li><a href="frm_visite.php"><span class="glyphicon glyphicon-pencil"></span>Passer une visite</a></li>
                                                                    
                                                                    
                                                                    
                                                            </ul>

                                                    </li>
                                                    <li><a href="frm_lis_vis.php">Vente</a></li>
                                                </ul>
                                                <ul class="nav navbar-nav navbar-right">
                                                        <li class="dropdown">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin
                                                            <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="frm_inscrire.php"><span class="glyphicon glyphicon-user"></span>Inscrire un utilisateur</a></li>
                                                                <li><a href="frm_mod.php"><span class="glyphicon glyphicon-pencil"></span> Modifier le mot de passe</a></li>
                                                                <li><a href="/imm/traitement/connection/logout.php"><span class="glyphicon glyphicon-log-in"></span> Deconnexion</a></li>
                                                            </ul>
                                                        </li>
                                                </ul>
                                        </div>
                                </nav>

                    </div>
        </body>
   </div>
</html>
<style>
   
body{
    background: url(/imm/image/k.jpg);;
    background-attachment: fixed;
    background-size: cover;
}

</style>