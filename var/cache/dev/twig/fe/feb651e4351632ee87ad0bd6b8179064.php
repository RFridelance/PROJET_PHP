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

/* components/_navbar.html.twig */
class __TwigTemplate_b293b327f73c34bd14b0fc87c7fcfc50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            yield "
          <li class=\"nav-item dropdown\"> ";
            // line 11
            yield "                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("questionnaires"), "html", null, true);
            yield "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"";
            // line 15
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionnaire_passage_home");
            yield "\"><i class=\"bi bi-patch-question\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("my questionnaires"), "html", null, true);
            yield "</a></li>
                  ";
            // line 16
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM_MANAGER")) {
                yield " 
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
                // line 18
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionnaire_manage_home");
                yield "\"><i class=\"bi bi-journal-code\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management questionnaires"), "html", null, true);
                yield "</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
                // line 20
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionnaire_manage_correction_home");
                yield "\"><i class=\"bi bi-journal-check\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management corrections"), "html", null, true);
                yield "</a></li>
                  ";
            }
            // line 22
            yield "                  ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 23
                yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
                // line 24
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionnaire_question_type_home");
                yield "\"><i class=\"bi bi-journal-check\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management question types"), "html", null, true);
                yield "</a></li>
                  ";
            }
            // line 26
            yield "                  ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
                // line 27
                yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
                // line 28
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionnaire_skills_home");
                yield "\"><i class=\"bi bi-clipboard-data\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management skills"), "html", null, true);
                yield "</a></li>
                  ";
            }
            // line 30
            yield "
                </ul>
            </li>

            ";
            // line 34
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM_MANAGER")) {
                yield " 

            <li class=\"nav-item dropdown\"> ";
                // line 37
                yield "                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("evaluations"), "html", null, true);
                yield "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                 
                    <li><a class=\"dropdown-item\" href=\"";
                // line 42
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluation_manage_home");
                yield "\"><i class=\"bi bi-journal-code\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management evaluations"), "html", null, true);
                yield "</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
                // line 44
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluation_manage_correction_home");
                yield "\"><i class=\"bi bi-journal-check\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management corrections"), "html", null, true);
                yield "</a></li>
                  ";
                // line 45
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
                    // line 46
                    yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
                    // line 47
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluation_skills_home");
                    yield "\"><i class=\"bi bi-clipboard-data\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management skills"), "html", null, true);
                    yield "</a></li>
                  ";
                }
                // line 49
                yield "                </ul>
            </li>
            ";
            }
            // line 52
            yield "
              
            ";
            // line 55
            yield "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM_MANAGER")) {
                yield " ";
                // line 56
                yield "              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users"), "html", null, true);
                yield "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"";
                // line 61
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_home");
                yield "\"><i class=\"bi bi-people\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management users"), "html", null, true);
                yield "</a></li>
                  <li><hr class=\"dropdown-divider\"></li>
                  <li><a class=\"dropdown-item\" href=\"";
                // line 63
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_add");
                yield "\"><i class=\"bi bi-person-plus\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add user"), "html", null, true);
                yield "</a></li>
                </ul>
              </li>

              <li class=\"nav-item dropdown\"> ";
                // line 68
                yield "                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("teams"), "html", null, true);
                yield "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"";
                // line 72
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_home");
                yield "\"><i class=\"bi bi-people\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management teams"), "html", null, true);
                yield "</a></li>
                  <li><hr class=\"dropdown-divider\"></li>
                  <li><a class=\"dropdown-item\" href=\"";
                // line 74
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_add");
                yield "\"><i class=\"bi bi-plus-circle\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add team"), "html", null, true);
                yield "</a></li>
                </ul>
              </li>

              <li class=\"nav-item dropdown\"> ";
                // line 79
                yield "                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("groups"), "html", null, true);
                yield "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"";
                // line 83
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_home");
                yield "\"><i class=\"bi bi-people\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management groups"), "html", null, true);
                yield "</a></li>
                  <li><hr class=\"dropdown-divider\"></li>
                  <li><a class=\"dropdown-item\" href=\"";
                // line 85
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_add");
                yield "\"><i class=\"bi bi-plus-circle\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add group"), "html", null, true);
                yield "</a></li>
                </ul>
              </li>
            ";
            }
            // line 89
            yield "
            ";
            // line 91
            yield "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
                yield " 
              <li class=\"nav-item dropdown\"> ";
                // line 93
                yield "                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations"), "html", null, true);
                yield "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  ";
                // line 98
                yield "                  <li><a class=\"dropdown-item\" ><i class=\"bi bi-globe2\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("management translations"), "html", null, true);
                yield "</a></li>
                </ul>
              </li>

              ";
                // line 103
                yield "              ";
                // line 117
                yield "            ";
            }
            // line 118
            yield "
            ";
            // line 120
            yield "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                yield " 
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("statistics"), "html", null, true);
                yield "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"";
                // line 126
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statistics");
                yield "\"><i class=\"bi bi-file-bar-graph\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("statistics"), "html", null, true);
                yield "</a></li>
                </ul>
              </li>
            ";
            }
            // line 130
            yield "          ";
        }
        // line 131
        yield "        </ul>
        <div></div>

        ";
        // line 135
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135)) {
            // line 136
            yield "          <a class=\"btn btn-outline-dark m-1\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
            yield "\"><i class=\"bi bi-person\"></i> <span class=\"username\"></span></a>
          <a class=\"btn btn-outline-danger m-1\" href=\"";
            // line 137
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"><i class=\"bi bi-box-arrow-right\"></i></a>
        ";
        } else {
            // line 139
            yield "                  ";
        }
        // line 141
        yield "        
        ";
        // line 143
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", [], "any", false, false, false, 143)) {
            // line 144
            yield "          <ul  class=\"navbar-nav\">
            <li class=\"nav-item dropdown\">
              <ul class=\"navbar-nav ml-auto\" aria-labelledby=\"navbarDropdown\">
            
                ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 148, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 149
                yield "                  ";
                if (($context["locale"] != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "request", [], "any", false, false, false, 149), "locale", [], "any", false, false, false, 149))) {
                    // line 150
                    yield "                    <li class=\"nav-item\">
                    <li>
                  ";
                }
                // line 153
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            yield "                
              </ul>
            </li>
          </ul>
        ";
        }
        // line 159
        yield "        
    </div>
  </div>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/_navbar.html.twig";
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
        return array (  366 => 159,  359 => 154,  353 => 153,  348 => 150,  345 => 149,  341 => 148,  335 => 144,  332 => 143,  329 => 141,  326 => 139,  321 => 137,  316 => 136,  313 => 135,  308 => 131,  305 => 130,  296 => 126,  290 => 123,  283 => 120,  280 => 118,  277 => 117,  275 => 103,  267 => 98,  261 => 94,  258 => 93,  253 => 91,  250 => 89,  241 => 85,  234 => 83,  228 => 80,  225 => 79,  216 => 74,  209 => 72,  203 => 69,  200 => 68,  191 => 63,  184 => 61,  178 => 58,  174 => 56,  170 => 55,  166 => 52,  161 => 49,  154 => 47,  151 => 46,  149 => 45,  143 => 44,  136 => 42,  129 => 38,  126 => 37,  121 => 34,  115 => 30,  108 => 28,  105 => 27,  102 => 26,  95 => 24,  92 => 23,  89 => 22,  82 => 20,  75 => 18,  70 => 16,  64 => 15,  58 => 12,  55 => 11,  52 => 9,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          {% if app.user %}

          <li class=\"nav-item dropdown\"> {# Questionnaires #}
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  {{ 'questionnaires'|trans }}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"{{ path('questionnaire_passage_home') }}\"><i class=\"bi bi-patch-question\"></i> {{ 'my questionnaires'|trans }}</a></li>
                  {% if is_granted('ROLE_TEAM_MANAGER') %} 
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('questionnaire_manage_home') }}\"><i class=\"bi bi-journal-code\"></i> {{ 'management questionnaires'|trans }}</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('questionnaire_manage_correction_home') }}\"><i class=\"bi bi-journal-check\"></i> {{ 'management corrections'|trans }}</a></li>
                  {% endif %}
                  {% if is_granted('ROLE_ADMIN') %}
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('questionnaire_question_type_home') }}\"><i class=\"bi bi-journal-check\"></i> {{ 'management question types'|trans }}</a></li>
                  {% endif %}
                  {% if is_granted('ROLE_MANAGER') %}
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('questionnaire_skills_home') }}\"><i class=\"bi bi-clipboard-data\"></i> {{ 'management skills'|trans }}</a></li>
                  {% endif %}

                </ul>
            </li>

            {% if is_granted('ROLE_TEAM_MANAGER') %} 

            <li class=\"nav-item dropdown\"> {# Evaluation #}
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  {{ 'evaluations'|trans }}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                 
                    <li><a class=\"dropdown-item\" href=\"{{ path('evaluation_manage_home') }}\"><i class=\"bi bi-journal-code\"></i> {{ 'management evaluations'|trans }}</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('evaluation_manage_correction_home') }}\"><i class=\"bi bi-journal-check\"></i> {{ 'management corrections'|trans }}</a></li>
                  {% if is_granted('ROLE_MANAGER') %}
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('evaluation_skills_home') }}\"><i class=\"bi bi-clipboard-data\"></i> {{ 'management skills'|trans }}</a></li>
                  {% endif %}
                </ul>
            </li>
            {% endif %}

              
            {# TEAM_MANAGER  #}
            {% if is_granted('ROLE_TEAM_MANAGER') %} {# Users #}
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  {{ 'users'|trans }}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"{{ path('user_home') }}\"><i class=\"bi bi-people\"></i> {{ 'management users'|trans }}</a></li>
                  <li><hr class=\"dropdown-divider\"></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('user_add') }}\"><i class=\"bi bi-person-plus\"></i> {{ 'add user'|trans }}</a></li>
                </ul>
              </li>

              <li class=\"nav-item dropdown\"> {# Teams #}
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  {{ 'teams'|trans }}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"{{ path('team_home') }}\"><i class=\"bi bi-people\"></i> {{ 'management teams'|trans }}</a></li>
                  <li><hr class=\"dropdown-divider\"></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('team_add') }}\"><i class=\"bi bi-plus-circle\"></i> {{ 'add team'|trans }}</a></li>
                </ul>
              </li>

              <li class=\"nav-item dropdown\"> {# Groups #}
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  {{ 'groups'|trans }}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"{{ path('group_home') }}\"><i class=\"bi bi-people\"></i> {{ 'management groups'|trans }}</a></li>
                  <li><hr class=\"dropdown-divider\"></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('group_add') }}\"><i class=\"bi bi-plus-circle\"></i> {{ 'add group'|trans }}</a></li>
                </ul>
              </li>
            {% endif %}

            {# MANAGER  #}
            {% if is_granted('ROLE_MANAGER') %} 
              <li class=\"nav-item dropdown\"> {# Translation #}
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  {{ 'translations'|trans }}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  {# <li><a class=\"dropdown-item\" href=\"{{ path('translation') }}\"><i class=\"bi bi-globe2\"></i> {{ 'management translations'|trans }}</a></li> #}
                  <li><a class=\"dropdown-item\" ><i class=\"bi bi-globe2\"></i> {{ 'management translations'|trans }}</a></li>
                </ul>
              </li>

              {# Skills #}
              {# <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  {{ 'skills'|trans }}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\"> 
                  <li><a class=\"dropdown-item\" href=\"{{ path('skills_home') }}\"><i class=\"bi bi-clipboard-data\"></i> {{ 'management skills'|trans }}</a></li>
                  <li><hr class=\"dropdown-divider\"></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('skills_skill_add_step1') }}\"><i class=\"bi bi-plus-circle\"></i> {{ 'add skill'|trans }}</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('skills_field_add') }}\"><i class=\"bi bi-plus-circle\"></i> {{ 'add field'|trans }}</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('skills_skilllevel1_add') }}\"><i class=\"bi bi-plus-circle\"></i> {{ 'add micro skill'|trans }}</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('skills_skilllevel2_add') }}\"><i class=\"bi bi-plus-circle\"></i> {{ 'add nano skill'|trans }}</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('skills_level_add') }}\"><i class=\"bi bi-plus-circle\"></i> {{ 'add level'|trans }}</a></li>
                </ul>
              </li> #}
            {% endif %}

            {# Admin #}
            {% if is_granted('ROLE_ADMIN') %} 
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  {{ 'statistics'|trans }}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"{{ path('app_statistics') }}\"><i class=\"bi bi-file-bar-graph\"></i> {{ 'statistics'|trans }}</a></li>
                </ul>
              </li>
            {% endif %}
          {% endif %}
        </ul>
        <div></div>

        {# CONNEXION / DECONNEXION  #}
        {% if app.user %}
          <a class=\"btn btn-outline-dark m-1\" href=\"{{ path('app_index') }}\"><i class=\"bi bi-person\"></i> <span class=\"username\"></span></a>
          <a class=\"btn btn-outline-danger m-1\" href=\"{{ path('app_logout') }}\"><i class=\"bi bi-box-arrow-right\"></i></a>
        {% else %}
          {# <a class=\"btn btn-outline-dark m-1\" href=\"{{ path('app_login') }}\">{{ 'login'|trans }}</a> #}
        {% endif %}
        
        {# FLAG  #}
        {% if app.user %}
          <ul  class=\"navbar-nav\">
            <li class=\"nav-item dropdown\">
              <ul class=\"navbar-nav ml-auto\" aria-labelledby=\"navbarDropdown\">
            
                {% for locale in locales %}
                  {% if locale != app.request.locale  %}
                    <li class=\"nav-item\">
                    <li>
                  {% endif %}
                {% endfor %}
                
              </ul>
            </li>
          </ul>
        {% endif %}
        
    </div>
  </div>
</nav>
", "components/_navbar.html.twig", "/home/alvann/PhpstormProjects/Projet/templates/components/_navbar.html.twig");
    }
}
