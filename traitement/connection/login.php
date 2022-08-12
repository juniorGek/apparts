<?php
                  include("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
                  session_start();
     if (isset($_POST['nom']) && isset($_POST['mdp']))
     {
           function validate($data)
           {
               $data= trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);

               return $data;
           }
          $nom=validate($_POST['nom']);
          $passes=validate ($_POST['mdp']);

          if (empty($nom))
          {
            header("location: http://localhost/imm/index.php?error=nom utilisateur ou mot de passe incorrect");
            exit();
          }else if (empty($passes))
          {
            header('location: http://localhost/imm/index.php?error=nom utilisateur ou mot de passe incorrect');
            exit();
          }
          else
          {
             $sql= "SELECT * FROM admin WHERE username ='$nom' AND password ='$passes' ";
             $result=mysqli_query($link,$sql);
             
             if (mysqli_num_rows($result)===1)
             {
              $rows=mysqli_fetch_assoc($result);
                   
                 if($rows['username']===$nom && $rows['password']=== $passes)

                             {
                                 $_SESSION['Nom']=$rows['username'] ;
                                 $_SESSION['civ']=$rows['civilite'];
                                 header('location: http://localhost/imm/accueil.php');
                                 exit();
                             }
                  else {
                         header('location: http://localhost/imm/index.php?error=nom utilisateur ou mot de passe incorrect');
                         exit();
                       }

             }else {
              header('location: http://localhost/imm/index.php?error=nom utilisateur ou mot de passe  incorrect');
              exit();
             }
             
          }
     }
     else{
         header("Location:  http://localhost/imm/index.php");
         exit();
     }

    

?>