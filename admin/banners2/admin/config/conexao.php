<?
   
$database="localhost:3306"; // SERVIDOR E PORTA UTILIZADA
$dbname="hashimoto"; // BASE DE DADOS 
$usuario="root"; // USUARIO DO MYSQL
$dbsenha=""; // SENHA DO MYSQL

$conexao=mysql_connect ($database, $usuario, $dbsenha);
if($conexao){
      if (mysql_select_db($dbname, $conexao)){ print "";
      }else{ print "NAo foi possivel selecionar o Banco de Dados"; }
}else{ print "Erro ao conectar o MySQL"; }
?>
