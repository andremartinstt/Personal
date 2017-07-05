<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
</head>
<body>

<?php 

if(isset($_POST["name"])){

	$nome = $_POST['name'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$msg = $_POST['message'];

	$to = "teste@hotmail.com";
	$subject = "$assunto";
	$message = "<strong>Nome: </strong>$nome<br/><br/><strong>E-mail: </strong>$email<br/><br/><strong>Mensagem: </strong>$msg";
	$header = "MINE-Version: 1.0\n";
	$header .= "Content-type: text/html; charset=iso-8859-1\n";
	$header .= "From: $email\n";
	@mail($to, $subject, $message, $header);

	echo "<h3 style='font-family:Arial, sans-serif; color:#003311; font-weight:bold;'>Message Sent!</h3>";
}

?>

</body>
</html>