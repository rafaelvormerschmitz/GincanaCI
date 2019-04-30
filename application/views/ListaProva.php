<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Lista Prova</title>
    </head>
    <body>

        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <a class="navbar-brand" href="<?= $this->config->base_url(); ?>">
                <i class="fas fa-home"></i>
                Sistema Gincana
            </a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">                
                    <li class="nav-item dropdown">
                        <a href="#" id="menuClientes" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Provas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuProva">
                            <a href="<?= $this->config->base_url() . 'Prova/listar'; ?>" class="dropdown-item">Listar</a>
                            <a href="<?= $this->config->base_url() . '´Prova/cadastrar'; ?>" class="dropdown-item">Cadastrar</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Usuario/sair'; ?>">
                            Sair <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $this->config->base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cadastro de Clientes</li>
                </ol>
            </nav>            
            <?php
            $mensagem = $this->session->flashdata('mensagem');
            echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
            ?> 

            <h1>Lista de Provas</h1>
            <?php
            $mensagem = $this->session->flashdata('mensagem');
            echo (isset($mensagem) ? '<div class="alert alert-success" role="alert"> ' . $mensagem . '</div>' : '');
            ?>
            <div class="container mt-3">
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
                            . '<a href="' . $this->config->base_url() . 'index.php/Prova/alterar/' . $p->id . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                            . '<a href="' . $this->config->base_url() . 'index.php/Prova/deletar/' . $p->id . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
                            . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </body>
</html>