<?php 
    session_start();
    require_once("../MODEL/usuario_dao.php"); 
    if($_POST['novasenha']==$_POST['confirmasenha']){
       $novasenha = password_hash($_POST['novasenha'], PASSWORD_DEFAULT);
       $usuario->Alterar_senha($novasenha,$_SESSION['id_usuario']);
       header('Location:alterar_senha.php?valor=sucesso');
    }else{
        header('Location:alterar_senha.php?valor=falha');
    }
    ?>