<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
                    <th> Nome</th>
                    <th><i class="fas fa-hourglass-half"></i>          Tempo</th>
                    <th>Descrição</th>
                    <th><i class="fas fa-sort-numeric-up"></i>         Número de Integrantes</th>
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
