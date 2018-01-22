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
            'API' => array($this, 'block_API'),
            'messages' => array($this, 'block_messages'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef1d3fa5a2a1d029606dda203beb5cbcb45e697abeacf6313820e6e6be8e68a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1d3fa5a2a1d029606dda203beb5cbcb45e697abeacf6313820e6e6be8e68a8->enter($__internal_ef1d3fa5a2a1d029606dda203beb5cbcb45e697abeacf6313820e6e6be8e68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_81b5667a429dbfcd61fd97763dab57751459c64d8c91a4984852fdd33a2e97bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b5667a429dbfcd61fd97763dab57751459c64d8c91a4984852fdd33a2e97bb->enter($__internal_81b5667a429dbfcd61fd97763dab57751459c64d8c91a4984852fdd33a2e97bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 20
        $this->displayBlock('API', $context, $blocks);
        // line 21
        echo "
    </head>

    <body data-spy = \"scroll\" data-target = \"#wrap\">

        <div id = \"page-wrap\">

          ";
        // line 28
        $this->displayBlock('messages', $context, $blocks);
        // line 33
        echo "
          <header id = \"myScrollspy\" class = \"flex-row\">

              <div id = \"navbar\" class = \"flex-row\">

                  <div id = \"logo-wrap\" class = \"col-20\">

                      <a href = \"";
        // line 40
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
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><li>Carte interative</li></a>
                          <a href = \"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_observation");
        echo "\"><li>Ajouter une observation</li></a> <!-- Si utilisateur connecté -->
                          <a href = \"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\"><li>Tableau de bord</li></a> <!-- si admin connecté -->
                          <a href = \"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
        echo "\"><li>Liste utilisateurs</li></a> <!-- si admin connecté -->
                          <a href = \"";
        // line 54
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
        // line 74
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
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><li>Carte interative</li></a>
                  <a href = \"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_observation");
        echo "\"><li>Ajouter une observation</li></a> <!-- Si utilisateur connecté -->
                  <a href = \"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\"><li>Tableau de bord</li></a> <!-- si admin connecté -->
                  <a href = \"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
        echo "\"><li>Liste utilisateurs</li></a> <!-- si admin connecté -->
                  <a href = \"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\"><li>Nous contacter</li></a>
                  <a href = \"#\"><li>Mon compte</li></a>
                  <a href = \"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"><li>Se connecter</li></a>

              </ul>

          </nav>

          ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "
        </div>

        <footer class = \"flex-row\">

            <a href = \"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legal_notice");
        echo "\">Mentions légales</a>
            <div id = \"footer-social-medias\">

                <a href = \"https://www.nao.instagram.com\"><i class=\"fa fa-3x fa-instagram\" aria-hidden=\"true\"></i></a>
                <a href = \"https://www.nao.facebook.com\"><i class=\"fa fa-3x fa-facebook-square\" aria-hidden=\"true\"></i></a>

            </div>
            <a href = \"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tos");
        echo "\">Conditions générales d'utilisation</a>

        </footer>

        ";
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "
    </body>

