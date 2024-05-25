<?php
    require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Clientes</h3>

    <a href="inserir_cliente.php" class="btn btn-primary mt-3">Adicionar Cliente</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $linhas = retornarCliente(); // criar função
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){ // fecha o { lá embaixo

            ?>
            <tr>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['telefone'] ?></td>
                <td><?= $l['email'] ?></td>
               
                <td>
                    <a href="alterar_cliente.php?id=<?=$l['id_cliente'] ?>" class="btn btn-warning">
                        Alterar
                    </a>
                    <a href="excluir_cliente.php?id=<?=$l['id_cliente'] ?>" class="btn btn-danger">
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