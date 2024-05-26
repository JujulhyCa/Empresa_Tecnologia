<?php
    require_once("../cabecalho.html");
?>

    <h3>Excluir Cliente</h3>
    <form>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control"     name="nome" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe o telefone</label>
                <input type="text" class="form-control"     name="telefone" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label"><email>Informe o e-mail</email></label>
                <input type="text" class="form-control"     name="email" disabled>
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