<?php 

if(isset($_POST["name"])){

	$nome = $_POST['name'];
	$email = $_POST['email'];
	$telefone = $_POST['tel'];
	$msg = $_POST['message'];

	$to = "teste@hotmail.com";
	$subject = "Message from Personal";
	$message = "<strong>Nome: </strong>$nome<br/><br/><strong>E-mail: </strong>$email<br/><br/><strong>Telefone: </strong>$tel<br/><br/><strong>Mensagem: </strong>$msg";
	$header = "MINE-Version: 1.0\n";
	$header .= "Content-type: text/html; charset=iso-8859-1\n";
	$header .= "From: $email\n";
	@mail($to, $subject, $message, $header);

	echo "Message Sent!";
}

?>