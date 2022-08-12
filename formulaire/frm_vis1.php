<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
    include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
    session_start();
    $im=$_SESSION['imm'];

?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
<script language="Javascript">
function bascule(elem)
{
// Quel est l'état actuel ?
etat=document.getElementById(elem).style.visibility;
if(etat=="hidden"){document.getElementById(elem).style.visibility="visible";}
else{document.getElementById(elem).style.visibility="hidden";}
}
</script>

                    <form class="form-horizontal" action="/imm/traitement/tr_vi.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2">Appartement de la visite:</label>
                   
                    <div class="col-sm-10 col-lg-4">
                    
                            <select class="form-control" id="app" name="app">
                            <option disabled selected>choix Appartement</option>

                                    <?php

                                    
                                 $my_sql="SELECT * FROM Appartement WHERE nomI='$im' ";
                                 $result=mysqli_query($link,$my_sql);
                                 while ($rows=mysqli_fetch_array($result))
                                {?>     
                                <option value="<?php echo $rows['numAppart'];?> "> <?php echo $rows['numerP']; ?></option>
                                <?php  }
                                 
                                ?>


                            </select>



                    </div>


                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Decision:</label>
                   
                    <div class="col-sm-10 col-lg-4">
                    
                            <select class="form-control" id="dec" name="dec">
                                 <option disabled selected>choix de la decision</option>
                                 <option value="desiré">desiré</option>
                                 <option value="non desiré">non desiré</option>
                            </select>
                    </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-lg-4">
                        <input type="date" class="form-control" name="date" disabled>

                         </div>
                </div>
                    <br>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="submit" class=" btn-primary btn-block">Suivant</button>

                         </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="button" class=" btn-primary btn-block" onclick='document.location.href="http://localhost/imm/formulaire/frm_vis.php"'>Changer d'Immeuble</button>

                         </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-lg-4">

                        <div >
                                <input type="button" onClick="bascule('boite');" value="Remarque"><br>
                                <div name="boite" id="boite" style="visibility: hidden">
                                    <br>
                                    <textarea rows="4" cols="50" name="boite"></textarea>
                                </div>
                        </div>
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