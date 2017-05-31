<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_b500b889b70ed73399169f13048b75e96d46af1486b0c71e899a9ed8b69d1703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7edf82c8056df8bf6961b1b29e2bc25c009c772c4f498e5145e0f72d00f6eb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edf82c8056df8bf6961b1b29e2bc25c009c772c4f498e5145e0f72d00f6eb67->enter($__internal_7edf82c8056df8bf6961b1b29e2bc25c009c772c4f498e5145e0f72d00f6eb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_97280dacc1ea6a8d0c65cba121e123ad21868c0e87ecf012fdb7597faea3f563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97280dacc1ea6a8d0c65cba121e123ad21868c0e87ecf012fdb7597faea3f563->enter($__internal_97280dacc1ea6a8d0c65cba121e123ad21868c0e87ecf012fdb7597faea3f563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_7edf82c8056df8bf6961b1b29e2bc25c009c772c4f498e5145e0f72d00f6eb67->leave($__internal_7edf82c8056df8bf6961b1b29e2bc25c009c772c4f498e5145e0f72d00f6eb67_prof);

        
        $__internal_97280dacc1ea6a8d0c65cba121e123ad21868c0e87ecf012fdb7597faea3f563->leave($__internal_97280dacc1ea6a8d0c65cba121e123ad21868c0e87ecf012fdb7597faea3f563_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\GuestRoom\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
