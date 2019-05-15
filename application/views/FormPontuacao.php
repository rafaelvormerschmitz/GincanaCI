<div class="container mt-3">
    <div class="row">
        <div class="col-md-5 col-xs-12">
            <?php
            $mensagem = $this->session->flashdata('mensagem');
            echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
            echo validation_errors();
            ?>  
            
            <form action = "" method = "post">
                <input type="hidden" name="id" id="id" value="">

                <div class="form-group">
                    <label for = "equipe"> Equipe:</label>
                    <select name="id_equipe" id="id_equipe" class="form-control">
                        <option>Selecione uma Equipe</option>
                        <?php
                        foreach ($equipe as $ep) {
                            echo ' <option ' . (isset($pontuacao) ? ($pontuacao->id_equipe == $ep->id ? ' selected ' : NULL) : NULL) . ' value="' . $ep->id . '">' . $ep->nome . '</option>';
                        }
                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <label for = "prova"> Prova:</label>
                    <select name="id_prova" id="id_prova" class="form-control">
                        <option>Selecione uma Prova</option>
                        <?php
                        foreach ($prova as $p) {
                            echo ' <option ' . (isset($pontuacao) ? ($pontuacao->id_prova == $p->id ? ' selected ' : NULL) : NULL) . ' value="' . $p->id . '">' . $p->nome . '</option>';
                        }
                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <label for = "usuario"> Usuário:</label>
                    <select name="id_usuario" id="usuario" class="form-control">
                        <option>Selecione um Usuário</option>
                        <?php
                        foreach ($usuario as $u) {
                            echo ' <option ' . (isset($pontuacao) ? ($pontuacao->id_usuario == $u->id ? ' selected ' : NULL) : NULL) . ' value="' . $u->id . '">' . $u->nome . '</option>';
                        }
                        ?>

                    </select>
                </div>

                <div class = "form-group">
                    <label for="pontos"> Pontos:</label>
                    <input type="text" name="pontos"  class="form-control" id = "pontos" value = "">
                </div>

                <div class="form-group">
                    <label for="data_hora"> Data e Hora:</label>
                    <input type="datetime-local" name="data_hora"  class="form-control" id="data_hora" value= "">
                </div>


                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Limpar</button> 
            </form>
        </div>
    </div>
</div>