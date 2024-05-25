<?php
    require_once("../cabecalho.html");
?>

    <h3>Excluir Funcionário</h3>
    <form>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control"     name="nome" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe o cargo</label>
                <input type="text" class="form-control"     name="cargo" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Informe o departamento</label>
                <input type="text" class="form-control"     name="departamento" disabled>
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