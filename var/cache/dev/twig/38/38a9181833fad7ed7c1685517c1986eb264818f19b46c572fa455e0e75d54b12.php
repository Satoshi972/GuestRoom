<?php

/* back.html.twig */
class __TwigTemplate_8858ff7c83c9c21282e5078173dfdfa09d883ade4364161da0e181faf6e2c2e1 extends Twig_Template
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
        $__internal_417a8872cbc1230c9dd88b020290352205793a2ad2589fe3cea32e76f9c031e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417a8872cbc1230c9dd88b020290352205793a2ad2589fe3cea32e76f9c031e6->enter($__internal_417a8872cbc1230c9dd88b020290352205793a2ad2589fe3cea32e76f9c031e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_82c881b89bccc6bcffa78303b8f306260e9a8bde1dc8c7d465954275c0271354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c881b89bccc6bcffa78303b8f306260e9a8bde1dc8c7d465954275c0271354->enter($__internal_82c881b89bccc6bcffa78303b8f306260e9a8bde1dc8c7d465954275c0271354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back.html.twig"));

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
        echo "     
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("menu.css"), "html", null, true);
        echo "\">
        ";
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        ";
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
       <header class=\"cd-main-header\">
            <a href=\"#0\" class=\"cd-logo\"><img src=\"img/cd-logo.svg\" alt=\"Logo\"></a>
            
            <div class=\"cd-search\">
                <form action=\"#0\">
                    <input type=\"search\" placeholder=\"Search...\">
                </form>
            </div> <!-- cd-search -->
         
            <a href=\"#0\" class=\"cd-nav-trigger\">Menu<span></span></a>
         
            <nav class=\"cd-nav\">
                <ul class=\"cd-top-nav\">
                    <li><a href=\"#0\">Tour</a></li>
                    <li><a href=\"#0\">Support</a></li>
                    <li class=\"has-children account\">
                        <a href=\"#0\">
                            <img src=\"img/cd-avatar.png\" alt=\"avatar\">
                            Account
                        </a>
         
                        <ul>
                            <li><a href=\"#0\">My Account</a></li>
                            <!-- other list items here -->
                        </ul>
                    </li>
                </ul>
            </nav>
        </header> <!-- .cd-main-header -->
         
        <main class=\"cd-main-content\">
            <nav class=\"cd-side-nav\">
                <ul>
                    <li class=\"cd-label\">Main</li>
                    <li class=\"has-children overview\">
                        <a href=\"#0\">Overview</a>
                        
                        <ul>
                            <li><a href=\"#0\">All Data</a></li>
                            <!-- other list items here -->
                        </ul>
                    </li>
                    <li class=\"has-children notifications active\">
                        <a href=\"#0\">Notifications<span class=\"count\">3</span></a>
                        
                        <ul>
                            <li><a href=\"#0\">All Notifications</a></li>
                            <!-- other list items here -->
                        </ul>
                    </li>
         
                    <!-- other list items here -->
                </ul>
         
                <!-- other unordered lists here -->
            </nav>
         
            <div class=\"content-wrapper\">
                ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "            </div> <!-- .content-wrapper -->
        </main> <!-- .cd-main-content -->
        ";
        // line 79
        echo "        <script
              src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
              integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
              crossorigin=\"anonymous\"></script>
        ";
        // line 84
        echo "        <script
              src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\"
              integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\"
              crossorigin=\"anonymous\"></script>
        ";
        // line 89
        echo "        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\">
        </script>
        <script>
        \$(function(){
            \$('[data-toggle=\"tooltip\"]').tooltip();
            \$(\".side-nav .collapse\").on(\"hide.bs.collapse\", function() {                   
                \$(this).prev().find(\".fa\").eq(1).removeClass(\"fa-angle-right\").addClass(\"fa-angle-down\");
            });
            \$('.side-nav .collapse').on(\"show.bs.collapse\", function() {                        
                \$(this).prev().find(\".fa\").eq(1).removeClass(\"fa-angle-down\").addClass(\"fa-angle-right\");        
            });
        })    
        </script>
        ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "    </body>
</html>
";
        
        $__internal_417a8872cbc1230c9dd88b020290352205793a2ad2589fe3cea32e76f9c031e6->leave($__internal_417a8872cbc1230c9dd88b020290352205793a2ad2589fe3cea32e76f9c031e6_prof);

        
        $__internal_82c881b89bccc6bcffa78303b8f306260e9a8bde1dc8c7d465954275c0271354->leave($__internal_82c881b89bccc6bcffa78303b8f306260e9a8bde1dc8c7d465954275c0271354_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa01abc4e51999bdad50abb68782ed5271a5505ebed81947a29ac7ecbde5d18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa01abc4e51999bdad50abb68782ed5271a5505ebed81947a29ac7ecbde5d18e->enter($__internal_aa01abc4e51999bdad50abb68782ed5271a5505ebed81947a29ac7ecbde5d18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_270f3c37c010aee5ec8a10345ddc16c7c5b64ffa7cbb0d314300f46f5a52f2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270f3c37c010aee5ec8a10345ddc16c7c5b64ffa7cbb0d314300f46f5a52f2e2->enter($__internal_270f3c37c010aee5ec8a10345ddc16c7c5b64ffa7cbb0d314300f46f5a52f2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_270f3c37c010aee5ec8a10345ddc16c7c5b64ffa7cbb0d314300f46f5a52f2e2->leave($__internal_270f3c37c010aee5ec8a10345ddc16c7c5b64ffa7cbb0d314300f46f5a52f2e2_prof);

        
        $__internal_aa01abc4e51999bdad50abb68782ed5271a5505ebed81947a29ac7ecbde5d18e->leave($__internal_aa01abc4e51999bdad50abb68782ed5271a5505ebed81947a29ac7ecbde5d18e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba682f3ebb0c354d097c75e1ffa10306c6cda3ba28a6f827c7ccfed579120ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba682f3ebb0c354d097c75e1ffa10306c6cda3ba28a6f827c7ccfed579120ad0->enter($__internal_ba682f3ebb0c354d097c75e1ffa10306c6cda3ba28a6f827c7ccfed579120ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ddf7b918997a64fc4af8ca5c0159a5a472868a01871e3dfb3cab740cbb6f438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddf7b918997a64fc4af8ca5c0159a5a472868a01871e3dfb3cab740cbb6f438->enter($__internal_7ddf7b918997a64fc4af8ca5c0159a5a472868a01871e3dfb3cab740cbb6f438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7ddf7b918997a64fc4af8ca5c0159a5a472868a01871e3dfb3cab740cbb6f438->leave($__internal_7ddf7b918997a64fc4af8ca5c0159a5a472868a01871e3dfb3cab740cbb6f438_prof);

        
        $__internal_ba682f3ebb0c354d097c75e1ffa10306c6cda3ba28a6f827c7ccfed579120ad0->leave($__internal_ba682f3ebb0c354d097c75e1ffa10306c6cda3ba28a6f827c7ccfed579120ad0_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_86216b4c9f6e98b28df2c34392f9c49de0319052a01eeaa261c61141d1b8bc46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86216b4c9f6e98b28df2c34392f9c49de0319052a01eeaa261c61141d1b8bc46->enter($__internal_86216b4c9f6e98b28df2c34392f9c49de0319052a01eeaa261c61141d1b8bc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84b3bfaba40179cfa90bd7f434bed0d5a7d36d7e98ab72a737bf8aadccd46b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b3bfaba40179cfa90bd7f434bed0d5a7d36d7e98ab72a737bf8aadccd46b1c->enter($__internal_84b3bfaba40179cfa90bd7f434bed0d5a7d36d7e98ab72a737bf8aadccd46b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_84b3bfaba40179cfa90bd7f434bed0d5a7d36d7e98ab72a737bf8aadccd46b1c->leave($__internal_84b3bfaba40179cfa90bd7f434bed0d5a7d36d7e98ab72a737bf8aadccd46b1c_prof);

        
        $__internal_86216b4c9f6e98b28df2c34392f9c49de0319052a01eeaa261c61141d1b8bc46->leave($__internal_86216b4c9f6e98b28df2c34392f9c49de0319052a01eeaa261c61141d1b8bc46_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f270a499e8e12d5010681f4eb2b00620eced4bd8303acd10e372c1b6ea7c07b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f270a499e8e12d5010681f4eb2b00620eced4bd8303acd10e372c1b6ea7c07b0->enter($__internal_f270a499e8e12d5010681f4eb2b00620eced4bd8303acd10e372c1b6ea7c07b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7838cac52451699ffd0aa0bfadc9cdc7fc36b4be5df3f51a7cbffeaf5d6feddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7838cac52451699ffd0aa0bfadc9cdc7fc36b4be5df3f51a7cbffeaf5d6feddd->enter($__internal_7838cac52451699ffd0aa0bfadc9cdc7fc36b4be5df3f51a7cbffeaf5d6feddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7838cac52451699ffd0aa0bfadc9cdc7fc36b4be5df3f51a7cbffeaf5d6feddd->leave($__internal_7838cac52451699ffd0aa0bfadc9cdc7fc36b4be5df3f51a7cbffeaf5d6feddd_prof);

        
        $__internal_f270a499e8e12d5010681f4eb2b00620eced4bd8303acd10e372c1b6ea7c07b0->leave($__internal_f270a499e8e12d5010681f4eb2b00620eced4bd8303acd10e372c1b6ea7c07b0_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 102,  205 => 75,  188 => 13,  170 => 5,  158 => 103,  156 => 102,  141 => 89,  135 => 84,  129 => 79,  125 => 76,  123 => 75,  58 => 14,  56 => 13,  53 => 12,  50 => 10,  46 => 8,  42 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {# asset fait allusio au dossier web #}     
        <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('menu.css') }}\">
        {# Bootstrap #}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        {# Font awesome #}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
       <header class=\"cd-main-header\">
            <a href=\"#0\" class=\"cd-logo\"><img src=\"img/cd-logo.svg\" alt=\"Logo\"></a>
            
            <div class=\"cd-search\">
                <form action=\"#0\">
                    <input type=\"search\" placeholder=\"Search...\">
                </form>
            </div> <!-- cd-search -->
         
            <a href=\"#0\" class=\"cd-nav-trigger\">Menu<span></span></a>
         
            <nav class=\"cd-nav\">
                <ul class=\"cd-top-nav\">
                    <li><a href=\"#0\">Tour</a></li>
                    <li><a href=\"#0\">Support</a></li>
                    <li class=\"has-children account\">
                        <a href=\"#0\">
                            <img src=\"img/cd-avatar.png\" alt=\"avatar\">
                            Account
                        </a>
         
                        <ul>
                            <li><a href=\"#0\">My Account</a></li>
                            <!-- other list items here -->
                        </ul>
                    </li>
                </ul>
            </nav>
        </header> <!-- .cd-main-header -->
         
        <main class=\"cd-main-content\">
            <nav class=\"cd-side-nav\">
                <ul>
                    <li class=\"cd-label\">Main</li>
                    <li class=\"has-children overview\">
                        <a href=\"#0\">Overview</a>
                        
                        <ul>
                            <li><a href=\"#0\">All Data</a></li>
                            <!-- other list items here -->
                        </ul>
                    </li>
                    <li class=\"has-children notifications active\">
                        <a href=\"#0\">Notifications<span class=\"count\">3</span></a>
                        
                        <ul>
                            <li><a href=\"#0\">All Notifications</a></li>
                            <!-- other list items here -->
                        </ul>
                    </li>
         
                    <!-- other list items here -->
                </ul>
         
                <!-- other unordered lists here -->
            </nav>
         
            <div class=\"content-wrapper\">
                {% block body %}{% endblock %}
            </div> <!-- .content-wrapper -->
        </main> <!-- .cd-main-content -->
        {# JQuery #}
        <script
              src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
              integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
              crossorigin=\"anonymous\"></script>
        {# JQuery UI #}
        <script
              src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\"
              integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\"
              crossorigin=\"anonymous\"></script>
        {# Bootstrap #}
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\">
        </script>
        <script>
        \$(function(){
            \$('[data-toggle=\"tooltip\"]').tooltip();
            \$(\".side-nav .collapse\").on(\"hide.bs.collapse\", function() {                   
                \$(this).prev().find(\".fa\").eq(1).removeClass(\"fa-angle-right\").addClass(\"fa-angle-down\");
            });
            \$('.side-nav .collapse').on(\"show.bs.collapse\", function() {                        
                \$(this).prev().find(\".fa\").eq(1).removeClass(\"fa-angle-down\").addClass(\"fa-angle-right\");        
            });
        })    
        </script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "back.html.twig", "C:\\wamp64\\www\\GuestRoom\\app\\Resources\\views\\back.html.twig");
    }
}
