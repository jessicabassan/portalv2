{% extends 'layouts/layout.tpl' %}

{% block content %}
<div class="container">
          <div class="row">
              <div class="col-lg-12">
      <form class="form-signin" action="portal/back/usuario.php" method="GET">
        <h2 class="form-signin-heading">Por favor realize o Login</h2>
        <label for="inputEmail" class="sr-only">Endereco de Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Esqueceu a senha?
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
    </div>
</div>
    </div> 

{% endblock %}