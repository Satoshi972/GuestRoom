<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d1b1366034bbb21ae068b63aa0980f98d48b3e9fa416a297295a0fdc77208685 extends Twig_Template
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
        $__internal_d8a5332766979624dcf982d463676dc50f9ce0ea829605c4f31e9285a2ef0740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a5332766979624dcf982d463676dc50f9ce0ea829605c4f31e9285a2ef0740->enter($__internal_d8a5332766979624dcf982d463676dc50f9ce0ea829605c4f31e9285a2ef0740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_46f01fc7aaf4f23770ab2973b4d73982dd2d6866ba95b94955a84ce81c93b71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f01fc7aaf4f23770ab2973b4d73982dd2d6866ba95b94955a84ce81c93b71f->enter($__internal_46f01fc7aaf4f23770ab2973b4d73982dd2d6866ba95b94955a84ce81c93b71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8a5332766979624dcf982d463676dc50f9ce0ea829605c4f31e9285a2ef0740->leave($__internal_d8a5332766979624dcf982d463676dc50f9ce0ea829605c4f31e9285a2ef0740_prof);

        
        $__internal_46f01fc7aaf4f23770ab2973b4d73982dd2d6866ba95b94955a84ce81c93b71f->leave($__internal_46f01fc7aaf4f23770ab2973b4d73982dd2d6866ba95b94955a84ce81c93b71f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1bae048cd7b9d5ffea99be217ab9cb4881ca8da736cc0ff5997974dff16688b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bae048cd7b9d5ffea99be217ab9cb4881ca8da736cc0ff5997974dff16688b6->enter($__internal_1bae048cd7b9d5ffea99be217ab9cb4881ca8da736cc0ff5997974dff16688b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e33032cf141020c781a434f94a0242c7cddf50aba081ec789a81ae7da7667ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e33032cf141020c781a434f94a0242c7cddf50aba081ec789a81ae7da7667ec->enter($__internal_3e33032cf141020c781a434f94a0242c7cddf50aba081ec789a81ae7da7667ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e33032cf141020c781a434f94a0242c7cddf50aba081ec789a81ae7da7667ec->leave($__internal_3e33032cf141020c781a434f94a0242c7cddf50aba081ec789a81ae7da7667ec_prof);

        
        $__internal_1bae048cd7b9d5ffea99be217ab9cb4881ca8da736cc0ff5997974dff16688b6->leave($__internal_1bae048cd7b9d5ffea99be217ab9cb4881ca8da736cc0ff5997974dff16688b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_927529b770a828fcaf00bc297c3bb2b2f74ac36947d81ba96015e60d68e64292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927529b770a828fcaf00bc297c3bb2b2f74ac36947d81ba96015e60d68e64292->enter($__internal_927529b770a828fcaf00bc297c3bb2b2f74ac36947d81ba96015e60d68e64292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ea212ec21bc08cebff25170f3fe85de6d4c40ec8abc6d0787905935881fc347c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea212ec21bc08cebff25170f3fe85de6d4c40ec8abc6d0787905935881fc347c->enter($__internal_ea212ec21bc08cebff25170f3fe85de6d4c40ec8abc6d0787905935881fc347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ea212ec21bc08cebff25170f3fe85de6d4c40ec8abc6d0787905935881fc347c->leave($__internal_ea212ec21bc08cebff25170f3fe85de6d4c40ec8abc6d0787905935881fc347c_prof);

        
        $__internal_927529b770a828fcaf00bc297c3bb2b2f74ac36947d81ba96015e60d68e64292->leave($__internal_927529b770a828fcaf00bc297c3bb2b2f74ac36947d81ba96015e60d68e64292_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1559ed4330320df3451ad6ee91c30ec1096613363ecb6267ab07b573e1de21b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1559ed4330320df3451ad6ee91c30ec1096613363ecb6267ab07b573e1de21b8->enter($__internal_1559ed4330320df3451ad6ee91c30ec1096613363ecb6267ab07b573e1de21b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_537181e7f7ea05564aebc8bfc1614243443e0b263d98ba7f9e8ee43701776bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537181e7f7ea05564aebc8bfc1614243443e0b263d98ba7f9e8ee43701776bdf->enter($__internal_537181e7f7ea05564aebc8bfc1614243443e0b263d98ba7f9e8ee43701776bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_537181e7f7ea05564aebc8bfc1614243443e0b263d98ba7f9e8ee43701776bdf->leave($__internal_537181e7f7ea05564aebc8bfc1614243443e0b263d98ba7f9e8ee43701776bdf_prof);

        
        $__internal_1559ed4330320df3451ad6ee91c30ec1096613363ecb6267ab07b573e1de21b8->leave($__internal_1559ed4330320df3451ad6ee91c30ec1096613363ecb6267ab07b573e1de21b8_prof);

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
