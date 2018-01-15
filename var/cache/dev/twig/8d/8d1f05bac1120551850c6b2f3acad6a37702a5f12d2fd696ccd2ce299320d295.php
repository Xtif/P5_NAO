<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'messages' => array($this, 'block_messages'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3199982a6eeb61c56608588435a472d43864b776a3d097eff94f11693170cb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3199982a6eeb61c56608588435a472d43864b776a3d097eff94f11693170cb38->enter($__internal_3199982a6eeb61c56608588435a472d43864b776a3d097eff94f11693170cb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6bc7d0894159b6c5307fec76929a471c19081f6715ce8d03f4c37b6392553aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc7d0894159b6c5307fec76929a471c19081f6715ce8d03f4c37b6392553aa3->enter($__internal_6bc7d0894159b6c5307fec76929a471c19081f6715ce8d03f4c37b6392553aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

    <head>

        <meta charset = \"UTF-8\" />
        <meta http-equiv = \"X-UA-COMPATIBLE\" content = \"IE = edge\" />
        <meta name = \"viewport\" content = \"width = device-width, initial-scale = 1\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel = \"icon\" type = \"image/x-icon\" href = \"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Images/favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    </head>

    <body data-spy = \"scroll\" data-target = \"#wrap\">

        <div id = \"page-wrap\">

          ";
        // line 26
        $this->displayBlock('messages', $context, $blocks);
        // line 31
        echo "
          <header id = \"myScrollspy\" class = \"flex-row\">

              <div id = \"logo-wrap\" class = \"col-20\">

                  <a href = \"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img id = \"logo\" src = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Images/logo.png"), "html", null, true);
        echo "\" alt = \"Logo_NAO\" /></a>

              </div>

              <div id = \"icon\" class = \"navbar-toggle collapsed hidden-lg hidden-md hidden-sm\">

                  <div id = \"hamburger\"></div>

              </div>

              <nav id = \"menu\" class = \"col-60 flex-row\">

                  <ul class = \"list-unstyled flex-row text-center\">

                      <a href = \"#comment-ça-marche\"><li class = \"active ccm\">Comment ça marche ?</li></a>
                      <a href = \"#qui-sommes-nous\"><li class = \"qsn\">Qui sommes-nous ?</li></a>
                      <a href = \"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><li>Carte interative</li></a>
                      <a href = \"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_observation");
        echo "\"><li>Ajouter une observation</li></a> <!-- Si utilisateur connecté -->
                      <a href = \"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\"><li>Tableau de bord</li></a> <!-- si admin connecté -->
                      <a href = \"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
        echo "\"><li>Liste utilisateurs</li></a> <!-- si admin connecté -->
                      <a href = \"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\"><li>Nous contacter</li></a>

                  </ul>

              </nav>

              <div id = \"header-end\" class = \"flex-column col-20\">

                <div id = \"header-social-medias\">

                    <a href = \"https://www.nao.instagram.com\"><i class=\"fa fa-2x fa-instagram\" aria-hidden=\"true\"></i></a>
                    <a href = \"https://www.nao.facebook.com\"><i class=\"fa fa-2x fa-facebook-square\" aria-hidden=\"true\"></i></a>

                </div>

                <div id = \"account\" class = \"flex-column\">

                    <!-- Ici seront placé les liens se connecter et mon compte en fonction des utilisateurs connectés ou non -->

                    <a href = \"#\">Mon compte</a>
                    <a href = \"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>

                </div>

              </div>

          </header>

          ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "
        </div>

        <footer class = \"flex-row\">

            <a href = \"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legal_notice");
        echo "\">Mentions légales</a>
            <div id = \"footer-social-medias\">

                <a href = \"https://www.nao.instagram.com\"><i class=\"fa fa-3x fa-instagram\" aria-hidden=\"true\"></i></a>
                <a href = \"https://www.nao.facebook.com\"><i class=\"fa fa-3x fa-facebook-square\" aria-hidden=\"true\"></i></a>

            </div>
            <a href = \"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tos");
        echo "\">Conditions générales d'utilisation</a>

        </footer>

        ";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "
    </body>

