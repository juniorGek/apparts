<?php
include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
if (empty($_POST['rech'])){
    header('location: http://localhost/imm/formulaire/frm_ap_rech.php?error=Veuillez remplir les champs');
    exit();
}else{
    $recher=$_POST['rech'];
    $sql="SELECT * FROM Appartement WHERE numAppart LIKE '%$recher%'";
    $result=mysqli_query($link,$sql);
}
if (mysqli_num_rows($result)===0){
    mysqli_close($link);
    header('location: http://localhost/imm/formulaire/frm_ap_rech.php?error=Aucun resultat trouvé');
    exit();
}else{
    $rows=mysqli_fetch_assoc($result);
    $app=$rows['numAppart'];
    $etage=$rows['numEtage'];
    $sup=$rows['superficie'];
    $ch=$rows['nbreChambre'];
    $prix=$rows['prixPrev'];
    $nom=$rows['nomI'];
    $porte=$rows['numerP'];
}
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>

                
                            <ul class="nav nav-tabs col-lg-7">
                                <li class="active"><a href="/imm/formulaire/frm_ap_rech.php">Recherche </a></li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/imm/formulaire/frm_ap_liste.php"><span class="glyphicon glyphicon-pencil"></span>Liste</a></li>
                                     <li><a href="/imm/formulaire/frm_appart.php"><span class="glyphicon glyphicon-pencil"></span> Ajouter</a></li>
                                </ul>
                                </li>
                            </ul>
                        <br>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nom Immeuble</th>
                                <th>Numero Appart</th>
                                <th>Numero Etage</th>
                                <th>Nombre de nbreChambre</th>
                                <th>Superficie</th>
                                <th>Numero Porte</th>
                                <th>Prix</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> <?= $nom ;?> </td>
                                <td> <?= $app ;?> </td>
                                <td> <?= $etage ;?> </td>
                                <td> <?= $ch ;?> </td>
                                <td> <?= $sup ;?> </td>
                                <td> <?= $porte ;?> </td>
                                <td> <?= $prix;?> FCFA</td>
                            </tr>
                            
                            </tbody>
                        </table>
        </div>
        </body>
   </div>
</html>