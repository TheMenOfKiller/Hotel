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

/* hotel/home.html.twig */
class __TwigTemplate_1610430d7a3bc8944a20a5f6e41080263686a6d03d864463845552ab3f28fc20 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/home.html.twig"));

        // line 1
        echo "<center>
<h1>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</h1>

";
        // line 4
        if ((0 === twig_compare((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 4, $this->source); })()), 1))) {
            // line 5
            echo "    <p>Vous êtes connecté en tant que Manager !</p>
";
        } elseif ((0 === twig_compare(        // line 6
(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 6, $this->source); })()), 2))) {
            // line 7
            echo "    <p>Vous êtes connecté en tant que Receptionniste !</p>
";
        } elseif ((0 === twig_compare(        // line 8
(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 8, $this->source); })()), 3))) {
            // line 9
            echo "    <p>Vous êtes connecté en tant que Employé !</p>
";
        }
        // line 11
        echo "
<p>Bonjour et bienvenue sur le site du CGPalace, un hotel 5⭐ qui vous fera passer une agréable nuit !</p>
<p><font color=\"grey\">Oreiller fournis</font></p>
</center>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hotel/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  63 => 9,  61 => 8,  58 => 7,  56 => 6,  53 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<center>
<h1>{{ title }}</h1>

{% if role == 1 %}
    <p>Vous êtes connecté en tant que Manager !</p>
{% elseif role == 2 %}
    <p>Vous êtes connecté en tant que Receptionniste !</p>
{% elseif role == 3 %}
    <p>Vous êtes connecté en tant que Employé !</p>
{% endif %}

<p>Bonjour et bienvenue sur le site du CGPalace, un hotel 5⭐ qui vous fera passer une agréable nuit !</p>
<p><font color=\"grey\">Oreiller fournis</font></p>
</center>", "hotel/home.html.twig", "C:\\Users\\CLAUDE GABRIEL\\HotelSymfony\\templates\\hotel\\home.html.twig");
    }
}
