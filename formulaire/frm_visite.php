<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
    
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                

                            <form class="form-horizontal" action="/imm/traitement/tr_visite.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2">Nom Client:</label>
                    <div class="col-sm-10 col-lg-4">
                    <input type="search" class="form-control" name="clt" placeholder="Info client" required>
                    </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="submit" class=" btn-primary">Suivant</button>

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
