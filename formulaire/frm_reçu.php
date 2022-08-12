<?php
session_start();
$no= $_SESSION["Nom"];
$civ=$_SESSION['civ'];
$numa=$_SESSION['avoc'];
$prix=$_SESSION['pttc'];
$name=$_SESSION['name'];
$app=$_SESSION['ap'];
$pays=$_SESSION['paye'];
$imm=$_SESSION['ib'];
$sig=$_SESSION['dats'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/imm/style2.css" />

  </head>
  <div class="sty">
        <body>
                <div class="printthis">

                    <div class="panel panel-default col-lg-11">
                        <div class="panel-heading"><h2><small>IMMOBILIER SOCIM</small></h2></div>
                        <h2>Reçu de Vente d'Appart</h2>
                        <form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-2 " >Gerant:</label>
                            <div class="col-sm-10 col-lg-2">
                                <div class="form-control">
                                    <?= $civ ;?> <?= $no ;?>
                                </div>
                            </div>
                        </div>

                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nom Client</th>
                            <th>Num Autorisation</th>
                            <th>Numero Appart</th>
                            <th>Nom immeuble</th>
                            <th>Type Payement</th>
                            <th>Prix de vente</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?= $name ;?></td>
                            <td><?= $numa ;?></td>
                            <td><?= $app ;?></td>
                            <td><?= $imm ;?></td>
                            <td><?= $pays ;?></td>
                            <td><?= $prix ;?></td>
                        </tr>
                        
                        </tbody>
                    </table>

                    </form>
                       <h4>Date Signature: <br><?= $sig ;?> </h4>
                    </div>
                    <div class="col-sm-offset-2 col-lg-4">
                              <button type="button" class=" btn-primary" onclick="window.print()">Imprimer</button>

                    </div>
                    <div class="col-sm-offset-2 col-lg-4">
                              <button type="button" class=" btn-primary" onclick='document.location.href="http://localhost/imm/formulaire/frm_visite.php"'>Retour</button>

                    </div>
            </div>     
        </body>
  </div>
</html>
<style media="printfer">
    .noprint * {
        display: none;
    }
    body{
        visibility: hidden;
    }
    .printthis{
        visibility: visible;
    }
</style>