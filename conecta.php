<?php
//conectar com o banco de dados.
$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "usuario";

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

?>