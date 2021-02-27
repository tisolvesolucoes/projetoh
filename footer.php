
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
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
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
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


<!-- Libs -->
<!-- Hashimoto javascript 
<script src="<?php //echo $path; ?>js/hashimoto.js"></script>
-->
<script>
    //functionHashi.utils();    
</script>

    <!-- FOOTER -- >
    <footer class="l-footer layout_modern" itemscope="itemscope" itemtype="https://schema.org/WPFooter">

        <!-- subfooter: top -- >
        <div class="l-subfooter at_top">
            <div class="l-subfooter-h i-cf">

                <div class="g-cols offset_medium">
                    <div class="vc_col-sm-4">
                        <div id="text-2" class="widget widget_text">
                            <h4>Sobre a Hashimoto Legal</h4>
                            <div class="textwidget">
                                <p>Hashimoto Legal
                                    é um escritório com plataforma online para agilizar abertura e
                                    regularização de empresas, economizar tempo e dinheiro do empreendedor.</p>
                            </div>
                        </div>
                        <div id="us_socials-2" class="widget widget_us_socials">
                            <div class="w-socials align_left style_colored" style="font-size: 25px;">
                                <div class="w-socials-list">
                                    <div class="w-socials-item facebook">
                                        <a class="w-socials-item-link" target="_blank" href="">
                                            <span class="w-socials-item-link-hover"></span>
                                        </a>
                                        <div class="w-socials-item-popup">
                                            <span>Facebook</span>
                                        </div>

                                    </div>
                                    <div class="w-socials-item linkedin">
                                        <a class="w-socials-item-link" target="_blank"
                                            href="https://www.linkedin.com/company-beta/3319169/">
                                            <span class="w-socials-item-link-hover">
                                            </span>
                                        </a>
                                        <div class="w-socials-item-popup"><span>LinkedIn</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="text-4" class="widget widget_text">
                            <div class="textwidget">
                                <a href="">
                                    <img src="sitenovo_arquivos/membro-estrela-Hashimoto Legal.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="vc_col-sm-4">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h4>Mapa do Site</h4>
                            <div class="menu-footer-container">
                                <ul id="menu-footer" class="menu">
                                    <li id="menu-item-580"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-580">
                                        <a href="https://Hashimoto Legal.com.br/coworking-backoffice/">Coworking &amp;
                                            Backoffice
                                        </a>
                                    </li>
                                    <li id="menu-item-578"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-578">
                                        <a href="https://Hashimoto Legal.com.br/contato/">Contato</a>
                                    </li>
                                    <li id="menu-item-579"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-579">
                                        <a href="https://Hashimoto Legal.com.br/quero-abrir-empresa/">
                                            Quero Abrir uma Empresa</a>
                                    </li>
                                    <li id="menu-item-577"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-577">
                                        <a href="https://Hashimoto Legal.com.br/politica-de-privacidade/">
                                            Política de Privacidade
                                        </a>
                                    </li>
                                    <li id="menu-item-804"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-804">
                                        <a href="https://Hashimoto Legal.com.br/blog3/">
                                            Blog
                                        </a>
                                    </li>
                                    <li id="menu-item-597"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-597">
                                        <a href="https://Hashimoto Legal.com.br/termos-de-uso/">Termos de Uso</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="text-3" class="widget widget_text">
                            <div class="textwidget">
                                <div id="sslblindado">
                                    <param id="sslblindado_preload" value="true">
                                </div>
                                <!-- 
                                    <script type="text/javascript" src="sitenovo_arquivos/sslblindado.js"></script>
                                -- >
                            </div>
                        </div>
                    </div>
                    <div class="vc_col-sm-4">
                        <div id="us_contacts-2" class="widget widget_us_contacts">
                            <h4>Venha nos Conhecer:</h4>
                            <div class="w-contacts">
                                <div class="w-contacts-list">
                                    <div class="w-contacts-item for_address">
                                        <span class="w-contacts-item-value">
                                            Avenida
                                            de oiifsddjfpadsfpodsakfosda
                                        </span>
                                    </div>
                                    <div class="w-contacts-item for_phone">
                                        <span class="w-contacts-item-value">
                                            11 3392-4121
                                        </span>
                                    </div>
                                    <div class="w-contacts-item for_fax">
                                        <span class="w-contacts-item-value">
                                            CNPJ:16.962.529/0001-26
                                            <p>
                                                PARTNERS CAPITAL 4G SERVIÇOS PARALEGAIS LTDA -
                                                EPP
                                            </p>
                                        </span>
                                    </div>

                                    <div class="w-contacts-item for_email">
                                        <span class="w-contacts-item-value">
                                            <a href="mailto:atendimento@Hashimoto Legal.com.br">
                                                atendimento@Hashimotolegal.com.br
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- subfooter: bottom -- >
        <div class="l-subfooter at_bottom">
            <div class="l-subfooter-h i-cf">


                <div class="w-menu ">
                    <div class="w-menu-list">
                        <a class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
                            href="https://Hashimoto Legal.com.br/institucional/">
                            <span>Hashimoto Legal

                            </span>
                        </a>
                        <a class="w-menu-item btn menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"
                            href="#">
                            <span>
                                Serviços
                            </span>
                        </a>

                        <a class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
                            href="https://Hashimoto Legal.com.br/coworking-backoffice/">
                            <span>Coworking &amp;
                                Backoffice
                            </span>
                        </a>

                    <a class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
                        href="https://Hashimoto Legal.com.br/mei-microempreendedor-individual/">
                        <span>Seja um MEI
                        </span>
                    </a>

                    <a class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
                        href="https://Hashimoto Legal.com.br/blog3/">
                        <span>BLOG</span>
                    </a>

                    <a class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
                        href="https://Hashimoto Legal.com.br/contato/">
                        <span>Contato</span>
                    </a>
                </div>
            </div>
            <div class="w-copyright">
                © Hashimoto Legal 2012-2016 – Todos os direitos reservados.
            </div>


        </div>
    </div>

</footer>
<!-- /FOOTER -- >

</div><!-- main -- >

</body>

</html>