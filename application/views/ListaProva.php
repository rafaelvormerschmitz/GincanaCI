<div class="container">
    <?php
    $mensagem = $this->session->flashdata('mensagem');
    echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
    ?> 
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><i class="fas fa-anchor"></i> Nome</th></th>
                    <th scope="col"><i class="fas fa-hourglass-half"></i> Tempo</th></th>
                    <th scope="col"><i class="fas fa-american-sign-language-interpreting"></i> Descrição</th>
                    <th scope="col"><i class="fas fa-sort-numeric-up"></i> Número de Integrantes</th>
                    <th scope="col"><i class="fas fa-location-arrow"></i> Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($prova as $p) {
                    echo '<tr>';
                    echo '<td>' . $p->nome . '</td>';
                    echo '<td>' . $p->tempo . '</td>';
                    echo '<td>' . $p->descricao . '</td>';
                    echo '<td>' . $p->NmIntegrantes . '</td>';
                    echo '<td>'
                    . '<a href="' . $this->config->base_url() . 'Prova/alterar/' . $p->id . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                    . '<a href="' . $this->config->base_url() . 'Prova/deletar/' . $p->id . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
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