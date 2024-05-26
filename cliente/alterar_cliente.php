<?php
    require_once("../cabecalho.html");
?>

    <h3>Alterar Cliente</h3>
    <form>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control"     name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe o telefone</label>
                <input type="text" class="form-control"     name="telefone">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label"><email>Informe o e-mail</email></label>
                <input type="text" class="form-control"     name="email">
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