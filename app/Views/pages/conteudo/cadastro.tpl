{% extends 'layouts/layout.tpl' %}

{% block content %}
<section id="cadastro">

        <div class="row">
          <h2>Cadastre-se</h2>
          <hr />
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="cadastro"  novalidate action="/cadastro" method="POST">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nome</label>
                            <input type="text" class="form-control" placeholder="Nome" id="Nome" name="nome" required data-validation-required-Mensagem="Please enter your Nome.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Endereço de e-mail</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required data-validation-required-Mensagem="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Senha</label>
                            <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" required data-validation-required-Mensagem="Please enter your Nome.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</section>
{% endblock %}
