<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0fd258d5cd90e6569d1ab61f7a8b5064101977573920a7e0c68993aed9a371c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_560c20c6ce9d1460ef19d9739c90481bd98124ab8830835143bcdbe8bedd679a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560c20c6ce9d1460ef19d9739c90481bd98124ab8830835143bcdbe8bedd679a->enter($__internal_560c20c6ce9d1460ef19d9739c90481bd98124ab8830835143bcdbe8bedd679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c1b0397d994e52c1c04a5c6847eb4772aad5f70396285229a11abf6e43150705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b0397d994e52c1c04a5c6847eb4772aad5f70396285229a11abf6e43150705->enter($__internal_c1b0397d994e52c1c04a5c6847eb4772aad5f70396285229a11abf6e43150705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_560c20c6ce9d1460ef19d9739c90481bd98124ab8830835143bcdbe8bedd679a->leave($__internal_560c20c6ce9d1460ef19d9739c90481bd98124ab8830835143bcdbe8bedd679a_prof);

        
        $__internal_c1b0397d994e52c1c04a5c6847eb4772aad5f70396285229a11abf6e43150705->leave($__internal_c1b0397d994e52c1c04a5c6847eb4772aad5f70396285229a11abf6e43150705_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_acc6dd685344a7a5559d995505807a568df676fb12f4fc17bcc562c6e0219a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc6dd685344a7a5559d995505807a568df676fb12f4fc17bcc562c6e0219a9c->enter($__internal_acc6dd685344a7a5559d995505807a568df676fb12f4fc17bcc562c6e0219a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6fca7939ffb6503d6b3703beb43a63401bf56d9e9c2d0eb07c24cbcbc41121e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fca7939ffb6503d6b3703beb43a63401bf56d9e9c2d0eb07c24cbcbc41121e9->enter($__internal_6fca7939ffb6503d6b3703beb43a63401bf56d9e9c2d0eb07c24cbcbc41121e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6fca7939ffb6503d6b3703beb43a63401bf56d9e9c2d0eb07c24cbcbc41121e9->leave($__internal_6fca7939ffb6503d6b3703beb43a63401bf56d9e9c2d0eb07c24cbcbc41121e9_prof);

        
        $__internal_acc6dd685344a7a5559d995505807a568df676fb12f4fc17bcc562c6e0219a9c->leave($__internal_acc6dd685344a7a5559d995505807a568df676fb12f4fc17bcc562c6e0219a9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e5b3f2e9f8b12e320244de5139b5e162286038f71bfb5381ed303bea68c4932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5b3f2e9f8b12e320244de5139b5e162286038f71bfb5381ed303bea68c4932->enter($__internal_8e5b3f2e9f8b12e320244de5139b5e162286038f71bfb5381ed303bea68c4932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_435fe8b8c316a02f9f9cca5b2a73d92414519ad398bb971ee2044c4b9c5e98e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435fe8b8c316a02f9f9cca5b2a73d92414519ad398bb971ee2044c4b9c5e98e1->enter($__internal_435fe8b8c316a02f9f9cca5b2a73d92414519ad398bb971ee2044c4b9c5e98e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_435fe8b8c316a02f9f9cca5b2a73d92414519ad398bb971ee2044c4b9c5e98e1->leave($__internal_435fe8b8c316a02f9f9cca5b2a73d92414519ad398bb971ee2044c4b9c5e98e1_prof);

        
        $__internal_8e5b3f2e9f8b12e320244de5139b5e162286038f71bfb5381ed303bea68c4932->leave($__internal_8e5b3f2e9f8b12e320244de5139b5e162286038f71bfb5381ed303bea68c4932_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85d4316883c212b4356dde7ff6f02a3d821f53293291745b8541fc08134140cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d4316883c212b4356dde7ff6f02a3d821f53293291745b8541fc08134140cf->enter($__internal_85d4316883c212b4356dde7ff6f02a3d821f53293291745b8541fc08134140cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae92f23c0b06d0fdd285ced54e91fe329c1e1321b32a2f439801737b2a909b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae92f23c0b06d0fdd285ced54e91fe329c1e1321b32a2f439801737b2a909b30->enter($__internal_ae92f23c0b06d0fdd285ced54e91fe329c1e1321b32a2f439801737b2a909b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae92f23c0b06d0fdd285ced54e91fe329c1e1321b32a2f439801737b2a909b30->leave($__internal_ae92f23c0b06d0fdd285ced54e91fe329c1e1321b32a2f439801737b2a909b30_prof);

        
        $__internal_85d4316883c212b4356dde7ff6f02a3d821f53293291745b8541fc08134140cf->leave($__internal_85d4316883c212b4356dde7ff6f02a3d821f53293291745b8541fc08134140cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\GuestRoom\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
