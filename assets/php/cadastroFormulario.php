<?php 
    require_once('conexaoDB.php');
    $banco = new db();
    $conexao = $banco->conexaoDB();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $preCadastro = $_POST['preCadastro'];
    $txtOutros = $_POST['txtOutros'];
    $opcaoCurso = $_POST['opcaoCurso'];
    $redeSocial = $_POST['segueFatec'];

    if($preCadastro == 'outros'){
        $preCadastro = $txtOutros;
    }
    
    $sql = "INSERT INTO results(name, email, tel, preCadastro, opcaoCurso, redeSocial) VALUES('$nome', '$email', '$tel', '$preCadastro', '$opcaoCurso', '$redeSocial')";

    if(mysqli_query($conexao, $sql)){
        echo "sucesso";
    }else{
        echo "erro";
    }
?>
