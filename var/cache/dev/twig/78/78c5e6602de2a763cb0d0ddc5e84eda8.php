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

/* /personne/index.html.twig */
class __TwigTemplate_d800f18fedb451247ab39b1b076169e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/personne/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/personne/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/personne/index.html.twig", 1);
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

        yield "Liste de personne";
        
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
    <h1> Liste des personnes </h1>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 10
            yield "        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "firstname", [], "any", false, false, false, 12), "html", null, true);
            yield "</h5><br>
                <h6 class=\"card-subtitle mb-2 text-body-secondary\"> Nom & Prenom : ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "name", [], "any", false, false, false, 13), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "firstname", [], "any", false, false, false, 13), "html", null, true);
            yield "</h6>
                <p class=\"card-text\">Age : ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "age", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>
                <a href=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_personne", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            yield "\" class=\"card-link\">Details</a>
                <a href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_personne", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\" class=\"card-link\">Delete</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "    ";
        if ((isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 20, $this->source); })())) {
            // line 21
            yield "    <div class=\"page\">
        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination justify-content-center\">
                ";
            // line 24
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 24, $this->source); })()) != 1)) {
                // line 25
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_personne", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()) - 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 26, $this->source); })())]), "html", null, true);
                yield "\" tabindex=\"-1\">Précedent</a>
                </li>
                ";
            }
            // line 29
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 29, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                yield "                <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_personne", ["page" => $context["i"], "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 30, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "                ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 32, $this->source); })()) != (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 32, $this->source); })()))) {
                // line 33
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_personne", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 34, $this->source); })()) + 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 34, $this->source); })())]), "html", null, true);
                yield "\">Suivant</a>
                </li>
                ";
            }
            // line 37
            yield "            </ul>
        </nav>
    </div>
    ";
        }
        // line 41
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
        return "/personne/index.html.twig";
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
        return array (  184 => 41,  178 => 37,  172 => 34,  169 => 33,  166 => 32,  155 => 30,  150 => 29,  144 => 26,  141 => 25,  139 => 24,  134 => 21,  131 => 20,  121 => 16,  117 => 15,  113 => 14,  107 => 13,  103 => 12,  99 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste de personne{% endblock %}

{% block body %}

<div class=\"row\">
    <h1> Liste des personnes </h1>
    {% for personne in personnes %}
        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ personne.firstname }}</h5><br>
                <h6 class=\"card-subtitle mb-2 text-body-secondary\"> Nom & Prenom : {{ personne.name }} {{ personne.firstname }}</h6>
                <p class=\"card-text\">Age : {{ personne.age }}</p>
                <a href=\"{{ path('detail_personne', {id: personne.id}) }}\" class=\"card-link\">Details</a>
                <a href=\"{{ path('delete_personne', {id: personne.id}) }}\" class=\"card-link\">Delete</a>
            </div>
        </div>
    {% endfor %}
    {% if isPaginated %}
    <div class=\"page\">
        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination justify-content-center\">
                {% if page != 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('all_personne', {page: page - 1, nbre: nbre }) }}\" tabindex=\"-1\">Précedent</a>
                </li>
                {% endif %}
                {% for i in range(1, nbrePage) %}
                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('all_personne', {page: i , nbre: nbre }) }}\">{{ i }}</a></li>
                {% endfor %}
                {% if page != nbrePage %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('all_personne', {page: page + 1, nbre: nbre }) }}\">Suivant</a>
                </li>
                {% endif %}
            </ul>
        </nav>
    </div>
    {% endif %}
</div>
{% endblock %}
", "/personne/index.html.twig", "C:\\Users\\user\\PhpstormProjects\\Symfony-WebLog\\templates\\personne\\index.html.twig");
    }
}
