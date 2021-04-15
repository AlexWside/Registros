<?php
session_start();
require_once("../MODEL/registro_dao.php");
$Lista = $registro->buscar_registro();
if(!isset($_POST['titulo_usuario'])){
    $exibirtitulo  = 'digite um titulo';
}else {
    $titulotela = $_POST['titulo_usuario'];
    $exibirtitulo = "Busca por: $titulotela";
}
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
    <title>Registros - busca</title>
</head>
<body>
<?php
 
 require_once('../VIEW/navbar.php');?>
 <section class="resultado_da_busca">
     <div class="campo_busca_data">
     <form action="buscar_registro_titulo.php" method="POST">
     <p><?= $exibirtitulo ?></p> 
     <input type="text" name="titulo_usuario" value='<?php echo @$titulotela; ?>'>
     <input type="submit" value="Buscar">
     </form>
     <div class="conteiner_botton_busca">
    <button class="btn btn-secondary " ><a id="cancelar-busca" onClick="window.print()" >Imprimir</a></button>
    <button class="btn btn-danger " ><a id="cancelar-busca" href="home.php" >Cancelar</a></button>
    </div>
     </div>
     
     
 <?php
    if(!isset($_POST['titulo_usuario'])){
        foreach($Lista as $item){
            //formatar data
            $data_banco = $registro-> formatar_data($item[3]);  
        ?>
        <div class="card">
            <div class="card-header">
                Registro: <?= $item[0]?>              
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $item[1]?></h5>
                <p class="card-text"><?= $item[2] ?></p>
                <?php if($_SESSION['tipo'] == 1) {  // lixeira?>
                
                <form action="apagar_registro.php" method="post">
                <input type="hidden" name="id" value=<?= $item[0]?>>
                <input type="hidden" name="url" value='buscar_registro_titulo.php'>
                <p class="card-text"><button class="btn btn-danger dt-cri" type="submit" >Excluir</button></p>
                </form>
                
            
            <?php }// fim lixeira?>
                <p class="card-text dt-cri" ><?= $data_banco ?></p>
                <p class="card-text dt-cri" ><?= $item[7] ?></p>
            </div>
            
        </div>
 <?php
    }
    
    }else{
    
     $Lista = $registro->buscar_registro_parametro($titulotela);

     //echo "<pre>"; print_r($Lista); exit;
    
    if( !empty($Lista) ){

echo "foi encotrado " . count($Lista) ." itens nesta consulta.";

    foreach($Lista as $item){
//formata as datas
            $data_banco = $registro-> formatar_data($item[3]);        
//fim formata tela  
        ?>
        <div class="card">
            <div class="card-header">
                Registro: <?= $item[0]?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $item[1]?></h5>
                <p class="card-text"><?= $item[2] ?></p>

                <?php if($_SESSION['tipo'] == 1) {  // lixeira?>
                
                <form action="apagar_registro.php" method="post">
                <input type="hidden" name="id" value=<?= $item[0]?>>
                <input type="hidden" name="url" value='buscar_registro_titulo.php'>
                <p class="card-text"><button class="btn btn-danger dt-cri" type="submit" >Excluir</button></p>
                </form>
                
            
                <?php }// fim lixeira?>
                <p class="card-text dt-cri" ><?= $data_banco ?></p>
                <p class="card-text dt-cri" ><?= $item[7] ?></p>
            </div>
            
        </div>
 <?php

  
}//fim foreach else
}else{
    echo "Não foi encontrado itens para esta busca";
}
}// fim if auxencia de data
    ?>
    </section> 
</body>
</html>