<?php

$numero = $_GET['numero'];

include_once("conexao.php");

$sqldelete = "delete from tbagendamento where numero = '$numero';";

if(mysqli_query($conn,$sqldelete)){
	header("Location: telaadmin1.php");
} else {
	echo "Erro ao apagar coleta.<br>".mysqli_error($conn); 
	echo "<br><a href='telaadmin1.php'>Voltar</a>";
}

mysqli_close($conn);

	
?>