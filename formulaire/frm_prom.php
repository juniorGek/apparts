<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                    <form class="form-horizontal" action="/imm/traitement/tr_prom.php" method="POST">
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Montant de l'Avance</label>
                            <div class="col-sm-10 col-lg-4">
                                <input type="number" class="form-control" name="av"  placeholder="Avance" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Numero Autorisation</label>
                            <div class="col-sm-10 col-lg-4">
                                <input type="number" class="form-control" name="Aut"  placeholder="Autorisation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Nom de l'Avocat</label>
                            <div class="col-sm-10 col-lg-4">
                                <input type="text" class="form-control" name="cat"  placeholder="Nom" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Prenoms</label>
                            <div class="col-sm-10 col-lg-4">
                                <input type="text" class="form-control" name="prenom"  placeholder="prenom" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Adresse</label>
                            <div class="col-sm-10 col-lg-4">
                                <input type="text" class="form-control" name="ad"  placeholder="Adresse" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Telephone</label>
                            <div class="col-sm-10 col-lg-4">
                                <input type="number" class="form-control" name="tel"  placeholder="telephone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Date </label>
                            <div class="col-sm-10 col-lg-4">
                                <input type="date" class="form-control" name="dat">
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="submit" class=" btn-primary">OK</button>

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


        </body>
   </div>
</html>

