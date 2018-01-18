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
        $__internal_6d5ea7398f93cfb56b892787911514b48f7bd4aefbb4d02ec326878a69bd397e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5ea7398f93cfb56b892787911514b48f7bd4aefbb4d02ec326878a69bd397e->enter($__internal_6d5ea7398f93cfb56b892787911514b48f7bd4aefbb4d02ec326878a69bd397e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ad36f745aba428606e08667788337dbadc0901c2e4fbf91cb2e0ce63f1dbed57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad36f745aba428606e08667788337dbadc0901c2e4fbf91cb2e0ce63f1dbed57->enter($__internal_ad36f745aba428606e08667788337dbadc0901c2e4fbf91cb2e0ce63f1dbed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 133
        echo "
    </body>

</html>
";
        
        $__internal_6d5ea7398f93cfb56b892787911514b48f7bd4aefbb4d02ec326878a69bd397e->leave($__internal_6d5ea7398f93cfb56b892787911514b48f7bd4aefbb4d02ec326878a69bd397e_prof);

        
        $__internal_ad36f745aba428606e08667788337dbadc0901c2e4fbf91cb2e0ce63f1dbed57->leave($__internal_ad36f745aba428606e08667788337dbadc0901c2e4fbf91cb2e0ce63f1dbed57_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_b97ee61d466ecd7f9fa85fccdea5487e1729aae1c7c7bc90fce8906e7365bafc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97ee61d466ecd7f9fa85fccdea5487e1729aae1c7c7bc90fce8906e7365bafc->enter($__internal_b97ee61d466ecd7f9fa85fccdea5487e1729aae1c7c7bc90fce8906e7365bafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17428b0676cd88a5f61f2000fa156becae516111fd695a2d9da355cd09ca92a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17428b0676cd88a5f61f2000fa156becae516111fd695a2d9da355cd09ca92a5->enter($__internal_17428b0676cd88a5f61f2000fa156becae516111fd695a2d9da355cd09ca92a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nos Amis Les Oiseaux";
        
        $__internal_17428b0676cd88a5f61f2000fa156becae516111fd695a2d9da355cd09ca92a5->leave($__internal_17428b0676cd88a5f61f2000fa156becae516111fd695a2d9da355cd09ca92a5_prof);

        
        $__internal_b97ee61d466ecd7f9fa85fccdea5487e1729aae1c7c7bc90fce8906e7365bafc->leave($__internal_b97ee61d466ecd7f9fa85fccdea5487e1729aae1c7c7bc90fce8906e7365bafc_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebcf5612d8a84361882657c83bde420fcce5110f520aca014cd4fc5ea1ecd4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcf5612d8a84361882657c83bde420fcce5110f520aca014cd4fc5ea1ecd4b4->enter($__internal_ebcf5612d8a84361882657c83bde420fcce5110f520aca014cd4fc5ea1ecd4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8d51f2b0bf671f3a52411c5e9c46b69f08d6a82348299190b1770c2f536cbf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d51f2b0bf671f3a52411c5e9c46b69f08d6a82348299190b1770c2f536cbf9b->enter($__internal_8d51f2b0bf671f3a52411c5e9c46b69f08d6a82348299190b1770c2f536cbf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
            <link rel = \"stylesheet\" href = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" />
            <link rel = \"stylesheet\" href = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/base.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_8d51f2b0bf671f3a52411c5e9c46b69f08d6a82348299190b1770c2f536cbf9b->leave($__internal_8d51f2b0bf671f3a52411c5e9c46b69f08d6a82348299190b1770c2f536cbf9b_prof);

        
        $__internal_ebcf5612d8a84361882657c83bde420fcce5110f520aca014cd4fc5ea1ecd4b4->leave($__internal_ebcf5612d8a84361882657c83bde420fcce5110f520aca014cd4fc5ea1ecd4b4_prof);

    }

    // line 26
    public function block_messages($context, array $blocks = array())
    {
        $__internal_0a947756479c153bb9831865448f5b1d6c33b35ebd355e345df176d7edd59b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a947756479c153bb9831865448f5b1d6c33b35ebd355e345df176d7edd59b82->enter($__internal_0a947756479c153bb9831865448f5b1d6c33b35ebd355e345df176d7edd59b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_066d421b1ac149de4de6ba9b2b2d34c20942d0de9474a869755c61f0e559fc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066d421b1ac149de4de6ba9b2b2d34c20942d0de9474a869755c61f0e559fc67->enter($__internal_066d421b1ac149de4de6ba9b2b2d34c20942d0de9474a869755c61f0e559fc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 27
        echo "
              <div class = \"text-center\" id = \"flash-message\"></div>

          ";
        
        $__internal_066d421b1ac149de4de6ba9b2b2d34c20942d0de9474a869755c61f0e559fc67->leave($__internal_066d421b1ac149de4de6ba9b2b2d34c20942d0de9474a869755c61f0e559fc67_prof);

        
        $__internal_0a947756479c153bb9831865448f5b1d6c33b35ebd355e345df176d7edd59b82->leave($__internal_0a947756479c153bb9831865448f5b1d6c33b35ebd355e345df176d7edd59b82_prof);

    }

    // line 106
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbbbefd20f971637f705439efb01e4dd959ed1ac83d0cba61df7f66bfd2c042a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbbefd20f971637f705439efb01e4dd959ed1ac83d0cba61df7f66bfd2c042a->enter($__internal_dbbbefd20f971637f705439efb01e4dd959ed1ac83d0cba61df7f66bfd2c042a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88bb19d459b8503c6b6a87e1dcf905a2bef4d0f9d69fd6f6d4d80ab06742c58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bb19d459b8503c6b6a87e1dcf905a2bef4d0f9d69fd6f6d4d80ab06742c58c->enter($__internal_88bb19d459b8503c6b6a87e1dcf905a2bef4d0f9d69fd6f6d4d80ab06742c58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88bb19d459b8503c6b6a87e1dcf905a2bef4d0f9d69fd6f6d4d80ab06742c58c->leave($__internal_88bb19d459b8503c6b6a87e1dcf905a2bef4d0f9d69fd6f6d4d80ab06742c58c_prof);

        
        $__internal_dbbbefd20f971637f705439efb01e4dd959ed1ac83d0cba61df7f66bfd2c042a->leave($__internal_dbbbefd20f971637f705439efb01e4dd959ed1ac83d0cba61df7f66bfd2c042a_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1270fdf95ff9cb42bbc55a948fe85a757b9cd539bb1f8f400d726328030bc953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1270fdf95ff9cb42bbc55a948fe85a757b9cd539bb1f8f400d726328030bc953->enter($__internal_1270fdf95ff9cb42bbc55a948fe85a757b9cd539bb1f8f400d726328030bc953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e618e70532952483481491f01b9aa4ada14b63310fa38b71e622dd300683b2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e618e70532952483481491f01b9aa4ada14b63310fa38b71e622dd300683b2e5->enter($__internal_e618e70532952483481491f01b9aa4ada14b63310fa38b71e622dd300683b2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
            <script src = \"https://use.fontawesome.com/86150c9ee5.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src = \"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("JS/base.js"), "html", null, true);
        echo "\"></script>


        ";
        
        $__internal_e618e70532952483481491f01b9aa4ada14b63310fa38b71e622dd300683b2e5->leave($__internal_e618e70532952483481491f01b9aa4ada14b63310fa38b71e622dd300683b2e5_prof);

        
        $__internal_1270fdf95ff9cb42bbc55a948fe85a757b9cd539bb1f8f400d726328030bc953->leave($__internal_1270fdf95ff9cb42bbc55a948fe85a757b9cd539bb1f8f400d726328030bc953_prof);

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
        return array (  322 => 129,  315 => 124,  306 => 123,  289 => 106,  276 => 27,  267 => 26,  254 => 16,  250 => 14,  241 => 13,  223 => 10,  209 => 133,  207 => 123,  200 => 119,  190 => 112,  183 => 107,  181 => 106,  172 => 100,  167 => 98,  163 => 97,  159 => 96,  155 => 95,  151 => 94,  126 => 72,  103 => 52,  99 => 51,  95 => 50,  91 => 49,  87 => 48,  72 => 38,  63 => 31,  61 => 26,  52 => 19,  50 => 13,  45 => 11,  41 => 10,  30 => 1,);
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
            <script src = \"{{ asset('JS/base.js') }}\"></script>


        {% endblock %}

    </body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\OpenClassRooms-Projet-NAO\\app\\Resources\\views\\base.html.twig");
    }
}
