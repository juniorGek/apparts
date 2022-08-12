<?php
     include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");

     if ((empty($_POST['nom'])) && (empty($_POST['add'])) && (empty($_POST['etage']))){

        echo 'Veuillez remplir tous les champs';

     }else{
            $nom= $_POST['nom'];
            $adresse= $_POST['add'];
            $etage= $_POST['etage'];
            $appart= $_POST['nbappart'];

            $sql_select="SELECT * FROM Immeuble WHERE nomI = '$nom' ";
            $resulta=mysqli_query($link,$sql_select);
            if (mysqli_num_rows($resulta)>0)
            {
              
              mysqli_close($link);
              header('location: http://localhost/imm/formulaire/frm_imeuble.php?error=immeuble exite deja');
              exit();
              
                
            }
            else{
                $sql_enreg="INSERT INTO Immeuble VALUES('$nom','$adresse','$etage','$appart')";
               if( mysqli_query($link,$sql_enreg)){
                mysqli_close($link);
                header('location: http://localhost/imm/formulaire/frm_imeuble.php?error=Enregistrement effectuer avec succes');
              exit();

               }else{
                mysqli_close($link);
                header('location: http://localhost/imm/formulaire/frm_imeuble.php?error=Enregistrement non effectuer');
              exit();
               }
        
               
              
            }

     }

?>