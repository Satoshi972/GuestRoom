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
        $__internal_7335425c4b0850181396d81f4bc7a32e2f0105cec6e01e1e5874237157c9dd40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7335425c4b0850181396d81f4bc7a32e2f0105cec6e01e1e5874237157c9dd40->enter($__internal_7335425c4b0850181396d81f4bc7a32e2f0105cec6e01e1e5874237157c9dd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_2e330d8e0f0df215c4cd9acde625a2a87f457727e772ca464f62c89fa0a4dfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e330d8e0f0df215c4cd9acde625a2a87f457727e772ca464f62c89fa0a4dfcd->enter($__internal_2e330d8e0f0df215c4cd9acde625a2a87f457727e772ca464f62c89fa0a4dfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back.html.twig"));

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
                        Administrator
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">      
                    <form class=\"navbar-form navbar-left\" method=\"GET\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-search\"></i></button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"http://www.pingpong-labs.com\" target=\"_blank\">Visit Site</a></li>
                        <li class=\"dropdown \">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                Account
                                <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li class=\"dropdown-header\">SETTINGS</li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Logout</a></li>
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
                                            <li class=\"active\"><a href=\"#\"><span class=\"glyphicon glyphicon-dashboard\"></span> Dashboard</a></li>
                                            <li><a href=\"#\"><span class=\"glyphicon glyphicon-plane\"></span> Active Link</a></li>
                                            <li><a href=\"#\"><span class=\"glyphicon glyphicon-cloud\"></span> Link</a></li>

                                            <!-- Dropdown-->
                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                                <a data-toggle=\"collapse\" href=\"#dropdown-lvl1\">
                                                    <span class=\"glyphicon glyphicon-user\"></span> Sub Level <span class=\"caret\"></span>
                                                </a>

                                                <!-- Dropdown level 1 -->
                                                <div id=\"dropdown-lvl1\" class=\"panel-collapse collapse\">
                                                    <div class=\"panel-body\">
                                                        <ul class=\"nav navbar-nav\">
                                                            <li><a href=\"#\">Link</a></li>
                                                            <li><a href=\"#\">Link</a></li>
                                                            <li><a href=\"#\">Link</a></li>

                                                            <!-- Dropdown level 2 -->
                                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                                                <a data-toggle=\"collapse\" href=\"#dropdown-lvl2\">
                                                                    <span class=\"glyphicon glyphicon-off\"></span> Sub Level <span class=\"caret\"></span>
                                                                </a>
                                                                <div id=\"dropdown-lvl2\" class=\"panel-collapse collapse\">
                                                                    <div class=\"panel-body\">
                                                                        <ul class=\"nav navbar-nav\">
                                                                            <li><a href=\"#\">Link</a></li>
                                                                            <li><a href=\"#\">Link</a></li>
                                                                            <li><a href=\"#\">Link</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                            <li><a href=\"#\"><span class=\"glyphicon glyphicon-signal\"></span> Link</a></li>

                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </nav>
                            </div>

                    </div> ";
        // line 119
        echo "        
                </div> ";
        // line 121
        echo "                <div class=\"col-md-10 content\">
                    <div class=\"container\">
                        ";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 124
        echo "                    </div>
                </div>
            </div> ";
        // line 127
        echo "
        <footer class=\"text-center bottom\">
            <b>
             M.GARONDO
             R.MARIE-LUCE 
            &copy; 2017 
           </b>
        </footer>
        ";
        // line 136
        echo "        <script  src=\"https://code.jquery.com/jquery-3.2.1.min.js\"   integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"  crossorigin=\"anonymous\"></script>
        ";
        // line 138
        echo "        <script  src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\"  integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\"             crossorigin=\"anonymous\"></script>
        ";
        // line 140
        echo "        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"> </script>

        <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 144
        echo "    </body>
</html>
";
        
        $__internal_7335425c4b0850181396d81f4bc7a32e2f0105cec6e01e1e5874237157c9dd40->leave($__internal_7335425c4b0850181396d81f4bc7a32e2f0105cec6e01e1e5874237157c9dd40_prof);

        
        $__internal_2e330d8e0f0df215c4cd9acde625a2a87f457727e772ca464f62c89fa0a4dfcd->leave($__internal_2e330d8e0f0df215c4cd9acde625a2a87f457727e772ca464f62c89fa0a4dfcd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a299e4812840bf60f897d406e6fc8624a3cdd4fc73c328bb600883d278c3854c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a299e4812840bf60f897d406e6fc8624a3cdd4fc73c328bb600883d278c3854c->enter($__internal_a299e4812840bf60f897d406e6fc8624a3cdd4fc73c328bb600883d278c3854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92a1ce30497da32fb29d9b1e573bf9b47217328cc84017daf5b8cd5e6d25ebe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a1ce30497da32fb29d9b1e573bf9b47217328cc84017daf5b8cd5e6d25ebe3->enter($__internal_92a1ce30497da32fb29d9b1e573bf9b47217328cc84017daf5b8cd5e6d25ebe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_92a1ce30497da32fb29d9b1e573bf9b47217328cc84017daf5b8cd5e6d25ebe3->leave($__internal_92a1ce30497da32fb29d9b1e573bf9b47217328cc84017daf5b8cd5e6d25ebe3_prof);

        
        $__internal_a299e4812840bf60f897d406e6fc8624a3cdd4fc73c328bb600883d278c3854c->leave($__internal_a299e4812840bf60f897d406e6fc8624a3cdd4fc73c328bb600883d278c3854c_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_313136d73a1e03d538c2205a262578c78b6363851ea53e496db865065cc841a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313136d73a1e03d538c2205a262578c78b6363851ea53e496db865065cc841a7->enter($__internal_313136d73a1e03d538c2205a262578c78b6363851ea53e496db865065cc841a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_323beb398716265a2dace68cafab22d2556dd8abddc28b3c85a597f87f75120f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323beb398716265a2dace68cafab22d2556dd8abddc28b3c85a597f87f75120f->enter($__internal_323beb398716265a2dace68cafab22d2556dd8abddc28b3c85a597f87f75120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_323beb398716265a2dace68cafab22d2556dd8abddc28b3c85a597f87f75120f->leave($__internal_323beb398716265a2dace68cafab22d2556dd8abddc28b3c85a597f87f75120f_prof);

        
        $__internal_313136d73a1e03d538c2205a262578c78b6363851ea53e496db865065cc841a7->leave($__internal_313136d73a1e03d538c2205a262578c78b6363851ea53e496db865065cc841a7_prof);

    }

    // line 123
    public function block_body($context, array $blocks = array())
    {
        $__internal_0761f34252c3365cb00169d63b56faf1006ec45d2b568de6731a5bc7d0dca96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0761f34252c3365cb00169d63b56faf1006ec45d2b568de6731a5bc7d0dca96c->enter($__internal_0761f34252c3365cb00169d63b56faf1006ec45d2b568de6731a5bc7d0dca96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f867c723f70ea14b529261ecc56f6cda262c6f706f37d5ca089e242f93545d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f867c723f70ea14b529261ecc56f6cda262c6f706f37d5ca089e242f93545d1d->enter($__internal_f867c723f70ea14b529261ecc56f6cda262c6f706f37d5ca089e242f93545d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f867c723f70ea14b529261ecc56f6cda262c6f706f37d5ca089e242f93545d1d->leave($__internal_f867c723f70ea14b529261ecc56f6cda262c6f706f37d5ca089e242f93545d1d_prof);

        
        $__internal_0761f34252c3365cb00169d63b56faf1006ec45d2b568de6731a5bc7d0dca96c->leave($__internal_0761f34252c3365cb00169d63b56faf1006ec45d2b568de6731a5bc7d0dca96c_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16ffd764e0bff86266f72aa29db52a994c6818ecf7562f95861edb43e5a41482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ffd764e0bff86266f72aa29db52a994c6818ecf7562f95861edb43e5a41482->enter($__internal_16ffd764e0bff86266f72aa29db52a994c6818ecf7562f95861edb43e5a41482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_87c2447c759afcde0face49684d8c56005a9dea7ac011c7539fc5eab42d795a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c2447c759afcde0face49684d8c56005a9dea7ac011c7539fc5eab42d795a3->enter($__internal_87c2447c759afcde0face49684d8c56005a9dea7ac011c7539fc5eab42d795a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_87c2447c759afcde0face49684d8c56005a9dea7ac011c7539fc5eab42d795a3->leave($__internal_87c2447c759afcde0face49684d8c56005a9dea7ac011c7539fc5eab42d795a3_prof);

        
        $__internal_16ffd764e0bff86266f72aa29db52a994c6818ecf7562f95861edb43e5a41482->leave($__internal_16ffd764e0bff86266f72aa29db52a994c6818ecf7562f95861edb43e5a41482_prof);

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
        return array (  270 => 143,  253 => 123,  236 => 13,  218 => 5,  206 => 144,  204 => 143,  200 => 142,  196 => 140,  193 => 138,  190 => 136,  180 => 127,  176 => 124,  174 => 123,  170 => 121,  167 => 119,  58 => 14,  56 => 13,  53 => 12,  50 => 10,  46 => 8,  42 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                        Administrator
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">      
                    <form class=\"navbar-form navbar-left\" method=\"GET\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-search\"></i></button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"http://www.pingpong-labs.com\" target=\"_blank\">Visit Site</a></li>
                        <li class=\"dropdown \">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                Account
                                <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li class=\"dropdown-header\">SETTINGS</li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"\"><a href=\"#\">Other Link</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Logout</a></li>
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
                                            <li class=\"active\"><a href=\"#\"><span class=\"glyphicon glyphicon-dashboard\"></span> Dashboard</a></li>
                                            <li><a href=\"#\"><span class=\"glyphicon glyphicon-plane\"></span> Active Link</a></li>
                                            <li><a href=\"#\"><span class=\"glyphicon glyphicon-cloud\"></span> Link</a></li>

                                            <!-- Dropdown-->
                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                                <a data-toggle=\"collapse\" href=\"#dropdown-lvl1\">
                                                    <span class=\"glyphicon glyphicon-user\"></span> Sub Level <span class=\"caret\"></span>
                                                </a>

                                                <!-- Dropdown level 1 -->
                                                <div id=\"dropdown-lvl1\" class=\"panel-collapse collapse\">
                                                    <div class=\"panel-body\">
                                                        <ul class=\"nav navbar-nav\">
                                                            <li><a href=\"#\">Link</a></li>
                                                            <li><a href=\"#\">Link</a></li>
                                                            <li><a href=\"#\">Link</a></li>

                                                            <!-- Dropdown level 2 -->
                                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                                                <a data-toggle=\"collapse\" href=\"#dropdown-lvl2\">
                                                                    <span class=\"glyphicon glyphicon-off\"></span> Sub Level <span class=\"caret\"></span>
                                                                </a>
                                                                <div id=\"dropdown-lvl2\" class=\"panel-collapse collapse\">
                                                                    <div class=\"panel-body\">
                                                                        <ul class=\"nav navbar-nav\">
                                                                            <li><a href=\"#\">Link</a></li>
                                                                            <li><a href=\"#\">Link</a></li>
                                                                            <li><a href=\"#\">Link</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                            <li><a href=\"#\"><span class=\"glyphicon glyphicon-signal\"></span> Link</a></li>

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
