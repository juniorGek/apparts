<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css" />
    <link rel="icon" type="image/jpg" href="/imm/image/images.jpeg"/>
    <title>Accueil</title>
</head>
<body>

<div class="sty">
        <body>
        
                        <div class="panel-heading"><h2><small>IMMOBILIER SOCIM</small></h2></div>

                            <div class="col-md-7">
                                 <h1>Bienvenue <?php  
                                 session_start();
                                 $no= $_SESSION["Nom"];
                                 $civ=$_SESSION['civ'];
                                 echo ("$civ $no");
                                 ?></h1>
                                    
                            </div>
                            
                                    <div class="container-fluid mt-2 col-lg-6">
                                        <button class="btn btn-default btn-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#demoi">
                                            IMMEUBLE
                                        </button>
                                        <button class="btn btn-primary btn-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo " >
                                            APPARTEMENT
                                        </button>
                                        <button class="btn btn-default btn-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#dem " >
                                            GESTION DU CLIENT
                                        </button>
                                        <button class="btn btn-primary btn-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#ad " >
                                            ADMIN
                                        </button>
                                        <button class="btn btn-default btn-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#fermer " onclick='document.location.href="http://localhost/imm/traitement/connection/logout.php"' >
                                            EXIT
                                        </button>
                                    </div>
                                 
                            <div class="offcanvas offcanvas-end" id="ad"
                            style="background: url(image/entrez-dans-immobilier-850.jpg) ;
                             background-size: cover;
                             background-attachment: fixed;
                             ">
                                <div class="offcanvas-header">
                                <div class="panel-heading"><h1><small>ADMIN</small></h1></div>
                                    
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                                </div>
                                         <button class="btn btn-info btn-block" type="button" onclick='document.location.href="http://localhost/imm/formulaire/frm_inscrire.php"'>Inscrire un nouveau utilisateur</button>
                                        <button class="btn btn-info btn-block" type="button" onclick='document.location.href="http://localhost/imm/formulaire/frm_mod.php"' >Modifier le mot de passe</button>
                                       
                                <!-- <div class="offcanvas-body">
                                   
                                    <button class="btn btn-secondary" type="button">A Button</button>
                                </div> -->
                            </div>

                            <div class="offcanvas offcanvas-end" id="demoi"
                             style="background: url(image/entrez-dans-immobilier-850.jpg) ;
                             background-size: cover;
                             background-attachment: fixed;"
                            >
                                <div class="offcanvas-header">
                                <div class="panel-heading"><h1><small>IMMEUBLE</small></h1></div>
                                    
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                                </div>
                                
                                        <button class="btn btn-info btn-block" type="button "onclick='document.location.href="http://localhost/imm/formulaire/frm_imeuble.php"'>Ajouter un nouveau immeuble</button>
                                        <button class="btn btn-info btn-block" type="button"onclick='document.location.href="http://localhost/imm/formulaire/frm_im_rech.php"'>Rechercher un Immeuble</button>
                                        <button class="btn btn-info btn-block" type="button"onclick='document.location.href="http://localhost/imm/formulaire/frm_im_liste.php"' >Liste des immeubles</button>        
                               
                            </div>

                            <div class="offcanvas offcanvas-end" id="demo"
                             style="background: url(image/entrez-dans-immobilier-850.jpg) ;
                             background-size: cover;
                             background-attachment: fixed;
                             ">
                                <div class="offcanvas-header">
                                <div class="panel-heading"><h1><small>APPARTEMENT</small></h1></div>
                                    
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                                </div>
                                        <button class="btn btn-info btn-block" type="button" onclick='document.location.href="http://localhost/imm/formulaire/frm_appart.php"'>Ajouter un nouveau Appartement</button>
                                        <button class="btn btn-info btn-block" type="button" onclick='document.location.href="http://localhost/imm/formulaire/frm_ap_rech.php"'>Rechercher un Appart</button>
                                        <button class="btn btn-info btn-block" type="button" onclick='document.location.href="http://localhost/imm/formulaire/frm_ap_liste.php"'>Liste des Appartement</button>          
                               
                            </div>

                            <div class="offcanvas offcanvas-end" id="dem"
                             style="background: url(image/entrez-dans-immobilier-850.jpg) ;
                             background-size: cover;
                             background-attachment: fixed;
                             ">
                                <div class="offcanvas-header">
                                <div class="panel-heading"><h1><small>GESTION DU CLIENT</small></h1></div>
                                    
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                                </div>
                                        <button class="btn btn-info btn-block" type="button " onclick='document.location.href="http://localhost/imm/formulaire/frm_clt.php"' >Nouveau client</button>
                                        <button class="btn btn-info btn-block" type="button " onclick='document.location.href="http://localhost/imm/formulaire/frm_rech_clt.php"' >Rechercher un Client</button>
                                        <button class="btn btn-info btn-block" type="button" onclick='document.location.href="http://localhost/imm/formulaire/frm_visite.php"' >Visite</button>
                                        <button class="btn btn-info btn-block" type="button">....</button>          
                               
                            </div>

    
</body>
</html>
<style>
    body{
        background: url(image/image_blogue_tardif.jpg);
        background-attachment: fixed;
        background-size: cover;
    }
</style>