<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eec7f2e14c815cb4b410e5ccdaba76006c4a515783a226949455616a9d3ecd55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f91e270ca5f86712e7c6ca1d2443cd6e6ed2ece77a85f77a174976ede5570088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91e270ca5f86712e7c6ca1d2443cd6e6ed2ece77a85f77a174976ede5570088->enter($__internal_f91e270ca5f86712e7c6ca1d2443cd6e6ed2ece77a85f77a174976ede5570088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a5cd6ac0a5cb6124c37f23b34520187760a3ba0a2df3603f89957ee6a0784732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cd6ac0a5cb6124c37f23b34520187760a3ba0a2df3603f89957ee6a0784732->enter($__internal_a5cd6ac0a5cb6124c37f23b34520187760a3ba0a2df3603f89957ee6a0784732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f91e270ca5f86712e7c6ca1d2443cd6e6ed2ece77a85f77a174976ede5570088->leave($__internal_f91e270ca5f86712e7c6ca1d2443cd6e6ed2ece77a85f77a174976ede5570088_prof);

        
        $__internal_a5cd6ac0a5cb6124c37f23b34520187760a3ba0a2df3603f89957ee6a0784732->leave($__internal_a5cd6ac0a5cb6124c37f23b34520187760a3ba0a2df3603f89957ee6a0784732_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bd055bc14f21b5c0be985d4caf798e6ad1d34ae1c2e3b4fbcf26f42325f7524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd055bc14f21b5c0be985d4caf798e6ad1d34ae1c2e3b4fbcf26f42325f7524->enter($__internal_3bd055bc14f21b5c0be985d4caf798e6ad1d34ae1c2e3b4fbcf26f42325f7524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d3889a22dfdba1c60fd57693edfa51e4b24825988c53c4c3132568b503daa24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3889a22dfdba1c60fd57693edfa51e4b24825988c53c4c3132568b503daa24->enter($__internal_3d3889a22dfdba1c60fd57693edfa51e4b24825988c53c4c3132568b503daa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3d3889a22dfdba1c60fd57693edfa51e4b24825988c53c4c3132568b503daa24->leave($__internal_3d3889a22dfdba1c60fd57693edfa51e4b24825988c53c4c3132568b503daa24_prof);

        
        $__internal_3bd055bc14f21b5c0be985d4caf798e6ad1d34ae1c2e3b4fbcf26f42325f7524->leave($__internal_3bd055bc14f21b5c0be985d4caf798e6ad1d34ae1c2e3b4fbcf26f42325f7524_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa47b1820ddab876919051c41b0ececcd9e1b69a6d380f7d9b76ef130a439551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa47b1820ddab876919051c41b0ececcd9e1b69a6d380f7d9b76ef130a439551->enter($__internal_fa47b1820ddab876919051c41b0ececcd9e1b69a6d380f7d9b76ef130a439551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d1f0d2bc0c77a6fe2f99a3e0bef7e7a146025fde548ae176b2743fb874ddd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1f0d2bc0c77a6fe2f99a3e0bef7e7a146025fde548ae176b2743fb874ddd9a->enter($__internal_3d1f0d2bc0c77a6fe2f99a3e0bef7e7a146025fde548ae176b2743fb874ddd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d1f0d2bc0c77a6fe2f99a3e0bef7e7a146025fde548ae176b2743fb874ddd9a->leave($__internal_3d1f0d2bc0c77a6fe2f99a3e0bef7e7a146025fde548ae176b2743fb874ddd9a_prof);

        
        $__internal_fa47b1820ddab876919051c41b0ececcd9e1b69a6d380f7d9b76ef130a439551->leave($__internal_fa47b1820ddab876919051c41b0ececcd9e1b69a6d380f7d9b76ef130a439551_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3832678a818a88991c87ee28f7c2aa5c216a2e7149e4cbd1c10f0cc6378b4188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3832678a818a88991c87ee28f7c2aa5c216a2e7149e4cbd1c10f0cc6378b4188->enter($__internal_3832678a818a88991c87ee28f7c2aa5c216a2e7149e4cbd1c10f0cc6378b4188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e89627c51a1cc4a2fa9c76d2c3ba1fba92862aeb188557a81d15078bec5dc368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89627c51a1cc4a2fa9c76d2c3ba1fba92862aeb188557a81d15078bec5dc368->enter($__internal_e89627c51a1cc4a2fa9c76d2c3ba1fba92862aeb188557a81d15078bec5dc368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e89627c51a1cc4a2fa9c76d2c3ba1fba92862aeb188557a81d15078bec5dc368->leave($__internal_e89627c51a1cc4a2fa9c76d2c3ba1fba92862aeb188557a81d15078bec5dc368_prof);

        
        $__internal_3832678a818a88991c87ee28f7c2aa5c216a2e7149e4cbd1c10f0cc6378b4188->leave($__internal_3832678a818a88991c87ee28f7c2aa5c216a2e7149e4cbd1c10f0cc6378b4188_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\GuestRoom\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
