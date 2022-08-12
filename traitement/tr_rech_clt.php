<?php
include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
if (empty($_POST['rech'])){
    echo ('veuillez remplir le champs');
}else{
    $ret=$_POST['rech'];
    $sql="SELECT * FROM Client WHERE nomC LIKE '%$ret%'";
    $result=mysqli_query($link,$sql);
}
if (mysqli_num_rows($result)===0){
    mysqli_close($link);
    header('location: http://localhost/imm/formulaire/frm_rech_clt.php?error=Aucun resultat trouvé');
    exit();
}else{
    $rows=mysqli_fetch_assoc($result);
    $num=$rows['numCIN'];
    $pre=$rows['prenomsC'];
    $add=$rows['adresseC'];
    $nom=$rows['nomC'];
    
}
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                
                            <ul class="nav nav-tabs col-lg-7">
                                <li class="active"><a href="/imm/formulaire/frm_im_rech.php">Recherche </a></li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="">Ajouter</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/imm/formulaire/frm_clt.php"><span class="glyphicon glyphicon-pencil"></span>Ajouter</a></li>
                                </ul>
                                </li>
                            </ul>
                        <br>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Num CIN</th>
                                <th>Nom</th>
                                <th>Prenoms</th>
                                <th>Adresse</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> <?= $num;?> </td>
                                <td> <?= $nom ;?> </td>
                                <td> <?= $pre ;?> </td>
                                <td> <?= $add ;?> </td>
                            </tr>
                            
                            </tbody>
                        </table>
        </div>
        </body>
   </div>
</html>

