<?php
    require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Projetos</h3>

    <a href="inserir_cliente.php" class="btn btn-primary mt-3">Adicionar Projeto</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data de início</th> 
            </tr>
        </thead>
        <tbody>
            <?php 
                $linhas = retornarProjeto(); // criar função
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){ // fecha o { lá embaixo

            ?>
            <tr>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['descricao'] ?></td>
                <td><?= $l['data_inicio'] ?></td>
               
                <td>
                    <a href="alterar_projeto.php?id=<?=$l['id_projeto'] ?>" class="btn btn-warning">
                        Alterar
                    </a>
                    <a href="excluir_projeto.php?id=<?=$l['id_projeto'] ?>" class="btn btn-danger">
                        Excluir
                    </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    

<?php
    require_once("../rodape.php");