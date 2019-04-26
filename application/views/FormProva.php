<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Provas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class = "row">
                <div class = "col-md-5 col-xs-12">
                    <form action = "" method = "post">
                        <input type = "hidden" name = "id" value = "<?= (isset($prova)) ? $prova->id : ''; ?>">
                        <div class = "form-group">
                            <label for = "nome"> Nome:</label>
                            <input type = "text" name = "nome" id = "nome" value = "<?= (isset($prova)) ? $prova->nome : ''; ?>">
                        </div>

                        <div class = "form-group">
                            <label for = "tempo">Tempo:</label>
                            <input type = "text" name = "tempo" id = "tempo" value = "<?= (isset($prova)) ? $prova->tempo : ''; ?>">
                        </div>

                        <div class = "form-group">
                            <label for = "descricao"> Descrição:</label>
                            <input type = "text" name = "descricao" id = "descricao" value = "<?= (isset($prova)) ? $prova->descricao : ''; ?>">
                        </div>  

                        <div class = "form-group">
                            <label for = "NmIntegrantes"> Numero de Integrantes:</label>
                            <input type = "text" name = "NmIntegrantes" id = "NmIntegrantes" value = "<?= (isset($prova)) ? $prova->NmIntegrantes : ''; ?>">
                        </div> 
                        <button type = "submit">Enviar</button>
                        <button type = "reset">Limpar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>