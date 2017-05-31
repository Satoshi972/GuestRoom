<?php

/* back.html.twig */
class __TwigTemplate_b92f918bee3d100c674499949d29894e6b860085515e46accb3cddb64698f96a extends Twig_Template
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
        $__internal_917ca03d602c4bfb52944fc7d9d8956ac5e304d0ab31a7c42891998df9a5b58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917ca03d602c4bfb52944fc7d9d8956ac5e304d0ab31a7c42891998df9a5b58d->enter($__internal_917ca03d602c4bfb52944fc7d9d8956ac5e304d0ab31a7c42891998df9a5b58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_797363ed9db4666795da47986010d1f449e63be56b3cdf14a273f9633c462305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797363ed9db4666795da47986010d1f449e63be56b3cdf14a273f9633c462305->enter($__internal_797363ed9db4666795da47986010d1f449e63be56b3cdf14a273f9633c462305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menu.css"), "html", null, true);
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
        ";
        // line 18
        echo "        <nav class=\"navbar navbar-default navbar-static-top\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle navbar-toggle-sidebar collapsed\">
                    MENU
                    </button>
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">
                        Administration
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">      
                  ";
        // line 44
        echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"http://www.pingpong-labs.com\" target=\"_blank\">Retour sur le site</a></li>
                        <li class=\"dropdown \">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                Compte
                                <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li class=\"dropdown-header\">Reglages</li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>      

            <div class=\"container-fluid main-container\">
                <div class=\"col-md-2 sidebar\">
                    <div class=\"row\">
                        <!-- uncomment code for absolute positioning tweek see top comment in css -->
                        <div class=\"absolute-wrapper\"> </div>
                            <!-- Menu -->
                            <div class=\"side-menu\">
                                <nav class=\"navbar navbar-default\" role=\"navigation\">
                                    <!-- Main Menu -->
                                    <div class=\"side-menu-container\">
                                        <ul class=\"nav navbar-nav\">
                                            <!-- Dropdown-->
                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                                <a data-toggle=\"collapse\" href=\"#house\">
                                                    <span class=\"glyphicon glyphicon-home\"></span> Locations <span class=\"caret\"></span>
                                                </a>

                                                <!-- Dropdown level 1 -->
                                                <div id=\"house\" class=\"panel-collapse collapse\">
                                                    <div class=\"panel-body\">
                                                        <ul class=\"nav navbar-nav\">
                                                            <li><a href=\"#\">Ajouter une location</a></li>
                                                            <li><a href=\"#\">Liste des locations</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Dropdown-->
                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                                <a data-toggle=\"collapse\" href=\"#users\">
                                                    <span class=\"glyphicon glyphicon-user\"></span> Utilisateurs <span class=\"caret\"></span>
                                                </a>

                                                <!-- Dropdown level 1 -->
                                                <div id=\"users\" class=\"panel-collapse collapse\">
                                                    <div class=\"panel-body\">
                                                        <ul class=\"nav navbar-nav\">
                                                            <li><a href=\"#\">Voir les réservations</a></li>
                                                            <li><a href=\"#\">Link</a></li>
                                                            <li><a href=\"#\">Link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </nav>
                            </div>

                    </div> ";
        // line 115
        echo "        
                </div> ";
        // line 117
        echo "                <div class=\"col-md-10 content\">
                    <div class=\"container\">
                        ";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        // line 120
        echo "                    </div>
                </div>
            </div> ";
        // line 123
        echo "
        <footer class=\"text-center bottom\">
            <b>
             M.GARONDO
             R.MARIE-LUCE 
            &copy; 2017 
           </b>
        </footer>
        ";
        // line 132
        echo "        <script  src=\"https://code.jquery.com/jquery-3.2.1.min.js\"   integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"  crossorigin=\"anonymous\"></script>
        ";
        // line 134
        echo "        <script  src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\"  integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\"             crossorigin=\"anonymous\"></script>
        ";
        // line 136
        echo "        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"> </script>

        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 139
        $this->displayBlock('javascripts', $context, $blocks);
        // line 140
        echo "    </body>
</html>
";
        
        $__internal_917ca03d602c4bfb52944fc7d9d8956ac5e304d0ab31a7c42891998df9a5b58d->leave($__internal_917ca03d602c4bfb52944fc7d9d8956ac5e304d0ab31a7c42891998df9a5b58d_prof);

        
        $__internal_797363ed9db4666795da47986010d1f449e63be56b3cdf14a273f9633c462305->leave($__internal_797363ed9db4666795da47986010d1f449e63be56b3cdf14a273f9633c462305_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da82c25ec11a0ebf3d486b9b967ed2d9e27e325d171ade7098b3b268913b97d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da82c25ec11a0ebf3d486b9b967ed2d9e27e325d171ade7098b3b268913b97d9->enter($__internal_da82c25ec11a0ebf3d486b9b967ed2d9e27e325d171ade7098b3b268913b97d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04fed1303df755a92efee1622d49005446c39a9c44e8f54a1d7355ed3168f1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fed1303df755a92efee1622d49005446c39a9c44e8f54a1d7355ed3168f1d1->enter($__internal_04fed1303df755a92efee1622d49005446c39a9c44e8f54a1d7355ed3168f1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_04fed1303df755a92efee1622d49005446c39a9c44e8f54a1d7355ed3168f1d1->leave($__internal_04fed1303df755a92efee1622d49005446c39a9c44e8f54a1d7355ed3168f1d1_prof);

        
        $__internal_da82c25ec11a0ebf3d486b9b967ed2d9e27e325d171ade7098b3b268913b97d9->leave($__internal_da82c25ec11a0ebf3d486b9b967ed2d9e27e325d171ade7098b3b268913b97d9_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a381f7b429b2a371fead649fa8710e4d18654e39be5657eb247b8b75bac8826d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a381f7b429b2a371fead649fa8710e4d18654e39be5657eb247b8b75bac8826d->enter($__internal_a381f7b429b2a371fead649fa8710e4d18654e39be5657eb247b8b75bac8826d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7b945ae05150c9a6511d244836ecb3006f2267d0f9a57729e334f74350cafb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b945ae05150c9a6511d244836ecb3006f2267d0f9a57729e334f74350cafb0c->enter($__internal_7b945ae05150c9a6511d244836ecb3006f2267d0f9a57729e334f74350cafb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7b945ae05150c9a6511d244836ecb3006f2267d0f9a57729e334f74350cafb0c->leave($__internal_7b945ae05150c9a6511d244836ecb3006f2267d0f9a57729e334f74350cafb0c_prof);

        
        $__internal_a381f7b429b2a371fead649fa8710e4d18654e39be5657eb247b8b75bac8826d->leave($__internal_a381f7b429b2a371fead649fa8710e4d18654e39be5657eb247b8b75bac8826d_prof);

    }

    // line 119
    public function block_body($context, array $blocks = array())
    {
        $__internal_79f315b042ca76e9eb354390d6c80c39c5a27932fb6bacae41e417374cf44b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f315b042ca76e9eb354390d6c80c39c5a27932fb6bacae41e417374cf44b70->enter($__internal_79f315b042ca76e9eb354390d6c80c39c5a27932fb6bacae41e417374cf44b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d357e87418727a367ae6173e303868d8da98adfbb3f893cf0f5184d68029e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d357e87418727a367ae6173e303868d8da98adfbb3f893cf0f5184d68029e27->enter($__internal_2d357e87418727a367ae6173e303868d8da98adfbb3f893cf0f5184d68029e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d357e87418727a367ae6173e303868d8da98adfbb3f893cf0f5184d68029e27->leave($__internal_2d357e87418727a367ae6173e303868d8da98adfbb3f893cf0f5184d68029e27_prof);

        
        $__internal_79f315b042ca76e9eb354390d6c80c39c5a27932fb6bacae41e417374cf44b70->leave($__internal_79f315b042ca76e9eb354390d6c80c39c5a27932fb6bacae41e417374cf44b70_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52e8c37a5720616fd6f0b9c3430e59f97988e361f82170d79deae9143231180f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e8c37a5720616fd6f0b9c3430e59f97988e361f82170d79deae9143231180f->enter($__internal_52e8c37a5720616fd6f0b9c3430e59f97988e361f82170d79deae9143231180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d1d6f263ece1c99fbab04dfc5192b36265094ebdd9cdb1c45931eca3f541545a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d6f263ece1c99fbab04dfc5192b36265094ebdd9cdb1c45931eca3f541545a->enter($__internal_d1d6f263ece1c99fbab04dfc5192b36265094ebdd9cdb1c45931eca3f541545a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d1d6f263ece1c99fbab04dfc5192b36265094ebdd9cdb1c45931eca3f541545a->leave($__internal_d1d6f263ece1c99fbab04dfc5192b36265094ebdd9cdb1c45931eca3f541545a_prof);

        
        $__internal_52e8c37a5720616fd6f0b9c3430e59f97988e361f82170d79deae9143231180f->leave($__internal_52e8c37a5720616fd6f0b9c3430e59f97988e361f82170d79deae9143231180f_prof);

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
        return array (  263 => 139,  246 => 119,  229 => 13,  211 => 5,  199 => 140,  197 => 139,  193 => 138,  189 => 136,  186 => 134,  183 => 132,  173 => 123,  169 => 120,  167 => 119,  163 => 117,  160 => 115,  87 => 44,  65 => 18,  58 => 14,  56 => 13,  53 => 12,  50 => 10,  46 => 8,  42 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/menu.css') }}\">
        {# Bootstrap #}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        {# Font awesome #}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {# Bootnsip: https://bootsnipp.com/snippets/featured/accordion-menu #}
        <nav class=\"navbar navbar-default navbar-static-top\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle navbar-toggle-sidebar collapsed\">
                    MENU
                    </button>
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">
                        Administration
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">      
                  {#   <form class=\"navbar-form navbar-left\" method=\"GET\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-search\"></i></button>
                    </form> #}
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"http://www.pingpong-labs.com\" target=\"_blank\">Retour sur le site</a></li>
                        <li class=\"dropdown \">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                Compte
                                <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li class=\"dropdown-header\">Reglages</li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>      

            <div class=\"container-fluid main-container\">
                <div class=\"col-md-2 sidebar\">
                    <div class=\"row\">
                        <!-- uncomment code for absolute positioning tweek see top comment in css -->
                        <div class=\"absolute-wrapper\"> </div>
                            <!-- Menu -->
                            <div class=\"side-menu\">
                                <nav class=\"navbar navbar-default\" role=\"navigation\">
                                    <!-- Main Menu -->
                                    <div class=\"side-menu-container\">
                                        <ul class=\"nav navbar-nav\">
                                            <!-- Dropdown-->
                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                                <a data-toggle=\"collapse\" href=\"#house\">
                                                    <span class=\"glyphicon glyphicon-home\"></span> Locations <span class=\"caret\"></span>
                                                </a>

                                                <!-- Dropdown level 1 -->
                                                <div id=\"house\" class=\"panel-collapse collapse\">
                                                    <div class=\"panel-body\">
                                                        <ul class=\"nav navbar-nav\">
                                                            <li><a href=\"#\">Ajouter une location</a></li>
                                                            <li><a href=\"#\">Liste des locations</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Dropdown-->
                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                                <a data-toggle=\"collapse\" href=\"#users\">
                                                    <span class=\"glyphicon glyphicon-user\"></span> Utilisateurs <span class=\"caret\"></span>
                                                </a>

                                                <!-- Dropdown level 1 -->
                                                <div id=\"users\" class=\"panel-collapse collapse\">
                                                    <div class=\"panel-body\">
                                                        <ul class=\"nav navbar-nav\">
                                                            <li><a href=\"#\">Voir les réservations</a></li>
                                                            <li><a href=\"#\">Link</a></li>
                                                            <li><a href=\"#\">Link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </nav>
                            </div>

                    </div> {#End row #}        
                </div> {#End sideBar col md 2#}
                <div class=\"col-md-10 content\">
                    <div class=\"container\">
                        {% block body %}{% endblock %}
                    </div>
                </div>
            </div> {#End container fluid main-container #}

        <footer class=\"text-center bottom\">
            <b>
             M.GARONDO
             R.MARIE-LUCE 
            &copy; 2017 
           </b>
        </footer>
        {# JQuery #}
        <script  src=\"https://code.jquery.com/jquery-3.2.1.min.js\"   integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"  crossorigin=\"anonymous\"></script>
        {# JQuery UI #}
        <script  src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\"  integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\"             crossorigin=\"anonymous\"></script>
        {# Bootstrap #}
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"> </script>

        <script src=\"{{asset('js/menu.js')}}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "back.html.twig", "C:\\wamp64\\www\\GuestRoom\\app\\Resources\\views\\back.html.twig");
    }
}
