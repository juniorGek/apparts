<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
 <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-lg-4">
                                <button type="button" class=" btn-success btn-block" onclick='document.location.href="http://localhost/imm/formulaire/frm_contrat.php"'>Etablir le Contrat</button>

                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="button" class=" btn-primary btn-block" onclick='document.location.href="http://localhost/imm/formulaire/frm_desi.php"'>Annuler la Promesse</button>

                         </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="button" class=" btn-primary btn-block" onclick='document.location.href="http://localhost/imm/formulaire/frm_visite.php"'>Retour</button>

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