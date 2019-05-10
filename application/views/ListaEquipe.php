<div class="container">
    <?php
    $mensagem = $this->session->flashdata('mensagem');
    echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
    ?> 
    <div class="table-responsive">
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><i class="fas fa-anchor"></i> Nome</th>
                    <th scope="col"><i class="fas fa-location-arrow"></i> Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($equipe as $eq) {
                    echo '<tr>';
                    echo '<td>' . $eq->nome . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-outline-light" href="' . $this->config->base_url() . 'Equipe/alterar/' . $eq->id . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'Equipe/deletar/' . $eq->id . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
