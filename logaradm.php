<?php


$email = $_POST['email'];
$senha = $_POST['senha']; 

if($email=="adm@adm" && $senha=="123456"){
    session_start();
    $_SESSION['admin'] = $email;
    header("location:telaadmin.php");
}else{
    echo "Login inválido<br>";
    echo "<a href='loginAdm.html'>Voltar</a>";
}

?>