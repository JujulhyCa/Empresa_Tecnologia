<?php
    require_once("../cabecalho.html");
?>

    <h3>Alterar Projeto</h3>
    <form>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome do projeto:</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descreva o projeto:</label>
                <input type="text" class="form-control" name="descricao">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Data de início:</label>
                <input type="text" class="form-control" name="data_inicio">
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
    require_once("../rodape.html");