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
        $__internal_3e674a962818a3316342c74aff7a1d1ecadf2e00f1931733f67af3c65f73730f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e674a962818a3316342c74aff7a1d1ecadf2e00f1931733f67af3c65f73730f->enter($__internal_3e674a962818a3316342c74aff7a1d1ecadf2e00f1931733f67af3c65f73730f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_268f78fe28b122a430d8a94b492f2719b068b709558cbcd07b03b76ea46b9e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268f78fe28b122a430d8a94b492f2719b068b709558cbcd07b03b76ea46b9e27->enter($__internal_268f78fe28b122a430d8a94b492f2719b068b709558cbcd07b03b76ea46b9e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3e674a962818a3316342c74aff7a1d1ecadf2e00f1931733f67af3c65f73730f->leave($__internal_3e674a962818a3316342c74aff7a1d1ecadf2e00f1931733f67af3c65f73730f_prof);

        
        $__internal_268f78fe28b122a430d8a94b492f2719b068b709558cbcd07b03b76ea46b9e27->leave($__internal_268f78fe28b122a430d8a94b492f2719b068b709558cbcd07b03b76ea46b9e27_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a9ce133b033821b2448008c4ad6c1e27c6c68e8967775a5b0e3810d93018101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9ce133b033821b2448008c4ad6c1e27c6c68e8967775a5b0e3810d93018101->enter($__internal_8a9ce133b033821b2448008c4ad6c1e27c6c68e8967775a5b0e3810d93018101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f751c018d0570fb2229c2db3ce22a33c7752a7262adb2202ceda965bff9fc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f751c018d0570fb2229c2db3ce22a33c7752a7262adb2202ceda965bff9fc53->enter($__internal_1f751c018d0570fb2229c2db3ce22a33c7752a7262adb2202ceda965bff9fc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nos Amis Les Oiseaux";
        
        $__internal_1f751c018d0570fb2229c2db3ce22a33c7752a7262adb2202ceda965bff9fc53->leave($__internal_1f751c018d0570fb2229c2db3ce22a33c7752a7262adb2202ceda965bff9fc53_prof);

        
        $__internal_8a9ce133b033821b2448008c4ad6c1e27c6c68e8967775a5b0e3810d93018101->leave($__internal_8a9ce133b033821b2448008c4ad6c1e27c6c68e8967775a5b0e3810d93018101_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbcfdcafdab7e551bf045aed861648f93c4c6bb6056f0c2badf4dc7fa3961ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbcfdcafdab7e551bf045aed861648f93c4c6bb6056f0c2badf4dc7fa3961ee0->enter($__internal_cbcfdcafdab7e551bf045aed861648f93c4c6bb6056f0c2badf4dc7fa3961ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d3925e9e28d66bc316af615206c2f1dab0300e6015ccbe278ebf51ee5c6d3912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3925e9e28d66bc316af615206c2f1dab0300e6015ccbe278ebf51ee5c6d3912->enter($__internal_d3925e9e28d66bc316af615206c2f1dab0300e6015ccbe278ebf51ee5c6d3912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
            <link rel = \"stylesheet\" href = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" />
            <link rel = \"stylesheet\" href = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/base.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_d3925e9e28d66bc316af615206c2f1dab0300e6015ccbe278ebf51ee5c6d3912->leave($__internal_d3925e9e28d66bc316af615206c2f1dab0300e6015ccbe278ebf51ee5c6d3912_prof);

        
        $__internal_cbcfdcafdab7e551bf045aed861648f93c4c6bb6056f0c2badf4dc7fa3961ee0->leave($__internal_cbcfdcafdab7e551bf045aed861648f93c4c6bb6056f0c2badf4dc7fa3961ee0_prof);

    }

    // line 20
    public function block_API($context, array $blocks = array())
    {
        $__internal_d3ecff75533328b14af9978ecaafcf9397bdd94e89d7b4ad6c1c556543ff3409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ecff75533328b14af9978ecaafcf9397bdd94e89d7b4ad6c1c556543ff3409->enter($__internal_d3ecff75533328b14af9978ecaafcf9397bdd94e89d7b4ad6c1c556543ff3409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "API"));

        $__internal_5c96c54151fbf390649fda59056002426e5b7a841f0c8ee70c03694c3b54304a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c96c54151fbf390649fda59056002426e5b7a841f0c8ee70c03694c3b54304a->enter($__internal_5c96c54151fbf390649fda59056002426e5b7a841f0c8ee70c03694c3b54304a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "API"));

        
        $__internal_5c96c54151fbf390649fda59056002426e5b7a841f0c8ee70c03694c3b54304a->leave($__internal_5c96c54151fbf390649fda59056002426e5b7a841f0c8ee70c03694c3b54304a_prof);

        
        $__internal_d3ecff75533328b14af9978ecaafcf9397bdd94e89d7b4ad6c1c556543ff3409->leave($__internal_d3ecff75533328b14af9978ecaafcf9397bdd94e89d7b4ad6c1c556543ff3409_prof);

    }

    // line 28
    public function block_messages($context, array $blocks = array())
    {
        $__internal_165477715cff6ffaa1761858be7dabe159936868d75582e4c8b8b498938f29bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165477715cff6ffaa1761858be7dabe159936868d75582e4c8b8b498938f29bf->enter($__internal_165477715cff6ffaa1761858be7dabe159936868d75582e4c8b8b498938f29bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_16e6bc7e55414c783bedf9281f333fa2507f3a6b53d40704440181388b345826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e6bc7e55414c783bedf9281f333fa2507f3a6b53d40704440181388b345826->enter($__internal_16e6bc7e55414c783bedf9281f333fa2507f3a6b53d40704440181388b345826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 29
        echo "
              <div class = \"text-center\" id = \"flash-message\"></div>

          ";
        
        $__internal_16e6bc7e55414c783bedf9281f333fa2507f3a6b53d40704440181388b345826->leave($__internal_16e6bc7e55414c783bedf9281f333fa2507f3a6b53d40704440181388b345826_prof);

        
        $__internal_165477715cff6ffaa1761858be7dabe159936868d75582e4c8b8b498938f29bf->leave($__internal_165477715cff6ffaa1761858be7dabe159936868d75582e4c8b8b498938f29bf_prof);

    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc5d342e95b02b14999ee555573229a6b23f6cc64f7bc416b60258ba81d1dc73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5d342e95b02b14999ee555573229a6b23f6cc64f7bc416b60258ba81d1dc73->enter($__internal_dc5d342e95b02b14999ee555573229a6b23f6cc64f7bc416b60258ba81d1dc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9997a8b188d5ec5db514c42c9aadd610ff2c7015a1bfe4c8b3fc9459c77bf258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9997a8b188d5ec5db514c42c9aadd610ff2c7015a1bfe4c8b3fc9459c77bf258->enter($__internal_9997a8b188d5ec5db514c42c9aadd610ff2c7015a1bfe4c8b3fc9459c77bf258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9997a8b188d5ec5db514c42c9aadd610ff2c7015a1bfe4c8b3fc9459c77bf258->leave($__internal_9997a8b188d5ec5db514c42c9aadd610ff2c7015a1bfe4c8b3fc9459c77bf258_prof);

        
        $__internal_dc5d342e95b02b14999ee555573229a6b23f6cc64f7bc416b60258ba81d1dc73->leave($__internal_dc5d342e95b02b14999ee555573229a6b23f6cc64f7bc416b60258ba81d1dc73_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10d20ace6be15dd84636f995c6008b33226ba487d385253f54d25960e6736383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d20ace6be15dd84636f995c6008b33226ba487d385253f54d25960e6736383->enter($__internal_10d20ace6be15dd84636f995c6008b33226ba487d385253f54d25960e6736383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_285b1d6ed6cc13a328cb47b63c10cd4c57190028119c3d96970579bc345287d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285b1d6ed6cc13a328cb47b63c10cd4c57190028119c3d96970579bc345287d3->enter($__internal_285b1d6ed6cc13a328cb47b63c10cd4c57190028119c3d96970579bc345287d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_285b1d6ed6cc13a328cb47b63c10cd4c57190028119c3d96970579bc345287d3->leave($__internal_285b1d6ed6cc13a328cb47b63c10cd4c57190028119c3d96970579bc345287d3_prof);

        
        $__internal_10d20ace6be15dd84636f995c6008b33226ba487d385253f54d25960e6736383->leave($__internal_10d20ace6be15dd84636f995c6008b33226ba487d385253f54d25960e6736383_prof);

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
