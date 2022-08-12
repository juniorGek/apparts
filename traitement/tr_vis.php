<?php
session_start();
 if (empty($_POST['immeuble'])){
    header('location: http://localhost/imm/formulaire/frm_vis.php?error=Veuillez bien selectionnez un immeuble');
    exit();
 }else{
    $_SESSION['imm']=$_POST['immeuble'];
    header('location: http://localhost/imm/formulaire/frm_vis1.php');
    exit();
 }


?>