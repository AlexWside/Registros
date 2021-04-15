<?php
session_start();
require_once("../MODEL/usuario_dao.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$permissao = filter_input(INPUT_POST, 'permissao', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$filtrosenha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = password_hash($filtrosenha,PASSWORD_DEFAULT);
if($permissao!='--Selecione--'){
    $usuario->adicionar_usuario($nome,$sobrenome,$permissao,$login,$senha);
}else{
    header('Location:cadastro_usuario.php');
}
