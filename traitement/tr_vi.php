<?php
include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
session_start();
    if (empty($_POST['app']) || empty($_POST['dec']) || empty($_POST['boite'])){
        header('location: http://localhost/imm/formulaire/frm_vis1.php');
        exit();
    }else{
        $text=$_POST['boite'];
        $app=$_POST['app'];
        $dec=$_POST['dec'];
        $nom=$_SESSION['name'];
        $date = gmdate("y-m-d");

        $sql="SELECT numCIN FROM Client WHERE nomC= '$nom'";
        $sql1="SELECT * FROM Vente WHERE infoV= '$app'";

        $result=mysqli_query($link,$sql);
        while ($rows=mysqli_fetch_array($result)){
            $cin=$rows['numCIN'];
        }

       /*  $resulta=mysqli_query($link,$sql1);
        while ($row=mysqli_fetch_array($resulta)){
            $inf=$row['infoV'];
        } */
         $i= rand() ;
        $id=strlen($cin) + strlen($nom) + $i +1 ;
        $resulta=mysqli_query($link,$sql1);
        if (mysqli_num_rows($resulta)>0)
        {
            header('location: http://localhost/imm/formulaire/frm_vis1.php?error=Appart déja vendu');
            exit();
        }else{

            $sql_enreg="INSERT INTO Visite VALUES('$app','$cin','$id','$date','$text','$dec')";
            if (mysqli_query($link,$sql_enreg)){
              mysqli_close($link);
              $_SESSION['deci']=$dec;
              $_SESSION['apps']=$dec;
              $_SESSION['ap']=$app;
              header('location: http://localhost/imm/formulaire/frm_cont.php');
             exit();
            }else{
              mysqli_close($link);
              header('location: http://localhost/imm/formulaire/frm_vis1.php?error=Enregistrement non effectuer');
             exit();
            };

        }

            

        


    }

?>