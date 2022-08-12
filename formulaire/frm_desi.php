<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                    <form class="form-horizontal" action="/imm/traitement/tr_desi.php" method="POST">
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Cause:</label>
                            <textarea name="cause" id="" cols="40" rows="3"placeholder="Remplir le champs" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Date </label>
                            <div class="col-sm-10 col-lg-2">
                                <input type="date" class="form-control" name="dat" disabled>
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="submit" class=" btn-primary">Annuler</button>

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
