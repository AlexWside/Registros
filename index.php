<?php 
 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="shortcut icon" href="img/pen.png" type="image/x-icon">
    <link rel="stylesheet" href="VIEW/css/style-log.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>main</title>
</head>
<body>
<form action="VIEW/login.php" method='POST'>
<div class="sidenav">
         <div class="login-main-text">
            <h2>Registros<br> Login</h2>
            <?php 
                if(isset($_GET['return'])){
                echo'<p>Login ' . $_GET['return'] .  '<p>';
            }?>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>User</label>
                     <input type="text" name="login" class="form-control" placeholder="Usuario">
                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                     <input type="password" name="senha" class="form-control" placeholder="Senha">
                  </div>
                  <button type="submit" class="btn btn-black">Entrar</button>
                  
               </form>
            </div>
         </div>
      </div>
      </form>
</body>
</html>