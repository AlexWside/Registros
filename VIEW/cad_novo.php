<?php
session_start();
require_once("../MODEL/registro_dao.php");
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$registro->adicionar_registro($titulo,$descricao,$_SESSION['nm_usuario'],$_SESSION['id_usuario']);