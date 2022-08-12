<?php 
  include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
                       
 ?>
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

                    <?php
                                                
                        $my_sql="SELECT * FROM Appartement";
                        $result=mysqli_query($link,$my_sql);
                        while ($rows=mysqli_fetch_array($result))
                        {?> 
                        <tr> 
                            <td> <?= $rows['nomI'] ?> </td>
                            <td> <?= $rows['numAppart'] ?> </td>
                            <td> <?= $rows['numEtage'] ?> </td>
                            <td> <?= $rows['nbreChambre'] ?> </td>
                            <td> <?= $rows['superficie'] ?> </td>
                            <td> <?= $rows['numerP'] ?> </td>
                            <td> <?= $rows['prixPrev'] ?> </td>
                        </tr>
                   <?php  }
                    ?>
                </tr>
            </tbody>
 </table>