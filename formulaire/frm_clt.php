<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                
                            <ul class="nav nav-tabs col-lg-7">
                                <li class="active"><a href="frm_clt.php">Ajouter </a></li>
                                <li ><a href="frm_rech_clt.php">Rechercher </a></li>
                            </ul>
                        <br>
                        <div class="panel-body"></div>
         <form class="form-horizontal" action="/imm/traitement/tr_clt.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2 " >Numero CNI:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="number" class="form-control" name="cni" placeholder="Num CNI "required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Nom:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="text" class="form-control" name="nom" placeholder="Nom du client" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Prenoms</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="text" class="form-control" name="pnom" placeholder="prenom du client" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 ">Adresse:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="text" class="form-control" name="add" placeholder="Adresse du client" required>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-sm-2 ">telephone:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="number" class="form-control" name="tel" placeholder="telephone " required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 ">Profession</label>
                    <div class="col-sm-10 col-lg-4">
                        <select class="form-control" id="prof" name="prof">
                                <option disabled selected>Profession</option>
                                <option value="ingenieur">ingenieur</option>
                                <option value="commerçant">commerçant</option>
                                <option value="chauffeur">chauffeur</option>
                                <option value="agent menager">agent menager</option>
                                <option value="professeur">professeur</option>
                                <option value="medecin">medecin</option>
                                <option value="autres">autres</option>
                        </select>

                    </div>
                </div>

                    </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="submit" class=" btn-primary">Passer a la visite</button>

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

                </div>
                   
        </form>
               
        </div>
                    
        </body>
   </div>
</html>