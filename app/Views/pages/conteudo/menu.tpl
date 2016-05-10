{% extends 'layouts/layout.tpl' %}

{% block menu %}
	{% for valores in menu %}
		<li class="page-scroll">
			<a href="{{ valores.link }}">{{ valores.titulo }}</a>
		</li>
	{% endfor %}
{% endblock %}