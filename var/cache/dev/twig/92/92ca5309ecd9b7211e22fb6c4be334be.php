<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* accueil/index.html.twig */
class __TwigTemplate_edc89f5f2c18a1e4cce1aed6c56ae9ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil - Événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <div class=\"jumbotron text-center\">
        <h1 class=\"display-4\">Bienvenue sur Notre Site d'Événements</h1>
        <p class=\"lead\">Découvrez et participez à nos événements passionnants.</p>
        <hr class=\"my-4\">
        <p>Rejoignez-nous pour des expériences inoubliables.</p>
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_list");
        yield "\" role=\"button\">Voir les Événements</a>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Événements à venir</h2>
                <p>Découvrez nos événements à venir et réservez votre place dès maintenant.</p>
                <p><a class=\"btn btn-secondary\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_list");
        yield "\" role=\"button\">Voir détails &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>À propos de nous</h2>
                <p>En savoir plus sur notre organisation et notre mission.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">En savoir plus &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Contactez-nous</h2>
                <p>Vous avez des questions ? N'hésitez pas à nous contacter.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Contact &raquo;</a></p>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  93 => 21,  82 => 13,  75 => 8,  68 => 7,  54 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/accueil/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Accueil - Événements{% endblock %}

{% block body %}
    <div class=\"jumbotron text-center\">
        <h1 class=\"display-4\">Bienvenue sur Notre Site d'Événements</h1>
        <p class=\"lead\">Découvrez et participez à nos événements passionnants.</p>
        <hr class=\"my-4\">
        <p>Rejoignez-nous pour des expériences inoubliables.</p>
        <a class=\"btn btn-primary btn-lg\" href=\"{{ path('app_event_list') }}\" role=\"button\">Voir les Événements</a>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Événements à venir</h2>
                <p>Découvrez nos événements à venir et réservez votre place dès maintenant.</p>
                <p><a class=\"btn btn-secondary\" href=\"{{ path('app_event_list') }}\" role=\"button\">Voir détails &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>À propos de nous</h2>
                <p>En savoir plus sur notre organisation et notre mission.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">En savoir plus &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Contactez-nous</h2>
                <p>Vous avez des questions ? N'hésitez pas à nous contacter.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Contact &raquo;</a></p>
            </div>
        </div>
    </div>
{% endblock %}
", "accueil/index.html.twig", "/home/alvann/PhpstormProjects/Projet/templates/accueil/index.html.twig");
    }
}
