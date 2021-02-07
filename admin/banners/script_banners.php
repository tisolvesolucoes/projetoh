<?php

function randomName($length) {
    $keys = array_merge(range('a', 'z'), range(0, 12));
    for($i=0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }
    return $key;
}

$acao = $_REQUEST['acao'];
$db   = mysqli_connect("localhost", "root", "", "hashimotolegal"); 

switch ($acao) {
    case "upload":
 
        $fileImg = $_FILES['caminho']['name'];
        $ext = pathinfo($fileImg, PATHINFO_EXTENSION);
        $newName = randomName(12);
        $newName = $newName.'.'.$ext;

        $a = 'img/banners/'.$newName;
        $b = $_REQUEST['link'];
        
        //**************************************** */
        //MUDAR - SCRIPT SÓ PARA RODAR TESTE                
        $sql = "INSERT tbl_banners (nome, link) VALUES ('".$a."','".$b."')"; 
        //
        //**************************************** */
        if(move_uploaded_file($_FILES['caminho']['tmp_name'], '../../img/banners/'.$newName)){
            mysqli_query($db, $sql); 
        }else{
            echo 'error'; 
        }              

        break;
    case "deletarImagem":
        $b = $_REQUEST['id'];    
        $image = $_REQUEST['pathImage'];        
        $sql = "DELETE FROM tbl_banners WHERE id_banner = $b";
        
        if (unlink('../../'.$image)){
            mysqli_query($db, $sql);
        }
        break;
    case "cadastrar":
        
        $titulo = $_REQUEST['titulo'];
        $descricao = $_REQUEST['descricao'];

        $sql = "INSERT tbl_solucoes (
            titulo, 
            descricao) VALUES ('".$titulo."','".$descricao."')"; 

        mysqli_query($db, $sql); 
        echo 'ok'; 
        break;
    case "deletar":
        break;    
    case "editar":
        break;
}

?>


