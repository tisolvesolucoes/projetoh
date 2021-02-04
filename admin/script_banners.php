<?php
session_start();
if (empty($_SESSION['id'])) {
 echo "Acesso negado!";
 exit;
}else{
include('../config/config.php');
include('enviaImagem.php');

$link   		= $_REQUEST['link'];
$acao   		= $_REQUEST['tipo'];
$usuario_id   	= $_SESSION['id'];
$usuario_nome 	= $_SESSION['nomeUsuario'];

}

if($_SESSION['id'] > 0){

switch ($acao) {
case "cadastrar":
echo 'teste';
	// Pasta onde o arquivo vai ser salvo
			$_UP['pasta'] = '../img/banners/';
			// Tamanho máximo do arquivo (em Bytes)
			$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
			// Array com as extensões permitidas
			$_UP['extensoes'] = array('jpg', 'png', 'gif');
		
			// Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
			if ($_FILES['arquivo']['error'] != 0) {
			die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
			exit; // Para a execução do script
			}
			// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
			// Faz a verificação da extensão do arquivo
			$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
			if (array_search($extensao, $_UP['extensoes']) === false) {
			echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
			exit;
			}
			// Faz a verificação do tamanho do arquivo
			if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
			echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
			exit;
			}
			// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
			// Primeiro verifica se deve trocar o nome do arquivo
			
			// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
			echo 'nome_final - ' . $nome_final = md5(time()).".".$extensao;
	
			// Depois verifica se é possível mover o arquivo para a pasta escolhida
			if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
			// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
	
		
				$stmt = $pdo->prepare("insert into tbl_banners (nome, link) values (?, ?)");
				$stmt->bindParam(1,$nome_final);
				$stmt->bindParam(2,$link);
	
					$stmt->execute();
					echo '<a href="/">Clique aqui para voltar para o painel</a>';
			}
?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("Cadastro de banner efetuado com sucesso =D ")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="/";</SCRIPT>

<?php

break;

case excluir:
	
	if(!(isset($_REQUEST['idBanner']))){
		$stmt = $pdo->prepare("delete from tbl_banners (nome, caminho, link) where id_banner =  (?, ?)");
		$stmt->bindParam(1,$idBanner);

			$stmt->execute();
		
		$sql = $pdo->prepare("SELECT * FROM tbl_banner WHERE id_banner = ?");
        $sql->execute([$id_banner]);

        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            echo $id_banner;
				echo "<div class='box_erro_login'><p><i class='fas fa-exclamation-circle'>
				</i>Quer mesmo apagar esse Banner?!
				<button id='sim' OnClick='excluiBanner(".$id_banner.")'>SIM</button></p></div>"
				?>
				<div class='box_erro_login'>
				<img src="<?php echo $caminho.$info['nome'];?>"></div>
		<?php
		}
		else
		{

			$query = "delete from tbl_banners where id_banner = '$id_banner'";
			$rs = mysql_query($query);

			if ($rs){
				$uploaddir = "../img/banners/";

				if ($banner_nome_arquivo != "") {unlink ($uploaddir.$banner_nome_arquivo);}
		
?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("exclusao de banner efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="/";</SCRIPT>

<?php
				}
			}
		break;
		}
	}
}
?>
	<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> 
	function excluiBanner(n){
		window.location.href="?idBanner="+n+"&tipo=excluir";
	}
	</SCRIPT>
