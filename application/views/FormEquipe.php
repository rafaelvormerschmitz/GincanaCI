<div class="container mt-3">
    <div class="row">
        <div class="col-md-5 col-xs-12">
            <?php
            $mensagem = $this->session->flashdata('mensagem');
            echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
            ?>  
            <form action = "" method = "post">
                <input type = "hidden" name = "id" value = "<?= (isset($equipe)) ? $equipe->id : ''; ?>">

                <div class="form-group">
                    <label for = "nome"> Nome:</label>
                    <input type = "text" name = "nome"  class="form-control" id = "nome" value = "<?= (isset($equipe)) ? $equipe->nome : ''; ?>">
                </div>
                
                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Limpar</button> 
            </form>
        </div>
    </div>
</div>