</html>
";
        
        $__internal_ef1d3fa5a2a1d029606dda203beb5cbcb45e697abeacf6313820e6e6be8e68a8->leave($__internal_ef1d3fa5a2a1d029606dda203beb5cbcb45e697abeacf6313820e6e6be8e68a8_prof);

        
        $__internal_81b5667a429dbfcd61fd97763dab57751459c64d8c91a4984852fdd33a2e97bb->leave($__internal_81b5667a429dbfcd61fd97763dab57751459c64d8c91a4984852fdd33a2e97bb_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_77ea3671371aa652ae1065096f87b80a8b02e5f94df3a04771b326d72f665d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ea3671371aa652ae1065096f87b80a8b02e5f94df3a04771b326d72f665d72->enter($__internal_77ea3671371aa652ae1065096f87b80a8b02e5f94df3a04771b326d72f665d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b3d948c60f135375872ed75d05b4cf64b88323776226a698a7b170fe2a8fa71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3d948c60f135375872ed75d05b4cf64b88323776226a698a7b170fe2a8fa71->enter($__internal_8b3d948c60f135375872ed75d05b4cf64b88323776226a698a7b170fe2a8fa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nos Amis Les Oiseaux";
        
        $__internal_8b3d948c60f135375872ed75d05b4cf64b88323776226a698a7b170fe2a8fa71->leave($__internal_8b3d948c60f135375872ed75d05b4cf64b88323776226a698a7b170fe2a8fa71_prof);

        
        $__internal_77ea3671371aa652ae1065096f87b80a8b02e5f94df3a04771b326d72f665d72->leave($__internal_77ea3671371aa652ae1065096f87b80a8b02e5f94df3a04771b326d72f665d72_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21789148010a5ba9297e553aef4c100063a10bf951257cbcc021738661744d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21789148010a5ba9297e553aef4c100063a10bf951257cbcc021738661744d13->enter($__internal_21789148010a5ba9297e553aef4c100063a10bf951257cbcc021738661744d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a891e34b588a2e29738a1898d4b6f9aa8e6a694b07546958ddba9c894a14e9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a891e34b588a2e29738a1898d4b6f9aa8e6a694b07546958ddba9c894a14e9cd->enter($__internal_a891e34b588a2e29738a1898d4b6f9aa8e6a694b07546958ddba9c894a14e9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
            <link rel = \"stylesheet\" href = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" />
            <link rel = \"stylesheet\" href = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/base.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_a891e34b588a2e29738a1898d4b6f9aa8e6a694b07546958ddba9c894a14e9cd->leave($__internal_a891e34b588a2e29738a1898d4b6f9aa8e6a694b07546958ddba9c894a14e9cd_prof);

        
        $__internal_21789148010a5ba9297e553aef4c100063a10bf951257cbcc021738661744d13->leave($__internal_21789148010a5ba9297e553aef4c100063a10bf951257cbcc021738661744d13_prof);

    }

    // line 20
    public function block_API($context, array $blocks = array())
    {
        $__internal_9829eede8500cd58b0fcde2ebc0552ab00c2957bb29d60ee5a81d5c0afe2422f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9829eede8500cd58b0fcde2ebc0552ab00c2957bb29d60ee5a81d5c0afe2422f->enter($__internal_9829eede8500cd58b0fcde2ebc0552ab00c2957bb29d60ee5a81d5c0afe2422f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "API"));

        $__internal_5ef483caf3342477bbefaf8b8b4b8690a2a89537c66794303ff179e505d8afee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef483caf3342477bbefaf8b8b4b8690a2a89537c66794303ff179e505d8afee->enter($__internal_5ef483caf3342477bbefaf8b8b4b8690a2a89537c66794303ff179e505d8afee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "API"));

        
        $__internal_5ef483caf3342477bbefaf8b8b4b8690a2a89537c66794303ff179e505d8afee->leave($__internal_5ef483caf3342477bbefaf8b8b4b8690a2a89537c66794303ff179e505d8afee_prof);

        
        $__internal_9829eede8500cd58b0fcde2ebc0552ab00c2957bb29d60ee5a81d5c0afe2422f->leave($__internal_9829eede8500cd58b0fcde2ebc0552ab00c2957bb29d60ee5a81d5c0afe2422f_prof);

    }

    // line 28
    public function block_messages($context, array $blocks = array())
    {
        $__internal_12224ff3f0f6b03b37d86922f34c3aea1cad52e8ea973a01b60709618e084b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12224ff3f0f6b03b37d86922f34c3aea1cad52e8ea973a01b60709618e084b98->enter($__internal_12224ff3f0f6b03b37d86922f34c3aea1cad52e8ea973a01b60709618e084b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_049fe3f406cea71d9755f9833ea0ad7c83a192a3f094946444a5742a7286626d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049fe3f406cea71d9755f9833ea0ad7c83a192a3f094946444a5742a7286626d->enter($__internal_049fe3f406cea71d9755f9833ea0ad7c83a192a3f094946444a5742a7286626d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 29
        echo "
              <div class = \"text-center\" id = \"flash-message\"></div>

          ";
        
        $__internal_049fe3f406cea71d9755f9833ea0ad7c83a192a3f094946444a5742a7286626d->leave($__internal_049fe3f406cea71d9755f9833ea0ad7c83a192a3f094946444a5742a7286626d_prof);

        
        $__internal_12224ff3f0f6b03b37d86922f34c3aea1cad52e8ea973a01b60709618e084b98->leave($__internal_12224ff3f0f6b03b37d86922f34c3aea1cad52e8ea973a01b60709618e084b98_prof);

    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        $__internal_a252e1a7069fc9275565b375aba8fc73c2a93f308b87ae92373bdd8e6ff45eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a252e1a7069fc9275565b375aba8fc73c2a93f308b87ae92373bdd8e6ff45eeb->enter($__internal_a252e1a7069fc9275565b375aba8fc73c2a93f308b87ae92373bdd8e6ff45eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11877ec427a8947279502a39b5002e7a8d3158b1e3c728240f8878132c9a9690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11877ec427a8947279502a39b5002e7a8d3158b1e3c728240f8878132c9a9690->enter($__internal_11877ec427a8947279502a39b5002e7a8d3158b1e3c728240f8878132c9a9690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_11877ec427a8947279502a39b5002e7a8d3158b1e3c728240f8878132c9a9690->leave($__internal_11877ec427a8947279502a39b5002e7a8d3158b1e3c728240f8878132c9a9690_prof);

        
        $__internal_a252e1a7069fc9275565b375aba8fc73c2a93f308b87ae92373bdd8e6ff45eeb->leave($__internal_a252e1a7069fc9275565b375aba8fc73c2a93f308b87ae92373bdd8e6ff45eeb_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87d32992d962632fda43045b80e0e5216ed5561f507b9dd5f4263deac3f77c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d32992d962632fda43045b80e0e5216ed5561f507b9dd5f4263deac3f77c87->enter($__internal_87d32992d962632fda43045b80e0e5216ed5561f507b9dd5f4263deac3f77c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a1cac01fbbca585f3e7c0fc13d7b3fa3cd8ddde73feb455ceeda3d387a003ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cac01fbbca585f3e7c0fc13d7b3fa3cd8ddde73feb455ceeda3d387a003ef3->enter($__internal_a1cac01fbbca585f3e7c0fc13d7b3fa3cd8ddde73feb455ceeda3d387a003ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
            <script src = \"https://use.fontawesome.com/86150c9ee5.js\"></script>
            <script src = \"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("JS/base.js"), "html", null, true);
        echo "\"></script>


        ";
        
        $__internal_a1cac01fbbca585f3e7c0fc13d7b3fa3cd8ddde73feb455ceeda3d387a003ef3->leave($__internal_a1cac01fbbca585f3e7c0fc13d7b3fa3cd8ddde73feb455ceeda3d387a003ef3_prof);

        
        $__internal_87d32992d962632fda43045b80e0e5216ed5561f507b9dd5f4263deac3f77c87->leave($__internal_87d32992d962632fda43045b80e0e5216ed5561f507b9dd5f4263deac3f77c87_prof);

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
        return array (  345 => 131,  338 => 126,  329 => 125,  312 => 108,  299 => 29,  290 => 28,  273 => 20,  260 => 16,  256 => 14,  247 => 13,  229 => 10,  215 => 135,  213 => 125,  206 => 121,  196 => 114,  189 => 109,  187 => 108,  178 => 102,  173 => 100,  169 => 99,  165 => 98,  161 => 97,  157 => 96,  132 => 74,  109 => 54,  105 => 53,  101 => 52,  97 => 51,  93 => 50,  78 => 40,  69 => 33,  67 => 28,  58 => 21,  56 => 20,  53 => 19,  51 => 13,  46 => 11,  42 => 10,  31 => 1,);
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

        {% block API %}{% endblock %}

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

            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
            <script src = \"https://use.fontawesome.com/86150c9ee5.js\"></script>
            <script src = \"{{ asset('JS/base.js') }}\"></script>


        {% endblock %}

    </body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\OpenClassRooms-Projet-NAO\\app\\Resources\\views\\base.html.twig");
    }
}
