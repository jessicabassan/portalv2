{% extends 'layouts/layout.tpl' %}

{% block content %}
    <h1>{{data}}</h1>
    <hr class="star-light">
    <img class="img-responsive" src="{{ app.request.basepath }}/assets/image/profile.png" alt="">
    <p>Não importa qual seja a sua idade atual: moço, meia idade ou velho. Sua idade é um estado de sua mente e seus interesses devem sempre estar voltados para o futuro, para a frente, para o amanhã.</p>
{% endblock %}
