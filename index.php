<?php
    include('./header.php'); 
    include('config/config.php');

    if(isset($_REQUEST['acao'])){
        $email = $_REQUEST['email'];
        $senha = $_REQUEST['senha'];

        $sql = $pdo->prepare("SELECT * FROM tbl_usuario WHERE email = ?");
        $sql->execute([$email]);

        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            if(password_verify($senha, $info['senha'])){
                $_SESSION['login'] = true;
                $_SESSION['id'] = $info['idUsuario'];
                $_SESSION['usuario'] = $info['nomeUsuario'];
                header("Location: admin.php");
                die();
            }else{
                
                //Erro
                //echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário ou senha incorretos!</p></div>';
            }
        }else{
            //Erro
            echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
        }
    }

    function r($v) {
        return $v;
    }

    $sql = $pdo->prepare("select * FROM tbl_banners");
    $sql->execute();

        if($sql->rowCount() > 0){
            $i = 0;                         
            $valores = array();
            $valores['registros'] = $sql->rowCount();

            while($info = $sql->fetch()){
                $item = $i < 1 ? "active" : "";
                
                $valores['item'][] = $item;
                $valores['link'][] = $info['link'];
                $valores['nome'][]  = $info['nome'];
                $valores['i'][]  = $i;
                $i++;
            }

            $r = r($valores); //call the function
        } 

?>


<!-- INICIO BANNER 

        <h2>What our customers say</h2>
    -->
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

<div class="arrumaBotao">
  <button class="btn btn-default btn-lg">Entre em Contato</button>
</div>
  <!-- Wrapper for slides -->
  <!-- INICIO DIV BANNER -->
  <div class="carousel-inner" role="listbox">

    <?php
                       $i = 0; 
                           while($i < $r['registros']){
                       ?>
    <div class="item <?php echo $r['item'][$i];?>">
      <img src="img/banners/<?php echo $r['nome'][$i];?>" alt="">
    </div>
    <?php
                               $i++; 
                           }
                   ?>

  </div>
  <!-- FIM DIV BANNER -->


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


  <!-- Indicators -->

  <!-- INICIO BOLINHAS -->

  <ol class="carousel-indicators">
    <?php
                   $j = 0;
                       while($j < $r['registros']){
                   ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $r['i'][$j];?>" class="<?php echo $r['item'][$j];?>"></li>
    <?php
                           $j++; 
                       }
                   ?>
  </ol>
  <!-- FIM BOLINHAS -->

</div>

<!-- FIM BANNER -->

