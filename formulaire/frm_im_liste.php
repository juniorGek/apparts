<?php 
    include ("/opt/lampp/htdocs/imm/traitement/connection/veri.php");
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                
                            <ul class="nav nav-tabs col-lg-7">
                                <li class="active"><a href="#">Liste </a></li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="frm_im_rech.php"><span class="glyphicon glyphicon-search"></span>Rechercher</a></li>
                                    <li><a href="frm_imeuble.php"><span class="glyphicon glyphicon-pencil"></span> Ajouter</a></li>
                                </ul>
                                </li>
                            </ul>
                        <br>
               
        </div>

                <?php
                    
                include ('/opt/lampp/htdocs/imm/formulaire/frm_resul_im.php');
                ?>

        </body>
   </div>
</html>