<?php
$email = $_POST['email'];
$senha = trim(password_hash($_POST['senha'], PASSWORD_DEFAULT));

// echo $email."<br>";
// echo $senha;
include_once("conexao.php");

$stmt = "insert into tbusuarios values('$email','$senha');";
if(mysqli_query($conn, $stmt)){
    header("location:login.php");
}else{
    echo "Erro ao cadastrar usuário<br>";
    echo "<a href='cadastro.html'>Volta</a>";
}
mysqli_close($conn);

?>