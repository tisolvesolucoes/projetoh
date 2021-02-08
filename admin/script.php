<?php
session_start();
if (empty($_SESSION['id'])) {
 echo "Acesso negado!";
 exit;
}

if($_SESSION['id'] > 0 && $_REQUEST['acao'] == "cadastrarSolucao"){

	include('../config/config.php');
	$link   		= $_REQUEST['link'];
	$usuario_id   	= $_SESSION['id'];
	$usuario_nome 	= $_SESSION['nomeUsuario'];
	$titulo 		= $_REQUEST['titulo'];
	$descricao 		= $_REQUEST['descricao'];
	$tipoSolucao 	= $_REQUEST['tipoSolucao'];
	$tipoSolucao 	= (int)$tipoSolucao;

	$stmt = $pdo->prepare("insert into tbl_solucoes (
	titulo, 
	descricao,
	tipoSolucao) 
	values (?, ?, ?)");
		
				$stmt->bindParam(1,$titulo);
				$stmt->bindParam(2,$descricao);
				$stmt->bindParam(3,$tipoSolucao);

				if($stmt->execute()){
					echo 'ok'; 				 
				}
				else {
					# code...
					echo 'deu ruim'; 
				}
			
		//mysqli_query($db, $sql); 
	
}
?>