<section class="container-fluid">

  <div class=" row">
    <ul class="">
      <li>
        <!--<div class="content-card col-xs-12 col-md-4">-->
        <div class="bg-grey col-xs-12 col-md-4">
          <div class="content-card-title">
            <h4>Serviços</h4>
          </div>
          <div class="content-card-main">
            <img src="img/home/servicos.jpg">
            <p>Lorem Ipsum é simplesmente uma simulação
              de texto da indústria tipográfica e de impressos,
              e vem sendo utilizado desde o século XVI, quando
              um impressor desconhecido pegou uma bandeja de tipos
              e os embaralhou para fazer um livro de modelos de tipos.
              Lorem Ipsum sobreviveu não só a cinco séculos, como também
              ao salto para a editoração eletrônica, permanecendo
              essencialmente inalterado.Todos os geradores de Lorem Ipsum na internet tendem a repetir pedaços
              predefinidos conforme necessário.
            </p>
          </div>
          <div class="content-card-footer">

          </div>
        </div>
      </li>

      <li>
        <div class="bg-grey col-xs-12 col-md-4">
          <div class="content-card-title">
            <h4>Produtos</h4>
          </div>
          <div class="content-card-main">
            <img src="img/home/produtos.jpg">
            <p>Ao contrário do que se acredita,
              Lorem Ipsum não é simplesmente um
              texto randômico. Com mais de 2000 anos,
              suas raízes podem ser encontradas em uma
              obra de literatura latina clássica datada
              de 45 AC. Richard McClintock, um professor
              de latim do Hampden-Sydney College na Virginia,
              pesquisou uma das mais obscuras palavras em latim,
              consectetur, oriunda de uma passagem de Lorem Ipsum,
              e, procurando por entre citações da palavra na literatura
              clássica, descobriu a sua indubitável origem.</p>
          </div>
          <div class="content-card-footer">

          </div>
        </div>
      </li>

      <li>
        <div class="bg-grey col-xs-12 col-md-4">
          <div class="content-card-title">
            <h4>Honorários</h4>
          </div>
          <div class="content-card-main">
            <img src="img/home/tabela.jpg">
            <p>Existem muitas variações disponíveis de
              passagens de Lorem Ipsum, mas a maioria
              sofreu algum tipo de alteração, seja por
              inserção de passagens com humor, ou palavras
              aleatórias que não parecem nem um pouco
              convincentes. Se você pretende usar uma
              passagem de Lorem Ipsum, precisa ter certeza
              de que não há algo embaraçoso escrito
              escondido no meio do texto. Todos os
              geradores de Lorem Ipsum na internet
              tendem a repetir pedaços predefinidos
              conforme necessário.
            </p>
          </div>
          <div class="content-card-footer">

          </div>
        </div>
      </li>
    </ul>
  </div>
  <section>



    <!-- Container (Quem Somos Section) -->
    <div id="quemSomos" class="container-fluid">
      <div class="row">
        <div class="col-sm-8">
          <h2>Quem Somos</h2><br>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea
            commodo consequat.</h4><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo
            consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
            est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>

        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-signal logo"></span>
        </div>
      </div>
    </div>
    <!-- Container (FIM CONTAINER QUEM SOMOS Section) -->

    <!-- Container (Services Section) -->
    <div id="servicos" class="container-fluid text-center">
      <h2>SERVIÇOS</h2>
      <h4>Nossos Serviços</h4>
      <br>
      <div class="row slideanim">
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat.</h4><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

      </div>
      <br><br>
    </div>

    <!-- Container (Contact Section) -->
    <div id="contato" class="container-fluid bg-grey">
      <h2 class="text-center">CONTATO</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Entre em contato .</p>
          <p>
            <span class="glyphicon glyphicon-map-marker"></span>
            São Paulo, SP
          </p>

          <p>
            <span class="glyphicon glyphicon-map-marker"></span>
            <a href="https://goo.gl/maps/95SQvdMR7k17gMQF7" 
            target="_blank">
              R. Aurélia, 882 - Vila Romana, São Paulo - SP, 05046-000
            </a>
          </p>

          <p><span class="glyphicon glyphicon-phone"></span> 11 99202-6569</p>
          <p><span class="glyphicon glyphicon-envelope"></span>atendimento@hashimotolegal.com.br</p>
        </div>
        <div class="col-sm-7 slideanim">
          <div class="row">
            <form onSubmit="limpaDiv(); return false" action="/admin/enviaEmail/enviar.php" method="post"
              name="frmContato" target="_self">

              <div class="form-group col-sm-12">
                <label>Nome: <sup class="asteristico">*</sup></label>
                <input type="text" id="nome" name="nome" required placeholder="Nome" />
              </div>

              <div class="form-group col-sm-12">
                <label>Telefone: <sup class="asteristico">*</sup></label>
                <input type="text" id="telefone" required name="telefone" placeholder="Telefone" />
              </div>

              <div class="form-group col-sm-12">
                <label>Email:<sup class="asteristico">*</sup></label>
                <input type="email" id="email" required required name="email" placeholder="email" />
              </div>

              <div class="form-group ">
                <label>Assunto:<sup class="asteristico">*</sup></label>
                <input type="text" id="assunto" name="assunto" required placeholder="assunto" />
              </div>

              <div class="form-group col-sm-12">
                <label>Mensagem:<sup class="asteristico">*</sup></label>
                <textarea id="mensagem" name="mensagem" required></textarea>
              </div>

              <div class="form-group col-sm-12">
                <button type="submit" class="btn" value="Submit" name="acao"
                  onclick="functionHashi.service_contato_action()">
                  <i class="fas fa-cloud-upload-alt"></i>
                  &nbsp; Enviar
                </button>
              </div>
              <div id="err" style="display:none;"></div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- Image of location/map -->
    <iframe class="w3-image w3-greyscale-min" style="width:100%"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0784321921515!2d-46.70029598502274!3d-23.529681284698615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8770aa85407%3A0xf626f220a8cd609f!2sR.%20Aur%C3%A9lia%2C%20882%20-%20Vila%20Romana%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005046-000!5e0!3m2!1spt-BR!2sbr!4v1614470399838!5m2!1spt-BR!2sbr"
      height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <?php include('./footer.php'); ?>