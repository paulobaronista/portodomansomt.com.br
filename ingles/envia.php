<?php
$nome     = $_POST['nome'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$mensagem = $_POST['mensagem'];
$headers = "From: <contato@portodomansomt.com.br>"."\n";
$corpo  .= "Nome: ".$nome."<br/>";
$corpo .= "E-mail: ".$email."<br/>";
$corpo .= "Telefone: ".$phone. "<br/>";
$corpo .= "Mensagem: ".$mensagem."<br/>";
$headers .= "MIME-Version: 1.0"."\n";
$headers .= "Content-type:text/html;charset=iso-8859-1"."\n";
// mail("paulobaronista@gmail.com, renata@spicycomm.com.br, imoveisgalvao@gmail.com","Contato enviado pelo site www.portodomansomt.com.br",$corpo,$headers);
mail("paulobaronista@gmail.com","Contato enviado pelo site www.portodomansomt.com.br",$corpo,$headers);
?>
 