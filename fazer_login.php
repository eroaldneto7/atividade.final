<?php
    include ("conexao.php");
    $email = $_POST['email_digitado'];
    $senha = $_POST['senha_digitada'];

$sql = "SELECT * FROM tb_usuario WHERE login='$email' AND password='$senha' ";

$consultar = $pdo->prepare($sql);
try{
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
        if ($resultado) {
            session_start();
            $_SESSION['logado'] = 'sim';
            header("Location: index.php");
        } else {
        header("Location: login.php?erro1=sim");
        }
        
}catch(PDOException $erro){
    echo "Falha no login!". $erro->getMessage();
}
?>