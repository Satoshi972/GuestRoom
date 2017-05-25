<?php

/* houseBundle:Users:index.html.twig */
class __TwigTemplate_7183d861813fc19604798c9a3187806c03f3bba66ea242cd9e4775186d935478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("back.html.twig", "houseBundle:Users:index.html.twig", 1);
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
        $__internal_310cc0480496a3b5d1d3f549eb6a0a88b09dd3146d980042c040c327e75fba39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310cc0480496a3b5d1d3f549eb6a0a88b09dd3146d980042c040c327e75fba39->enter($__internal_310cc0480496a3b5d1d3f549eb6a0a88b09dd3146d980042c040c327e75fba39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "houseBundle:Users:index.html.twig"));

        $__internal_18216a506f3a9148b984925d1e5249090505169a81a7a65cf81ee75bf5963135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18216a506f3a9148b984925d1e5249090505169a81a7a65cf81ee75bf5963135->enter($__internal_18216a506f3a9148b984925d1e5249090505169a81a7a65cf81ee75bf5963135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "houseBundle:Users:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_310cc0480496a3b5d1d3f549eb6a0a88b09dd3146d980042c040c327e75fba39->leave($__internal_310cc0480496a3b5d1d3f549eb6a0a88b09dd3146d980042c040c327e75fba39_prof);

        
        $__internal_18216a506f3a9148b984925d1e5249090505169a81a7a65cf81ee75bf5963135->leave($__internal_18216a506f3a9148b984925d1e5249090505169a81a7a65cf81ee75bf5963135_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_20d91ef03f77645068e609559c4c0823e6e6267b840f2ee0881fdcb28bab34c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d91ef03f77645068e609559c4c0823e6e6267b840f2ee0881fdcb28bab34c1->enter($__internal_20d91ef03f77645068e609559c4c0823e6e6267b840f2ee0881fdcb28bab34c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1acebc2ec52fc0ec2ee2bad97eb7569efc9500fd1a6c4795d85ab28f47225e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1acebc2ec52fc0ec2ee2bad97eb7569efc9500fd1a6c4795d85ab28f47225e7->enter($__internal_b1acebc2ec52fc0ec2ee2bad97eb7569efc9500fd1a6c4795d85ab28f47225e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_b1acebc2ec52fc0ec2ee2bad97eb7569efc9500fd1a6c4795d85ab28f47225e7->leave($__internal_b1acebc2ec52fc0ec2ee2bad97eb7569efc9500fd1a6c4795d85ab28f47225e7_prof);

        
        $__internal_20d91ef03f77645068e609559c4c0823e6e6267b840f2ee0881fdcb28bab34c1->leave($__internal_20d91ef03f77645068e609559c4c0823e6e6267b840f2ee0881fdcb28bab34c1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc9c78afd08e87392f35d4e26b8c972948c1ba48d24b38b135a1ef2fe4406dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9c78afd08e87392f35d4e26b8c972948c1ba48d24b38b135a1ef2fe4406dc8->enter($__internal_dc9c78afd08e87392f35d4e26b8c972948c1ba48d24b38b135a1ef2fe4406dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf8660cb78244beb9045c04026b0a4801fe9e7a89047dd56055a38af7e0568ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8660cb78244beb9045c04026b0a4801fe9e7a89047dd56055a38af7e0568ac->enter($__internal_cf8660cb78244beb9045c04026b0a4801fe9e7a89047dd56055a38af7e0568ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<legend class=\"text-center text-success\">TEST 1 REUSSI</legend>
<p class=\"text-center text-info\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta dolor debitis est pariatur esse, earum fugiat?<br> Accusantium repudiandae necessitatibus laboriosam, voluptatibus, labore corrupti quibusdam cum quos repellat perspiciatis similique, illo!</p>
";
        
        $__internal_cf8660cb78244beb9045c04026b0a4801fe9e7a89047dd56055a38af7e0568ac->leave($__internal_cf8660cb78244beb9045c04026b0a4801fe9e7a89047dd56055a38af7e0568ac_prof);

        
        $__internal_dc9c78afd08e87392f35d4e26b8c972948c1ba48d24b38b135a1ef2fe4406dc8->leave($__internal_dc9c78afd08e87392f35d4e26b8c972948c1ba48d24b38b135a1ef2fe4406dc8_prof);

    }

    public function getTemplateName()
    {
        return "houseBundle:Users:index.html.twig";
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
<legend class=\"text-center text-success\">TEST 1 REUSSI</legend>
<p class=\"text-center text-info\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta dolor debitis est pariatur esse, earum fugiat?<br> Accusantium repudiandae necessitatibus laboriosam, voluptatibus, labore corrupti quibusdam cum quos repellat perspiciatis similique, illo!</p>
{% endblock %}", "houseBundle:Users:index.html.twig", "C:\\wamp64\\www\\GuestRoom\\src\\houseBundle/Resources/views/Users/index.html.twig");
    }
}
