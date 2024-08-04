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

/* /demandeur/index.html.twig */
class __TwigTemplate_61eeb32aa9ca78b9d8e26bc1a863797d extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/demandeur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/demandeur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/demandeur/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste de demandeur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<div class=\"row\">
    <h1> Liste des demandeurs </h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">PRENOM</th>
                <th scope=\"col\">NOM</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["demandeurs"]) || array_key_exists("demandeurs", $context) ? $context["demandeurs"] : (function () { throw new RuntimeError('Variable "demandeurs" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["demandeur"]) {
            // line 19
            yield "            <tr>
                <th scope=\"row\">1</th>
                <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demandeur"], "firstname", [], "any", false, false, false, 21), "html", null, true);
            yield "k</td>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demandeur"], "email", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "            </tbody>
        </table>
    ";
        // line 27
        if ((isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 27, $this->source); })())) {
            // line 28
            yield "    <div class=\"page\">
        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination justify-content-center\">
                ";
            // line 31
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 31, $this->source); })()) != 1)) {
                // line 32
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_demandeur", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 33, $this->source); })()) - 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 33, $this->source); })())]), "html", null, true);
                yield "\" tabindex=\"-1\">Précedent</a>
                </li>
                ";
            }
            // line 36
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 36, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 37
                yield "                <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_demandeur", ["page" => $context["i"], "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 37, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "                ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 39, $this->source); })()) != (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 39, $this->source); })()))) {
                // line 40
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_demandeur", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 41, $this->source); })()) + 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 41, $this->source); })())]), "html", null, true);
                yield "\">Suivant</a>
                </li>
                ";
            }
            // line 44
            yield "            </ul>
        </nav>
    </div>
    ";
        }
        // line 48
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/demandeur/index.html.twig";
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
        return array (  181 => 48,  175 => 44,  169 => 41,  166 => 40,  163 => 39,  152 => 37,  147 => 36,  141 => 33,  138 => 32,  136 => 31,  131 => 28,  129 => 27,  125 => 25,  116 => 22,  112 => 21,  108 => 19,  104 => 18,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste de demandeur{% endblock %}

{% block body %}

<div class=\"row\">
    <h1> Liste des demandeurs </h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">PRENOM</th>
                <th scope=\"col\">NOM</th>
            </tr>
            </thead>
            <tbody>
            {% for demandeur in demandeurs %}
            <tr>
                <th scope=\"row\">1</th>
                <td>{{ demandeur.firstname }}k</td>
                <td>{{ demandeur.email }}</td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
    {% if isPaginated %}
    <div class=\"page\">
        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination justify-content-center\">
                {% if page != 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('all_demandeur', {page: page - 1, nbre: nbre }) }}\" tabindex=\"-1\">Précedent</a>
                </li>
                {% endif %}
                {% for i in range(1, nbrePage) %}
                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('all_demandeur', {page: i , nbre: nbre }) }}\">{{ i }}</a></li>
                {% endfor %}
                {% if page != nbrePage %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('all_demandeur', {page: page + 1, nbre: nbre }) }}\">Suivant</a>
                </li>
                {% endif %}
            </ul>
        </nav>
    </div>
    {% endif %}
</div>
{% endblock %}
", "/demandeur/index.html.twig", "C:\\Users\\user\\PhpstormProjects\\Symfony-WebLog\\templates\\demandeur\\index.html.twig");
    }
}
