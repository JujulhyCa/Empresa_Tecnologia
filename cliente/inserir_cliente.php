<?php
    require_once("../cabecalho.php");
?>

    <h3>Inserir Cliente</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control"     name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe o telefone</label>
                <input type="text" class="form-control"     name="descricao">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Informe o e-mail</label>
                <input type="text" class="form-control"     name="valor">
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
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        if ($nome!= "" && $telefone !="" && $email != ""){
            if (inserirCliente($nome, $telefone, $email)){
                echo "Cliente inserido com sucesso.";
            } else {
                echo "Erro ao inserir o cliente.";
            }

        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.php");