<?php 

require_once("conexaoDB.php");
$banco = new db();
$conexao = $banco->conexaoDB();

$sql = "SELECT * FROM results ORDER BY id";

if($consulta = mysqli_query($conexao, $sql)){
    while($registros = mysqli_fetch_array($consulta)){
        echo '
            <tr>
                <td scope="row">'.$registros['id'].'</td>
                <td>'.$registros['name'].'</td>
                <td><a href="mailto:'.$registros['email'].'" class="contato">'.$registros['email'].'</a></td>
                <td><a href="https://api.whatsapp.com/send?phone=55'.$registros['tel'].'&text=Olá, somos da Fatec Presidente prudente, tudo bem?" class="contato">'.$registros['tel'].'</a></td>
                <td>'.$registros['preCadastro'].'</td>
                <td>'.$registros['opcaoCurso'].'</td>
                <td>'.$registros['redeSocial'].'</td>
            </tr>
        ';
    }
}else{
    echo "Erro ao consultar banco!";
}

?>