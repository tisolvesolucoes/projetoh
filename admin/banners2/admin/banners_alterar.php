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

<HTML>

<HEAD>

<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">

<STYLE type=text/css>.titulos {
	FONT-SIZE: 16px; COLOR: #b09014; FONT-FAMILY: Arial, Helvetica, sans-serif
}
</STYLE>

<title>.:: ADMINISTRA&Ccedil;&Atilde;O ::.</title></HEAD>

<BODY bgColor=#6c6c7d leftMargin=0 topMargin=0>

<form action="script_banners.php?acao=alterar" Method="post" enctype="multipart/form-data">
  <?

$id_banner = $_GET['id_banner'];
$query = "select * from tbl_banners where id_banner = '$id_banner'";
$resultado = mysql_query($query);

$row = mysql_fetch_array($resultado);
$cliente                      = $row['cliente'];
$url                          = $row['url'];
$largura                      = $row['largura'];
$altura                       = $row['altura'];
$texto_banner                 = $row['texto_banner'];
$tipo_abertura                = $row['tipo_abertura'];
$visualizacoes                = $row['visualizacoes'];
$status                       = $row['status'];

?>
  <TABLE cellSpacing=1 cellPadding=0 width=777 align=center bgColor=#000000 

border=0>

  <TBODY>

  <TR>

    <TD bgColor=#d7dbe1>

      <TABLE cellSpacing=0 cellPadding=0 width=775 border=0>

        <TBODY>

        <TR>

          <TD>

            <TABLE cellSpacing=0 cellPadding=0 width=775 border=0> 
              <TBODY> 
              <TR>

                  <TD width=12>&nbsp;</TD>
                  <TD vAlign=middle width=145> 
                    <div align="center"><a href="principal.php" target="_top">LOGOTIPO</a></div>
                  </TD>
                  <TD vAlign=bottom width=76>&nbsp;</TD>

                <TD>

                    <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                      <TBODY> 
                      <TR> 
                        <TD align=right height=36> 
                          <TABLE cellSpacing=0 cellPadding=0 width=518 border=0>
                            <TBODY> 
                            <TR> 
                              <TD class=top1><SPAN class=nome><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="2">Ol�</font> 
                                <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                <? echo "$usuario_nome"; ?>
                                </font></SPAN><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;|&nbsp;&nbsp;VOC� 
                                EST� NA �REA DO ADMINISTRADOR </font></TD>
                              <TD width=61><A href="logout.php"><IMG height=14 src="imagens/res_bt-sair.gif" width=51 border=0></A></TD>
                            </TR>
                            </TBODY>
                          </TABLE>
                        </TD>
                      </TR>
                      <TR> 
                        <TD align=right>&nbsp; </TD>
                      </TR>
                      </TBODY>
                    </TABLE>
                  </TD></TR></TBODY></TABLE>

            <TABLE class=res-bg cellSpacing=0 cellPadding=0 width=775 border=0><TBODY>

              <TR>

                <TD align=middle>

                    <TABLE cellSpacing=0 cellPadding=0 width=747 border=0>
                      <TBODY> 
                      <TR> 
                        <TD><IMG height=2 

                        src="imagens/extranet/res_linhas.gif" 

                      width=747></TD>
                      </TR>
                      <TR> 
                        <TD align=middle height=30> 
                          <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1">efetue 
                            abaixo a altera&ccedil;&atilde;o do banner.</font></div>
                        </TD>
                      </TR>
                      <TR> 
                        <TD> 
                          <TABLE cellSpacing=0 cellPadding=0 width=747 border=0>
                            <TR> 
                              <TD vAlign=bottom> 
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" bgColor=#4fa9c7 border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD width=10>&nbsp;</TD>
                                    <TD width=665><STRONG><FONT color=#ffffff> 
                                      <font face="Verdana, Arial, Helvetica, sans-serif" size="2">ALTERAR 
                                      BANNER</font></FONT></STRONG></TD>
                                    <TD align=right width=14>&nbsp;</TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                              </TD>
                            </TR>
                            <TR> 
                              <TD bgColor=#ffffff valign="top"> 
                                <TABLE class=textosmedios cellSpacing=0 

                              cellPadding=4 width="100%" border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD valign="top"> 
                                      <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="textoVerdanaPreto">
                                        <tr> 
                                          <td> 
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="textobold">
                                              <tr> 
                                                <td> 
                                                  <table width="100%" border="0" cellpadding="0" cellspacing="2" class="textoVerdanaPreto">
                                                    <tr bgcolor="#FFFFFF"> 
                                                      <td height="29" bgcolor="#FFFFFF" valign="top"> 
                                                        <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                                                          <tr bgcolor="#FFFFFF"> 
                                                            <td colspan="2"> 
                                                              <div align="right"><span class='TextoPretoPequeno'>Cliente:</span></div>
                                                            </td>
                                                            <td colspan="2"> 
                                                              <input name="cliente" type="text" class="formAzul" size="40" value='<php echo  $cliente; ?>'>
                                                            </td>
                                                            <td width="15%"> 
                                                              <div align="right">Largura:</div>
                                                            </td>
                                                            <td width="33%"> 
                                                              <input name="largura" type="text" class="formAzul" size="15" value="<php echo  $largura; ?>">
                                                              [em pixels] </td>
                                                          </tr>
                                                          <tr> 
                                                            <td colspan="2"> 
                                                              <div align="right"><span class='TextoPretoPequeno'>URL:</span></div>
                                                            </td>
                                                            <td colspan="2"> 
                                                              <input name="url" type="text" class="formAzul" size="40" value="<php echo  $url; ?>">
                                                            </td>
                                                            <td width="15%"> 
                                                              <div align="right">Altura:</div>
                                                            </td>
                                                            <td width="33%"> 
                                                              <input name="altura" type="text" class="formAzul" size="15" value="<php echo  $altura; ?>">
                                                              [em pixels] </td>
                                                          </tr>
                                                          <tr bgcolor="#FFFFFF"> 
                                                            <td colspan="2"> 
                                                              <div align="right"><span class='TextoPretoPequeno'>Descri&ccedil;&atilde;o:</span></div>
                                                            </td>
                                                            <td colspan="2"> 
                                                              <input name="texto_banner" type="text" class="formAzul" size="40" value="<php echo  $texto_banner; ?>">
                                                            </td>
                                                            <td width="15%"> 
                                                              <div align="right"> 
                                                                Abertura:</div>
                                                            </td>
                                                            <td width="33%"> 
                                                              <select name='tipo_abertura' class='formAzul' id='ativo'>
                                                                <option value="_blank" selected>P�gina 
                                                                Externa ( _blank)</option>
                                                                <option value="_self" >Pr�pria 
                                                                P�gina ( _self 
                                                                )</option>
                                                              </select>
                                                            </td>
                                                          </tr>
                                                          <tr bgcolor="#FFFFFF"> 
                                                            <td width="5%"> 
                                                              <div align="right"><span class='TextoPretoPequeno'>Ativo:</span></div>
                                                            </td>
                                                            <td width="8%"> 
                                                              <select name='status' class='formAzul' id='ativo'>
                                                                <option value='1' selected>SIM</option>
                                                                <option value='0'>N�O</option>
                                                              </select>
                                                            </td>
                                                            <td width="16%"> 
                                                              <div align="right"><span class='TextoPretoPequeno'>Visualiza��es</span>: 
                                                              </div>
                                                            </td>
                                                            <td width="23%"> 
                                                              <input name="visualizacoes" type="text" class="formAzul" size="15" value="<php echo  $visualizacoes; ?>">
                                                            </td>
                                                            <td width="15%"> 
                                                              <div align="right">Arquivo:</div>
                                                            </td>
                                                            <td width="33%"> 
                                                              <input type="file" name="banner_nome_arquivo">
                                                            </td>
                                                          </tr>
                                                          <tr bgcolor="#FFFFFF"> 
                                                            <td colspan="6"> 
                                                              <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Inserir 
                                                                somente imagens 
                                                                no formato .jpg 
                                                                ou .gif</font></div>
                                                            </td>
                                                          </tr>
                                                          <tr bgcolor="#FFFFFF"> 
                                                            <td colspan="6"> 
                                                              <div align="center"><br>
                                                                <input name="id_banner" type="hidden" value="<php echo  $id_banner; ?>">
                                                                <input type=image height=18 width=100 src="imagens/bt_confirmar3.gif" border=0 name='submit'>
                                                              </div>
                                                            </td>
                                                          </tr>
                                                        </table>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                              <tr> 
                                                <td> </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td></td>
                                        </tr>
                                      </table>
                                    </TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                                <TABLE class=textosmedios cellSpacing=0 cellPadding=0 width="100%" border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD>&nbsp; </TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                              </TD>
                            </TR>
                          </TABLE>
                        </TD>
                      </TR>
                      <TR> 
                        <TD></TD>
                      </TR>
                      </TBODY>
                    </TABLE>
                    
                  </TD>
                </TR></TBODY></TABLE>

            </TD>
          </TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</form>
</BODY></HTML>

