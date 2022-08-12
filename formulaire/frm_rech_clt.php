<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                
                            <ul class="nav nav-tabs col-lg-7">
                                <li class="active"><a href="frm_rech_clt.php">Rechercher </a></li>
                                <li><a href="frm_clt.php">Ajouter </a></li>
                            </ul>
                        <br>

                        <div class="panel-body"></div>
                                    <form class="form-horizontal" action="/imm/traitement/tr_rech_clt.php" method="POST">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="email">Recherche:</label>
                                            <div class="col-sm-10 col-lg-4">
                                            <input type="search" class="form-control" name="rech" placeholder="saisir le nom du Client" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10 ">
                                            <button type="submit" class="btn btn-success"><span class="input-incon"><i class="fa fa-search"></i></span></button>
                                            </div>
                                        </div>
                                    </form>
                    
        </body>
   </div>
</html>
