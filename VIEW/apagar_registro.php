<?php
session_start();
require_once("../MODEL/registro_dao.php");
$registro->apagar_registro($_POST['id'],$_POST['url']);

?>