<?php
//CHAMANDO O ARQUIVO DE CONEXÃO COM O BANCO DE DADOS
include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (null, 'Geovanna', 'ge@gmail.com', 'Secretaria', '123456')";

$query = $conexao->query($insert);

if ($conexao->query($insert)) {
    echo "<script>alert('Usuario Cadastrado com Sucesso!') location.href = '../cadastro.html'</script>";
}
?>