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
        $__internal_c97098e3093c889435deca6a9af9d1c6f2d1d4b01b17905a0579175b44b9b21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97098e3093c889435deca6a9af9d1c6f2d1d4b01b17905a0579175b44b9b21d->enter($__internal_c97098e3093c889435deca6a9af9d1c6f2d1d4b01b17905a0579175b44b9b21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4a5a45a3a939c7ce5f3b617816a5bb2ab78e10aa8da8c75c996b8009f93bdb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5a45a3a939c7ce5f3b617816a5bb2ab78e10aa8da8c75c996b8009f93bdb21->enter($__internal_4a5a45a3a939c7ce5f3b617816a5bb2ab78e10aa8da8c75c996b8009f93bdb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

              <div id = \"navbar\" class = \"flex-row\">

                  <div id = \"logo-wrap\" class = \"col-20\">

                      <a href = \"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img id = \"logo\" src = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Images/logo.png"), "html", null, true);
        echo "\" alt = \"Logo_NAO\" /></a>

                  </div>

                  <nav id = \"menu\" class = \"flex-row\">

                      <ul class = \"list-unstyled flex-row text-center\">

                          <a href = \"#comment-ça-marche\"><li class = \"active ccm\">Comment ça marche ?</li></a>
                          <a href = \"#qui-sommes-nous\"><li class = \"qsn\">Qui sommes-nous ?</li></a>
                          <a href = \"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><li>Carte interative</li></a>
                          <a href = \"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_observation");
        echo "\"><li>Ajouter une observation</li></a> <!-- Si utilisateur connecté -->
                          <a href = \"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\"><li>Tableau de bord</li></a> <!-- si admin connecté -->
                          <a href = \"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
        echo "\"><li>Liste utilisateurs</li></a> <!-- si admin connecté -->
                          <a href = \"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\"><li>Nous contacter</li></a>

                      </ul>

                  </nav>

                  <div id = \"header-end\" class = \"flex-column\">

                      <div id = \"header-social-medias\" class = \"flex-row\">

                          <a href = \"https://www.nao.instagram.com\"><i class=\"fa fa-2x fa-instagram\" aria-hidden=\"true\"></i></a>
                          <a href = \"https://www.nao.facebook.com\"><i class=\"fa fa-2x fa-facebook-square\" aria-hidden=\"true\"></i></a>

                      </div>

                      <div id = \"account\" class = \"flex-column\">

                          <!-- Ici seront placé les liens se connecter et mon compte en fonction des utilisateurs connectés ou non -->

                          <a href = \"#\">Mon compte</a>
                          <a href = \"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>

                      </div>

                      <div id = \"icon\" class = \"navbar-toggle collapsed\">

                          <div id = \"hamburger\"></div>

                      </div>

                  </div>

              </div>

          </header>

          <nav id = \"menu-xs\" class = \"flex-row\">

              <ul class = \"list-unstyled flex-column text-center\">

                  <a href = \"#comment-ça-marche\"><li class = \"active ccm\">Comment ça marche ?</li></a>
                  <a href = \"#qui-sommes-nous\"><li class = \"qsn\">Qui sommes-nous ?</li></a>
                  <a href = \"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><li>Carte interative</li></a>
                  <a href = \"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_observation");
        echo "\"><li>Ajouter une observation</li></a> <!-- Si utilisateur connecté -->
                  <a href = \"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\"><li>Tableau de bord</li></a> <!-- si admin connecté -->
                  <a href = \"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
        echo "\"><li>Liste utilisateurs</li></a> <!-- si admin connecté -->
                  <a href = \"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\"><li>Nous contacter</li></a>
                  <a href = \"#\"><li>Mon compte</li></a>
                  <a href = \"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"><li>Se connecter</li></a>

              </ul>

          </nav>

          ";
        // line 106
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "
        </div>

        <footer class = \"flex-row\">

            <a href = \"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legal_notice");
        echo "\">Mentions légales</a>
            <div id = \"footer-social-medias\">

                <a href = \"https://www.nao.instagram.com\"><i class=\"fa fa-3x fa-instagram\" aria-hidden=\"true\"></i></a>
                <a href = \"https://www.nao.facebook.com\"><i class=\"fa fa-3x fa-facebook-square\" aria-hidden=\"true\"></i></a>

            </div>
            <a href = \"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tos");
        echo "\">Conditions générales d'utilisation</a>

        </footer>

        ";
        // line 123
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "
    </body>

