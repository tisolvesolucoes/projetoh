<? include('admin/config/conexao.php'); ?>
<html>
<head>
<title>.:: GERENCIADOR DE BANNERS - HASHIMOTOLEGAL ::.</title>
</head>
<BODY>

<FIELDSET class=verdana_azul style="WIDTH: 96%"><LEGEND><STRONG>Banners</STRONG></LEGEND>
    <TABLE class=texto cellSpacing=0 cellPadding=5 width="100%" border=0>
        <TBODY>
            <TR>
                <TD>
                    <TABLE class=arial_preto cellSpacing=0 cellPadding=15 width="100%" border=0>
                        <TBODY>
                            <TR>
                                <TD>
                                    <TABLE class=arial_preto cellSpacing=4 cellPadding=3 width='100%' align=center border=0>
                                        <TBODY>
                                            <?
                                            
                                            $query_banners = "select * from tbl_banners where status = '1' and banner != '' Order by rand() limit 5";
                                            $rs_banners    = mysql_query($query_banners);
                                            
                                            while($campo_banners = mysql_fetch_array($rs_banners)){
                                            
                                            $id_banner         = $campo_banners['id_banner'];
                                            $url               = $campo_banners['url'];
                                            $largura           = $campo_banners['largura'];
                                            $altura            = $campo_banners['altura'];
                                            $texto_banner      = $campo_banners['texto_banner'];
                                            $tipo_abertura     = $campo_banners['tipo_abertura'];
                                            $banner            = $campo_banners['banner'];
                                            
                                            ?>
                                            
                                            <TR>
                                                <TD vAlign=top align=left colSpan=2>
                                                <a href='<php echo  $url; ?>' title='<php echo  $texto_banner; ?>' target='<php echo  $tipo_abertura; ?>'>
                                                <IMG src="imagens/banners/<php echo  $banner; ?>" border='0'></A>
                                                </TD>
                                            </TR>
                                            <?}?>
                                            
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
</FIELDSET>
