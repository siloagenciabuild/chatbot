<html>
<head>
               <title></title>
        </head>

<?php

require_once("PHPMailerAutoload.php");


// Pegar os parametros do email:

$nome = $_GET['nome'];
$email = $_GET['email'];
$cpf = $_GET['cpf'];
$telefone = $_GET['telefone'];


if (!empty( $_GET['previdencia'])) {
	$previdencia = $_GET['previdencia'];
}

if (!empty( $_GET['responsabilidade'])) {
	$responsabilidade = $_GET['responsabilidade'];
}

if(!empty( $_GET['segclinica'])) {
	$segclinica = $_GET['segclinica'];
}

if (!empty( $_GET['segvida'])) {
	$segvida = $_GET['segvida'];
}

if (!empty( $_GET['segmulher'])) {
	$segmulher = $_GET['segmulher'];
}

if (!empty( $_GET['segresidencial'])) {
	$segresidencial = $_GET['segresidencial'];
}

if (!empty( $_GET['segviagem'])) {
	$segviagem = $_GET['segviagem'];
}

if (!empty( $_GET['serit'])) {
	$serit = $_GET['serit'];
}

if (!empty( $_GET['unimedodonto'])) {
	$unimedodonto =$_GET['unimedodonto'];
}

$mail = new PHPMailer();

$mail -> isSMTP();

$mail -> SMTPOptions = array(
'ssl'=> array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed'=> true
)
);

$mail -> SMTPDebug = 2;
$mail -> Host = "smtp.gmail.com"; 
$mail -> SMTPSecure = "tls";
$mail -> Port = 587;
$mail -> SMTPAuth = true;

$mail -> Username = 'chatbotunimed@gmail.com';
$mail -> Password = 'novasilo10';

$mail -> setFrom ('chatbotunimed@gmail.com', 'Chatbot Seguros Unimed - Lead');
$mail -> addAddress ('enviomkt@segurosunimed.com.br');
$mail -> Subject = "Email de contato do Chatbot";
$mail -> Body = "Olá! Você acaba de receber um email de teste do chatbot
Estes são os dados da pessoa que tentou entrar em contato:
1- Nome: $nome 
2- E-mail: $email
3- CPF: $cpf
4- Telefone: $telefone
Selecionados: $previdencia $responsabilidade $segclinica $segvida $segmulher $segresidencial $segviagem $serit $unimedodonto
";

if($mail ->send())
header('enviado.php');

else echo "Deu ruim";

?>
</html>