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

/* dashbord/index.html.twig */
class __TwigTemplate_bdc307c0f8298c36c4b29453768ffef1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashbord/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashbord/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashbord/index.html.twig", 1);
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

        yield "Dashbord";
        
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
        yield "    <section id=\"S-body\">
        <div class=\"sidebar\">
            <div class=\"t-b\">
                <h3>Tableau de board</h3>
            </div>
            <ul class=\"side-row\">
                <li class=\"row-item\"><a href=\"#\">Liste des users</a></li>
                <li class=\"row-item\"><a href=\"#\">Liste des zones</a></li>
                <li class=\"row-item\"><a href=\"#\">Liste des unite</a></li>
                <li class=\"row-item\"><a href=\"#\">Liste des role</a></li>
            </ul>
        </div>
        <div class=\"item-block\">
            <div class=\"head-text\">
                <h1> Welcome to the dashbord</h1>
            </div>
            <div class=\"row-item\">
                <div class=\"card\">
                    <div class=\"card-details\">
                        <p class=\"text-title\">Users</p>
                        <p class=\"text-body\">Here are the details of the card</p>
                    </div>
                    <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personne_list");
        yield "\"><button class=\"card-button\">Details</button></a>
                </div>
                <div class=\"card\">
                    <div class=\"card-details\">
                        <p class=\"text-title\">Zones</p>
                        <p class=\"text-body\">Here are the details of the card</p>
                    </div>
                    <button class=\"card-button\"><a href=\"#\">Details</a></button>
                </div>
                <div class=\"card\">
                    <div class=\"card-details\">
                        <p class=\"text-title\">Unites</p>
                        <p class=\"text-body\">Here are the details of the card</p>
                    </div>
                    <button class=\"card-button\"><a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite");
        yield "\">Details</a></button>
                </div>
                <div class=\"card\">
                    <div class=\"card-details\">
                        <p class=\"text-title\">Roles</p>
                        <p class=\"text-body\">Here are the details of the card</p>
                    </div>
                    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_role");
        yield "\"><button class=\"card-button\">Details</button></a>
                </div>
            </div>
        </div>
    </section>
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
        return "dashbord/index.html.twig";
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
        return array (  141 => 49,  131 => 42,  114 => 28,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashbord{% endblock %}

{% block body %}
    <section id=\"S-body\">
        <div class=\"sidebar\">
            <div class=\"t-b\">
                <h3>Tableau de board</h3>
            </div>
            <ul class=\"side-row\">
                <li class=\"row-item\"><a href=\"#\">Liste des users</a></li>
                <li class=\"row-item\"><a href=\"#\">Liste des zones</a></li>
                <li class=\"row-item\"><a href=\"#\">Liste des unite</a></li>
                <li class=\"row-item\"><a href=\"#\">Liste des role</a></li>
            </ul>
        </div>
        <div class=\"item-block\">
            <div class=\"head-text\">
                <h1> Welcome to the dashbord</h1>
            </div>
            <div class=\"row-item\">
                <div class=\"card\">
                    <div class=\"card-details\">
                        <p class=\"text-title\">Users</p>
                        <p class=\"text-body\">Here are the details of the card</p>
                    </div>
                    <a href=\"{{ path('personne_list') }}\"><button class=\"card-button\">Details</button></a>
                </div>
                <div class=\"card\">
                    <div class=\"card-details\">
                        <p class=\"text-title\">Zones</p>
                        <p class=\"text-body\">Here are the details of the card</p>
                    </div>
                    <button class=\"card-button\"><a href=\"#\">Details</a></button>
                </div>
                <div class=\"card\">
                    <div class=\"card-details\">
                        <p class=\"text-title\">Unites</p>
                        <p class=\"text-body\">Here are the details of the card</p>
                    </div>
                    <button class=\"card-button\"><a href=\"{{ path('app_unite') }}\">Details</a></button>
                </div>
                <div class=\"card\">
                    <div class=\"card-details\">
                        <p class=\"text-title\">Roles</p>
                        <p class=\"text-body\">Here are the details of the card</p>
                    </div>
                    <a href=\"{{ path('app_role') }}\"><button class=\"card-button\">Details</button></a>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "dashbord/index.html.twig", "C:\\Users\\user\\PhpstormProjects\\Symfony-WebLog\\templates\\dashbord\\index.html.twig");
    }
}
