<?php 
    session_start();
    require_once("../MODEL/usuario_dao.php");
    $Lista = $usuario->buscar_usuario();
    $ctrl = 0;
 
foreach ($Lista as $user){
    if($_POST['login'] == $user[4] && password_verify ( $_POST['senha'], $user[5])){
        $_SESSION['autentication']= 's';
        print_r($user);
        
        $_SESSION['id_usuario'] = $user[0];
        $_SESSION['tipo'] = $user[3];
        $_SESSION['nm_usuario'] = $user[1];
       header('Location: home.php');
       $ctrl = 1;
       break;
       
      
    } 
}
if($ctrl == 0){
    $_SESSION['autentication']= 'n';
  header('Location: ../index.php?return=Invalido');
}
?>
