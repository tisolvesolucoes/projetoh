<?php
session_start();
if (empty($_SESSION['id'])) {
 echo "Acesso negado!";
 exit;
}else{
include('config/conexao.php');

$usuario_id   = $_SESSION['id'];
$usuario_nome = $_SESSION['usuario'];

}

/* PEGA OS DADOS DO USUARIO
$query = "SELECT * FROM tbl_usuario where idUsuario = '$usuario_id'";

$resultado = mysql_query($query); 
	$campo = mysql_fetch_array ($resultado);
  $usuario_nome = $campo ['nomeUsuario'];
  echo $usuario_nome ;
die();*/
?>

<HTML>

<HEAD>

  <META http-equiv=Content-Type content="text/html; charset=iso-8859-1">

  <STYLE type=text/css>
    .titulos {
      FONT-SIZE: 16px;
      COLOR: #b09014;
      FONT-FAMILY: Arial, Helvetica, sans-serif
    }
  </STYLE>

  <title>.:: ADMINISTRA&Ccedil;&Atilde;O ::.</title>
</HEAD>

<BODY bgColor=#6c6c7d leftMargin=0 topMargin=0>

  <form action="script_banners.php?acao=cadastrar" Method="post" enctype="multipart/form-data">
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
                            <div align="center">
                              <h1><a href="../../"><img width="50%" src="../../img/logo.jpeg" /></a></h1>

                            </div>
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
                                          <TD class=top1><SPAN class=nome>
                                              <font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"
                                                size="2">Olá</font>
                                              <font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                                                <?php echo "$usuario_nome"; ?>
                                              </font>
                                            </SPAN></TD>
                                          <TD width=61><A href="logout.php">
                                              <IMG height=14 src="imagens/res_bt-sair.gif" width=51 border=0></A>
                                          </TD>
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
                          </TD>
                        </TR>
                      </TBODY>
                    </TABLE>

                    <TABLE class=res-bg cellSpacing=0 cellPadding=0 width=775 border=0>
                      <TBODY>

                        <TR>

                          <TD align=middle>

                            <TABLE cellSpacing=0 cellPadding=0 width=747 border=0>
                              <TBODY>
                                <TR>
                                  <TD><IMG height=2 src="imagens/extranet/res_linhas.gif" width=747></TD>
                                </TR>
                                <TR>
                                  <TD align=middle height=30>
                                    <div align="center">
                                      <font face="Verdana, Arial, Helvetica, sans-serif" size="1">efetue
                                        abaixo o cadastro de um novo banner.</font>
                                    </div>
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
                                                <TD width=665><STRONG>
                                                    <FONT color=#ffffff>
                                                      <font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                                                        CADASTRAR
                                                        BANNER</font>
                                                    </FONT>
                                                  </STRONG></TD>
                                                <TD align=right width=14>&nbsp;</TD>
                                              </TR>
                                            </TBODY>
                                          </TABLE>
                                        </TD>
                                      </TR>
                                      <TR>
                                        <TD bgColor=#ffffff valign="top">
                                          <TABLE class=textosmedios cellSpacing=0 cellPadding=4 width="100%" border=0>
                                            <TBODY>
                                              <TR>
                                                <TD valign="top">
                                                  <table width="100%" border="0" align="center" cellpadding="1"
                                                    cellspacing="1" class="textoVerdanaPreto">
                                                    <tr>
                                                      <td>
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0"
                                                          bgcolor="#FFFFFF" class="textobold">
                                                          <tr>
                                                            <td>
                                                              <table width="100%" border="0" cellpadding="0"
                                                                cellspacing="2" class="textoVerdanaPreto">
                                                                <tr bgcolor="#FFFFFF">
                                                                  <td height="29" bgcolor="#FFFFFF" valign="top">
                                                                    <table width="100%" border="0" cellpadding="2"
                                                                      cellspacing="2" class="textoVerdanaPreto"
                                                                      bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                                                                      <tr bgcolor="#FFFFFF">
                                                                        <td colspan="2">
                                                                          <div align="right"><span
                                                                              class='TextoPretoPequeno'>Cliente:</span>
                                                                          </div>
                                                                        </td>
                                                                        <td colspan="2">
                                                                          <input name="cliente" type="text"
                                                                            class="formAzul" size="40">
                                                                        </td>
                                                                        <td width="15%">
                                                                          <div align="right">Largura:</div>
                                                                        </td>
                                                                        <td width="33%">
                                                                          <input name="largura" type="text"
                                                                            class="formAzul" size="15" value="468">
                                                                          [em pixels]
                                                                        </td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td colspan="2">
                                                                          <div align="right"><span
                                                                              class='TextoPretoPequeno'>URL:</span>
                                                                          </div>
                                                                        </td>
                                                                        <td colspan="2">
                                                                          <input name="url" type="text" class="formAzul"
                                                                            size="40" value="http://">
                                                                        </td>
                                                                        <td width="15%">
                                                                          <div align="right">Altura:</div>
                                                                        </td>
                                                                        <td width="33%">
                                                                          <input name="altura" type="text"
                                                                            class="formAzul" size="15" value="60">
                                                                          [em pixels]
                                                                        </td>
                                                                      </tr>
                                                                      <tr bgcolor="#FFFFFF">
                                                                        <td colspan="2">
                                                                          <div align="right"><span
                                                                              class='TextoPretoPequeno'>Descri&ccedil;&atilde;o:</span>
                                                                          </div>
                                                                        </td>
                                                                        <td colspan="2">
                                                                          <input name="texto_banner" type="text"
                                                                            class="formAzul" size="40">
                                                                        </td>
                                                                        <td width="15%">
                                                                          <div align="right">
                                                                            Abertura:</div>
                                                                        </td>
                                                                        <td width="33%">
                                                                          <select name='tipo_abertura' class='formAzul'
                                                                            id='ativo'>
                                                                            <option value="_blank" selected>Pagina
                                                                              Externa ( _blank)</option>
                                                                            <option value="_self">Propria
                                                                              Pagina ( _self
                                                                              )</option>
                                                                          </select>
                                                                        </td>
                                                                      </tr>
                                                                      <tr bgcolor="#FFFFFF">
                                                                        <td width="5%">
                                                                          <div align="right"><span
                                                                              class='TextoPretoPequeno'>Ativo:</span>
                                                                          </div>
                                                                        </td>
                                                                        <td width="8%">
                                                                          <select name='status' class='formAzul'
                                                                            id='ativo'>
                                                                            <option value="1" selected>SIM</option>
                                                                            <option value="0">NaO</option>
                                                                          </select>
                                                                        </td>
                                                                        <td width="16%">
                                                                          <div align="right"><span
                                                                              class='TextoPretoPequeno'>Visualizacoes</span>:
                                                                          </div>
                                                                        </td>
                                                                        <td width="23%">
                                                                          <input name="visualizacoes" type="text"
                                                                            class="formAzul" size="15">
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
                                                                          <div align="right">
                                                                            <font
                                                                              face="Verdana, Arial, Helvetica, sans-serif"
                                                                              size="1">Inserir
                                                                              somente imagens
                                                                              no formato .jpg
                                                                              ou .gif</font>
                                                                          </div>
                                                                        </td>
                                                                      </tr>
                                                                      <tr bgcolor="#FFFFFF">
                                                                        <td colspan="6">
                                                                          <div align="center"><br>
                                                                            <input type=image height=18 width=100
                                                                              src="imagens/bt_confirmar3.gif" border=0
                                                                              name='submit'>
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
                        </TR>
                      </TBODY>
                    </TABLE>

                  </TD>
                </TR>
              </TBODY>
            </TABLE>
          </TD>
        </TR>
      </TBODY>
    </TABLE>
  </form>
</BODY>

</HTML>