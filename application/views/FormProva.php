<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Provas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
        </div>

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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>