<?php
    include('config.php');
    //se nao tem sessao sera direcionado para a home
    if($_SESSION['login'] != true){
        echo "<script>
        alert('Usuário não encontrado.')
        window.location.href = '../';
        </script>";

        //header('Location: ../index.php');
        die();
    }
   
    //echo '<h2>Bom dia '.$_SESSION['usuario'].'.</h2>';   
    if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
    } 

    
?>