<?php
include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
if (empty($_POST['rech'])){
    echo ('veuillez remplir le champs');
}else{
    $recher=$_POST['rech'];
    $sql="SELECT * FROM Immeuble WHERE nomI LIKE '%$recher%'";
    $result=mysqli_query($link,$sql);
}
if (mysqli_num_rows($result)===0){
    mysqli_close($link);
    header('location: http://localhost/imm/formulaire/frm_im_rech.php?error=Aucun resultat trouvé');
    exit();
}else{
    $rows=mysqli_fetch_assoc($result);
    $app=$rows['nbreAppart'];
    $etage=$rows['nbrEtage'];
    $sup=$rows['adresseI'];
    $nom=$rows['nomI'];
}
?>

<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                
                            <ul class="nav nav-tabs col-lg-7">
                                <li class="active"><a href="/imm/formulaire/frm_im_rech.php">Recherche </a></li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/imm/formulaire/frm_im_liste.php"><span class="glyphicon glyphicon-pencil"></span>Liste</a></li>
                                     <li><a href="/imm/formulaire/frm_imeuble.php"><span class="glyphicon glyphicon-pencil"></span> Ajouter</a></li>
                                </ul>
                                </li>
                            </ul>
                        <br>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nom Immeuble</th>
                                <th>Nombre Appart</th>
                                <th>Nombre Etage</th>
                                <th>Adresse</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> <?= $nom ;?> </td>
                                <td> <?= $app ;?> </td>
                                <td> <?= $etage ;?> </td>
                                <td> <?= $sup ;?> </td>
                            </tr>
                            
                            </tbody>
                        </table>
        </div>
        </body>
   </div>
</html>