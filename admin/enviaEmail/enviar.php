<?php 


	include('../config/config.php');

	$nome		= $_REQUEST['nome'];
	$telefone 	= $_REQUEST['telefone'];
	$email		= $_REQUEST['email'];
	$assunto 	= $_REQUEST['assunto'];
	$mensagem 	= $_REQUEST['mensagem'];
	$data_envio = date('d/m/Y');
	$hora_envio = date('H:i:s');

	$arquivo = "
	<style type='text/css'>
	body {
	margin:0px;
	font-family:Verdane;
	font-size:12px;
	color: #666666;
	}
	a{
	color: #666666;
	text-decoration: none;
	}
	a:hover {
	color: #FF0000;
	text-decoration: none;
	}
	</style>
	  <html>
		  <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
			  <tr>
				<td>
				<tr>
				   <td width='500'>Nome:$nome</td>
				  	</tr>
				  	<tr>
					<td width='320'>E-mail:<b>$email</b></td>
	   				</tr>
					<tr>
					<td width='320'>Telefone:<b>$telefone</b></td>
				  	</tr>
	   				<tr>
					<td width='320'>Assunto:$assunto</td>
				  	</tr>
				  	<tr>
					<td width='320'>Mensagem:$mensagem</td>
				  </tr>
			  	</td>
			</tr>
			<tr>
			  <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
			</tr>
		  </table>
	  </html>";



//enviar 


 // Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
 require_once("PHPMailerAutoload.php");
 // Inicia a classe PHPMailer
 $mail = new PHPMailer();
 // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
 $mail->IsSMTP(); // Define que a mensagem será SMTP
 $mail->Host = "smtp.hashimotolegal.com.br"; // Seu endereço de host SMTP
 $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
 $mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
 $mail->SMTPSecure = true; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
 $mail->SMTPAutoTLS = true; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
 $mail->Username = 'atendimento@hashimotolegal.com.br'; // Conta de email existente e ativa em seu domínio
 $mail->Password = 'mkultr@A954777'; // Senha da sua conta de email
 // DADOS DO REMETENTE
 $mail->Sender = "atendimento@hashimotolegal.com.br"; // Conta de email existente e ativa em seu domínio
 $mail->From = "atendimento@hashimotolegal.com.br"; // Sua conta de email que será remetente da mensagem
 $mail->FromName = "hashimotolegal.com.br"; // Nome da conta de email
 // DADOS DO DESTINATÁRIO
 $mail->AddAddress('contato@hashimotolegal.com.br', 'Nome - Atendimento'); // Define qual conta de email receberá a mensagem
 //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
 //$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
 //$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
 // Definição de HTML/codificação
 $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
 $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 // DEFINIÇÃO DA MENSAGEM
 $mail->Subject  = "Formulário de Contato"; // Assunto da mensagem
 $mail->Body .= " Nome: ".$_POST['nome']."
"; // Texto da mensagem
 $mail->Body .= " E-mail: ".$_POST['email']."
"; // Texto da mensagem
 $mail->Body .= " Assunto: ".$_POST['assunto']."
"; // Texto da mensagem
 $mail->Body .= " Mensagem: ".nl2br($_POST['mensagem'])."
"; // Texto da mensagem
 // ENVIO DO EMAIL
 $enviado = $mail->Send();
 // Limpa os destinatários e os anexos
 $mail->ClearAllRecipients();
 // Exibe uma mensagem de resultado do envio (sucesso/erro)
 if ($enviado) {
   echo "E-mail enviado com sucesso!";
 } else {
   echo "Não foi possível enviar o e-mail.";
   echo "Detalhes do erro: " . $mail->ErrorInfo;
 }