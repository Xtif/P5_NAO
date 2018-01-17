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
        $__internal_8446e14a185d5e587314f6f21bd1b6213e5660be5f69377e7cf6c0d3bc480a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8446e14a185d5e587314f6f21bd1b6213e5660be5f69377e7cf6c0d3bc480a80->enter($__internal_8446e14a185d5e587314f6f21bd1b6213e5660be5f69377e7cf6c0d3bc480a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6606907a8a5df7270f9e4406a9afc03a7ef83d55f2a158a2de942812ae7a9b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6606907a8a5df7270f9e4406a9afc03a7ef83d55f2a158a2de942812ae7a9b39->enter($__internal_6606907a8a5df7270f9e4406a9afc03a7ef83d55f2a158a2de942812ae7a9b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8446e14a185d5e587314f6f21bd1b6213e5660be5f69377e7cf6c0d3bc480a80->leave($__internal_8446e14a185d5e587314f6f21bd1b6213e5660be5f69377e7cf6c0d3bc480a80_prof);

        
        $__internal_6606907a8a5df7270f9e4406a9afc03a7ef83d55f2a158a2de942812ae7a9b39->leave($__internal_6606907a8a5df7270f9e4406a9afc03a7ef83d55f2a158a2de942812ae7a9b39_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_3edd6a3ebc8c1294245efa63aaa3628781c63d786938325eade09b2032fe2253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edd6a3ebc8c1294245efa63aaa3628781c63d786938325eade09b2032fe2253->enter($__internal_3edd6a3ebc8c1294245efa63aaa3628781c63d786938325eade09b2032fe2253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60783d902fbdd7de5515e175348e0a03ea3d8a0a093b61fffd866845649d5694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60783d902fbdd7de5515e175348e0a03ea3d8a0a093b61fffd866845649d5694->enter($__internal_60783d902fbdd7de5515e175348e0a03ea3d8a0a093b61fffd866845649d5694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nos Amis Les Oiseaux";
        
        $__internal_60783d902fbdd7de5515e175348e0a03ea3d8a0a093b61fffd866845649d5694->leave($__internal_60783d902fbdd7de5515e175348e0a03ea3d8a0a093b61fffd866845649d5694_prof);

        
        $__internal_3edd6a3ebc8c1294245efa63aaa3628781c63d786938325eade09b2032fe2253->leave($__internal_3edd6a3ebc8c1294245efa63aaa3628781c63d786938325eade09b2032fe2253_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87af36577f67297c17bbbdd541fc9f1cc0619fcd8927f8c51d7bfa4d68f899fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87af36577f67297c17bbbdd541fc9f1cc0619fcd8927f8c51d7bfa4d68f899fa->enter($__internal_87af36577f67297c17bbbdd541fc9f1cc0619fcd8927f8c51d7bfa4d68f899fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5732c51d88ba48a1a4aea1bc6a216321ee82fd43fdd1fb56e2b9603351287ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5732c51d88ba48a1a4aea1bc6a216321ee82fd43fdd1fb56e2b9603351287ba1->enter($__internal_5732c51d88ba48a1a4aea1bc6a216321ee82fd43fdd1fb56e2b9603351287ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
            <link rel = \"stylesheet\" href = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" />
            <link rel = \"stylesheet\" href = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/base.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_5732c51d88ba48a1a4aea1bc6a216321ee82fd43fdd1fb56e2b9603351287ba1->leave($__internal_5732c51d88ba48a1a4aea1bc6a216321ee82fd43fdd1fb56e2b9603351287ba1_prof);

        
        $__internal_87af36577f67297c17bbbdd541fc9f1cc0619fcd8927f8c51d7bfa4d68f899fa->leave($__internal_87af36577f67297c17bbbdd541fc9f1cc0619fcd8927f8c51d7bfa4d68f899fa_prof);

    }

    // line 26
    public function block_messages($context, array $blocks = array())
    {
        $__internal_480988061997309584dc498b9188baf8aec4f04c2c416f84b6472198bcffa91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480988061997309584dc498b9188baf8aec4f04c2c416f84b6472198bcffa91e->enter($__internal_480988061997309584dc498b9188baf8aec4f04c2c416f84b6472198bcffa91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_f085986bd2dd08669802f57e83886ecf76a3ab65f697e27992ec480fbf37234d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f085986bd2dd08669802f57e83886ecf76a3ab65f697e27992ec480fbf37234d->enter($__internal_f085986bd2dd08669802f57e83886ecf76a3ab65f697e27992ec480fbf37234d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 27
        echo "
              <div class = \"text-center\" id = \"flash-message\"></div>

          ";
        
        $__internal_f085986bd2dd08669802f57e83886ecf76a3ab65f697e27992ec480fbf37234d->leave($__internal_f085986bd2dd08669802f57e83886ecf76a3ab65f697e27992ec480fbf37234d_prof);

        
        $__internal_480988061997309584dc498b9188baf8aec4f04c2c416f84b6472198bcffa91e->leave($__internal_480988061997309584dc498b9188baf8aec4f04c2c416f84b6472198bcffa91e_prof);

    }

    // line 106
    public function block_body($context, array $blocks = array())
    {
        $__internal_3315d3485a680a7ff2c6b35c85e1ee9f16d16c1106bc667279cb17e3d023b29e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3315d3485a680a7ff2c6b35c85e1ee9f16d16c1106bc667279cb17e3d023b29e->enter($__internal_3315d3485a680a7ff2c6b35c85e1ee9f16d16c1106bc667279cb17e3d023b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2359a838dad7b8d45d28b0ac56b4a4f45c7c47fb80ec8932b27f4d2a809b134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2359a838dad7b8d45d28b0ac56b4a4f45c7c47fb80ec8932b27f4d2a809b134->enter($__internal_d2359a838dad7b8d45d28b0ac56b4a4f45c7c47fb80ec8932b27f4d2a809b134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d2359a838dad7b8d45d28b0ac56b4a4f45c7c47fb80ec8932b27f4d2a809b134->leave($__internal_d2359a838dad7b8d45d28b0ac56b4a4f45c7c47fb80ec8932b27f4d2a809b134_prof);

        
        $__internal_3315d3485a680a7ff2c6b35c85e1ee9f16d16c1106bc667279cb17e3d023b29e->leave($__internal_3315d3485a680a7ff2c6b35c85e1ee9f16d16c1106bc667279cb17e3d023b29e_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67bb2242b3a7a8e3bd4a49957cc30fb835b411d57e45dd04e47824b0f2a42e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bb2242b3a7a8e3bd4a49957cc30fb835b411d57e45dd04e47824b0f2a42e4b->enter($__internal_67bb2242b3a7a8e3bd4a49957cc30fb835b411d57e45dd04e47824b0f2a42e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d72cbab2121633cbe14779650b39610ac38d19677a730f10b78084eaf57977de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72cbab2121633cbe14779650b39610ac38d19677a730f10b78084eaf57977de->enter($__internal_d72cbab2121633cbe14779650b39610ac38d19677a730f10b78084eaf57977de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
            <script src = \"https://use.fontawesome.com/86150c9ee5.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>


        ";
        
        $__internal_d72cbab2121633cbe14779650b39610ac38d19677a730f10b78084eaf57977de->leave($__internal_d72cbab2121633cbe14779650b39610ac38d19677a730f10b78084eaf57977de_prof);

        
        $__internal_67bb2242b3a7a8e3bd4a49957cc30fb835b411d57e45dd04e47824b0f2a42e4b->leave($__internal_67bb2242b3a7a8e3bd4a49957cc30fb835b411d57e45dd04e47824b0f2a42e4b_prof);

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
