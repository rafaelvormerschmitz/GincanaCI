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
                        <th scope="col"><i class="far fa-id-badge"></i>Id da Equipe</th>
                        <th scope="col"><i class="fas fa-anchor"></i>Nome</th>
                        <th scope="col"><i class="far fa-calendar-alt"></i>Data de Nascimento</th>
                        <th scope="col"><i class="fas fa-id-card"></i>RG</th>
                        <th scope="col"><i class="far fa-id-card"></i>CPF</th>
                        <th scope="col"><i class="fas fa-location-arrow"></i> Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($integrantes as $it) {
                        echo '<tr>';
                        echo '<td>' . $it->nm . '</td>';
                        echo '<td>' . $it->nome . '</td>';
                        echo '<td>' . $it->data_nasc . '</td>';
                        echo '<td>' . $it->rg . '</td>';
                        echo '<td>' . $it->cpf . '</td>';
                        echo '<td>'
                        . '<a class="btn btn-outline-light" href="' . $this->config->base_url() . 'Integrantes/alterar/' . $it->id . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                        . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'Integrantes/deletar/' . $it->id . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
                        . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

