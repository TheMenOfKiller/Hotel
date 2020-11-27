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

/* hotel/receptionniste.html.twig */
class __TwigTemplate_ad672d9f8705ad7528ad4be2fec46757cb42bdba49cb4ac63983cf3fe8648411 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/receptionniste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/receptionniste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel/receptionniste.html.twig", 1);
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
        echo "</br>
<center><p><b>Page du Receptionniste !</b></p></center>
</br>
</br>
<h1>Nombre de chambre dans l'hotel : 5</h1>
<p>Chambre n°1 :
<select>
    <option name=\"1\">Libre</option>
    <option name=\"2\">En cours de nettoyage</option>
    <option name=\"3\">Occupé</option>
</select></p>
<p>Chambre n°2 :
    <select>
        <option name=\"1\">Libre</option>
        <option name=\"2\">En cours de nettoyage</option>
        <option name=\"3\">Occupé</option>
    </select></p>
<p>Chambre n°3 :
    <select>
        <option name=\"1\">Libre</option>
        <option name=\"2\">En cours de nettoyage</option>
        <option name=\"3\">Occupé</option>
    </select></p>
<p>Chambre n°4 :
    <select>
        <option name=\"1\">Libre</option>
        <option name=\"2\">En cours de nettoyage</option>
        <option name=\"3\">Occupé</option>
    </select></p>
<p>Chambre n°5 :
    <select>
        <option name=\"1\">Libre</option>
        <option name=\"2\">En cours de nettoyage</option>
        <option name=\"3\">Occupé</option>
    </select></p>
</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/receptionniste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hotel 5⭐{% endblock %}

{% block body %}
</br>
<center><p><b>Page du Receptionniste !</b></p></center>
</br>
</br>
<h1>Nombre de chambre dans l'hotel : 5</h1>
<p>Chambre n°1 :
<select>
    <option name=\"1\">Libre</option>
    <option name=\"2\">En cours de nettoyage</option>
    <option name=\"3\">Occupé</option>
</select></p>
<p>Chambre n°2 :
    <select>
        <option name=\"1\">Libre</option>
        <option name=\"2\">En cours de nettoyage</option>
        <option name=\"3\">Occupé</option>
    </select></p>
<p>Chambre n°3 :
    <select>
        <option name=\"1\">Libre</option>
        <option name=\"2\">En cours de nettoyage</option>
        <option name=\"3\">Occupé</option>
    </select></p>
<p>Chambre n°4 :
    <select>
        <option name=\"1\">Libre</option>
        <option name=\"2\">En cours de nettoyage</option>
        <option name=\"3\">Occupé</option>
    </select></p>
<p>Chambre n°5 :
    <select>
        <option name=\"1\">Libre</option>
        <option name=\"2\">En cours de nettoyage</option>
        <option name=\"3\">Occupé</option>
    </select></p>
</p>
{% endblock %}", "hotel/receptionniste.html.twig", "C:\\Users\\CLAUDE GABRIEL\\HotelSymfony\\templates\\hotel\\receptionniste.html.twig");
    }
}
