<?php
 include_once("conexao.php");
?>
<!DOCTYPE html>
    <head lang="pt-br">
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
        <div class="main">
            <form action="insere_aluno.php" method="POST">
                Nome do aluno:
                <input type="text" name="nome_aluno" placeholder="insira o nome do aluno"><br><br>
                RA do aluno: 
                <input type="text" name="ra_aluno" placeholder="Insira o RA do aluno"><br><br>
                E-mail: 
                <input type="email"  name="email_aluno" placeholder="Insira o e-mail"><br><br>
                Turma:
                <select name="selecionar_turma">
                    <option>Selecione a turma</option>
                        <?php
                        $selecionar_turmas = "SELECT * FROM turmas";
                        $query_resultado_turmas = mysqli_query($conexao, $selecionar_turmas);
                        while($rows_turmas = mysqli_fetch_assoc($query_resultado_turmas)){ ?>
                            <option value="<?php echo $rows_turmas['codigo']; ?>">
                                <?php echo $rows_turmas['descricao'];  ?>
                            </option>
                        <?php } ?>
                </select><br><br>
                <button type="submit" onclick="window.location = 'insere_aluno.php;' value='Cadastrar'">Cadastrar</button>
            </form>
        </div>
    </body>
</html>
