var functionHashi = {
    lightbox: function(){
        var lightbox = ``;

        if($('body .lightbox').length == 0){ lightbox = `<div class="lightbox"></div>` }

        return lightbox
    },
    login: function(){
        var tmpl = `
            <div class="container-login component">
                <div class="content">
                    <div class="close">
                        <button onclick="functionHashi.close()">x</button>
                    </div>
                    
                    <div class="form-group">
                        <label>Usuário: </label>
                        <input type="email" placeholder="digite seu e-mail" maxlenght="50" />
                    </div>

                    <div class="form-group">
                        <label>Senha:</label>
                        <input type="password" maxlenght="50" />
                    </div>

                    <div class="form-group">
                        <button class="btn" onclick="functionHashi.login_action()">Acessar</button>
                    </div>
                </div>
            </div>
        `;

        return tmpl
    },
    login_action: function(){
        window.location.href = '/admin'
    },
    close: function(){
        $('.lightbox').remove()
        $('.component').remove()
    },
    utils: function(){
        $('.owl-carousel').owlCarousel({ items: 1 });
        
        $('[data-id="maneger-acoount"]').click(function(){
            $('.main').append(
                functionHashi.login(),
                functionHashi.lightbox()
            )
        });
    }
}