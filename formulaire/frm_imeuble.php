<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                
                            <ul class="nav nav-tabs col-lg-7">
                                <li class="active"><a href="#">Ajouter </a></li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="frm_im_rech.php"><span class="glyphicon glyphicon-search"></span>Rechercher</a></li>
                                    <li><a href="frm_im_liste.php"><span class="glyphicon glyphicon-pencil"></span> Liste</a></li>
                                </ul>
                                </li>
                            </ul>
                        <br>
                        <div class="panel-body"></div>
         <form class="form-horizontal" action="/imm/traitement/tr_immeuble.php " method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Nom:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="text" class="form-control" name="nom" placeholder="Nom Immeuble" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 " for="pwd">Adresse:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="text" class="form-control" name="add" placeholder="Lieu immeuble" required>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-sm-2 " for="pwd">Nbre Etage:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="number" class="form-control" name="etage" placeholder="Nbre d'Etage " min=2 max=10 required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 " for="pwd">Nombre d'Appartement:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="number" class="form-control" name="nbappart" placeholder="nbre appart" required>
                    </div>
                </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-lg-4 ">
                    <button type="submit" class="btn btn-success btn-block">Enregistrer</button>
                    </div>
                    <br>
                    <?php
                        if (isset($_GET['error']))
                        {
                            $erreur=$_GET['error'];
                            $class='alert alert-info col-lg-3';
                        }
                    ?>
                    <?php  echo (" 
                            <div class='$class'>
                            <strong>
                               $erreur 
                            </strong>
                            </div>
                    "); ?>
                        

                    </div>

                </div>
                   
        </form>
               
        </div>
                    
        </body>
   </div>
</html>