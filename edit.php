<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>TP2</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="./css/style.css" type="text/css">
        <link rel="stylesheet" href="./css/fontawesome-all.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">TP2</h1>
            <form action="./insert.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="inputNome">Nome:</label>
                    <input type="text" class="form-control" id="inputNome" name="inputNome" aria-describedby="Nome" required>
                    <div class="invalid-feedback">
                        Por favor introduza a sua Localidade.
                    </div>
                </div>
                <div class="form-group custom-file">
                    <label>Foto:</label>
                    <input type="file" class="custom-file-input" id="inputFoto" name="inputFoto" aria-describedby="Foto" required>
                    <label class="custom-file-label" for="inputFoto"></label>
                    <div class="invalid-feedback">
                        Por favor introduza uma Foto.
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1">Email:</label>
                    <input type="email" class="form-control" id="inputEmail1" name="inputEmail" aria-describedby="Email" required>
                    <div class="invalid-feedback">
                        Por favor introduza o seu Email.
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputFuncao">Função:</label>
                        <select class="form-control" id="inputFuncao" name="inputFuncao" aria-describedby="Função" required>
                            <option></option>
                            <option>Admin</option>
                            <option>Editor</option>
                            <option>Crítico</option>
                            <option>Moderador</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor introduza a sua Função.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEstado">Estado:</label>
                        <select class="form-control" id="inputEstado" name="inputEstado" aria-describedby="Estado" required>
                            <option></option>
                            <option>Ativo</option>
                            <option>Suspenso</option>
                            <option>Inativo</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor introduza o seu Estado.
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="./index.php" class="btn btn-dark">Ver lista de utilizadores</a>
                </div>
            </form>
        </div>
        <script src="./js/jquery.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./js/scripts.js" type="text/javascript"></script>
    </body>
</html>