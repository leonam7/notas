<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h2>Cadastre aqui sua nota!</h2>
    <div class="container">
        <form name="notas" id="notas" method="POST" enctype="multipart/form-data" action="cadastro.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Aluno</label>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nomeHelp" placeholder="Nome Completo">
            </div>
             <div class="form-group">
                <label for="exampleInputPassword1">Disciplina</label>
                <input type="text" class="form-control" name="disciplina" id="disciplina" placeholder="Disciplina">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nota 01</label>
                <input type="number" class="form-control" name="nota_1" id="nota_1" placeholder="Nota">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nota 02</label>
                <input type="number" class="form-control" name="nota_2" id="nota_2" placeholder="Nota">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>  
</body>
</html>
