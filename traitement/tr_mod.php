<?php
     include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");

     if ((empty($_POST['nom'])) && (empty($_POST['pwd'])) && (empty($_POST['cpwd'])))
     {

        echo 'Veuillez remplir tous les champs';

     }else{
            $nom= $_POST['nom'];
            $pwd= $_POST['pwd'];
            $npwd= $_POST['npwd'];
            $cpwd=$_POST['cpwd'];
           $e=strlen($npwd);
     }
     $sql= "SELECT * FROM admin WHERE username ='$nom' AND password ='$pwd' ";
             $result=mysqli_query($link,$sql);

             if (mysqli_num_rows($result)===1)
             {
              $rows=mysqli_fetch_assoc($result);
                   
                 if($rows['username']===$nom && $rows['password']=== $pwd)

                             {
                                 

                                if ($npwd==$cpwd){
                                    if($e>=6){
                                          if (ctype_digit($npwd) || ctype_alpha($npwd)){
                                            header('location: http://localhost/imm/formulaire/frm_mod.php?error=le mot de passe doit contenir des lettrs et des chiffres');
                                            exit();
                                          }else{

                                            if ($pwd==$npwd){
                                                header('location: http://localhost/imm/formulaire/frm_mod.php?error=Veuillez Changer de mot passe');
                                                exit();
                                            }
                                            else{
                                                
                                                $sql1="UPDATE admin SET password='$npwd' WHERE username='$nom' ";
                                                if (mysqli_query($link,$sql1)){
                                                    mysqli_close($link);
                                                    header('location: http://localhost/imm/formulaire/frm_mod.php?error=Mot de Passe modifier');
                                                   exit();
                                                  }else{
                                                    mysqli_close($link);
                                                    header('location: http://localhost/imm/formulaire/frm_mod.php?error=Echec de la modification');
                                                   exit();
                                                  };
                                            }
                        
                                               
                        
                                          }
                        
                                    }else{
                                      header('location: http://localhost/imm/formulaire/frm_mod.php?error=le mot de passe doit etre superieur a 6 caractères');
                                      exit();
                                    }
                               
                                
                              }else{
                                header('location: http://localhost/imm/formulaire/frm_mod.php?error=verifier le mot de passe');
                                exit();
                              }


                             }
                  else {
                         header('location: http://localhost/imm/formulaire/frm_mod.php?error=Veuillez bien saisir vos informations');
                         exit();
                       }

             }else {
              header('location: http://localhost/imm/formulaire/frm_mod.php?error=Veuillez bien saisir vos informations');
              exit();
             }
?>