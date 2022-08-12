<?php
    include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
    session_start();
    $prix=$_SESSION['prix'];
    $name=$_SESSION['name'];
    $app=$_SESSION['ap'];
    $e= ($prix*18)/100;
    $ttc=$prix + $e;
    $av=($ttc *20 )/100;
?>
<?php
    include ('/opt/lampp/htdocs/imm/traitement/connection/header.php');
?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nom Client</th>
                                <th>Numero Appart</th>
                                <th>Montant HT</th>
                                <th>Montant TTC</th>
                                <th>Montant Avance</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td><?= $name ?></td>
                                    <td><?= $app ?></td>
                                    <td><?= $prix ?></td>
                                    <td><?= $ttc ?></td>
                                    <td><?= $av?></td>
                                </tr>
                            </tbody>
                    </table>
                    <form class="form-horizontal">
                       
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-lg-4">
                              <button type="button" class=" btn-primary btn-block" onclick='document.location.href="http://localhost/imm/traitement/tr_ver_vis.php"'>Suivant</button>

                         </div>
                        </div>
                        
                    </form>


        </body>
   </div>
</html>
