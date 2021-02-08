<?php
session_start();
if (empty($_SESSION['id'])) {
 echo "Acesso negado!";
 exit;
}


if($_SESSION['id'] > 0){

        include('../../config/config.php');
        $link   		= $_REQUEST['link'];
        $acao           = $_REQUEST['acao'];
        $usuario_id   	= $_SESSION['id'];
        $usuario_nome 	= $_SESSION['nomeUsuario'];
        $fileImg        = $_FILES['caminho']['name'];
        $_UP['pasta']   = '../../img/banners/';
        // Tamanho máximo do arquivo (em Bytes)
        $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
        // Array com as extensões permitidas
        $_UP['extensoes'] = array('jpg', 'png', 'gif', 'jpeg');
		
    switch ($acao) {
        case "upload":

			// Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
			if ($_FILES['caminho']['error'] != 0) {
			die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['caminho']['error']]);
			exit; // Para a execução do script
			}
            else {
                
            }
			// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
			// Faz a verificação da extensão do arquivo
		    //$extensao = strtolower(end(explode('.', $_FILES['caminho']['name'])));
            $extensao = pathinfo($fileImg, PATHINFO_EXTENSION);

        
            if (array_search($extensao, $_UP['extensoes']) === false) {
			echo "Por favor, envie arquivos com as seguintes extensões: jpg, png, jpeg ou gif";
			exit;
			}
        

			// Faz a verificação do tamanho do arquivo
			if ($_UP['tamanho'] < $_FILES['caminho']['size']) {
			echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
			exit;
			}
          
                
			// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
			// Primeiro verifica se deve trocar o nome do arquivo
			
			// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
			$nome_final = md5(time()).".".$extensao;

			// Depois verifica se é possível mover o arquivo para a pasta escolhida
			if (move_uploaded_file($_FILES['caminho']['tmp_name'], $_UP['pasta'] . $nome_final)) {
                                                          
                // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo

				$stmt = $pdo->prepare("insert into tbl_banners (nome, link) values (?, ?)");
				$stmt->bindParam(1,$nome_final);
				$stmt->bindParam(2,$link);
	
					$stmt->execute();
				
			}
          
            break;
        case "deletarImagem":

            $id = $_REQUEST['id'];    
            $image = $_REQUEST['pathImage']; 
            
            if (unlink($_UP['pasta'].'/'.$image)){
            $stmt = $pdo->prepare("DELETE FROM tbl_banners WHERE id_banner = ?");
            $stmt->bindParam(1,$id);
            $stmt->execute();

            }
            break;
    }
}  

/*
case "cadastrar":
            
	$titulo = $_REQUEST['titulo'];
	$descricao = $_REQUEST['descricao'];

	$sql = "INSERT tbl_solucoes (
		titulo, 
		descricao) VALUES ('".$titulo."','".$descricao."')"; 

	mysqli_query($db, $sql); 
	echo 'ok'; 
	break;
case "deletar":
	break;    
case "editar":
	break;
	*/
?>


