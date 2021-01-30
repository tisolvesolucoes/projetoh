<?
session_start();
if (empty($_SESSION['usuario_id'])) {
 echo "Acesso negado!";
 exit;
}else{
include('config/conexao.php');

$usuario_id   = $_SESSION['usuario_id'];
$usuario_nome = $_SESSION['usuario_nome'];
}
?>
<?
// PEGA OS DADOS DO USU�RIO

$query = "SELECT * FROM tbl_usuarios where id = '$usuario_id'";
$resultado = mysql_query($query); 
	$campo = mysql_fetch_array ($resultado);
	$usuario_nome = $campo ['nome'];

?>

</script>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="javascript/javascript.js"></script>
<body bgcolor="#FFFFFF">
<?

$id_banner = $_GET['id_banner'];
$query = "select * from tbl_banners where id_banner = '$id_banner'";
$rs = mysql_query($query);
?>
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="textoVerdanaPreto" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
  <tr> 
    <td height="14" bgcolor="#FFFFFF" class="verdanaPretoBold"> 
      <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b> 
        <font color="#000000"> 
        <? 
while($row = mysql_fetch_array($rs)){
$cliente              = $row['cliente'];
$url                  = $row['url'];
$largura              = $row['largura'];
$altura               = $row['altura'];
$texto_banner         = $row['texto_banner'];
$tipo_abertura        = $row['tipo_abertura'];
$visualizacoes        = $row['visualizacoes'];
$banner               = $row['banner'];
$status               = $row['status'];
}

  ?>INFORMA��ES DO BANNER</font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td> 
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" class="textobold">
        <tr> 
          <td bgcolor="#FFFFFF"> 
            <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto" bgcolor="#FFFFFF">
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" height="20" width="12%" > 
                  <div align="right"><b><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Cliente</font><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">:</font></b></div>
                </td>
                <td bgcolor="#FFFFFF" height="20" width="88%" ><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                  <php echo  $cliente; ?>
                  </font></td>
              </tr>
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" height="20" width="12%" > 
                  <div align="right"><b><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">URL:</font></b></div>
                </td>
                <td bgcolor="#FFFFFF" height="20" width="88%" > 
                  <div align="left"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                    <php echo  $url; ?>
                    </font><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                    </font> </div>
                </td>
              </tr>
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" height="20" width="12%" > 
                  <div align="right"><b><font size="2" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">Altura:</font></b></div>
                </td>
                <td bgcolor="#FFFFFF" height="20" width="88%" ><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">
                  <php echo  $altura; ?>
                  </font></td>
              </tr>
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" height="20" width="12%" > 
                  <div align="right"><b><font size="2" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">Largura:</font></b></div>
                </td>
                <td bgcolor="#FFFFFF" height="20" width="88%" ><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">
                  <php echo  $largura; ?>
                  </font></td>
              </tr>
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" height="20" width="12%" > 
                  <div align="right"><b><font size="2" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">Abertura:</font></b></div>
                </td>
                <td bgcolor="#FFFFFF" height="20" width="88%" ><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">
                  <php echo  $tipo_abertura; ?>
                  </font></td>
              </tr>
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" height="20" width="12%" >
                  <div align="right"><b><font size="2" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">Visualiza&ccedil;&otilde;es:</font></b></div>
                </td>
                <td bgcolor="#FFFFFF" height="20" width="88%" ><php echo  $visualizacoes; ?></td>
              </tr>
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" height="20" width="12%" >
                  <div align="right"><b><font size="2" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">Descri&ccedil;&atilde;o:</font></b></div>
                </td>
                <td bgcolor="#FFFFFF" height="20" width="88%" ><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#000000">
                  <php echo  $texto_banner; ?>
                  </font></td>
              </tr>
              <tr bgcolor="#DADADA">
                <td bgcolor="#FFFFFF" height="20" width="12%" >
                  <div align="right"><b><font size="2" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">Status:</font></b></div>
                </td>
                <td bgcolor="#FFFFFF" height="20" width="88%" ><font size="2" color="RED" face="Verdana, Arial, Helvetica, sans-serif">
                  <? if ($status == '0'){ echo "Inativo";}else{echo "Ativo";} ?>
                  </font></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto">
              <tr bgcolor="#DADADA"> 
                <td bgcolor="#FFFFFF" > 
                  <div align="center"><b><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Imagem</font></b></div>
                </td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td bgcolor="#FFFFFF"> 
                  <div align="center"> <img src="../imagens/banners/<? if ($banner != ""){echo $banner;}else{ echo 'nao_disponivel.jpg';}?>">
                  </div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td> 

          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td></td>
  </tr>
</table>
<p align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b> 
  </b></font> </p>
<div align="center"></div>
