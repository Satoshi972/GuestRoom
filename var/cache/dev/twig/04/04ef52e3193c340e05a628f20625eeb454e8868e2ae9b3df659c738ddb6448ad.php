<?php

/* houseBundle:Default:index.html.twig */
class __TwigTemplate_09e8359a22809ff0b8957eb6d708a69e588c5473929506c64ea28aedff4a65c2 extends Twig_Template
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
        $__internal_8d638a2be1dbe6fe8ba61128a8fdce0678f8a8d7af50666eed72fe9b32e0a33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d638a2be1dbe6fe8ba61128a8fdce0678f8a8d7af50666eed72fe9b32e0a33a->enter($__internal_8d638a2be1dbe6fe8ba61128a8fdce0678f8a8d7af50666eed72fe9b32e0a33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "houseBundle:Default:index.html.twig"));

        $__internal_4f085451d754518fe95cd7c06d87b2f7cc9497ee9b5758e0c726d68cf4f944e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f085451d754518fe95cd7c06d87b2f7cc9497ee9b5758e0c726d68cf4f944e6->enter($__internal_4f085451d754518fe95cd7c06d87b2f7cc9497ee9b5758e0c726d68cf4f944e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "houseBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_8d638a2be1dbe6fe8ba61128a8fdce0678f8a8d7af50666eed72fe9b32e0a33a->leave($__internal_8d638a2be1dbe6fe8ba61128a8fdce0678f8a8d7af50666eed72fe9b32e0a33a_prof);

        
        $__internal_4f085451d754518fe95cd7c06d87b2f7cc9497ee9b5758e0c726d68cf4f944e6->leave($__internal_4f085451d754518fe95cd7c06d87b2f7cc9497ee9b5758e0c726d68cf4f944e6_prof);

    }

    public function getTemplateName()
    {
        return "houseBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "houseBundle:Default:index.html.twig", "C:\\wamp64\\www\\GuestRoom\\src\\houseBundle/Resources/views/Default/index.html.twig");
    }
}
