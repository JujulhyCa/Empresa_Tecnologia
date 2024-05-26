<?php
    require_once("../cabecalho.php");
?>

    <h3>Inserir Projeto</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome do projeto:</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descreva o projeto:</label>
                <input type="text" class="form-control" name="telefone">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Data de início:</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success">
                    Salvar
                </button>
            </div>
        </div>
    </form>

<?php
    // processamento
    if($_POST){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $data_inicio = $_POST['data_inicio'];
        if ($nome!= "" && $telefone !="" && $email != ""){
            if (inserirCliente($nome, $descricao, $data_inicio)){
                echo "Projeto inserido com sucesso.";
            } else {
                echo "Erro ao inserir o projeto.";
            }

        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.php");