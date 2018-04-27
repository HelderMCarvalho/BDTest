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
            } else {
                $fotoErro = 'É obrigatório introduzir um Ficheiro!';
            }
        }
        //$result = iconv("UTF-8", "ASCII//TRANSLIT", $text);
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
            <li><?=$fotoErro;?></li>
            <li><?=$emailErro;?></li>
            <li><?=$funcaoErro;?></li>
            <li><?=$estadoErro;?></li>
        </ul>
<?php
    }
    if (!empty($nome) || !empty($foto) || !empty($email) || !empty($funcao) || !empty($estado)) {
        $sql = 'INSERT INTO utilizadores(nome, foto, email, funcao, estado) VALUES(:nome, :foto, :email, :funcao, :estado)';
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':funcao', $funcao);
        $stmt->bindParam(':estado', $estado);
        $result = $stmt->execute();
        if (!result) {
            var_dump($stmt->errorInfo());
            exit;
        }
        header("Location: ./insert.html");
        exit();
    }