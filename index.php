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

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <section>
        <div class="subTop">

            <div class="subheaderCellLeft col-md-6 col-sm-12">

              <a href="https://api.whatsapp.com/send?phone=5511992026569&text=BemVindoHashimotoLegal!!" target="_blank">
                <img src="img/watsapp.png" style="width:40px;">
              </a>
              <span class="text-value-fone">
                <a href="tel:+55 11 99202-6569">11 99202 6569</a>
              </span>
            </div>

            <div class="textEmail col-md-6 col-sm-12">
                <i class="fa fa-envelope"></i>
                <a class="text-value-email" href="mailto:atendimento@hashimotolegal.com.br">
                  atendimento@hashimotolegal.com.br
                </a>
            </div>
        </div>
        <!--
					<div class="l-subheader-cell at_right">
						
						<div class="w-socials style_desaturated hover_default ush_socials_1">
							<div class="w-socials-list">
								<div class="w-socials-item facebook">
									<a class="w-socials-item-link" target="_blank"
										href="https://www.facebook.com/Hashimoto Legaloficial/">
										<span class="w-socials-item-link-hover"></span>
									</a>
									<div class="w-socials-item-popup">
										<span>Facebook</span>
									</div>
								</div>
								<div class="w-socials-item linkedin">
									<a class="w-socials-item-link" target="_blank"
										href="">
										<span class="w-socials-item-link-hover"></span>
									</a>
									<div class="w-socials-item-popup">
										<span>LinkedIn</span>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					-->
    </div>
    </div>
    </section>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <h1>
        <a class="navbar-brand" href="#myPage">
          <img src="./img/logo.jpeg" />
        </a>
        <span class="spanTexteira">Hashimoto Legal</span>
      </h1>


    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">Principal</a></li>
        <li><a href="#quemSomos">Quem Somos</a></li>
        <li><a href="#servicos">Serviços</a></li>
        <li><a href="#contato">Contato</a></li>
        <li><a href="#pricing">Área restríta</a></li>
      </ul>
    </div>
    </div>
  </nav>
  <!--
<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>We specialize in blablabla</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>
-->

  <!-- INICIO BANNER 

        <h2>What our customers say</h2>
    -->
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

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




  <!-- Container (About Section) -->
  <div id="quemSomos" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2>Quem Somos</h2><br>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat.</h4><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br><button class="btn btn-default btn-lg">Get in Touch</button>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-signal logo"></span>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-globe logo slideanim"></span>
      </div>
      <div class="col-sm-8">
        <h2>Nossos Valores</h2><br>
        <h4><strong>MISSÃO:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
        <p><strong>VISÃO:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
        <p><strong>VALORES:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
      </div>
    </div>
  </div>

  <!-- Container (Services Section) -->
  <div id="servicos" class="container-fluid text-center">
    <h2>SERVIÇOS</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-off logo-small"></span>
        <h4>POWER</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-heart logo-small"></span>
        <h4>LOVE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-lock logo-small"></span>
        <h4>JOB DONE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
    </div>
    <br><br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-leaf logo-small"></span>
        <h4>GREEN</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-certificate logo-small"></span>
        <h4>CERTIFIED</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-wrench logo-small"></span>
        <h4 style="color:#303030;">HARD WORK</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
    </div>
  </div>

  <!-- Container (Portfolio Section) --*>
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  <!*--
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!*-- Indicators --*>
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!*-- Wrapper for slides --*>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!*-- Left and right controls --*>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>--*>
</div>-->

  <!-- Container (Pricing Section) -->
  <div id="pricing" class="container-fluid">
    <div class="text-center">
      <h2>Pricing</h2>
      <h4>Choose a payment plan that works for you</h4>
    </div>
    <div class="row slideanim">
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Basic</h1>
          </div>
          <div class="panel-body">
            <p><strong>20</strong> Lorem</p>
            <p><strong>15</strong> Ipsum</p>
            <p><strong>5</strong> Dolor</p>
            <p><strong>2</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
          </div>
          <div class="panel-footer">
            <h3>$19</h3>
            <h4>per month</h4>
            <button class="btn btn-lg">Sign Up</button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Pro</h1>
          </div>
          <div class="panel-body">
            <p><strong>50</strong> Lorem</p>
            <p><strong>25</strong> Ipsum</p>
            <p><strong>10</strong> Dolor</p>
            <p><strong>5</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
          </div>
          <div class="panel-footer">
            <h3>$29</h3>
            <h4>per month</h4>
            <button class="btn btn-lg">Sign Up</button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Premium</h1>
          </div>
          <div class="panel-body">
            <p><strong>100</strong> Lorem</p>
            <p><strong>50</strong> Ipsum</p>
            <p><strong>25</strong> Dolor</p>
            <p><strong>10</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
          </div>
          <div class="panel-footer">
            <h3>$49</h3>
            <h4>per month</h4>
            <button class="btn btn-lg">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Container (Contact Section) -->
  <div id="contato" class="container-fluid bg-grey">
    <h2 class="text-center">CONTATO</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
        <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
        <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Image of location/map -->
  <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

  <footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
  </footer>

  <script>
    $(document).ready(function () {
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      $(window).scroll(function () {
        $(".slideanim").each(function () {
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
        });
      });
    })
  </script>

</body>

</html>