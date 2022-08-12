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
                                    <li><a href="frm_ap_rech.php"><span class="glyphicon glyphicon-search"></span>Rechercher</a></li>
                                    <li><a href="frm_appart.php"><span class="glyphicon glyphicon-pencil"></span> Ajouter</a></li>
                                </ul>
                                </li>
                            </ul>
                       
   </div>

                     <?php
                    
                         include ('/opt/lampp/htdocs/imm/formulaire/frm_resul_ap.php');
                    ?>

        </body>
   </div>
</html>
<style>
   
body{
    background: url(/imm/image/k.jpg);;
    background-attachment: fixed;
    background-size: cover;
}

</style>