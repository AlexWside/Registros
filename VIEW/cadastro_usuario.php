<?php
 session_start();
 //require_once('usuarios.php');
 if($_SESSION['autentication'] != 's'){
  header('Location: ../index.php');
}

 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title>Registros - cadastro de usuario</title>
</head>

<body>
<?php require_once('navbar.php');?>
<div class="container-sm">
<form action="add_usuario.php" method="POST">


        <div id="form-user">
                <!--Seleção-->
          <div class="input-group mb-3">
            <select class="custom-select" name="permissao" id="inputGroupSelect01">
            <option selected>--Selecione--</option>
            <option value="1">Administrador</option>
            <option value="2">Usuario</option>
            </select>
            </div>
           
                <!--fim Seleção-->
            
            <!--inicio nome-->
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">Nome</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="nome" name="nome" required>
            </div>
            <!-- FIM NOME-->


            <!--inicio sobrenome-->
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Sobrenome</label>
              <input type="text" class="form-control" id="validationCustom02" placeholder="sobrenome" name="sobrenome" required>
            </div>
            <!-- FIM SOBRENOME-->

            <!--inicio login-->
            <div class="col-md-4 mb-3">
              <label for="validationCustomUsername">Login</label>
                <div class="input-group">
                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Login" name="login" aria-describedby="inputGroupPrepend" required>
              </div>
            </div>
            <!--FIM LOGIN-->
            
            <!--inicio senha-->
            <div class="col-md-4 mb-3">
              <label for="validationCustomUsername">senha</label>
                <div class="input-group">
                <input type="password" class="form-control" name="senha" id="validationCustomUsername" placeholder="Senha" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <!--fim senha-->
          
            <div class="col-md-4 mb-3">
            <button class="btn btn-primary" type="submit">Cadastrar</button>
            <button class="btn btn-danger" type="button"  ><a id="cancelar-novo-registro" href="home.php" >Cancelar</a></button>
            </div>

            </div><!--fim form user-->
</form>
</div>

</body>
</html>