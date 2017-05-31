<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bc986aaac5035fdb46e4469a7c26d94eb0a76c6d22643d6554e812fff43401b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3500254e97827a7395beabd240f2ad9ddfb33af817bc9960e330489aa2b8d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3500254e97827a7395beabd240f2ad9ddfb33af817bc9960e330489aa2b8d2c->enter($__internal_c3500254e97827a7395beabd240f2ad9ddfb33af817bc9960e330489aa2b8d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_85effd1c67be7ca75a67966f6d88e924497180da861b6d30fd067a0c64f1d099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85effd1c67be7ca75a67966f6d88e924497180da861b6d30fd067a0c64f1d099->enter($__internal_85effd1c67be7ca75a67966f6d88e924497180da861b6d30fd067a0c64f1d099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3500254e97827a7395beabd240f2ad9ddfb33af817bc9960e330489aa2b8d2c->leave($__internal_c3500254e97827a7395beabd240f2ad9ddfb33af817bc9960e330489aa2b8d2c_prof);

        
        $__internal_85effd1c67be7ca75a67966f6d88e924497180da861b6d30fd067a0c64f1d099->leave($__internal_85effd1c67be7ca75a67966f6d88e924497180da861b6d30fd067a0c64f1d099_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86e2666a6eb858496151ef5e96c72dd8a0ab7d9a79ca2fda9fe02b199b64891a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e2666a6eb858496151ef5e96c72dd8a0ab7d9a79ca2fda9fe02b199b64891a->enter($__internal_86e2666a6eb858496151ef5e96c72dd8a0ab7d9a79ca2fda9fe02b199b64891a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e52b78eb55e03d352be3cae9939d785e6bb086d99ce7d3ea31408b50e7a9640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e52b78eb55e03d352be3cae9939d785e6bb086d99ce7d3ea31408b50e7a9640->enter($__internal_3e52b78eb55e03d352be3cae9939d785e6bb086d99ce7d3ea31408b50e7a9640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3e52b78eb55e03d352be3cae9939d785e6bb086d99ce7d3ea31408b50e7a9640->leave($__internal_3e52b78eb55e03d352be3cae9939d785e6bb086d99ce7d3ea31408b50e7a9640_prof);

        
        $__internal_86e2666a6eb858496151ef5e96c72dd8a0ab7d9a79ca2fda9fe02b199b64891a->leave($__internal_86e2666a6eb858496151ef5e96c72dd8a0ab7d9a79ca2fda9fe02b199b64891a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f686c1631e9d6b09a7f3bfa15baf6ba18f87a52fbbfe0eb309309d4eb832fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f686c1631e9d6b09a7f3bfa15baf6ba18f87a52fbbfe0eb309309d4eb832fe0->enter($__internal_7f686c1631e9d6b09a7f3bfa15baf6ba18f87a52fbbfe0eb309309d4eb832fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3b72396f8afd240480ea04f3eb47c9dc88edae7259814893a68c8b49018eab02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b72396f8afd240480ea04f3eb47c9dc88edae7259814893a68c8b49018eab02->enter($__internal_3b72396f8afd240480ea04f3eb47c9dc88edae7259814893a68c8b49018eab02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3b72396f8afd240480ea04f3eb47c9dc88edae7259814893a68c8b49018eab02->leave($__internal_3b72396f8afd240480ea04f3eb47c9dc88edae7259814893a68c8b49018eab02_prof);

        
        $__internal_7f686c1631e9d6b09a7f3bfa15baf6ba18f87a52fbbfe0eb309309d4eb832fe0->leave($__internal_7f686c1631e9d6b09a7f3bfa15baf6ba18f87a52fbbfe0eb309309d4eb832fe0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd2282cf9a80fede4fd87879af5f5759c522ee15f89fabb699315bee240b25a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2282cf9a80fede4fd87879af5f5759c522ee15f89fabb699315bee240b25a1->enter($__internal_fd2282cf9a80fede4fd87879af5f5759c522ee15f89fabb699315bee240b25a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_67441fe799a0d6443973bbb1d10ac768c38df57ec1a9d976c71045d145d37af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67441fe799a0d6443973bbb1d10ac768c38df57ec1a9d976c71045d145d37af3->enter($__internal_67441fe799a0d6443973bbb1d10ac768c38df57ec1a9d976c71045d145d37af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_67441fe799a0d6443973bbb1d10ac768c38df57ec1a9d976c71045d145d37af3->leave($__internal_67441fe799a0d6443973bbb1d10ac768c38df57ec1a9d976c71045d145d37af3_prof);

        
        $__internal_fd2282cf9a80fede4fd87879af5f5759c522ee15f89fabb699315bee240b25a1->leave($__internal_fd2282cf9a80fede4fd87879af5f5759c522ee15f89fabb699315bee240b25a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\GuestRoom\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
