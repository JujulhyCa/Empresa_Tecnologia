<?php
    require_once("../cabecalho.html");
?>

    <h3>Excluir Projeto</h3>
    <form>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome do projeto:</label>
                <input type="text" class="form-control" name="nome" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descreva o projeto:</label>
                <input type="text" class="form-control" name="descricao" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label"><email>Data de início:</email></label>
                <input type="text" class="form-control" name="data_inicio" disabled>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <p>Deseja realmente excluir?</p>
                <button type="submit" class="btn btn-danger">
                    Excluir
                </button>
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.html");