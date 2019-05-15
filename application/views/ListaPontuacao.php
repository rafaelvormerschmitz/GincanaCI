<div class="container">
    <div class="row">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
        ?> 
        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"><i class="far fa-id-badge"></i> Id da Equipe</th>
                        <th scope="col"><i class="far fa-id-badge"></i> Id da Prova</th>
                        <th scope="col"><i class="far fa-id-badge"></i> Id do Usuário</th>
                        <th scope="col"><i class="fas fa-store"></i> Pontos</th>
                        <th scope="col"><i class="far fa-clock"></i> Data e Hora</th>
                        <th scope="col"><i class="fas fa-location-arrow"></i> Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($pontuacao as $tua) {
                        echo '<tr>';
                        echo '<td>' . $tua->nm . '</td>';
                        echo '<td>' . $tua->pv . '</td>';
                        echo '<td>' . $tua->rio . '</td>';
                        echo '<td>' . $tua->pontos . '</td>';
                        echo '<td>' . $tua->data_hora . '</td>';
                        echo '<td>'
                        . '<a class="btn btn-outline-light" href="' . $this->config->base_url() . 'Pontuacao/alterar/' . $tua->id . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                        . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'Pontuacao/deletar/' . $tua->id . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
                        . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

