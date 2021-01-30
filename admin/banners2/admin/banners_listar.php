





<?php
session_start();
if (empty($_SESSION['id'])) {
 echo "Acesso negado!";
 exit;
}else{
include('config/conexao.php');

$usuario_id   = $_SESSION['id'];
$usuario_nome = $_SESSION['nomeUsuario'];
}
?>
<?php
// PEGA OS DADOS DO USUARIO

$query = "SELECT * FROM tbl_usuarios where id = '$usuario_id'";
$resultado = mysql_query($query); 
	$campo = mysql_fetch_array ($resultado);
	$usuario_nome = $campo ['nome'];

?>

<HTML> 
<HEAD> 
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">

<script language="JavaScript"> 
	function Abrir_Pagina(URL,Configuracao) {
	  window.open(URL,'',Configuracao);      
	} 
</script>

<STYLE type=text/css>.titulos {

	FONT-SIZE: 16px; COLOR: #b09014; FONT-FAMILY: Arial, Helvetica, sans-serif

}

</STYLE>

<title>.:: ADMINISTRA&Ccedil;&Atilde;O ::.</title></HEAD>

<BODY bgColor=#6c6c7d leftMargin=0 topMargin=0>

<TABLE cellSpacing=1 cellPadding=0 width=777 align=center bgColor=#000000 border=0>

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
                            <TD class=top1><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="2">Ol�</font> 
                              <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                              <? echo "$usuario_nome"; ?>
                              </font><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;|&nbsp;&nbsp;VOC� 
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
                      <TD><IMG height=2 width=747></TD>
                    </TR>
                    <TR> 
                      <TD align=middle height=30> 
                        <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Verefique 
                          abaixo os banners cadastrados no sistema.</font></div>
                      </TD>
                    </TR>
                    <TR> 
                      <TD> 
                        <TABLE class=textos cellSpacing=0 cellPadding=0 

                        width=747 border=0>
                          <FORM name=formident action="" method=get>
                            <TR> 
                              <TD vAlign=bottom 

                            background=imagens/extranet/barra_branco-bg.gif> 
                                <TABLE class=textos cellSpacing=0 cellPadding=0 

                              width="100%" bgColor=#4fa9c7 border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD width=10>&nbsp;</TD>
                                    <TD width=665><STRONG><FONT color=#ffffff> 
                                      <font face="Verdana, Arial, Helvetica, sans-serif" size="2">TODOS OS BANNERS</font></FONT></STRONG></TD>
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
                                      <table width="95%" border="0" align="center" cellpadding="1" cellspacing="1" class="textoVerdanaPreto">
                                        <tr> 
                                          <td valign="top"> 
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="textobold">
                                              <tr> 
                                                <td valign="top"> <font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b> 
                                                  </b></font> <font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>
                                                  <?
$query = "select * from tbl_banners order by id_banner desc";
$rs = mysql_query($query);
?>
                                                  </b></font>
                                                  <table width="99%" border="0" align="center" cellpadding="1" cellspacing="1" class="textoVerdanaPreto">
                                                    <tr> 
                                                      <td> 
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="textobold">
                                                          <tr> 
                                                            <td> 
                                                              <table width="100%" border="0" cellpadding="2" cellspacing="2" class="textoVerdanaPreto">
                                                                <tr bgcolor="#DADADA"> 
                                                                  <td width="54%" bgcolor="#d7ebff" > 
                                                                    <div align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Cliente</font></div>
                                                                  </td>
                                                                  <td width="16%" bgcolor="#d7ebff"> 
                                                                    <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Status</font></div>
                                                                  </td>
                                                                  <td bgcolor="#d7ebff" width="15%"> 
                                                                    <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Visualizar</font></div>
                                                                  </td>
                                                                  <td bgcolor="#d7ebff" width="7%"> 
                                                                    <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Editar</font></div>
                                                                  </td>
                                                                  <td bgcolor="#d7ebff" width="8%" > 
                                                                    <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Excluir</font></div>
                                                                  </td>
                                                                </tr>
                                                                <? 
while($row = mysql_fetch_array($rs)){
$status = $row['status'];
  ?>
                                                                <tr bgcolor="#F5F5F5"> 
                                                                  <td width="54%" bgcolor="#F5F5F5"> 
                                                                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
                                                                    <php echo  $row["cliente"] ?>
                                                                    </font></td>
                                                                  <td width="16%"> 
                                                                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
                                                                    <? if ($status == '1'){ echo "Ativo";}else{ echo "Desativado";} ?>
                                                                    </font></td>
                                                                  <td width="15%"> 
                                                                    <div align="center"> 
                                                                      <a href="javascript:Abrir_Pagina('banners_visualizar.php?id_banner=<php echo  $row["id_banner"] ?>','scrollbars=yes,width=500,height=600')">
                                                                      <img src="imagens/ed_preview.gif" width="16" height="14" border="0"> 
                                                                      </a> </div>
                                                                  </td>
                                                                  <td width="7%"> 
                                                                    <div align="center"><a href="banners_alterar.php?id_banner=<php echo  $row["id_banner"] ?>"><img src="imagens/ed_refresh.gif" width="16" height="16" border="0"></a></div>
                                                                  </td>
                                                                  <td width="8%"> 
                                                                    <div align="center"><a href="script_banners.php?acao=excluir&id_banner=<php echo  $row["id_banner"] ?>"><img src="imagens/ed_delete.gif" width="18" height="17" border="0"></a></div>
                                                                  </td>
                                                                </tr>
                                                                <?} ?>
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
                                <TABLE class=textosmedios cellSpacing=0 

                              cellPadding=0 width="100%" border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD>&nbsp; </TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                              </TD>
                            </TR>
                            <TR> 
                              <TD bgColor=#ffffff> 
                                <TABLE class=textos cellSpacing=0 cellPadding=0 

                              width="100%" border=0>
                                  <TBODY> 
                                  <TR> 
                                    <TD align=middle>&nbsp;</TD>
                                  </TR>
                                  <TR> 
                                    <TD 

                            align=middle>&nbsp;</TD>
                                  </TR>
                                  </TBODY> 
                                </TABLE>
                              </TD>
                            </TR>
                          </FORM>
                        </TABLE>
                      </TD>
                    </TR>
                    <TR> 
                      <TD></TD>
                    </TR>
                    </TBODY>
                  </TABLE>
                  <BR></TD></TR></TBODY></TABLE>

            
          </TD>
        </TR></TBODY></TABLE></TD></TR></TBODY></TABLE></BODY></HTML>

