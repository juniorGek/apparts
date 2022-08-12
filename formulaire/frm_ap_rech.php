<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                
                            <ul class="nav nav-tabs col-lg-7">
                                <li class="active"><a href="#">Recherche </a></li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="frm_ap_liste.php"><span class="glyphicon glyphicon-pencil"></span>Liste</a></li>
                                     <li><a href="frm_appart.php"><span class="glyphicon glyphicon-pencil"></span> Ajouter</a></li>
                                </ul>
                                </li>
                            </ul>
                        <br>
                        <div class="panel-body"></div>
                        <form class="form-horizontal" action="/imm/traitement/tr_rech_ap.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2">Recherche:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="search" class="form-control" name="rech" placeholder="saisir l'appart a chercher" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 ">
                    <button type="submit" class="btn btn-success"><span class="input-incon"><i class="fa fa-search"></i></span></button>
                    </div>
                </div>

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

                </form>
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