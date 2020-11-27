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
class __TwigTemplate_54165065820e57ad3474d09b0b6cfcb04327b89e56a87e69433af83d9f95d902 extends Template
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

        echo "Hotel 5⭐";
        
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
            echo "
            <center><p><b>Page du Manager !</b></p></center>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
                // line 17
                echo "
                <p>Chambre n° ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 18), "html", null, true);
                echo ", située à l'étage n° ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Etage", [], "any", false, false, false, 18), "html", null, true);
                echo ". Elle est ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "status", [], "any", false, false, false, 18), "html", null, true);
                echo " !

                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("netoyage", ["id" => twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">A nettoyer</a>

                </p>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
        }
        // line 27
        echo "


        ";
        // line 30
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "roles", [], "any", false, false, false, 30), 0, [], "array", false, false, false, 30), "ROLE_RECEPTIONNISTE"))) {
            // line 31
            echo "
            <center><p><b>Page du Receptionniste!</b></p></center>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
                // line 34
                echo "
                ";
                // line 35
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["chambre"], "status", [], "any", false, false, false, 35), "Libre"))) {
                    // line 36
                    echo "
                    <p>Chambre n° ";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 37), "html", null, true);
                    echo ", située à l'étage n° ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "etage", [], "any", false, false, false, 37), "html", null, true);
                    echo ". Elle est ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "status", [], "any", false, false, false, 37), "html", null, true);
                    echo " !

                        <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve", ["id" => twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                    echo "\">A réserver</a>

                    </p>

                ";
                }
                // line 44
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        ";
        }
        // line 48
        echo "


        ";
        // line 51
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "roles", [], "any", false, false, false, 51), 0, [], "array", false, false, false, 51), "ROLE_EMPLOYEE"))) {
            // line 52
            echo "
            <center><p><b>Page de l'Employee !</b></p></center>
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
                // line 55
                echo "
                ";
                // line 56
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["chambre"], "status", [], "any", false, false, false, 56), "A nettoyer"))) {
                    // line 57
                    echo "
                    <p>Chambre n° ";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 58), "html", null, true);
                    echo ", située à l'étage n° ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "etage", [], "any", false, false, false, 58), "html", null, true);
                    echo ". Elle est ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "status", [], "any", false, false, false, 58), "html", null, true);
                    echo " !

                        <a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("libre", ["id" => twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                    echo "\">Libre</a>

                    </p>

                ";
                }
                // line 65
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        ";
        }
        // line 69
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
        return array (  239 => 69,  235 => 67,  228 => 65,  220 => 60,  211 => 58,  208 => 57,  206 => 56,  203 => 55,  199 => 54,  195 => 52,  193 => 51,  188 => 48,  184 => 46,  177 => 44,  169 => 39,  160 => 37,  157 => 36,  155 => 35,  152 => 34,  148 => 33,  144 => 31,  142 => 30,  137 => 27,  133 => 25,  122 => 20,  113 => 18,  110 => 17,  106 => 16,  102 => 14,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hotel 5⭐{% endblock %}

{% block body %}
    </br>
    </br>
    </br>
    <section class=\"chambres\">
        <h1>Nombre de chambre dans l'hotel : {{ chambres|length }}</h1>


        {% if app.user.roles[0] == \"ROLE_MANAGER\" %}

            <center><p><b>Page du Manager !</b></p></center>
            {% for chambre in chambres %}

                <p>Chambre n° {{ chambre.numero }}, située à l'étage n° {{ chambre.Etage }}. Elle est {{ chambre.status }} !

                    <a href=\"{{ path('netoyage',{'id' : chambre.id}) }}\">A nettoyer</a>

                </p>

            {% endfor %}

        {% endif %}



        {% if app.user.roles[0] == \"ROLE_RECEPTIONNISTE\" %}

            <center><p><b>Page du Receptionniste!</b></p></center>
            {% for chambre in chambres %}

                {% if chambre.status == \"Libre\" %}

                    <p>Chambre n° {{ chambre.numero }}, située à l'étage n° {{ chambre.etage }}. Elle est {{ chambre.status }} !

                        <a href=\"{{ path('reserve',{'id' : chambre.id}) }}\">A réserver</a>

                    </p>

                {% endif %}

            {% endfor %}

        {% endif %}



        {% if app.user.roles[0] == \"ROLE_EMPLOYEE\" %}

            <center><p><b>Page de l'Employee !</b></p></center>
            {% for chambre in chambres %}

                {% if chambre.status == \"A nettoyer\" %}

                    <p>Chambre n° {{ chambre.numero }}, située à l'étage n° {{ chambre.etage }}. Elle est {{ chambre.status }} !

                        <a href=\"{{ path('libre',{'id' : chambre.id}) }}\">Libre</a>

                    </p>

                {% endif %}

            {% endfor %}

        {% endif %}

    </section>
{% endblock %}", "hotel/manager.html.twig", "C:\\Users\\CLAUDE GABRIEL\\HotelSymfony\\templates\\hotel\\manager.html.twig");
    }
}
