<?php
	//ESTABELECENDO CONEXAO COM O BANCO DE DADOS
	$conexao = new mysqli("localhost","root","123","bd_contato");
	$conexao->set_charset('utf8');

	//CAPTURANDO DADOS DIGITADOS NO FORMULÁRIO
	$nome     = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email    = $_POST['email'];
	$endereco = $_POST['endereco'];
	$data     = $_POST['data'];

	//ENVIANDO DADOS PARA A TABELA
	$sql = $conexao->query("insert into tb_contato values(default,'$nome','$telefone','$email','$endereco','$data')");

	header("Location:index.php");
?>