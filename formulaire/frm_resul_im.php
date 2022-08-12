<?php 
  include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
                       
 ?>
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

                    <?php
                                                
                        $my_sql="SELECT * FROM Immeuble";
                        $result=mysqli_query($link,$my_sql);
                        while ($rows=mysqli_fetch_array($result))
                        {?> 
                        <tr> 
                            <td> <?= $rows['nomI'] ?> </td>
                            <td> <?= $rows['nbreAppart'] ?> </td>
                            <td> <?= $rows['nbrEtage'] ?> </td>
                            <td> <?= $rows['adresseI'] ?> </td>
                        </tr>
                   <?php  }
                    ?>
                </tr>
            </tbody>
 </table>