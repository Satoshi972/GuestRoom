<?php

/* base.html.twig */
class __TwigTemplate_8b9af363f79570f54baa8c6ff66ed3fd291fa90ae054c39ca27af4c2c64f332b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2b6b2bef9a26757bc2625b2d20d3bb41a63a6cc06778f8ec6b5e7aac9d3baab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b6b2bef9a26757bc2625b2d20d3bb41a63a6cc06778f8ec6b5e7aac9d3baab->enter($__internal_a2b6b2bef9a26757bc2625b2d20d3bb41a63a6cc06778f8ec6b5e7aac9d3baab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5b6ece163fed2fbe6ea4ee9b59c31ea6b23be3c9d3163cdaa39a28672be8f2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6ece163fed2fbe6ea4ee9b59c31ea6b23be3c9d3163cdaa39a28672be8f2db->enter($__internal_5b6ece163fed2fbe6ea4ee9b59c31ea6b23be3c9d3163cdaa39a28672be8f2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a2b6b2bef9a26757bc2625b2d20d3bb41a63a6cc06778f8ec6b5e7aac9d3baab->leave($__internal_a2b6b2bef9a26757bc2625b2d20d3bb41a63a6cc06778f8ec6b5e7aac9d3baab_prof);

        
        $__internal_5b6ece163fed2fbe6ea4ee9b59c31ea6b23be3c9d3163cdaa39a28672be8f2db->leave($__internal_5b6ece163fed2fbe6ea4ee9b59c31ea6b23be3c9d3163cdaa39a28672be8f2db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f74e1638829241e76fb18aa40702fd32b8624faa4cdc69d2f09adb23bd400ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f74e1638829241e76fb18aa40702fd32b8624faa4cdc69d2f09adb23bd400ca->enter($__internal_0f74e1638829241e76fb18aa40702fd32b8624faa4cdc69d2f09adb23bd400ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df4e5668f84c034f13b49c1f42edf2f120ec74fb9f842ba01e5367ff466709d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4e5668f84c034f13b49c1f42edf2f120ec74fb9f842ba01e5367ff466709d0->enter($__internal_df4e5668f84c034f13b49c1f42edf2f120ec74fb9f842ba01e5367ff466709d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_df4e5668f84c034f13b49c1f42edf2f120ec74fb9f842ba01e5367ff466709d0->leave($__internal_df4e5668f84c034f13b49c1f42edf2f120ec74fb9f842ba01e5367ff466709d0_prof);

        
        $__internal_0f74e1638829241e76fb18aa40702fd32b8624faa4cdc69d2f09adb23bd400ca->leave($__internal_0f74e1638829241e76fb18aa40702fd32b8624faa4cdc69d2f09adb23bd400ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d17c5a90f39789612916fefe2466e013196dbaa7a6622af5033b8c2d11037443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17c5a90f39789612916fefe2466e013196dbaa7a6622af5033b8c2d11037443->enter($__internal_d17c5a90f39789612916fefe2466e013196dbaa7a6622af5033b8c2d11037443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e239799cbfc0e88e1d88eca53f74afdc5c37c2baee16a693d5d07edf9c7c674c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e239799cbfc0e88e1d88eca53f74afdc5c37c2baee16a693d5d07edf9c7c674c->enter($__internal_e239799cbfc0e88e1d88eca53f74afdc5c37c2baee16a693d5d07edf9c7c674c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e239799cbfc0e88e1d88eca53f74afdc5c37c2baee16a693d5d07edf9c7c674c->leave($__internal_e239799cbfc0e88e1d88eca53f74afdc5c37c2baee16a693d5d07edf9c7c674c_prof);

        
        $__internal_d17c5a90f39789612916fefe2466e013196dbaa7a6622af5033b8c2d11037443->leave($__internal_d17c5a90f39789612916fefe2466e013196dbaa7a6622af5033b8c2d11037443_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e18b13231929249067622fd6664c0ad0b0cbd37a86c09ccb082bf6bd342d89f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e18b13231929249067622fd6664c0ad0b0cbd37a86c09ccb082bf6bd342d89f->enter($__internal_1e18b13231929249067622fd6664c0ad0b0cbd37a86c09ccb082bf6bd342d89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bae095965e02ecdb5d2def0580671c5642f1acdb27b25a79deefb9fb00c99601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae095965e02ecdb5d2def0580671c5642f1acdb27b25a79deefb9fb00c99601->enter($__internal_bae095965e02ecdb5d2def0580671c5642f1acdb27b25a79deefb9fb00c99601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bae095965e02ecdb5d2def0580671c5642f1acdb27b25a79deefb9fb00c99601->leave($__internal_bae095965e02ecdb5d2def0580671c5642f1acdb27b25a79deefb9fb00c99601_prof);

        
        $__internal_1e18b13231929249067622fd6664c0ad0b0cbd37a86c09ccb082bf6bd342d89f->leave($__internal_1e18b13231929249067622fd6664c0ad0b0cbd37a86c09ccb082bf6bd342d89f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d333dea9fe6390cf9f383c06b50f38fe14254737e492581044c361483a5bc6a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d333dea9fe6390cf9f383c06b50f38fe14254737e492581044c361483a5bc6a1->enter($__internal_d333dea9fe6390cf9f383c06b50f38fe14254737e492581044c361483a5bc6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e9490bfd914b8fb2d0b4de01fee15eae91c98e5d9c7bf6ae3a7207b80233f7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9490bfd914b8fb2d0b4de01fee15eae91c98e5d9c7bf6ae3a7207b80233f7bc->enter($__internal_e9490bfd914b8fb2d0b4de01fee15eae91c98e5d9c7bf6ae3a7207b80233f7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9490bfd914b8fb2d0b4de01fee15eae91c98e5d9c7bf6ae3a7207b80233f7bc->leave($__internal_e9490bfd914b8fb2d0b4de01fee15eae91c98e5d9c7bf6ae3a7207b80233f7bc_prof);

        
        $__internal_d333dea9fe6390cf9f383c06b50f38fe14254737e492581044c361483a5bc6a1->leave($__internal_d333dea9fe6390cf9f383c06b50f38fe14254737e492581044c361483a5bc6a1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\GuestRoom\\app\\Resources\\views\\base.html.twig");
    }
}