</html>
";
        
        $__internal_c97098e3093c889435deca6a9af9d1c6f2d1d4b01b17905a0579175b44b9b21d->leave($__internal_c97098e3093c889435deca6a9af9d1c6f2d1d4b01b17905a0579175b44b9b21d_prof);

        
        $__internal_4a5a45a3a939c7ce5f3b617816a5bb2ab78e10aa8da8c75c996b8009f93bdb21->leave($__internal_4a5a45a3a939c7ce5f3b617816a5bb2ab78e10aa8da8c75c996b8009f93bdb21_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_69ed1762b9fb6702990793ac45629b84741806a3ee2da43136f11476e1d6d816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ed1762b9fb6702990793ac45629b84741806a3ee2da43136f11476e1d6d816->enter($__internal_69ed1762b9fb6702990793ac45629b84741806a3ee2da43136f11476e1d6d816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e125fdb9f7a2bacbb0a62efd17a2c0496169da62d6f33a493606e6b1059ae1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e125fdb9f7a2bacbb0a62efd17a2c0496169da62d6f33a493606e6b1059ae1a3->enter($__internal_e125fdb9f7a2bacbb0a62efd17a2c0496169da62d6f33a493606e6b1059ae1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nos Amis Les Oiseaux";
        
        $__internal_e125fdb9f7a2bacbb0a62efd17a2c0496169da62d6f33a493606e6b1059ae1a3->leave($__internal_e125fdb9f7a2bacbb0a62efd17a2c0496169da62d6f33a493606e6b1059ae1a3_prof);

        
        $__internal_69ed1762b9fb6702990793ac45629b84741806a3ee2da43136f11476e1d6d816->leave($__internal_69ed1762b9fb6702990793ac45629b84741806a3ee2da43136f11476e1d6d816_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a3e7e5dac1e0e3d467816f8d4610e45c203c5afc1da6bccc100ddf9ef34d127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3e7e5dac1e0e3d467816f8d4610e45c203c5afc1da6bccc100ddf9ef34d127->enter($__internal_3a3e7e5dac1e0e3d467816f8d4610e45c203c5afc1da6bccc100ddf9ef34d127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_813b5406bd1abcbfcfb60b70375731cec05d0ca59e3a29cbd9dc246a6a02a8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813b5406bd1abcbfcfb60b70375731cec05d0ca59e3a29cbd9dc246a6a02a8c6->enter($__internal_813b5406bd1abcbfcfb60b70375731cec05d0ca59e3a29cbd9dc246a6a02a8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
            <link rel = \"stylesheet\" href = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" />
            <link rel = \"stylesheet\" href = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/base.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_813b5406bd1abcbfcfb60b70375731cec05d0ca59e3a29cbd9dc246a6a02a8c6->leave($__internal_813b5406bd1abcbfcfb60b70375731cec05d0ca59e3a29cbd9dc246a6a02a8c6_prof);

        
        $__internal_3a3e7e5dac1e0e3d467816f8d4610e45c203c5afc1da6bccc100ddf9ef34d127->leave($__internal_3a3e7e5dac1e0e3d467816f8d4610e45c203c5afc1da6bccc100ddf9ef34d127_prof);

    }

    // line 26
    public function block_messages($context, array $blocks = array())
    {
        $__internal_6cb9fd824dadfc2f80c00b8e7d63f2719792362c00c21ba14073349583868840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb9fd824dadfc2f80c00b8e7d63f2719792362c00c21ba14073349583868840->enter($__internal_6cb9fd824dadfc2f80c00b8e7d63f2719792362c00c21ba14073349583868840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_b8109f89e7b767975c078f7f48c029b5d1666950461ac8f0ce74fe9c9a42a6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8109f89e7b767975c078f7f48c029b5d1666950461ac8f0ce74fe9c9a42a6d5->enter($__internal_b8109f89e7b767975c078f7f48c029b5d1666950461ac8f0ce74fe9c9a42a6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 27
        echo "
              <div class = \"text-center\" id = \"flash-message\"></div>

          ";
        
        $__internal_b8109f89e7b767975c078f7f48c029b5d1666950461ac8f0ce74fe9c9a42a6d5->leave($__internal_b8109f89e7b767975c078f7f48c029b5d1666950461ac8f0ce74fe9c9a42a6d5_prof);

        
        $__internal_6cb9fd824dadfc2f80c00b8e7d63f2719792362c00c21ba14073349583868840->leave($__internal_6cb9fd824dadfc2f80c00b8e7d63f2719792362c00c21ba14073349583868840_prof);

    }

    // line 106
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1b7173190f5ca1fd2d05215b06300117169d881f2f02be943843376ec39f351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b7173190f5ca1fd2d05215b06300117169d881f2f02be943843376ec39f351->enter($__internal_f1b7173190f5ca1fd2d05215b06300117169d881f2f02be943843376ec39f351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10586ffa6232c4e57ab59421438b95c31fd79f518b3065c1e521b2216917d12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10586ffa6232c4e57ab59421438b95c31fd79f518b3065c1e521b2216917d12c->enter($__internal_10586ffa6232c4e57ab59421438b95c31fd79f518b3065c1e521b2216917d12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10586ffa6232c4e57ab59421438b95c31fd79f518b3065c1e521b2216917d12c->leave($__internal_10586ffa6232c4e57ab59421438b95c31fd79f518b3065c1e521b2216917d12c_prof);

        
        $__internal_f1b7173190f5ca1fd2d05215b06300117169d881f2f02be943843376ec39f351->leave($__internal_f1b7173190f5ca1fd2d05215b06300117169d881f2f02be943843376ec39f351_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8cb129e4b0a6938990048d843971056e90e32763fee9e4b45a13efbd6392dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8cb129e4b0a6938990048d843971056e90e32763fee9e4b45a13efbd6392dd9->enter($__internal_b8cb129e4b0a6938990048d843971056e90e32763fee9e4b45a13efbd6392dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_06337935b918fc0b1470d1b65c64f812ca99db4ff440c3ca332920ef130bee6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06337935b918fc0b1470d1b65c64f812ca99db4ff440c3ca332920ef130bee6d->enter($__internal_06337935b918fc0b1470d1b65c64f812ca99db4ff440c3ca332920ef130bee6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
            <script src = \"https://use.fontawesome.com/86150c9ee5.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>


        ";
        
        $__internal_06337935b918fc0b1470d1b65c64f812ca99db4ff440c3ca332920ef130bee6d->leave($__internal_06337935b918fc0b1470d1b65c64f812ca99db4ff440c3ca332920ef130bee6d_prof);

        
        $__internal_b8cb129e4b0a6938990048d843971056e90e32763fee9e4b45a13efbd6392dd9->leave($__internal_b8cb129e4b0a6938990048d843971056e90e32763fee9e4b45a13efbd6392dd9_prof);

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
        return array (  315 => 124,  306 => 123,  289 => 106,  276 => 27,  267 => 26,  254 => 16,  250 => 14,  241 => 13,  223 => 10,  209 => 132,  207 => 123,  200 => 119,  190 => 112,  183 => 107,  181 => 106,  172 => 100,  167 => 98,  163 => 97,  159 => 96,  155 => 95,  151 => 94,  126 => 72,  103 => 52,  99 => 51,  95 => 50,  91 => 49,  87 => 48,  72 => 38,  63 => 31,  61 => 26,  52 => 19,  50 => 13,  45 => 11,  41 => 10,  30 => 1,);
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

              <div id = \"navbar\" class = \"flex-row\">

                  <div id = \"logo-wrap\" class = \"col-20\">

                      <a href = \"{{ path('homepage') }}\"><img id = \"logo\" src = \"{{ asset('Images/logo.png') }}\" alt = \"Logo_NAO\" /></a>

                  </div>

                  <nav id = \"menu\" class = \"flex-row\">

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

                  <div id = \"header-end\" class = \"flex-column\">

                      <div id = \"header-social-medias\" class = \"flex-row\">

                          <a href = \"https://www.nao.instagram.com\"><i class=\"fa fa-2x fa-instagram\" aria-hidden=\"true\"></i></a>
                          <a href = \"https://www.nao.facebook.com\"><i class=\"fa fa-2x fa-facebook-square\" aria-hidden=\"true\"></i></a>

                      </div>

                      <div id = \"account\" class = \"flex-column\">

                          <!-- Ici seront placé les liens se connecter et mon compte en fonction des utilisateurs connectés ou non -->

                          <a href = \"#\">Mon compte</a>
                          <a href = \"{{ path('fos_user_security_login') }}\">Se connecter</a>

                      </div>

                      <div id = \"icon\" class = \"navbar-toggle collapsed\">

                          <div id = \"hamburger\"></div>

                      </div>

                  </div>

              </div>

          </header>

          <nav id = \"menu-xs\" class = \"flex-row\">

              <ul class = \"list-unstyled flex-column text-center\">

                  <a href = \"#comment-ça-marche\"><li class = \"active ccm\">Comment ça marche ?</li></a>
                  <a href = \"#qui-sommes-nous\"><li class = \"qsn\">Qui sommes-nous ?</li></a>
                  <a href = \"{{ path('map') }}\"><li>Carte interative</li></a>
                  <a href = \"{{ path('add_observation') }}\"><li>Ajouter une observation</li></a> <!-- Si utilisateur connecté -->
                  <a href = \"{{ path('dashboard') }}\"><li>Tableau de bord</li></a> <!-- si admin connecté -->
                  <a href = \"{{ path('user_list') }}\"><li>Liste utilisateurs</li></a> <!-- si admin connecté -->
                  <a href = \"{{ path('contact') }}\"><li>Nous contacter</li></a>
                  <a href = \"#\"><li>Mon compte</li></a>
                  <a href = \"{{ path('fos_user_security_login') }}\"><li>Se connecter</li></a>

              </ul>

          </nav>

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
