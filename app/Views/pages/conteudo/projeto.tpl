{% extends 'layouts/layout.tpl' %}

{% block content %}
            <div class="col-lg-12 text-center">
                <h2>Projetos</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ app.request.basepath }}/assets/image/cabin.png" class="img-responsive" alt="">
                </a>
                Linguagens de programação caseiras
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ app.request.basepath }}/assets/image/cake.png" class="img-responsive" alt="">
                </a>
                Receitas prontas de códigos
            </div>

            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ app.request.basepath }}/assets/image/game.png" class="img-responsive" alt="">
                </a>
                Jogos para melhorar a logica
            </div>

{% endblock %}
