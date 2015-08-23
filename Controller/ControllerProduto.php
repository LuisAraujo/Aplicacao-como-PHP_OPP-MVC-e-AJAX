<?php

require_once("includes/Conexao.php");
require_once("../Model/Bean/Protudo.php");
require_once("../Model/DAO/ProdutoDAO.php");

//$module = $_GET['module'];
$acao = $_GET['acao'];

//$url = $_GET['module']. "/action/" .$_GET['acao']. ".php";
$url = "../Model/Action/" .$_GET['acao']. ".php";


require_once($url);

$acao = new $_GET[ 'acao'];
$retorno = $acao->execute();

//$view = $_GET['module']. "/View/frm" .$_GET['acao']. ".php";
$view = "../View/frm" .$_GET['acao']. ".php";

require_once($view);

?>