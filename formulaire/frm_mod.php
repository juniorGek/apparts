<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
    
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                
                    <form class="form-horizontal" action="/imm/traitement/tr_mod.php " method="POST">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Nom d'Utilisateur:</label>
                                <div class="col-sm-10 col-lg-4">
                                <input type="text" class="form-control" name="nom" placeholder="username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 ">Ancien Mot de Passe:</label>
                                <div class="col-sm-10 col-lg-4">
                                <input type="password" class="form-control" name="pwd" placeholder="passeword" required>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-sm-2 ">Nouveau mot de passe</label>
                                <div class="col-sm-10 col-lg-4">
                                <input type="password" class="form-control" name="npwd" placeholder="le mot de passe" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 ">Confirmer le mot de passe</label>
                                <div class="col-sm-10 col-lg-4">
                                <input type="password" class="form-control" name="cpwd" placeholder="confirmer le mot de passe" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-lg-4 ">
                                <button type="submit" class="btn btn-success btn-block">Modifier</button>
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

    

        </body>
   </div>
</html>