<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Lista Prova</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light navbar-expand-md">
                <a class="navbar-brand" href="<?= $this->config->base_url(); ?>">
                    <i class="fas fa-home"></i>
                    Sistema Gincana
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">                
                        <li class="nav-item dropdown">
                            <a href="#" id="menuProva" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Provas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuProva">
                                <a href="<?= $this->config->base_url() . 'Prova/listar'; ?>" class="dropdown-item">Listar</a>
                                <a href="<?= $this->config->base_url() . 'Prova/cadastrar'; ?>" class="dropdown-item">Cadastrar</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown ">
                            <a href="#" id="menuEquipe" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Equipes
                            </a>
                            <div class="dropdown-menu "  aria-labelledby="menuEquipe">
                                <a href="<?= $this->config->base_url() . 'Equipe/listar'; ?>" class="dropdown-item">Listar</a>
                                <a href="<?= $this->config->base_url() . 'Equipe/cadastrar'; ?>" class="dropdown-item">Cadastrar</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" id="menuIntegrantes" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Integrantes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuIntegrantes">
                                <a href="<?= $this->config->base_url() . 'Integrantes/listar'; ?>" class="dropdown-item">Listar</a>
                                <a href="<?= $this->config->base_url() . 'Integrantes/cadastrar'; ?>" class="dropdown-item">Cadastrar</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" id="menuPontuacao" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Pontuação
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuPontuacao">
                                <a href="<?= $this->config->base_url() . 'Pontuacao/listar'; ?>" class="dropdown-item">Listar</a>
                                <a href="<?= $this->config->base_url() . 'Pontuacao/cadastrar'; ?>" class="dropdown-item">Cadastrar</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#" id="menuRank" class="nav-link">
                                Rank
                            </a>
                            <a href="<?= $this->config->base_url() . 'Rank'; ?>"></a>
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
        </div>
        <br>