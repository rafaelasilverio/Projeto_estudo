<?php
$host = "localhost";
$usuario = "root";
$senha= "";
$banco= "estudo";

$conexao = mysqli_connect($host, $usuario, $senha, $banco)
or die("Problemas com a conexao do Banco de Dados");
                mysqli_set_charset($conexao, "UTF8");
?>