<?php 
 session_start();
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
    <link rel="shortcut icon" href="img/pen.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        form{
            margin-top: 5em;
            text-decoration: none;
        }
    </style>
    <title>Registros - novo registro</title>
</head>
<body>
<div class="container-lg">
<?php require_once('navbar.php');?>
</div>
<div class="container-sm">
<form action='cad_novo.php' method="POST">

  <div class="mb-3">
    <label for="descricao" class="form-label">Titulo</label>
    <input type="text" name="titulo" class="form-control" id="descricao" >
  </div>
  <div class="mb-3">
    <label for="my-textarea">Descricao</label>
    <textarea id="my-textarea" class="form-control" name="descricao" rows="3"></textarea>
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name='checkbox' disabled value="privado">
    <label class="form-check-label" for="exampleCheck1" >privado</label>
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
  <button class="btn btn-danger" ><a id="cancelar-novo-registro" href="home.php" >Cancelar</a></button>
</form>
</div>

</body>
</html>