<?php
$nome = $_POST['nome'];
$email = $_POST['email'];

include "connect.php";

$sql = mysqli_query($link,"SELECT * FROM tb_formulario WHERE email='$email'");
while($line = mysqli_fetch_array($sql)){
	$email = $line['email'];
	$nome = $line['nome'];
}

$sqlinsert =  "INSERT INTO tb_formulario (nome, email) VALUES ('$nome', '$email')";


$contar = mysqli_num_rows($sql);

	if($contar != 0){
		echo "Seu email ja esta cadastrado";

	}
	else{
		 mysqli_query($link, $sqlinsert);
     	 echo "Email cadastrado com sucesso";

	}
?>