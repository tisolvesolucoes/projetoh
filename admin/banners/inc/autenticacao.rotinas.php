<?php
session_start();
include ("../config/conexao.php");

echo $cliente_username = $_SESSION["usuario"];
echo $cliente_idUsuario = $_SESSION["id"];
$enviado          = $_POST["enviado"];

if ($cliente_idUsuario){   //$enviado == "posted" 
	
if (!isset($cliente_username) or !isset($cliente_idUsuario)) { echo "Erro!";	exit; }  
if (empty($cliente_username) or empty($cliente_idUsuario)) { echo "Dados invalidos!"; exit; }

$query = "select * from tbl_usuarios where nomeUsuario = '$cliente_username' and idUsuario = '$cliente_idUsuario'";
$result = mysql_query($query);
$number = mysql_num_rows($result);

if ($number==0) { ?><script>alert('Autorizacao inexistente/Senha invalida ou expirada.');history.back();</script>
<?php
	exit;
} else {
	$_SESSION['usuario'] = mysql_result($result,0,'nomeUsuario');
	$_SESSION['id'] = mysql_result($result,0,'idUsuario');
	?><script>document.location = 'index.php'</script><?
}
mysql_close($conexao);	

} 
?>
