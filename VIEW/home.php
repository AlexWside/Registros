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
    <!-- CSS only -->
    <link rel="shortcut icon" href="img/pen.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Registros - Home</title>
</head>
<body>
<?php require_once('navbar.php');?>
<div class="body">
    <div class="container">
        <!--img class="img-thumbnail" src="img/rimage.jpg" alt=""-->
    <div>
    </div>
</body>
</html>