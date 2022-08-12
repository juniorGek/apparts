<?php
     include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");

     if ((empty($_POST['prof'])))
     {

      header('location: http://localhost/imm/formulaire/frm_clt.php?error=Veuillez selectionnez la profession');
      exit();

     }else{
            $cni= $_POST['cni'];
            $nom= $_POST['nom'];
            $prenom= $_POST['pnom'];
            $adresse= $_POST['add'];
            $tele= $_POST['tel'];
            $prof= $_POST['prof'];
            $e=strlen($tele);
           
     }
     $sql="SELECT * FROM Client WHERE numCIN='$cni'";
     $resulta=mysqli_query($link,$sql);
     if (mysqli_num_rows($resulta)>0)
     {
      mysqli_close($link);
      header('location: http://localhost/imm/formulaire/frm_clt.php?error=Le client existe');
      exit();
     }else{

        if ($e==8){


          $sql_enreg="INSERT INTO Client VALUES('$cni','$nom','$prenom','$adresse','$tele','$prof')";
          if (mysqli_query($link,$sql_enreg)){
            mysqli_close($link);
            session_start();
            $_SESSION['name']= $nom;
            header('location: http://localhost/imm/formulaire/frm_vis.php');
           exit();
          }else{
            mysqli_close($link);
            header('location: http://localhost/imm/formulaire/frm_clt.php?error=Enregistrement non effectuer');
           exit();
          };

        }else{
          header('location: http://localhost/imm/formulaire/frm_clt.php?error=Verifier le numero de telephone');
          exit();
        }
      

     }

?>