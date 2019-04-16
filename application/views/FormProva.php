<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Provas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>

        <form action = "" method = "post">
            <input type = "hidden" name = "id" value = "">
            <label for = "nome"> Nome:</label>
            <input type = "text" name = "nome" id = "nome" value = "">
            <br>
            <label for = "tempo">Tempo:</label>
            <input type = "text" name = "tempo" id = "tempo" value = "">
            <br>
            <label for = "descricao"> Descrição:</label>
            <input type = "text" name = "descricao" id = "descricao" value = "">
            <br>    
            <label for = "NmIntegrantes"> Numero de Integrantes:</label>
            <input type = "text" name = "NmIntegrantes" id = "NmIntegrantes" value = "">
            <br>

            <button type = "submit">Enviar</button>
            <button type = "reset">Limpar</button>
        </form>
    </body>
</html>
