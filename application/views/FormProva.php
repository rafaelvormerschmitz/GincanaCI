<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
?>  
<div class="container mt-3">
    <div class = "row">
        <div class = "col-md-5 col-xs-12">
            <form action = "" method = "post">
                <input type = "hidden" name = "id" value = "<?= (isset($prova)) ? $prova->id : ''; ?>">

                <div class = "form-group">
                    <label for = "nome"> Nome:</label>
                    <input type = "text" name = "nome"  class="form-control" id = "nome" value = "<?= (isset($prova)) ? $prova->nome : ''; ?>">
                </div>

                <div class = "form-group">
                    <label for = "tempo">Tempo:</label>
                    <input type = "text" name = "tempo"  class="form-control" id = "tempo" value = "<?= (isset($prova)) ? $prova->tempo : ''; ?>">
                </div>

                <div class = "form-group">
                    <label for = "descricao"> Descrição:</label>
                    <input type = "text" name = "descricao"  class="form-control" id = "descricao" value = "<?= (isset($prova)) ? $prova->descricao : ''; ?>">
                </div>  

                <div class = "form-group">
                    <label for = "NmIntegrantes"> Numero de Integrantes:</label>
                    <input type = "text"  class="form-control" name = "NmIntegrantes" id = "NmIntegrantes" value = "<?= (isset($prova)) ? $prova->NmIntegrantes : ''; ?>">
                </div> 

                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Limpar</button> 
            </form>
        </div>
    </div>
</div>

