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

/* base.html.twig */
class __TwigTemplate_7a85f19798925c7401f91708966f2f27 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        yield "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    ";
        // line 9
        yield "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\"></script>
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">SUPER CONFERENCE</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">Accueil <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_list");
        yield "\">Événements</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Inscription</a>
            </li>

        </ul>
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            yield "                    <a class=\"nav-link\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">Profile</a>
                ";
        } else {
            // line 37
            yield "                    <a class=\"nav-link\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a>
                ";
        }
        // line 39
        yield "            </li>
            <li class=\"nav-item\">
                ";
        // line 41
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 42
            yield "                    <a class=\"nav-link\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Inscription</a>
                ";
        }
        // line 44
        yield "            </li>
        </ul>
    </div>
</nav>

<div class=\"container\">
    ";
        // line 51
        yield "    ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 52
        yield "</div>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "SUPER PROJET";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  152 => 51,  138 => 7,  127 => 52,  124 => 51,  116 => 44,  110 => 42,  108 => 41,  104 => 39,  98 => 37,  92 => 35,  90 => 34,  78 => 25,  72 => 22,  61 => 14,  54 => 9,  50 => 7,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/base.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}SUPER PROJET{% endblock %}</title>
    {# Intégration de Bootstrap (exemple avec CDN) #}
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\"></script>
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"{{ path('app_accueil') }}\">SUPER CONFERENCE</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('app_accueil') }}\">Accueil <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_event_list') }}\">Événements</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Inscription</a>
            </li>

        </ul>
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <a class=\"nav-link\" href=\"{{ path('app_profile') }}\">Profile</a>
                {% else %}
                    <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
                {% endif %}
            </li>
            <li class=\"nav-item\">
                {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                    <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Inscription</a>
                {% endif %}
            </li>
        </ul>
    </div>
</nav>

<div class=\"container\">
    {# Contenu principal de la page #}
    {% block body %}{% endblock %}
</div>
</body>
</html>
", "base.html.twig", "/home/alvann/PhpstormProjects/Projet/templates/base.html.twig");
    }
}
