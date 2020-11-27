<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* hotel/manager.html.twig */
class __TwigTemplate_e6c642a70147b0db63e148ccac116424f1bdfd8a4672b4e7466aebdbef45828b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/manager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/manager.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel/manager.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hotel 5";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    </br>
    </br>
    </br>
    <section class=\"chambres\">
        <h1>Nombre de chambre dans l'hotel : ";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "</h1>


        ";
        // line 13
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13), 0, [], "array", false, false, false, 13), "ROLE_MANAGER"))) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
                // line 15
                echo "
                <p>Chambre n° ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 16), "html", null, true);
                echo ", située à l'étage n° ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Etage", [], "any", false, false, false, 16), "html", null, true);
                echo ". Elle est ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "status", [], "any", false, false, false, 16), "html", null, true);
                echo " !

                    <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("netoyage", ["id" => twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\">A nettoyer</a>

                </p>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
        ";
        }
        // line 25
        echo "


        ";
        // line 28
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "roles", [], "any", false, false, false, 28), 0, [], "array", false, false, false, 28), "ROLE_RECEPTIONNISTE"))) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
                // line 30
                echo "
                ";
                // line 31
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["chambre"], "status", [], "any", false, false, false, 31), "Libre"))) {
                    // line 32
                    echo "
                    <p>Chambre n° ";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 33), "html", null, true);
                    echo ", située à l'étage n° ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "etage", [], "any", false, false, false, 33), "html", null, true);
                    echo ". Elle est ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "status", [], "any", false, false, false, 33), "html", null, true);
                    echo " !

                        <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve", ["id" => twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                    echo "\">A réserver</a>

                    </p>

                ";
                }
                // line 40
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
        ";
        }
        // line 44
        echo "


        ";
        // line 47
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47), 0, [], "array", false, false, false, 47), "ROLE_EMPLOYEE"))) {
            // line 48
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
                // line 49
                echo "
                ";
                // line 50
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["chambre"], "status", [], "any", false, false, false, 50), "A nettoyer"))) {
                    // line 51
                    echo "
                    <p>Chambre n° ";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 52), "html", null, true);
                    echo ", située à l'étage n° ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "etage", [], "any", false, false, false, 52), "html", null, true);
                    echo ". Elle est ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "status", [], "any", false, false, false, 52), "html", null, true);
                    echo " !

                        <a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("libre", ["id" => twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                    echo "\">Libre</a>

                    </p>

                ";
                }
                // line 59
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
        ";
        }
        // line 63
        echo "
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 63,  226 => 61,  219 => 59,  211 => 54,  202 => 52,  199 => 51,  197 => 50,  194 => 49,  189 => 48,  187 => 47,  182 => 44,  178 => 42,  171 => 40,  163 => 35,  154 => 33,  151 => 32,  149 => 31,  146 => 30,  141 => 29,  139 => 28,  134 => 25,  130 => 23,  119 => 18,  110 => 16,  107 => 15,  102 => 14,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hotel 5{% endblock %}

{% block body %}
    </br>
    </br>
    </br>
    <section class=\"chambres\">
        <h1>Nombre de chambre dans l'hotel : {{ chambres|length }}</h1>


        {% if app.user.roles[0] == \"ROLE_MANAGER\" %}
            {% for chambre in chambres %}

                <p>Chambre n° {{ chambre.numero }}, située à l'étage n° {{ chambre.Etage }}. Elle est {{ chambre.status }} !

                    <a href=\"{{ path('netoyage',{'id' : chambre.id}) }}\">A nettoyer</a>

                </p>

            {% endfor %}

        {% endif %}



        {% if app.user.roles[0] == \"ROLE_RECEPTIONNISTE\" %}
            {% for chambre in chambres %}

                {% if chambre.status == \"Libre\" %}

                    <p>Chambre n° {{ chambre.numero }}, située à l'étage n° {{ chambre.etage }}. Elle est {{ chambre.status }} !

                        <a href=\"{{ path('reserve',{'id' : chambre.id}) }}\">A réserver</a>

                    </p>

                {% endif %}

            {% endfor %}

        {% endif %}



        {% if app.user.roles[0] == \"ROLE_EMPLOYEE\" %}
            {% for chambre in chambres %}

                {% if chambre.status == \"A nettoyer\" %}

                    <p>Chambre n° {{ chambre.numero }}, située à l'étage n° {{ chambre.etage }}. Elle est {{ chambre.status }} !

                        <a href=\"{{ path('libre',{'id' : chambre.id}) }}\">Libre</a>

                    </p>

                {% endif %}

            {% endfor %}

        {% endif %}

    </section>
{% endblock %}", "hotel/manager.html.twig", "/Users/theotouitou/Desktop/symfony/HotelSymfony/templates/hotel/manager.html.twig");
    }
}
