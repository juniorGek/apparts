<?php
     include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");

     if ((empty($_POST['nom'])) && (empty($_POST['pwd'])) && (empty($_POST['cpwd'])))
     {

        echo 'Veuillez remplir tous les champs';

     }else{
            $nom= $_POST['nom'];
            $pwd= $_POST['pwd'];
            $cpwd= $_POST['cpwd'];
            $date= date('d-m-y');
            $civ=$_POST['civ'];
           $e=strlen($pwd);
     }
      if ($pwd==$cpwd){
            if($e>=6){
                  if (ctype_digit($pwd) || ctype_alpha($pwd)){
                    header('location: http://localhost/imm/formulaire/frm_inscrire.php?error=le mot de passe doit contenir des lettrs et des chiffres');
                    exit();
                  }else{

                    $sql="SELECT * FROM admin WHERE username='$nom'";
                    $resulta=mysqli_query($link,$sql);
                    if (mysqli_num_rows($resulta)>0)
                    {
                     mysqli_close($link);
                     header('location: http://localhost/imm/formulaire/frm_inscrire.php?error=changer de nom utilisateur');
                     exit();
                    }else{
                     
                     $sql_enreg="INSERT INTO admin VALUES('$nom','$pwd','$civ','$date')";
                     if (mysqli_query($link,$sql_enreg)){
                       mysqli_close($link);
                       header('location: http://localhost/imm/formulaire/frm_inscrire.php?error=Nouveau utilisateur creer');
                      exit();
                     }else{
                       mysqli_close($link);
                       header('location: http://localhost/imm/formulaire/frm_inscrire.php?error=Echec de la creation');
                      exit();
                     };
               
                    }

                  }

            }else{
              header('location: http://localhost/imm/formulaire/frm_inscrire.php?error=le mot de passe doit etre superieur a 6 caractères');
              exit();
            }
       
        
      }else{
        header('location: http://localhost/imm/formulaire/frm_inscrire.php?error=verifier le mot de passe');
        exit();
      }
    

?>