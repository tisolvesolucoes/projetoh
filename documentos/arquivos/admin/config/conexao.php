<?
   
$database="localhost:3306"; // SERVIDOR E PORTA UTILIZADA
$dbname="tutorial"; // BASE DE DADOS 
$usuario="root"; // USU�RIO DO MYSQL
$dbsenha=""; // SENHA DO MYSQL

$conexao=mysql_connect ($database, $usuario, $dbsenha);
if($conexao){
      if (mysql_select_db($dbname, $conexao)){ print "";
      }else{ print "N�o foi poss�vel selecionar o Banco de Dados"; }
}else{ print "Erro ao conectar o MySQL"; }
?>
