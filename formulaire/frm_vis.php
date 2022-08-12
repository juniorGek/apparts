<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
    include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
    session_start();

?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>

                    <form class="form-horizontal" action="/imm/traitement/tr_vis.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2">Immeuble de la visite:</label>
                   
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