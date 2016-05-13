{% extends 'layouts/layout.tpl' %}

{% block content %}

      <div class="col-lg-4">
      <form class="form-signin" action="/login" method="POST">
        <h2 class="form-signin-heading">Por favor realize o Login ou <a href="/cadastro" style="color: #AACCEE"> CADASTRE-SE </a></h2>
          <label for="inputEmail" class="sr-only">Endereco de Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required>
              <div class="checkbox">
              <label>
                  <input type="checkbox" value="remember-me"> Esqueceu a senha? </input>
              </label>
            </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
      <?php echo $_SERVER['REQUEST_URI']; ?>
    </div>

{% endblock %}
