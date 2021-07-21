<?php
session_start();
include_once 'connect.php';

$nome   = filter_input(INPUT_POST, 'nome_colab', FILTER_SANITIZE_SPECIAL_CHARS);
$email  = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$filial = filter_input(INPUT_POST, 'filial', FILTER_SANITIZE_SPECIAL_CHARS);
$setor  = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $link->query("select email from tb_colaborador"); 
$array_emails = [];

while ($emails = $querySelect->fetch_assoc()):
   $emails_existentes = $emails['email'];
   array_push($array_emails,$emails_existentes);
endwhile;

if (in_array($email,$array_emails)):
     $_SESSION['msg'] = "<p class='center red-text'>".'Já existe um colaborador com esse e-mail'."</p>";
     header("Location:../");
else:
    $querInsert = $link->query("insert into tb_colaborador values('$nome','$email','$filial','$setor')");
    $affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0): 
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadstro efetuado com sucesso!'."</p>";
        header("Location:../");
    endif;
endif;
