<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$tipo = $_POST['tipo'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];


$resultado = mysqli_query($conexao, "INSERT INTO consulta (nome, email, tipo, checkin, checkout)
							VALUES ('$nome', '$email','$tipo','$checkin','$checkout')");

if(mysqli_affected_rows($conexao) > 0){
	echo "<script type='text/javascript'>
		alert ('Obrigada pela participação!');
		</script>";
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;
		URL=http://localhost/ProjetoChalé/index.html'>";
}else {
	echo "<script type='text/javascript'>
		alert ('INFORMAÇÃO NÃO CADASTRADA!');
		</script>";
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;
		URL=http://localhost/ProjetoChalé/index.html'>";
}


?>