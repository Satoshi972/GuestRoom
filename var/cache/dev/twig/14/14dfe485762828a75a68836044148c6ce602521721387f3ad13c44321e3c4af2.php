<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11a9aa5207848cfa5529e5877d033d599202ce5db8285cf4d41c1c3aeca6b710 extends Twig_Template
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
        $__internal_2c3d2f4ccc286d6a496cdca945e75d872c04694ab2650d95eda7818aa98ec626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3d2f4ccc286d6a496cdca945e75d872c04694ab2650d95eda7818aa98ec626->enter($__internal_2c3d2f4ccc286d6a496cdca945e75d872c04694ab2650d95eda7818aa98ec626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1ce2474be790ec92aeec8da854b33a97624d546b8487f697a4d350a3ed552b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce2474be790ec92aeec8da854b33a97624d546b8487f697a4d350a3ed552b1a->enter($__internal_1ce2474be790ec92aeec8da854b33a97624d546b8487f697a4d350a3ed552b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c3d2f4ccc286d6a496cdca945e75d872c04694ab2650d95eda7818aa98ec626->leave($__internal_2c3d2f4ccc286d6a496cdca945e75d872c04694ab2650d95eda7818aa98ec626_prof);

        
        $__internal_1ce2474be790ec92aeec8da854b33a97624d546b8487f697a4d350a3ed552b1a->leave($__internal_1ce2474be790ec92aeec8da854b33a97624d546b8487f697a4d350a3ed552b1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d01135498cacf7b46a515b144697cfff78e89fc3b359ac10c37d88af0b2b9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d01135498cacf7b46a515b144697cfff78e89fc3b359ac10c37d88af0b2b9b2->enter($__internal_0d01135498cacf7b46a515b144697cfff78e89fc3b359ac10c37d88af0b2b9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3524e58463af625fdf1288f51f427d64b7d9c8f5b945825b7b106eee4faf4b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3524e58463af625fdf1288f51f427d64b7d9c8f5b945825b7b106eee4faf4b50->enter($__internal_3524e58463af625fdf1288f51f427d64b7d9c8f5b945825b7b106eee4faf4b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3524e58463af625fdf1288f51f427d64b7d9c8f5b945825b7b106eee4faf4b50->leave($__internal_3524e58463af625fdf1288f51f427d64b7d9c8f5b945825b7b106eee4faf4b50_prof);

        
        $__internal_0d01135498cacf7b46a515b144697cfff78e89fc3b359ac10c37d88af0b2b9b2->leave($__internal_0d01135498cacf7b46a515b144697cfff78e89fc3b359ac10c37d88af0b2b9b2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aff6671d4bfafdf04f992274a82b79d61f46b1c3ad3a16cc7eacbe7565c81687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff6671d4bfafdf04f992274a82b79d61f46b1c3ad3a16cc7eacbe7565c81687->enter($__internal_aff6671d4bfafdf04f992274a82b79d61f46b1c3ad3a16cc7eacbe7565c81687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3f5aafd2e23c59944d9057fe7f2553c35ca282c2e1f93033741821736910e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f5aafd2e23c59944d9057fe7f2553c35ca282c2e1f93033741821736910e10->enter($__internal_a3f5aafd2e23c59944d9057fe7f2553c35ca282c2e1f93033741821736910e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3f5aafd2e23c59944d9057fe7f2553c35ca282c2e1f93033741821736910e10->leave($__internal_a3f5aafd2e23c59944d9057fe7f2553c35ca282c2e1f93033741821736910e10_prof);

        
        $__internal_aff6671d4bfafdf04f992274a82b79d61f46b1c3ad3a16cc7eacbe7565c81687->leave($__internal_aff6671d4bfafdf04f992274a82b79d61f46b1c3ad3a16cc7eacbe7565c81687_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c22c41bb40b8c393d240511e879fe5929f2670ded658953ec2d46f0a1abe511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c22c41bb40b8c393d240511e879fe5929f2670ded658953ec2d46f0a1abe511->enter($__internal_8c22c41bb40b8c393d240511e879fe5929f2670ded658953ec2d46f0a1abe511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_363e98dad42d379ba204109848dbeee075119a904a92bf9493886152ff419f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363e98dad42d379ba204109848dbeee075119a904a92bf9493886152ff419f18->enter($__internal_363e98dad42d379ba204109848dbeee075119a904a92bf9493886152ff419f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_363e98dad42d379ba204109848dbeee075119a904a92bf9493886152ff419f18->leave($__internal_363e98dad42d379ba204109848dbeee075119a904a92bf9493886152ff419f18_prof);

        
        $__internal_8c22c41bb40b8c393d240511e879fe5929f2670ded658953ec2d46f0a1abe511->leave($__internal_8c22c41bb40b8c393d240511e879fe5929f2670ded658953ec2d46f0a1abe511_prof);

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
