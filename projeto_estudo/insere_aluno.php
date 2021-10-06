<?php
    include_once("conexao.php");
    $nome = $_POST['nome_aluno'];
    $ra = $_POST['ra_aluno'];
    $email = $_POST['email_aluno'];
    $turma = $_POST['selecionar_turma'];

    $sqlinsert = "insert into alunos (nome, ra, email, turma) values ('$nome', '$ra', '$email', '$turma')";

    // executando instrução SQL
    $resultado = @mysqli_query($conexao, $sqlinsert);
    if (!$resultado) {
        echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
        die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
    } else {
        echo "Aluno cadastrado com sucesso!<br>";
        echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar">';
    }
    mysqli_close($conexao);
    ?>