<?php
    include('../config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashimoto</title>

    <?php include('./../header.php'); ?>
</head>
<body>

<div class="main">
        <div class="header center">
            <h1><a href="./../">Hashimoto</a></h1>
            <ul class="nav">
                <li> <a href="javascript:;">Home</a> </li>
                <li> <a href="javascript:;">Sobre</a> </li>
                <li> <a href="javascript:;">Soluções</a> </li>
                <li> <a href="javascript:;">Preços</a> </li>
                <li> <a href="javascript:;">Contato</a> </li>
                <li> 
                    <div class="account">
                        <div class="user">Quem está logado  
                            <div data-id="maneger-acoount">
                                <i class="fas fa-sign-in-alt"></i>
                            </div> 
                        </div>
                    </div>
                   
                </li>
            </ul>
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