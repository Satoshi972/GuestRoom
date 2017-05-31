<?php

/* houseBundle:users:create.html.twig */
class __TwigTemplate_2f50613820a04d5b82018a9d2f043f4506300b3b8388d46ea960aede4cf62266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("back.html.twig", "houseBundle:users:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7d907f2106350c776d169c6b298e3622caa2ef20d16456dd817ac0715b2b02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d907f2106350c776d169c6b298e3622caa2ef20d16456dd817ac0715b2b02b->enter($__internal_d7d907f2106350c776d169c6b298e3622caa2ef20d16456dd817ac0715b2b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "houseBundle:users:create.html.twig"));

        $__internal_05068962a8c8e303e9dacb14c77d35fc4e4c4102d87783628fcc36f56ef41153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05068962a8c8e303e9dacb14c77d35fc4e4c4102d87783628fcc36f56ef41153->enter($__internal_05068962a8c8e303e9dacb14c77d35fc4e4c4102d87783628fcc36f56ef41153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "houseBundle:users:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d907f2106350c776d169c6b298e3622caa2ef20d16456dd817ac0715b2b02b->leave($__internal_d7d907f2106350c776d169c6b298e3622caa2ef20d16456dd817ac0715b2b02b_prof);

        
        $__internal_05068962a8c8e303e9dacb14c77d35fc4e4c4102d87783628fcc36f56ef41153->leave($__internal_05068962a8c8e303e9dacb14c77d35fc4e4c4102d87783628fcc36f56ef41153_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed2eb1f029532c07b3bba8f11ae990456573f1caa2779c69c8b957de60bf9e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2eb1f029532c07b3bba8f11ae990456573f1caa2779c69c8b957de60bf9e7f->enter($__internal_ed2eb1f029532c07b3bba8f11ae990456573f1caa2779c69c8b957de60bf9e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc21d260b4679442f8912d7521f8833f2ceb8ecd5dd5b78ad10b17371c3f4fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc21d260b4679442f8912d7521f8833f2ceb8ecd5dd5b78ad10b17371c3f4fd3->enter($__internal_dc21d260b4679442f8912d7521f8833f2ceb8ecd5dd5b78ad10b17371c3f4fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_dc21d260b4679442f8912d7521f8833f2ceb8ecd5dd5b78ad10b17371c3f4fd3->leave($__internal_dc21d260b4679442f8912d7521f8833f2ceb8ecd5dd5b78ad10b17371c3f4fd3_prof);

        
        $__internal_ed2eb1f029532c07b3bba8f11ae990456573f1caa2779c69c8b957de60bf9e7f->leave($__internal_ed2eb1f029532c07b3bba8f11ae990456573f1caa2779c69c8b957de60bf9e7f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9774c0810b7d34944b7de65fe97c127c8fd390f9bf3163952e2bba5d103a26e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9774c0810b7d34944b7de65fe97c127c8fd390f9bf3163952e2bba5d103a26e1->enter($__internal_9774c0810b7d34944b7de65fe97c127c8fd390f9bf3163952e2bba5d103a26e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fdf375290b566035c0f43c32f1d3620f81ffd8c28e510b7a849beca9211f2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdf375290b566035c0f43c32f1d3620f81ffd8c28e510b7a849beca9211f2e1->enter($__internal_8fdf375290b566035c0f43c32f1d3620f81ffd8c28e510b7a849beca9211f2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<form method=\"post\" class=\"form-horizontal\">
\t<div class=\"form-group\">
\t\t<label for=\"firstName\">Prenom</label>
\t\t<input type=\"text\" id=\"firstName\" name=\"firstName\" class=\"form-control\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"lastName\">Nom</label>
\t\t<input type=\"text\" id=\"lastName\" name=\"lastName\" class=\"form-control\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"email\">Email</label>
\t\t<input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
\t</div>


\t<div class=\"form-group\">
\t\t<label for=\"password\">Mot de passe</label>
\t\t<input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"phone\">GSM</label>
\t\t<input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"role\">Role</label>
\t\t<input type=\"text\" id=\"role\" name=\"role\" class=\"form-control\">
\t</div>
\t<div>
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Création\">
\t</div>
</form>
";
        
        $__internal_8fdf375290b566035c0f43c32f1d3620f81ffd8c28e510b7a849beca9211f2e1->leave($__internal_8fdf375290b566035c0f43c32f1d3620f81ffd8c28e510b7a849beca9211f2e1_prof);

        
        $__internal_9774c0810b7d34944b7de65fe97c127c8fd390f9bf3163952e2bba5d103a26e1->leave($__internal_9774c0810b7d34944b7de65fe97c127c8fd390f9bf3163952e2bba5d103a26e1_prof);

    }

    public function getTemplateName()
    {
        return "houseBundle:users:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'back.html.twig' %}
{% block title %}Accueil{% endblock %}

{% block body %}
<form method=\"post\" class=\"form-horizontal\">
\t<div class=\"form-group\">
\t\t<label for=\"firstName\">Prenom</label>
\t\t<input type=\"text\" id=\"firstName\" name=\"firstName\" class=\"form-control\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"lastName\">Nom</label>
\t\t<input type=\"text\" id=\"lastName\" name=\"lastName\" class=\"form-control\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"email\">Email</label>
\t\t<input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
\t</div>


\t<div class=\"form-group\">
\t\t<label for=\"password\">Mot de passe</label>
\t\t<input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"phone\">GSM</label>
\t\t<input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"role\">Role</label>
\t\t<input type=\"text\" id=\"role\" name=\"role\" class=\"form-control\">
\t</div>
\t<div>
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Création\">
\t</div>
</form>
{% endblock %}", "houseBundle:users:create.html.twig", "C:\\wamp64\\www\\GuestRoom\\src\\houseBundle/Resources/views/users/create.html.twig");
    }
}
