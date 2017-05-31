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
        $__internal_184ef799e692282adb03eadba96686929edd162475ee3199665ff8fa24cc5d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184ef799e692282adb03eadba96686929edd162475ee3199665ff8fa24cc5d1d->enter($__internal_184ef799e692282adb03eadba96686929edd162475ee3199665ff8fa24cc5d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_1f88c22a28ec665ceeccfd4027b69a4288ff7794f4b076f7bed810d7761fd89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f88c22a28ec665ceeccfd4027b69a4288ff7794f4b076f7bed810d7761fd89b->enter($__internal_1f88c22a28ec665ceeccfd4027b69a4288ff7794f4b076f7bed810d7761fd89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back.html.twig"));

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
                                                            <li><a href=\"#\">Voir les utilisateurs</a></li>
                                                            <li><a href=\"#\">Link</a></li>
                                                            <li><a href=\"#\">Link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> 

                                            <!-- Dropdown-->
                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                                <a data-toggle=\"collapse\" href=\"#res\">
                                                    <span class=\"glyphicon glyphicon-bookmark\"></span> Reservations <span class=\"caret\"></span>
                                                </a>

                                                <!-- Dropdown level 1 -->
                                                <div id=\"res\" class=\"panel-collapse collapse\">
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
        // line 133
        echo "        
                </div> ";
        // line 135
        echo "                <div class=\"col-md-10 content\">
                    <div class=\"container\">
                        ";
        // line 137
        $this->displayBlock('body', $context, $blocks);
        // line 138
        echo "                    </div>
                </div>
            </div> ";
        // line 141
        echo "
        <footer class=\"text-center bottom\">
            <b>
             M.GARONDO
             R.MARIE-LUCE 
            &copy; 2017 
           </b>
        </footer>
        ";
        // line 150
        echo "        <script  src=\"https://code.jquery.com/jquery-3.2.1.min.js\"   integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"  crossorigin=\"anonymous\"></script>
        ";
        // line 152
        echo "        <script  src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\"  integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\"             crossorigin=\"anonymous\"></script>
        ";
        // line 154
        echo "        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"> </script>

        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 157
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo "    </body>
</html>
";
        
        $__internal_184ef799e692282adb03eadba96686929edd162475ee3199665ff8fa24cc5d1d->leave($__internal_184ef799e692282adb03eadba96686929edd162475ee3199665ff8fa24cc5d1d_prof);

        
        $__internal_1f88c22a28ec665ceeccfd4027b69a4288ff7794f4b076f7bed810d7761fd89b->leave($__internal_1f88c22a28ec665ceeccfd4027b69a4288ff7794f4b076f7bed810d7761fd89b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_45d4abd04b5f0bd0645650ec58e9a04d0463ac3ec73b153525819f0d5d6d1b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d4abd04b5f0bd0645650ec58e9a04d0463ac3ec73b153525819f0d5d6d1b72->enter($__internal_45d4abd04b5f0bd0645650ec58e9a04d0463ac3ec73b153525819f0d5d6d1b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2987432f9ac02de91566fa89ce1e5897190033a70fefcb5094a795db0fe76aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2987432f9ac02de91566fa89ce1e5897190033a70fefcb5094a795db0fe76aa->enter($__internal_a2987432f9ac02de91566fa89ce1e5897190033a70fefcb5094a795db0fe76aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a2987432f9ac02de91566fa89ce1e5897190033a70fefcb5094a795db0fe76aa->leave($__internal_a2987432f9ac02de91566fa89ce1e5897190033a70fefcb5094a795db0fe76aa_prof);

        
        $__internal_45d4abd04b5f0bd0645650ec58e9a04d0463ac3ec73b153525819f0d5d6d1b72->leave($__internal_45d4abd04b5f0bd0645650ec58e9a04d0463ac3ec73b153525819f0d5d6d1b72_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe57c81e4a4d0b015bfd9911b83a85b127c9105e59d7cb070786bf9ff4057eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe57c81e4a4d0b015bfd9911b83a85b127c9105e59d7cb070786bf9ff4057eb3->enter($__internal_fe57c81e4a4d0b015bfd9911b83a85b127c9105e59d7cb070786bf9ff4057eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cd6a385dd85d9df59f81cc32252f4a71984f3e97347671baf3922680ee10d85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6a385dd85d9df59f81cc32252f4a71984f3e97347671baf3922680ee10d85f->enter($__internal_cd6a385dd85d9df59f81cc32252f4a71984f3e97347671baf3922680ee10d85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd6a385dd85d9df59f81cc32252f4a71984f3e97347671baf3922680ee10d85f->leave($__internal_cd6a385dd85d9df59f81cc32252f4a71984f3e97347671baf3922680ee10d85f_prof);

        
        $__internal_fe57c81e4a4d0b015bfd9911b83a85b127c9105e59d7cb070786bf9ff4057eb3->leave($__internal_fe57c81e4a4d0b015bfd9911b83a85b127c9105e59d7cb070786bf9ff4057eb3_prof);

    }

    // line 137
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e4cf4fc8db570c09e5631b45b67bd23f894e2fdfec9d2de544383b790438ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4cf4fc8db570c09e5631b45b67bd23f894e2fdfec9d2de544383b790438ba6->enter($__internal_2e4cf4fc8db570c09e5631b45b67bd23f894e2fdfec9d2de544383b790438ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8926a2197dadf8767055cea897144169ae648c8724bd3c9b5a7b67ebb6fbd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8926a2197dadf8767055cea897144169ae648c8724bd3c9b5a7b67ebb6fbd32->enter($__internal_a8926a2197dadf8767055cea897144169ae648c8724bd3c9b5a7b67ebb6fbd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8926a2197dadf8767055cea897144169ae648c8724bd3c9b5a7b67ebb6fbd32->leave($__internal_a8926a2197dadf8767055cea897144169ae648c8724bd3c9b5a7b67ebb6fbd32_prof);

        
        $__internal_2e4cf4fc8db570c09e5631b45b67bd23f894e2fdfec9d2de544383b790438ba6->leave($__internal_2e4cf4fc8db570c09e5631b45b67bd23f894e2fdfec9d2de544383b790438ba6_prof);

    }

    // line 157
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2d65b660b21dfbc70ecea61a35d675d797f45c736aae984fa7fa4051c4aea7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d65b660b21dfbc70ecea61a35d675d797f45c736aae984fa7fa4051c4aea7f->enter($__internal_d2d65b660b21dfbc70ecea61a35d675d797f45c736aae984fa7fa4051c4aea7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_10b28f34220748a3a033f140ce95a34ca38c13c29a54d530ae4962159ed7cbe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b28f34220748a3a033f140ce95a34ca38c13c29a54d530ae4962159ed7cbe6->enter($__internal_10b28f34220748a3a033f140ce95a34ca38c13c29a54d530ae4962159ed7cbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10b28f34220748a3a033f140ce95a34ca38c13c29a54d530ae4962159ed7cbe6->leave($__internal_10b28f34220748a3a033f140ce95a34ca38c13c29a54d530ae4962159ed7cbe6_prof);

        
        $__internal_d2d65b660b21dfbc70ecea61a35d675d797f45c736aae984fa7fa4051c4aea7f->leave($__internal_d2d65b660b21dfbc70ecea61a35d675d797f45c736aae984fa7fa4051c4aea7f_prof);

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
        return array (  281 => 157,  264 => 137,  247 => 13,  229 => 5,  217 => 158,  215 => 157,  211 => 156,  207 => 154,  204 => 152,  201 => 150,  191 => 141,  187 => 138,  185 => 137,  181 => 135,  178 => 133,  87 => 44,  65 => 18,  58 => 14,  56 => 13,  53 => 12,  50 => 10,  46 => 8,  42 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                                                            <li><a href=\"#\">Voir les utilisateurs</a></li>
                                                            <li><a href=\"#\">Link</a></li>
                                                            <li><a href=\"#\">Link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> 

                                            <!-- Dropdown-->
                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                                <a data-toggle=\"collapse\" href=\"#res\">
                                                    <span class=\"glyphicon glyphicon-bookmark\"></span> Reservations <span class=\"caret\"></span>
                                                </a>

                                                <!-- Dropdown level 1 -->
                                                <div id=\"res\" class=\"panel-collapse collapse\">
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
