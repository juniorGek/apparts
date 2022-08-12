<?php
include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");

if ((empty($_POST['numa'])) && (empty($_POST['nbc'])) && (empty($_POST['nume']))){

    echo 'Veuillez remplir tous les champs';

 }else{
        $numa= $_POST['numa'];
        $nume= $_POST['nume'];
        $nbrc= $_POST['nbrc'];
        $sup= $_POST['sup'];
        $prix= $_POST['prix'];
        $appart= $_POST['immeuble'];
        $num=$nume.''.$numa;
        //recupertion du nombre d'etage de l'immeuble 
        $sql="SELECT * FROM Immeuble WHERE nomI= '$appart'";
        $result=mysqli_query($link,$sql);
        if (mysqli_num_rows($result)===1)
        {
         $rows=mysqli_fetch_assoc($result);
         $et=$rows['nbrEtage'];
         $nbre=$rows['nbreAppart'];
        }
        echo $et;
          if ($nume<$et){
               
               //verification de l'existant
                  $sql_select="SELECT * FROM Appartement WHERE numAppart = '$numa' ";
                  $resulta=mysqli_query($link,$sql_select);
                  if (mysqli_num_rows($resulta)>0)
                  {
                    
                    mysqli_close($link);
                    header('location: http://localhost/imm/formulaire/frm_appart.php?error=immeuble exite deja');
                    exit();
                    
                      
                  }
                  else{ 
                   //insertion dans la base de donnée
                      $sql_enreg="INSERT INTO Appartement VALUES('$numa','$nume','$sup','$nbrc','$prix','$appart','$num')";
                      if (mysqli_query($link,$sql_enreg)){
                        mysqli_close($link);
                        header('location: http://localhost/imm/formulaire/frm_appart.php?error=Enregistrement effectuer avec succes');
                       exit();
                      }else{
                        mysqli_close($link);
                        header('location: http://localhost/imm/formulaire/frm_appart.php?error=Enregistrement non effectuer');
                       exit();
                      };
                    
                  } 
          
          }else{
            header('location: http://localhost/imm/formulaire/frm_appart.php?error=le numero etage doit etre inferieur ou egal a celui de immeuble correspondant');
            exit();
          }
         

 }
?>