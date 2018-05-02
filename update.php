<?php
    require_once 'db.php';
    $sql='SELECT * FROM utilizadores WHERE id='.$_REQUEST['id'];
    $result=$PDO->query($sql);
    $rows=$result->fetchAll();
    $sql='SELECT * FROM funcao';
    $result=$PDO->query($sql);
    $rowsFuncao=$result->fetchAll();
    $sql='SELECT * FROM estado';
    $result=$PDO->query($sql);
    $rowsEstado=$result->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>TP2 - Update</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="./css/style.css" type="text/css">
        <link rel="stylesheet" href="./css/fontawesome-all.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">TP2</h1>
            <form action="./updateDB.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                <input type="hidden" id="inputId" name="inputId" value="<?=reset($rows)['id']?>">
                <div class="form-group">
                    <label for="inputNome">Nome:</label>
                    <input type="text" class="form-control" id="inputNome" name="inputNome" aria-describedby="Nome" value="<?=reset($rows)['nome']?>" required>
                    <div class="invalid-feedback">
                        Por favor introduza a sua Localidade.
                    </div>
                </div>
                <div class="form-group custom-file">
                    <label>Foto:</label>
                    <input type="file" class="custom-file-input" id="inputFoto" name="inputFoto" aria-describedby="Foto" value="<?=reset($rows)['foto']?>">
                    <label class="custom-file-label" for="inputFoto"><?=reset($rows)['foto']?></label>
                    <div class="invalid-feedback">
                        Por favor introduza uma Foto.
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1">Email:</label>
                    <input type="email" class="form-control" id="inputEmail1" name="inputEmail" aria-describedby="Email" value="<?=reset($rows)['email']?>" required>
                    <div class="invalid-feedback">
                        Por favor introduza o seu Email.
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputFuncao">Função:</label>
                        <select class="form-control" id="inputFuncao" name="inputFuncao" aria-describedby="Função" required>
                            <?php
                                foreach ($rowsFuncao as $rowFuncao){
                                    $html='<option';
                                    if (reset($rows)['idFuncao']==$rowFuncao['id']){$html.=' selected';}
                                    $html.=' value="'.$rowFuncao['id'].'">'.$rowFuncao['nome'].'</option>';
                                    echo $html;
                                }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Por favor introduza a sua Função.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEstado">Estado:</label>
                        <select class="form-control" id="inputEstado" name="inputEstado" aria-describedby="Estado" required>
                            <?php
                                foreach ($rowsEstado as $rowEstado){
                                    $html='<option';
                                    if (reset($rows)['idEstado']==$rowEstado['id']){$html.=' selected';}
                                    $html.=' value="'.$rowEstado['id'].'">'.$rowEstado['nome'].'</option>';
                                    echo $html;
                                }
                            ?>
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