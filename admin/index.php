<?php    
    include('../config/main.php');
    include('../config/config.php');//$_SERVER['SERVER_NAME'] .
    //$urlBanner = str_replace("index.php", "",  $_SERVER["REQUEST_URI"]);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashimoto Legal</title>

    <?php include('./../header.php'); ?>
</head>
<body>

<div class="main">
        <div class="header center">
        <h1><a href="../"><img src="../img/logo.jpeg" /></a></h1>
           <ul class="nav">

                <li> <a href="javascript:;">Home</a> </li>
                <li> <a href="javascript:;">Sobre</a> </li>
                <li> <a href="javascript:;">Soluções</a> </li>
                <li> <a href="javascript:;">Preços</a> </li>
                <li> <a href="javascript:;">Contato</a> </li>
    
            </ul>

            <div class="account">
                <div class="user">                
                    <?php echo $_SESSION['usuario'] ?>                    
                    <div data-id="maneger-acoount">
                        <a href="?sair">
                            <i class="fas fa-sign-in-alt">
                        </i></a>
                    </div> 
                </div>
            </div>
        </div>
        
        <section class="container-item">
            <div class="center load-elements">
                <div class="elements">
                    <p>Adicionar imagem</p>
                    <button data-id="banner" class="btn btn-internal">Upload imagem</button>
                    <img src="./../img/undraw_Collection_re_4h7d.svg" class="bg" alt="">
                </div>

                <div class="elements">
                    <div class="right"></div>
                </div>                
            </div> 
        </section>
       
        <section class="container-item"> 
            <div class="center">
                <p>Adicionar item(serviço/produto)</p>

                <button data-id="item" class="btn btn-internal">Adicionar</button>
            </div> 
        </section>

        <footer class="footer">
            <div class="center">
                Footer 
            </div>            
        </footer>
    </div>

    <?php include('./../footer.php'); ?>

<?php
   
?>

</body>
</html>