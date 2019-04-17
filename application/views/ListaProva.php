<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista Prova</title>
    </head>
    <body>
        <h1>Lista de Provas</h1>
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        if (isset($mensagem)) {
            echo $mensagem;
        }
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tempo</th>
                    <th>Descrição</th>
                    <th>Número de Integrantes</th>
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
                    . '<a href="' . $this->config->base_url() . 'index.php/Prova/alterar/' . $p->id . '">Alterar</a>'
                    . ' / '
                    . '<a href="' . $this->config->base_url() . 'index.php/Prova/deletar/' . $p->id . '">Deletar</a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
