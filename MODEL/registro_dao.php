<?php

require_once('../CONTROLER/conexao.php');

// inicio da classe registro 
class Registro{
 private $titulo;
 private $descricao;
 private $nomeusuario;
 private $conn;
 public function __construct ($conn){
    $this ->conn = $conn;// passagem da conexão pelo parametro do contrutor 
}// fim construtor 

public function adicionar_registro($titulo,$descricao,$nomeusuario,$idusuario){
    $this ->descricao = $descricao;
    $this ->titulo = $titulo;
    $this ->nomeusuario = $nomeusuario;
    $this ->idusuario = $idusuario;
    $result_usuario = "INSERT INTO registro (titulo,descricao,usuario,created,nm_usuario) VALUES ('$titulo','$descricao','$idusuario',now(),'$nomeusuario')";
    mysqli_query($this->conn,$result_usuario);

   header('Location:novo_registro.php');
}// fim funçõo adicionar registro
public function buscar_registro(){
    
    $result_usuario = "SELECT * FROM registro ";
    $result_bd = $this->conn->query($result_usuario);
    $lista = mysqli_fetch_all($result_bd);
    return $lista;
   //header('Location:novo_registro.php');
}// fim funçõo Buscar Todos

public function buscar_registro_parametro($parametro){
//echo "<pre>"; print_r($parametro); exit;
    $result_usuario = "SELECT * FROM registro WHERE titulo like '%$parametro%'";
//    echo "<pre>"; print_r($result_usuario); exit;
    $result_bd = $this->conn->query($result_usuario);
    $lista = mysqli_fetch_all($result_bd);
    //echo "<pre>"; print_r($lista); exit;
    return $lista;
   //header('Location:novo_registro.php');
}// fim funçõo Buscar Por Titulo

function formatar_data($data){
    $date = new DateTime($data);
     return $date->format('d-m-Y'); 
}//fim formatar data
public function apagar_registro($parametro,$url){
    //echo "<pre>"; print_r($parametro); exit;
        //$result_usuario = "DELETE FROM 'registro' WHERE 'id' = '$parametro'";
    //    echo "<pre>"; print_r($result_usuario); exit;
    $result_usuario = "DELETE FROM registro WHERE id = '$parametro'";
    mysqli_query($this->conn,$result_usuario);
    header("Location:$url");
    }// fim funçõo Buscar Por Titulo


}// fim classe registro

$registro = new Registro($conn);// instância do objeto registro