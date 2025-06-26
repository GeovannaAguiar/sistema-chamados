<?php
    if (isset($_POST['confirmar'])) {
      //incluindo o arquivo conexao
     include 'conexao.php';

     //CAPTURA O VALOR DA URL DO SITE
     $id = $_GET ['codigo'];
    
     //INSTRUÇÃO PARA DELETAR DENTRO DO SQL
     $deletar = "DELETE FROM tb_user WHERE id_user - $id";

    //função query execulta o select dentro do banco
    $query = $conexao->query($select);

    if ($query ) { 
        echo "<p>". "Usuário deletado com sucesso!" ."</p>";
        echo "<p>". "Para voltar as listas de usuários" ."</p>" ."<a href=listar_usuario.php" ."</a>";
        die();
    }
    }
?>

<!DOCTYPE html>
<html lang="py-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
</head>
<body>
    <h1>Deseja ralmente excluir este usuário?</h1>
    <form action="#" method="post">
        <div class="escolha">
            <button type="submit" name="confirmar" value="1">Sim</button>
            <a href="listar_usuario.php">Não</a>
        </div>
    </form>
</body>

</html>