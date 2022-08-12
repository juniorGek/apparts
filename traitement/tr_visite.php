<?php
include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
if (empty($_POST['clt'])){
    echo ('veuillez remplir le champs');
}else{
    $recher=$_POST['clt'];
    $sql="SELECT * FROM Client WHERE nomC='$recher'";
     $resulta=mysqli_query($link,$sql);
  }
     if (mysqli_num_rows($resulta)>0)
     {
        session_start();
        $_SESSION['name']= $recher;
        header('location: http://localhost/imm/formulaire/frm_vis.php');
        exit();
     }else{

   mysqli_close($link);
      header('location: http://localhost/imm/formulaire/frm_visite.php?error=veuillez Enregistrer le client ou verifier info du client');
      exit();
}
?>