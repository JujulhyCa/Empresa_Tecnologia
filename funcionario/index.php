<?php
    require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Funcionários</h3>

    <a href="inserir_funci.php" class="btn btn-primary mt-3">Adicionar Funcionário</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Departamento</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $linhas = retornarFunci();
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){ // fecha o { lá embaixo

            ?>
            <tr>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['cargo'] ?></td>
                <td><?= $l['departamento'] ?></td>
                <td>
                    <a href="alterar_funci.php?id=<?=$l['id_funci'] ?>" class="btn btn-warning">
                        Alterar
                    </a>
                    <a href="excluir_funci.php?id=<?=$l['id_funci'] ?>" class="btn btn-danger">
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