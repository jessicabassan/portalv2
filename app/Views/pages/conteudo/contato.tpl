{% extends 'layouts/layout.tpl' %}

{% block content %}
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Entre em contato</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form Nome="sentMensagem" id="contactForm" novalidate action="/contato" method="POST">
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
                            <label>Assunto</label>
                            <input type="text" class="form-control" placeholder="Assunto" id="assunto" name="assunto" required data-validation-required-Mensagem="Please enter your Nome.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mensagem</label>
                            <textarea rows="5" class="form-control" placeholder="Mensagem" id="mensagem" name="mensagem" required data-validation-required-Mensagem="Please enter a Mensagem."></textarea>
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
    </div>
</section>
{% endblock %}