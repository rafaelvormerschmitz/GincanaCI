<div class="container mt-3">
    <div class="row">
        <div class="col-md-5 col-xs-12">
            <?php
            $mensagem = $this->session->flashdata('mensagem');
            echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
            ?>  
            <form action = "" method = "post">
                <input type = "hidden" name = "id" value = "<?= (isset($integrantes)) ? $integrantes->id : ''; ?>">

                <div class="form-group">
                    <label for = "id_equipe"> id_equipe:</label>
                    <input type = "text" name = "id_equipe"  class="form-control" id = "id_equipe" value = "<?= (isset($integrantes)) ? $integrantes->id_equipe: ''; ?>">
                </div>

                <div class="form-group">
                    <label for = "nome"> Nome:</label>
                    <input type = "text" name = "nome"  class="form-control" id = "nome" value = "<?= (isset($integrantes)) ? $integrantes->nome : ''; ?>">
                </div>

                <div class="form-group">
                    <label for = "data_nasc"> data_nasc:</label>
                    <input type = "text" name = "data_nasc"  class="form-control" id = "data_nasc" value = "<?= (isset($integrantes)) ? $integrantes->data_nasc : ''; ?>">
                </div>

                <div class="form-group">
                    <label for = "rg"> RG:</label>
                    <input type = "text" name = "rg"  class="form-control" id = "rg" value = "<?= (isset($integrantes)) ? $integrantes->rg : ''; ?>">
                </div>

                <div class="form-group">
                    <label for = "cpf"> CPF:</label>
                    <input type = "text" name = "cpf"  class="form-control" id = "cpf" value = "<?= (isset($integrantes)) ? $integrantes->cpf: ''; ?>">
                </div>


                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Limpar</button> 
            </form>
        </div>
    </div>
</div>