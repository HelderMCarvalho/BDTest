<?php
    require_once 'db.php';
    $sql='SELECT * FROM utilizadores';
    $result=$PDO->query($sql);
    $rows=$result->fetchAll();
?>

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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Função</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($rows as $row){
                    ?>
                            <tr>
                                <th scope="row" class="align-middle"><?=$row['id']?></th>
                                <td class="align-middle"><img src="./uploads/<?=$row['foto']?>" alt="Foto" class="rounded-circle" style="width: auto; height: 50px"> <?=$row['nome']?></td>
                                <td class="align-middle"><?=$row['funcao']?></td>
                                <td class="align-middle"><?=$row['estado']?></td>
                                <td class="align-middle"><i class="fas fa-cog">&emsp;<i class="fas fa-trash-alt"></i></i></td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <a href="insert.html" class="btn btn-dark">Inserir novo utilizador</a>
        </div>
        <script src="./js/jquery.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./js/scripts.js" type="text/javascript"></script>
    </body>
</html>