</html>
";
        
        $__internal_3199982a6eeb61c56608588435a472d43864b776a3d097eff94f11693170cb38->leave($__internal_3199982a6eeb61c56608588435a472d43864b776a3d097eff94f11693170cb38_prof);

        
        $__internal_6bc7d0894159b6c5307fec76929a471c19081f6715ce8d03f4c37b6392553aa3->leave($__internal_6bc7d0894159b6c5307fec76929a471c19081f6715ce8d03f4c37b6392553aa3_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc98a71356ef4175c989fd823444523d7bd6ae25b9768a744c3246607d81f41c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc98a71356ef4175c989fd823444523d7bd6ae25b9768a744c3246607d81f41c->enter($__internal_bc98a71356ef4175c989fd823444523d7bd6ae25b9768a744c3246607d81f41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0dd62cbc7c562b5093b40dab3711703b58ef1faee042aff8aa8178cec1acd6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd62cbc7c562b5093b40dab3711703b58ef1faee042aff8aa8178cec1acd6c4->enter($__internal_0dd62cbc7c562b5093b40dab3711703b58ef1faee042aff8aa8178cec1acd6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nos Amis Les Oiseaux";
        
        $__internal_0dd62cbc7c562b5093b40dab3711703b58ef1faee042aff8aa8178cec1acd6c4->leave($__internal_0dd62cbc7c562b5093b40dab3711703b58ef1faee042aff8aa8178cec1acd6c4_prof);

        
        $__internal_bc98a71356ef4175c989fd823444523d7bd6ae25b9768a744c3246607d81f41c->leave($__internal_bc98a71356ef4175c989fd823444523d7bd6ae25b9768a744c3246607d81f41c_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c9231be28a133d31665d1696c8db11ace53ec2a418cc2793d7e8b0db34718be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9231be28a133d31665d1696c8db11ace53ec2a418cc2793d7e8b0db34718be9->enter($__internal_c9231be28a133d31665d1696c8db11ace53ec2a418cc2793d7e8b0db34718be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f73b08215a2294936cc260d63885fc4051f30334364ddaf7e71e94b7f9458401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73b08215a2294936cc260d63885fc4051f30334364ddaf7e71e94b7f9458401->enter($__internal_f73b08215a2294936cc260d63885fc4051f30334364ddaf7e71e94b7f9458401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
            <link rel = \"stylesheet\" href = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" />
            <link rel = \"stylesheet\" href = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/base.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_f73b08215a2294936cc260d63885fc4051f30334364ddaf7e71e94b7f9458401->leave($__internal_f73b08215a2294936cc260d63885fc4051f30334364ddaf7e71e94b7f9458401_prof);

        
        $__internal_c9231be28a133d31665d1696c8db11ace53ec2a418cc2793d7e8b0db34718be9->leave($__internal_c9231be28a133d31665d1696c8db11ace53ec2a418cc2793d7e8b0db34718be9_prof);

    }

    // line 26
    public function block_messages($context, array $blocks = array())
    {
        $__internal_48c9a1a66221d046b0fd7714ff5d72e6c357df75a63a9f706152b7ecdc6e1e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c9a1a66221d046b0fd7714ff5d72e6c357df75a63a9f706152b7ecdc6e1e3d->enter($__internal_48c9a1a66221d046b0fd7714ff5d72e6c357df75a63a9f706152b7ecdc6e1e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_2394652247e2282bb58f9a93c41c96c18e4392cf6515a4a6973e8d04c12bd382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2394652247e2282bb58f9a93c41c96c18e4392cf6515a4a6973e8d04c12bd382->enter($__internal_2394652247e2282bb58f9a93c41c96c18e4392cf6515a4a6973e8d04c12bd382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 27
        echo "
              <div class = \"text-center\" id = \"flash-message\"></div>

          ";
        
        $__internal_2394652247e2282bb58f9a93c41c96c18e4392cf6515a4a6973e8d04c12bd382->leave($__internal_2394652247e2282bb58f9a93c41c96c18e4392cf6515a4a6973e8d04c12bd382_prof);

        
        $__internal_48c9a1a66221d046b0fd7714ff5d72e6c357df75a63a9f706152b7ecdc6e1e3d->leave($__internal_48c9a1a66221d046b0fd7714ff5d72e6c357df75a63a9f706152b7ecdc6e1e3d_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b0fee8dc4575c5307a8890961632a95ee7569a3aa0a77f9724b60f33f48562b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0fee8dc4575c5307a8890961632a95ee7569a3aa0a77f9724b60f33f48562b->enter($__internal_2b0fee8dc4575c5307a8890961632a95ee7569a3aa0a77f9724b60f33f48562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9399b5b87d6b8483c796455d0e843d5f01be2494accb894339edbae3d79dbede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9399b5b87d6b8483c796455d0e843d5f01be2494accb894339edbae3d79dbede->enter($__internal_9399b5b87d6b8483c796455d0e843d5f01be2494accb894339edbae3d79dbede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9399b5b87d6b8483c796455d0e843d5f01be2494accb894339edbae3d79dbede->leave($__internal_9399b5b87d6b8483c796455d0e843d5f01be2494accb894339edbae3d79dbede_prof);

        
        $__internal_2b0fee8dc4575c5307a8890961632a95ee7569a3aa0a77f9724b60f33f48562b->leave($__internal_2b0fee8dc4575c5307a8890961632a95ee7569a3aa0a77f9724b60f33f48562b_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efa9d80cae3daa91b84edb35c17665819953d69b0597c26362302e501c4f310d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa9d80cae3daa91b84edb35c17665819953d69b0597c26362302e501c4f310d->enter($__internal_efa9d80cae3daa91b84edb35c17665819953d69b0597c26362302e501c4f310d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_87d55edd73a83c59cc6307d9f2cd351b751ea58579ef3c4731b7598b0b678b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d55edd73a83c59cc6307d9f2cd351b751ea58579ef3c4731b7598b0b678b12->enter($__internal_87d55edd73a83c59cc6307d9f2cd351b751ea58579ef3c4731b7598b0b678b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
            <script src = \"https://use.fontawesome.com/86150c9ee5.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>


        ";
        
        $__internal_87d55edd73a83c59cc6307d9f2cd351b751ea58579ef3c4731b7598b0b678b12->leave($__internal_87d55edd73a83c59cc6307d9f2cd351b751ea58579ef3c4731b7598b0b678b12_prof);

        
        $__internal_efa9d80cae3daa91b84edb35c17665819953d69b0597c26362302e501c4f310d->leave($__internal_efa9d80cae3daa91b84edb35c17665819953d69b0597c26362302e501c4f310d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 102,  266 => 101,  249 => 84,  236 => 27,  227 => 26,  214 => 16,  210 => 14,  201 => 13,  183 => 10,  169 => 110,  167 => 101,  160 => 97,  150 => 90,  143 => 85,  141 => 84,  130 => 76,  107 => 56,  103 => 55,  99 => 54,  95 => 53,  91 => 52,  70 => 36,  63 => 31,  61 => 26,  52 => 19,  50 => 13,  45 => 11,  41 => 10,  30 => 1,);
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

        <meta charset = \"UTF-8\" />
        <meta http-equiv = \"X-UA-COMPATIBLE\" content = \"IE = edge\" />
        <meta name = \"viewport\" content = \"width = device-width, initial-scale = 1\" />
        <title>{% block title %}Nos Amis Les Oiseaux{% endblock %}</title>
        <link rel = \"icon\" type = \"image/x-icon\" href = \"{{ asset('Images/favicon.ico') }}\" />

        {% block stylesheets %}

            <link rel = \"stylesheet\" href = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" />
            <link rel = \"stylesheet\" href = \"{{ asset('CSS/base.css') }}\" />

        {% endblock %}

    </head>

    <body data-spy = \"scroll\" data-target = \"#wrap\">

        <div id = \"page-wrap\">

          {% block messages %}

              <div class = \"text-center\" id = \"flash-message\"></div>

          {% endblock %}

          <header id = \"myScrollspy\" class = \"flex-row\">

              <div id = \"logo-wrap\" class = \"col-20\">

                  <a href = \"{{ path('homepage') }}\"><img id = \"logo\" src = \"{{ asset('Images/logo.png') }}\" alt = \"Logo_NAO\" /></a>

              </div>

              <div id = \"icon\" class = \"navbar-toggle collapsed hidden-lg hidden-md hidden-sm\">

                  <div id = \"hamburger\"></div>

              </div>

              <nav id = \"menu\" class = \"col-60 flex-row\">

                  <ul class = \"list-unstyled flex-row text-center\">

                      <a href = \"#comment-ça-marche\"><li class = \"active ccm\">Comment ça marche ?</li></a>
                      <a href = \"#qui-sommes-nous\"><li class = \"qsn\">Qui sommes-nous ?</li></a>
                      <a href = \"{{ path('map') }}\"><li>Carte interative</li></a>
                      <a href = \"{{ path('add_observation') }}\"><li>Ajouter une observation</li></a> <!-- Si utilisateur connecté -->
                      <a href = \"{{ path('dashboard') }}\"><li>Tableau de bord</li></a> <!-- si admin connecté -->
                      <a href = \"{{ path('user_list') }}\"><li>Liste utilisateurs</li></a> <!-- si admin connecté -->
                      <a href = \"{{ path('contact') }}\"><li>Nous contacter</li></a>

                  </ul>

              </nav>

              <div id = \"header-end\" class = \"flex-column col-20\">

                <div id = \"header-social-medias\">

                    <a href = \"https://www.nao.instagram.com\"><i class=\"fa fa-2x fa-instagram\" aria-hidden=\"true\"></i></a>
                    <a href = \"https://www.nao.facebook.com\"><i class=\"fa fa-2x fa-facebook-square\" aria-hidden=\"true\"></i></a>

                </div>

                <div id = \"account\" class = \"flex-column\">

                    <!-- Ici seront placé les liens se connecter et mon compte en fonction des utilisateurs connectés ou non -->

                    <a href = \"#\">Mon compte</a>
                    <a href = \"{{ path('fos_user_security_login') }}\">Se connecter</a>

                </div>

              </div>

          </header>

          {% block body %}{% endblock %}

        </div>

        <footer class = \"flex-row\">

            <a href = \"{{ path('legal_notice') }}\">Mentions légales</a>
            <div id = \"footer-social-medias\">

                <a href = \"https://www.nao.instagram.com\"><i class=\"fa fa-3x fa-instagram\" aria-hidden=\"true\"></i></a>
                <a href = \"https://www.nao.facebook.com\"><i class=\"fa fa-3x fa-facebook-square\" aria-hidden=\"true\"></i></a>

            </div>
            <a href = \"{{ path('tos') }}\">Conditions générales d'utilisation</a>

        </footer>

        {% block javascripts %}

            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
            <script src = \"https://use.fontawesome.com/86150c9ee5.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>


        {% endblock %}

    </body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\OpenClassRooms-Projet-NAO\\app\\Resources\\views\\base.html.twig");
    }
}
