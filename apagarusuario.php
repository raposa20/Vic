<?php

$email = $_GET['email'];

include_once("conexao.php");

$sqldelete = "delete from tbusuarios where email = '$email';";

if(mysqli_query($conn,$sqldelete)){
	header("Location: telaadmin.php");
} else {
	echo "Erro ao apagar usuario.<br>".mysqli_error($conn); 
	echo "<br><a href='telaadmin.php'>Voltar</a>";
}

mysqli_close($conn);

	
?>