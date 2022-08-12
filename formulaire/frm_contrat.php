<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
<form class="form-horizontal" action="/imm/traitement/tr_contrat.php" method="POST">
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Prix de vente:</label>
                            <div class="col-sm-10 col-lg-4">
                                <input type="number" class="form-control" name="pri"  placeholder="prix" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Type de payement:</label>
                            <div class="col-sm-10 col-lg-4">
                               <select class="form-control" name="pay" id="pay">
                                    <option disabled selected>Pay</option>
                                    <option value="espece">Espece</option>
                                    <option value="Tmoney">Tmoney</option>
                                    <option value="Moov Money">Moov Money</option>
                               </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Date Signature</label>
                            <div class="col-sm-10 col-lg-4">
                                <input type="date" class="form-control" name="dat">
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="submit" class=" btn-primary">Etablir</button>

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