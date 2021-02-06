<?php

if (!empty($_FILES['caminho']))
    {
		$a = 'img/banners/'.$_FILES['caminho']['name'];
		$b = $_REQUEST['link'];
		//**************************************** */
		//MUDAR - SCRIPT SÓ PARA RODAR TESTE
		$db = mysqli_connect("localhost", "root", "", "hashimotolegal"); 
        $sql = "INSERT tbl_banners (nome, link) VALUES ('".$a."','".$b."')"; 
        mysqli_query($db, $sql); 
		//**************************************** */
		echo move_uploaded_file($_FILES['caminho']['tmp_name'], '../../img/banners/'.$_FILES['caminho']['name']);       
    }
    else
    {
        echo 'error';
    }
?>


