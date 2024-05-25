<?php
    require_once("../cabecalho.php");
?>

    <h3>Inserir Funcionário</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control"     name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe o cargo</label>
                <input type="text" class="form-control"     name="cargo">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Informe o departamento</label>
                <input type="text" class="form-control"     name="departamento">
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
        $descricao = $_POST['cargo'];
        $valor = $_POST['departamento'];
        if ($nome!= "" && $cargo !="" && $departamento != ""){
            if (inserirFunci($nome, $cargo, $departamento)){
                echo "Funcionário inserido com sucesso.";
            } else {
                echo "Erro ao inserir o funcionário.";
            }

        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.php");