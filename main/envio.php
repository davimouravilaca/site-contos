<?php

require 'includes/header.php';
require 'includes/dateConf.php';

include "includes/conexão.php";

$_SESSION['form_submitted'] = true;

$titulo = $_POST['titulo'];
$resenha = $_POST['resenha'];
$conto = $_POST['conto'];
$autor = $_COOKIE['usuario'];
$dataPubli = date('Y-m-d'); // Alteração aqui para o formato YYYY-MM-DD

$sql = "INSERT INTO `contos` (`titulo`, `resenha`, `conto`, `autor`, `data_publicacao`) VALUES ('$titulo', '$resenha', '$conto', '$autor', '$dataPubli')";

if(mysqli_query($conn, $sql)){
    header("Location: confirmacao.php");
} else {
    echo "Erro ao enviar a história: " . mysqli_error($conn);
}

include 'includes/footer.php';
?>
