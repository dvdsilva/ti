<?php
session_start();
include_once 'connect.php';

$nome   = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email  = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$filial = filter_input(INPUT_POST, 'filial', FILTER_SANITIZE_SPECIAL_CHARS);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_SPECIAL_CHARS);
//$nome = $_POST['nome'];
//$email = $_POST['email'];
//$filial = $_POST['filial'];

    $querInsert = $link->query("insert into tb_colaborador (id,nome,email,filial,setor) values(default,'$nome','$email','$filial','$setor')");
    $affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0): 
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadstro efetuado com sucesso!'."</p>";
        header("Location:../cad_colab.php");
    endif;
?>
