<?php
require_once('../CONTROLER/conexao.php');

// inicio da classe usuario
class Usuario{
 private $nome;
 private $sobrenome;
 private $permissao;
 private $login;
 private $senha;
 private $conn;
 public function __construct ($conn){
    $this ->conn = $conn;// passagem da conexão pelo parametro do contrutor 
}// fim construtor 

public function adicionar_usuario($nome,$sobrenome,$permissao,$login,$senha){
    $this ->nome = $nome;
    $this ->sobrenome = $sobrenome;
    $this ->permissao = $permissao;
    $this ->login = $login;
    $this ->senha = $senha;
    
    $result_usuario = "INSERT INTO usuario (nome,sobrenome,permissao,login,senha,created) VALUES ('$nome','$sobrenome','$permissao','$login','$senha',now())";
    mysqli_query($this->conn,$result_usuario);

   header('Location:cadastro_usuario.php');
}// fim funçõo adicionar registro
public function buscar_usuario(){
    
    $result_usuario = "SELECT * FROM usuario";
    $result_bd = $this->conn->query($result_usuario);
    $lista = mysqli_fetch_all($result_bd);
    return $lista;
   
}// fim funçõo Buscar Todos

public function Alterar_senha($parametro, $idusuario){
//echo "<pre>"; print_r($parametro); exit;
    $result_usuario = "UPDATE usuario SET senha = '$parametro' WHERE id = '$idusuario'";
//    echo "<pre>"; print_r($result_usuario); exit;
    $result_bd = $this->conn->query($result_usuario);
   //header('Location:novo_registro.php');
}// fim funçõo Buscar Por Titulo


public function apagar_registro($parametro,$url){
    //echo "<pre>"; print_r($parametro); exit;
        //$result_usuario = "DELETE FROM 'registro' WHERE 'id' = '$parametro'";
    //    echo "<pre>"; print_r($result_usuario); exit;
    $result_usuario = "DELETE FROM usuario WHERE id = '$parametro'";
    mysqli_query($this->conn,$result_usuario);
    header("Location:$url");
    }// fim funçõo Buscar Por Titulo


}// fim classe usuario

$usuario = new Usuario($conn);// instância do objeto usuario