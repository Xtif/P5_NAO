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
        $__internal_dff374f26f3ecea6914fc78fa6b62ca748320946980eb01a1bcae64528373f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff374f26f3ecea6914fc78fa6b62ca748320946980eb01a1bcae64528373f61->enter($__internal_dff374f26f3ecea6914fc78fa6b62ca748320946980eb01a1bcae64528373f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b86cc4b378653b4ca24d38c11a4ba4ddf0d4b47eab15a278eafec0a5291e9316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86cc4b378653b4ca24d38c11a4ba4ddf0d4b47eab15a278eafec0a5291e9316->enter($__internal_b86cc4b378653b4ca24d38c11a4ba4ddf0d4b47eab15a278eafec0a5291e9316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_dff374f26f3ecea6914fc78fa6b62ca748320946980eb01a1bcae64528373f61->leave($__internal_dff374f26f3ecea6914fc78fa6b62ca748320946980eb01a1bcae64528373f61_prof);

        
        $__internal_b86cc4b378653b4ca24d38c11a4ba4ddf0d4b47eab15a278eafec0a5291e9316->leave($__internal_b86cc4b378653b4ca24d38c11a4ba4ddf0d4b47eab15a278eafec0a5291e9316_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_edcebfa616583e550a47d7e2d3fa6abd43c918ca8cb639223750f9f25e6892b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edcebfa616583e550a47d7e2d3fa6abd43c918ca8cb639223750f9f25e6892b6->enter($__internal_edcebfa616583e550a47d7e2d3fa6abd43c918ca8cb639223750f9f25e6892b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96c092e5dfb012125070acd9bd9e63ea7021713a3d64536e2f2b0f0ce52817f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c092e5dfb012125070acd9bd9e63ea7021713a3d64536e2f2b0f0ce52817f0->enter($__internal_96c092e5dfb012125070acd9bd9e63ea7021713a3d64536e2f2b0f0ce52817f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nos Amis Les Oiseaux";
        
        $__internal_96c092e5dfb012125070acd9bd9e63ea7021713a3d64536e2f2b0f0ce52817f0->leave($__internal_96c092e5dfb012125070acd9bd9e63ea7021713a3d64536e2f2b0f0ce52817f0_prof);

        
        $__internal_edcebfa616583e550a47d7e2d3fa6abd43c918ca8cb639223750f9f25e6892b6->leave($__internal_edcebfa616583e550a47d7e2d3fa6abd43c918ca8cb639223750f9f25e6892b6_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6b05568c7c0e26fea567a961ac57f3be9aa8f36bd166c10177fd88f36a708fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b05568c7c0e26fea567a961ac57f3be9aa8f36bd166c10177fd88f36a708fb->enter($__internal_a6b05568c7c0e26fea567a961ac57f3be9aa8f36bd166c10177fd88f36a708fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_373967cd2b91fc2578d536871357bed0be93142b2bdfaace049de5df42a888c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373967cd2b91fc2578d536871357bed0be93142b2bdfaace049de5df42a888c1->enter($__internal_373967cd2b91fc2578d536871357bed0be93142b2bdfaace049de5df42a888c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
            <link rel = \"stylesheet\" href = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" />
            <link rel = \"stylesheet\" href = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/base.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_373967cd2b91fc2578d536871357bed0be93142b2bdfaace049de5df42a888c1->leave($__internal_373967cd2b91fc2578d536871357bed0be93142b2bdfaace049de5df42a888c1_prof);

        
        $__internal_a6b05568c7c0e26fea567a961ac57f3be9aa8f36bd166c10177fd88f36a708fb->leave($__internal_a6b05568c7c0e26fea567a961ac57f3be9aa8f36bd166c10177fd88f36a708fb_prof);

    }

    // line 26
    public function block_messages($context, array $blocks = array())
    {
        $__internal_294ee17d15424fd641981f068c62c31c344ace206c0b3be04d3ee3d4b18aa17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294ee17d15424fd641981f068c62c31c344ace206c0b3be04d3ee3d4b18aa17f->enter($__internal_294ee17d15424fd641981f068c62c31c344ace206c0b3be04d3ee3d4b18aa17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_c96fa6083e649d22ac1145e3c3e6712aca9794882510f66782557c966f1b199b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96fa6083e649d22ac1145e3c3e6712aca9794882510f66782557c966f1b199b->enter($__internal_c96fa6083e649d22ac1145e3c3e6712aca9794882510f66782557c966f1b199b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 27
        echo "
              <div class = \"text-center\" id = \"flash-message\"></div>

          ";
        
        $__internal_c96fa6083e649d22ac1145e3c3e6712aca9794882510f66782557c966f1b199b->leave($__internal_c96fa6083e649d22ac1145e3c3e6712aca9794882510f66782557c966f1b199b_prof);

        
        $__internal_294ee17d15424fd641981f068c62c31c344ace206c0b3be04d3ee3d4b18aa17f->leave($__internal_294ee17d15424fd641981f068c62c31c344ace206c0b3be04d3ee3d4b18aa17f_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_78df6afed48ea3f3ada6919f0eb0aad484869ab67199677bc386f2d4ccddd5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78df6afed48ea3f3ada6919f0eb0aad484869ab67199677bc386f2d4ccddd5f4->enter($__internal_78df6afed48ea3f3ada6919f0eb0aad484869ab67199677bc386f2d4ccddd5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7573dab6e8746961c8c79e9fb45a80136090a494a704bec33dc9bcb5f39c0bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7573dab6e8746961c8c79e9fb45a80136090a494a704bec33dc9bcb5f39c0bc9->enter($__internal_7573dab6e8746961c8c79e9fb45a80136090a494a704bec33dc9bcb5f39c0bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7573dab6e8746961c8c79e9fb45a80136090a494a704bec33dc9bcb5f39c0bc9->leave($__internal_7573dab6e8746961c8c79e9fb45a80136090a494a704bec33dc9bcb5f39c0bc9_prof);

        
        $__internal_78df6afed48ea3f3ada6919f0eb0aad484869ab67199677bc386f2d4ccddd5f4->leave($__internal_78df6afed48ea3f3ada6919f0eb0aad484869ab67199677bc386f2d4ccddd5f4_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e59d51207fcafcb7ad63b9c8f5b2e248f71bf51d7ca4137b8f437f62306d0857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59d51207fcafcb7ad63b9c8f5b2e248f71bf51d7ca4137b8f437f62306d0857->enter($__internal_e59d51207fcafcb7ad63b9c8f5b2e248f71bf51d7ca4137b8f437f62306d0857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a2cb4478a9df65789255bef51610656526237a828891f709001958d413d2e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2cb4478a9df65789255bef51610656526237a828891f709001958d413d2e52->enter($__internal_2a2cb4478a9df65789255bef51610656526237a828891f709001958d413d2e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
            <script src = \"https://use.fontawesome.com/86150c9ee5.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>


        ";
        
        $__internal_2a2cb4478a9df65789255bef51610656526237a828891f709001958d413d2e52->leave($__internal_2a2cb4478a9df65789255bef51610656526237a828891f709001958d413d2e52_prof);

        
        $__internal_e59d51207fcafcb7ad63b9c8f5b2e248f71bf51d7ca4137b8f437f62306d0857->leave($__internal_e59d51207fcafcb7ad63b9c8f5b2e248f71bf51d7ca4137b8f437f62306d0857_prof);

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
