<?php
    include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
    session_start();
    $prix=$_SESSION['prix'];
    $name=$_SESSION['name'];

        if (empty($_POST['dat'])){
            echo ('Remplir tous les champs');
        }else{
            $avance  = $_POST['av'];
            $auto=$_POST['Aut'];
            $nom=$_POST['cat'];
            $prenom=$_POST['prenom'];
            $adr=$_POST['ad'];
            $tel=$_POST['tel'];
            $date=$_POST['dat'];
            $id= rand() +2;
        }
        $e= ($prix*18)/100;
        $ttc=$prix + $e;
        $av=($ttc *20 )/100;
        $_SESSION['pttc']=$ttc;
        if($avance<$av){
            header('location: http://localhost/imm/formulaire/frm_prom.php?error=erreur!Veuillez bien verifier les informations');
            exit();
        }else{
            if($avance>$ttc){
                header('location: http://localhost/imm/formulaire/frm_prom.php?error=Verifier le montant');
                exit();
            }else{
                $sql1="SELECT * FROM Promesse WHERE nomC= '$name'";
                $sql2="SELECT * FROM Desistement WHERE nomC= '$name'";

                $resultas=mysqli_query($link,$sql2);

                $resulta=mysqli_query($link,$sql1);
                  if (mysqli_num_rows($resulta)>0 )
                  {
                    if ((mysqli_num_rows($resultas)<=0)){
                        mysqli_close($link);
                        header('location: http://localhost/imm/formulaire/frm_prm.php?error=Cet client a deja etabli une promesse');
                        exit();
                    }
                    else{

                        $enreg="INSERT INTO Promesse VALUES('$id','$name','$prix','$ttc','$avance','$date')";
                        $sql_enreg="INSERT INTO Avocat VALUES('$auto','$nom','$prenom','$adr','$tel','$name')";
                        mysqli_query($link,$sql_enreg);
                        mysqli_query($link,$enreg);
                        mysqli_close($link);
                        $_SESSION['avoc']=$auto;
                        header('location: http://localhost/imm/formulaire/frm_eta.php');
                        exit();
    
                      }
                      
                  }else{

                    $enreg="INSERT INTO Promesse VALUES('$id','$name','$prix','$ttc','$avance','$date')";
                    $sql_enreg="INSERT INTO Avocat VALUES('$auto','$nom','$prenom','$adr','$tel','$name')";
                    mysqli_query($link,$sql_enreg);
                    mysqli_query($link,$enreg);
                    mysqli_close($link);
                    $_SESSION['avoc']=$auto;
                    header('location: http://localhost/imm/formulaire/frm_eta.php');
                    exit();

                  }
               

            }
           
           
        }

?>