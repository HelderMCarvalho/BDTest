<?php
    require_once 'db.php';
    function testarInput($dados){
        $dados=trim($dados);
        $dados=stripslashes($dados);
        $dados=htmlspecialchars($dados);
        return $dados;
    }

    if($_POST) {
        if (empty($_POST['inputNome'])) {
            $nomeErro = 'É obrigatório introduzir um Nome!';
        } else {
            $nome = testarInput($_POST['inputNome']);
        }
        if (!empty($_FILES['inputFoto'])) {
            $caminho = 'uploads/';
            $caminho = $caminho . iconv("UTF-8", "ASCII//TRANSLIT", basename($_FILES['inputFoto']['name']));
            if (move_uploaded_file(iconv("UTF-8", "ASCII//TRANSLIT", $_FILES['inputFoto']['tmp_name']), $caminho)) {
                $foto = iconv("UTF-8", "ASCII//TRANSLIT", basename($_FILES['inputFoto']['name']));
            }
        }
        if (empty($_POST['inputEmail'])) {
            $emailErro = 'É obrigatório introduzir um Email!';
        } else {
            $email = testarInput($_POST['inputEmail']);
        }
        if (empty($_POST['inputFuncao'])) {
            $funcaoErro = 'É obrigatório introduzir uma Função!';
        } else {
            $funcao = testarInput($_POST['inputFuncao']);
        }
        if (empty($_POST['inputEstado'])) {
            $estadoErro = 'É obrigatório introduzir um Estado!';
        } else {
            $estado = testarInput($_POST['inputEstado']);
        }
    }

    if (!empty($nomeErro) || !empty($fotoErro) || !empty($emailErro) || !empty($funcaoErro) || !empty($estadoErro)){
    ?>
        <h2>Erros:</h2>
        <ul>
            <li><?=$nomeErro;?></li>
            <li><?=$emailErro;?></li>
            <li><?=$funcaoErro;?></li>
            <li><?=$estadoErro;?></li>
        </ul>
    <?php
    }
    if (!empty($nome) && empty($foto) && !empty($email) && !empty($funcao) && !empty($estado)) {
        $sql = 'UPDATE utilizadores set nome=:nomeNovo, email=:emailNovo, idFuncao=:funcaoNova, idEstado=:estadoNovo WHERE id=:id';
        $stmt = $PDO->prepare($sql);
    }elseif (!empty($nome) && !empty($foto) && !empty($email) && !empty($funcao) && !empty($estado)) {
        $sql = 'UPDATE utilizadores set nome=:nomeNovo, foto=:fotoNova, email=:emailNovo, idFuncao=:funcaoNova, idEstado=:estadoNovo WHERE id=:id';
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':fotoNova', $foto);
    }
    if (!empty($sql)){
        $stmt->bindParam(':nomeNovo', $nome);
        $stmt->bindParam(':emailNovo', $email);
        $stmt->bindParam(':funcaoNova', $funcao);
        $stmt->bindParam(':estadoNovo', $estado);
        $stmt->bindParam(':id', $_POST['inputId']);
        $result = $stmt->execute();

        if (!$result) {
            var_dump($stmt->errorInfo());
            exit;
        }

        header("Location: ./index.php");
        exit();
    }