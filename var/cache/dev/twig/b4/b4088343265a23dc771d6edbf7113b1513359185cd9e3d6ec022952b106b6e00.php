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
        $__internal_402730d7bba2e0e6529707c07efc7b611f3e9b2113ab927fee7290c338624de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402730d7bba2e0e6529707c07efc7b611f3e9b2113ab927fee7290c338624de6->enter($__internal_402730d7bba2e0e6529707c07efc7b611f3e9b2113ab927fee7290c338624de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_048d72fda62d2a3a26fc2199f30c1fa6cd72190b77c8e208708b92ad08736e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048d72fda62d2a3a26fc2199f30c1fa6cd72190b77c8e208708b92ad08736e8a->enter($__internal_048d72fda62d2a3a26fc2199f30c1fa6cd72190b77c8e208708b92ad08736e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_402730d7bba2e0e6529707c07efc7b611f3e9b2113ab927fee7290c338624de6->leave($__internal_402730d7bba2e0e6529707c07efc7b611f3e9b2113ab927fee7290c338624de6_prof);

        
        $__internal_048d72fda62d2a3a26fc2199f30c1fa6cd72190b77c8e208708b92ad08736e8a->leave($__internal_048d72fda62d2a3a26fc2199f30c1fa6cd72190b77c8e208708b92ad08736e8a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e09cbd287e70ba0d33379340f9a627fd47b90179735841b1ffd29e4daa194c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e09cbd287e70ba0d33379340f9a627fd47b90179735841b1ffd29e4daa194c6->enter($__internal_1e09cbd287e70ba0d33379340f9a627fd47b90179735841b1ffd29e4daa194c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c2d288eb9edb4b4b65794c72b3334d23fdbf3c6d1cf9edc45926da1b7f2641c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2d288eb9edb4b4b65794c72b3334d23fdbf3c6d1cf9edc45926da1b7f2641c->enter($__internal_5c2d288eb9edb4b4b65794c72b3334d23fdbf3c6d1cf9edc45926da1b7f2641c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5c2d288eb9edb4b4b65794c72b3334d23fdbf3c6d1cf9edc45926da1b7f2641c->leave($__internal_5c2d288eb9edb4b4b65794c72b3334d23fdbf3c6d1cf9edc45926da1b7f2641c_prof);

        
        $__internal_1e09cbd287e70ba0d33379340f9a627fd47b90179735841b1ffd29e4daa194c6->leave($__internal_1e09cbd287e70ba0d33379340f9a627fd47b90179735841b1ffd29e4daa194c6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f295f4c775aa05356338a51b9238ad34245c85c47083e6ac712db7bcd8b0a370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f295f4c775aa05356338a51b9238ad34245c85c47083e6ac712db7bcd8b0a370->enter($__internal_f295f4c775aa05356338a51b9238ad34245c85c47083e6ac712db7bcd8b0a370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_49c4bc560f0e43ce4dbaad7bb65d1659373bbddc2321862c6c0c59fcab63bf3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c4bc560f0e43ce4dbaad7bb65d1659373bbddc2321862c6c0c59fcab63bf3f->enter($__internal_49c4bc560f0e43ce4dbaad7bb65d1659373bbddc2321862c6c0c59fcab63bf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_49c4bc560f0e43ce4dbaad7bb65d1659373bbddc2321862c6c0c59fcab63bf3f->leave($__internal_49c4bc560f0e43ce4dbaad7bb65d1659373bbddc2321862c6c0c59fcab63bf3f_prof);

        
        $__internal_f295f4c775aa05356338a51b9238ad34245c85c47083e6ac712db7bcd8b0a370->leave($__internal_f295f4c775aa05356338a51b9238ad34245c85c47083e6ac712db7bcd8b0a370_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0d907bcbb0a47106b3688410ddf02607951151b6c14d3f8805d6ccb862654ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d907bcbb0a47106b3688410ddf02607951151b6c14d3f8805d6ccb862654ab->enter($__internal_c0d907bcbb0a47106b3688410ddf02607951151b6c14d3f8805d6ccb862654ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53883612cc8a8b3421d7e679c1d560ad0f90b46e20a6fa73c2080be6db1d3a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53883612cc8a8b3421d7e679c1d560ad0f90b46e20a6fa73c2080be6db1d3a1e->enter($__internal_53883612cc8a8b3421d7e679c1d560ad0f90b46e20a6fa73c2080be6db1d3a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53883612cc8a8b3421d7e679c1d560ad0f90b46e20a6fa73c2080be6db1d3a1e->leave($__internal_53883612cc8a8b3421d7e679c1d560ad0f90b46e20a6fa73c2080be6db1d3a1e_prof);

        
        $__internal_c0d907bcbb0a47106b3688410ddf02607951151b6c14d3f8805d6ccb862654ab->leave($__internal_c0d907bcbb0a47106b3688410ddf02607951151b6c14d3f8805d6ccb862654ab_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a635e5670a1920fdfca1c877ad2f0fe66e562627d347bf8a3cae91d87feb74f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a635e5670a1920fdfca1c877ad2f0fe66e562627d347bf8a3cae91d87feb74f9->enter($__internal_a635e5670a1920fdfca1c877ad2f0fe66e562627d347bf8a3cae91d87feb74f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_981b0f21e3f7dab389a482dbdc9f477363d2f96cd14e5600cf9ec3facd3a441b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981b0f21e3f7dab389a482dbdc9f477363d2f96cd14e5600cf9ec3facd3a441b->enter($__internal_981b0f21e3f7dab389a482dbdc9f477363d2f96cd14e5600cf9ec3facd3a441b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_981b0f21e3f7dab389a482dbdc9f477363d2f96cd14e5600cf9ec3facd3a441b->leave($__internal_981b0f21e3f7dab389a482dbdc9f477363d2f96cd14e5600cf9ec3facd3a441b_prof);

        
        $__internal_a635e5670a1920fdfca1c877ad2f0fe66e562627d347bf8a3cae91d87feb74f9->leave($__internal_a635e5670a1920fdfca1c877ad2f0fe66e562627d347bf8a3cae91d87feb74f9_prof);

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
