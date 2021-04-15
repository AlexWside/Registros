<?php

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top " >
<a class="navbar-brand" id="titulo_nav_bar" href="home.php">Registro</a>
<button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div id="my-nav" class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="../VIEW/novo_registro.php">Novo <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="../VIEW/buscar_registro_data.php">Busca <span class="sr-only">por Data</span></a>
        <li>
        <li class="nav-item active">
            <a class="nav-link" href="../VIEW/buscar_registro_titulo.php">Busca <span class="sr-only">por Titulo</span></a>
        </li>
        <?php if($_SESSION['tipo'] == 1) {  // lixeira?>
        <li class="nav-item active">
            <a class="nav-link" href="cadastro_usuario.php">Cadastros<span class="sr-only"></span></a>
        <li>
        <?php } ?>
        
        <li class="nav-item">
            <a class="nav-link" href="alterar_senha.php" tabindex="-1" aria-disabled="true" >Alterar Senha</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true" >logout</a>
        </li>
         <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        -->
    </ul>
    
</div>
</nav>