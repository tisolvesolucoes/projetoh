<?php
session_start();
if (empty($_SESSION['id'])) {
 echo "Acesso negado!";
 exit;
}else{
include('../../config/config.php');
$acao   		= $_REQUEST['tipo'];
$usuario_id   	= $_SESSION['id'];
$usuario_nome 	= $_SESSION['nomeUsuario'];

}

/* PEGA OS DADOS DO USUARIO

$query = "SELECT * FROM tbl_usuario where idUsuario = '$usuario_id'";
$resultado = mysql_query($query);
	$campo = mysql_fetch_array ($resultado);
	$usuario_nome = $campo ['nome'];
*/
if($_SESSION['id'] > 0){
	echo '<br>acao = '.$acao;
	echo '<br>nome = '.$nome   	= $_REQUEST['nome'];
	echo '<br>caminho = '.$caminho   = $_REQUEST['caminho'];
	echo '<br>link = '.$link   	= $_REQUEST['link'];
	echo '<br>link = '.var_dump ($_REQUEST);

switch ($acao) {
case cadastrar:

$banner_nome_arquivo   = $_FILES['banner_nome_arquivo'];

function trocar_acentos ($banner_nome_arquivo)
{
		$banner_nome_arquivo = str_replace(' ','_',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('á','a',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('ã','a',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('é','e',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('ê','e',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('í','i',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('î','i',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('ó','o',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('ô','o',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('ú','u',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('û','u',$banner_nome_arquivo);
		$banner_nome_arquivo = strtolower($banner_nome_arquivo);

		return $banner_nome_arquivo;
}

$banner_nome_arquivo = trocar_acentos ($HTTP_POST_FILES['banner_nome_arquivo']['name']);
$banner_extensao = substr($banner_nome_arquivo,strpos($banner_nome_arquivo,'.')+1,strlen($banner_nome_arquivo)-strpos($banner_nome_arquivo,'.'));
$banner_tamanho = $HTTP_POST_FILES['banner_nome_arquivo']['size'];
$banner_descricao = $_POST['banner_descricao'];
$banner_data = date('d/m/Y');


		$uploaddir = "../imagens/banners/";
		$data = mktime();
		
        if ($banner_nome_arquivo != ""){
		if (file_exists($uploaddir.$banner_nome_arquivo))
		{
			$banner_nome_arquivo = mktime()."_".$banner_nome_arquivo;
		}
		}

           move_uploaded_file($HTTP_POST_FILES['banner_nome_arquivo']['tmp_name'], $uploaddir . $banner_nome_arquivo);


$cliente               = $_POST['cliente'];
$url                   = $_POST['url'];
$largura               = $_POST['largura'];
$altura                = $_POST['altura'];
$texto_banner          = $_POST['texto_banner'];
$tipo_abertura         = $_POST['tipo_abertura'];
$visualizacoes         = $_POST['visualizacoes'];
$status                = $_POST['status'];


$query = "insert into tbl_banners (cliente, url, largura, altura, texto_banner, tipo_abertura, visualizacoes, banner, status) values ('$cliente', '$url', '$largura', '$altura', '$texto_banner', '$tipo_abertura', '$visualizacoes', '$banner_nome_arquivo', '$status')";
$rs = mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("cadastro de banner efetuado com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="banners_listar.php";</SCRIPT>

<?php

break;

case alterar:

$banner_nome_arquivo   = $_FILES['banner_nome_arquivo'];
$id_banner             = $_POST['id_banner'];

function trocar_acentos ($banner_nome_arquivo)
{
		$banner_nome_arquivo = str_replace(' ','_',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('á','a',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('ã','a',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('ê','e',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('é','e',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('í','i',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('î','i',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('ô','o',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('ó','o',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('û','u',$banner_nome_arquivo);
		$banner_nome_arquivo = str_replace('ú','u',$banner_nome_arquivo);
		$banner_nome_arquivo = strtolower($banner_nome_arquivo);

		return $banner_nome_arquivo;
}


$banner_nome_arquivo = trocar_acentos ($HTTP_POST_FILES['banner_nome_arquivo']['name']);
$banner_nome_arquivo_extensao = substr($banner_nome_arquivo,strpos($banner_nome_arquivo,'.')+1,strlen($banner_nome_arquivo)-strpos($banner_nome_arquivo,'.'));
$banner_nome_arquivo_tamanho = $HTTP_POST_FILES['banner_nome_arquivo']['size'];
$banner_nome_arquivo_descricao = $_POST['banner_nome_arquivo_descricao'];
$banner_nome_arquivo_data = date('d/m/Y');

		$uploaddir = "../imagens/banners/";
		$data = mktime();

       if ($banner_nome_arquivo != ""){
		if (file_exists($uploaddir.$banner_nome_arquivo))
		{
            $banner_nome_arquivo = mktime()."_".$banner_nome_arquivo;

           move_uploaded_file($HTTP_POST_FILES['banner_nome_arquivo']['tmp_name'], $uploaddir . $banner_nome_arquivo);
           
           $query = "update tbl_banners SET banner  = '$banner_nome_arquivo' where id_banner = '$id_banner'";
           $rs = mysql_query($query);
		}else{

            $query_old = "select * from tbl_banners where id_banner ='$id_banner'";
            $rs_old = mysql_query($query_old);

            $row_old = mysql_fetch_array($rs_old);
            $banner_nome_arquivo_old = $row_old['banner'];
            
            if ($banner_nome_arquivo_old != "") {unlink ($uploaddir.$banner_nome_arquivo_old);}
            move_uploaded_file($HTTP_POST_FILES['banner_nome_arquivo']['tmp_name'], $uploaddir . $banner_nome_arquivo);
            
            $query = "update tbl_banners SET banner  = '$banner_nome_arquivo' where id_banner = '$id_banner'";
            $rs = mysql_query($query);

        }

		}

$cliente               = $_POST['cliente'];
$url                   = $_POST['url'];
$largura               = $_POST['largura'];
$altura                = $_POST['altura'];
$texto_banner          = $_POST['texto_banner'];
$tipo_abertura         = $_POST['tipo_abertura'];
$visualizacoes         = $_POST['visualizacoes'];
$status                = $_POST['status'];


$query = "update tbl_banners SET cliente       = '$cliente',
                                 url           = '$url',
                                 largura       = '$largura',
                                 altura        = '$altura',
                                 texto_banner  = '$texto_banner',
                                 tipo_abertura = '$tipo_abertura',
                                 visualizacoes = '$visualizacoes',
                                 status        = '$status'

                             where id_banner = '$id_banner'";
$rs = mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("altera��o efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="banners_listar.php";</SCRIPT>

<?php

break;

case excluir:
$query="select * from tbl_banners where id_banner ='$id_banner'";
$rs = mysql_query($query);
$row = mysql_fetch_array($rs);
$banner_nome_arquivo = $row['banner'];


$query = "delete from tbl_banners where id_banner = '$id_banner'";
$rs = mysql_query($query);

if ($rs){
	$uploaddir = "../imagens/banners/";

	if ($banner_nome_arquivo != "") {unlink ($uploaddir.$banner_nome_arquivo);}

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("exclusao de banner efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="banners_listar.php";</SCRIPT>

<?php
	}

	break;
	}
}
?>
