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
    
    <title>Registros - alterar senha</title>
</head>

<body>
<?php require_once('navbar.php');?>
<div class="container-sm">
<form action="add_alteracao.php" method="POST">


        <div id="form-user">
               
            <!--inicio senha-->
            <div class="col-md-4 mb-3">
              <label for="validationCustomUsername">Nova senha</label>
                <div class="input-group">
                <input type="password" class="form-control" name="novasenha" id="validationCustomUsername" placeholder="Senha" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <!--fim senha-->
            
            <!--inicio senha-->
            <div class="col-md-4 mb-3">
              <label for="validationCustomUsername">Confirmar Senha</label>
                <div class="input-group">
                <input type="password" class="form-control" name="confirmasenha" id="validationCustomUsername" placeholder="Senha" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <!--fim senha-->
            
            <!--inicio alerta-->
            <?php
             if(isset($_GET['valor'])&&$_GET['valor']=='sucesso'){
            ?>
            <div class="alert alert-success" role="alert">
              Senha Alterada com Sucesso!!!
            </div>
          <?php }?>
          <?php
             if(isset($_GET['valor'])&&$_GET['valor']=='falha'){
            ?>
            <div class="alert alert-danger" role="alert">
              Senhas Diferentes, tente novamente!!!
            </div>
          <?php }?><!--fim alerta-->



          <!--inicio botao-->
            <div class="col-md-4 mb-3">
            <button class="btn btn-primary" type="submit">Salvar</button>
            <button class="btn btn-danger" type="button"  ><a id="cancelar-novo-registro" href="home.php" >Voltar</a></button>
            </div>
          <!--fim botao-->
            </div><!--fim form user-->
</form>
</div>

</body>
</html>