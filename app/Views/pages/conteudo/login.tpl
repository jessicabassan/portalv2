  {% extends 'layouts/layout.tpl' %}

{% block content %}

      <div class="col-lg-6 col-lg-offset-3">
      <form class="form-signin" action="/login" method="POST">
          <label for="inputEmail" class="sr-only">Endereco de Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required>
              <div class="checkbox">
            </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <div style="margin-left: 34px;">
            <a href="/cadastro" style="color: #AACCEE; color: #AACCEE; font-size: 23px; font-weight: bold; margin: 1px 30px 0 0;">Cadastre-se</a>
            <a href="/esqueceuasenha"  style="color: #AACCEE; color: #AACCEE; font-size: 23px; font-weight: bold; margin: 1px 30px 0 0;"> Esqueceu a senha? </a>
        </div>
      </form>
      <?php echo $_SERVER['REQUEST_URI']; ?>
    </div>

{% endblock %}
