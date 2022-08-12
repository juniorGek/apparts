<?php 
  include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
                       
 ?>
 <table class="table table-striped">
        <thead>
            <tr>
                <th>Numero Vente</th>
                <th>Numero Appart</th>
                <th>Nom Client</th>
                
            </tr>
        </thead>
            <tbody>
                <tr>

                    <?php
                                                
                        $my_sql="SELECT * FROM Vente";
                        $result=mysqli_query($link,$my_sql);
                        while ($rows=mysqli_fetch_array($result))
                        {?> 
                        <tr> 
                            <td> <?= $rows['numV'] ?> </td>
                            <td> <?= $rows['infoV'] ?> </td>
                            <td> <?= $rows['nomC'] ?> </td>
                            
                        </tr>
                   <?php  }
                    ?>
                </tr>
            </tbody>
 </table>