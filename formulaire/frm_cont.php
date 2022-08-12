<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-lg-4">
                                <button type="button" class=" btn-success btn-block" onclick='document.location.href="http://localhost/imm/formulaire/frm_vis1.php"'>Continuer la Visite</button>

                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="button" class=" btn-primary btn-block" onclick='document.location.href="http://localhost/imm/formulaire/frm_info.php"'>Etablir une Promesse</button>

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


        </body>
   </div>
</html>
