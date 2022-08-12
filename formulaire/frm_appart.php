<?php 
       include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
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
                                    <li><a href="frm_ap_rech.php"><span class="glyphicon glyphicon-search"></span>Rechercher</a></li>
                                    <li><a href="frm_ap_liste.php"><span class="glyphicon glyphicon-pencil"></span> Liste</a></li>
                                </ul>
                                </li>
                            </ul>
                        <br>
                        <div class="panel-body"></div>
                        <form class="form-horizontal" action="/imm/traitement\tr_appart.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Numero Appartement:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="number" class="form-control" name="numa"  placeholder="entrer Numero Appart" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Nombre de chambre:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="number" class="form-control" name="nbrc" placeholder="Entrer le numero etage" min=3 max=15 required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 " for="pwd">Numero Etage</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="number" class="form-control" name="nume"  placeholder="Enter password" required>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Immeuble</label>
                    <div class="col-sm-10 col-lg-4">
                    
                    <select class="form-control" id="immeuble" name="immeuble" required>
                    <option disabled selected>choix Immeuble</option>

                             <?php

                             
                        $my_sql="SELECT * FROM Immeuble";
                       $result=mysqli_query($link,$my_sql);
                       while ($rows=mysqli_fetch_array($result))
                         {?>     
                           <option value="<?php echo $rows['nomI'];?> "> <?php echo $rows['nomI']; ?></option>
                          <?php  }
                           ?>


                     </select>



                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 " >Superficie</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="number" class="form-control" name="sup"  placeholder="Nbre d'Etage" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 " >prix</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="number" class="form-control" name="prix" placeholder="nbre appart" min=25000 required>
                    </div>
                </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-lg-4">
                    <button type="submit" class="btn btn-success btn-block">Enregistrer</button>

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
   
</html>