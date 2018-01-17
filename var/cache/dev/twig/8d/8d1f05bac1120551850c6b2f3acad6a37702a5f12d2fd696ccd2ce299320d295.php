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
        $__internal_b4612adb4df2f010b71733b801ae1544f7305a2e058607f017d54af46fbd2a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4612adb4df2f010b71733b801ae1544f7305a2e058607f017d54af46fbd2a45->enter($__internal_b4612adb4df2f010b71733b801ae1544f7305a2e058607f017d54af46fbd2a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6d8c9eee5158332b2386eba542b82472c1003a60ebc6e365df5ecf4066b37ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8c9eee5158332b2386eba542b82472c1003a60ebc6e365df5ecf4066b37ff4->enter($__internal_6d8c9eee5158332b2386eba542b82472c1003a60ebc6e365df5ecf4066b37ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b4612adb4df2f010b71733b801ae1544f7305a2e058607f017d54af46fbd2a45->leave($__internal_b4612adb4df2f010b71733b801ae1544f7305a2e058607f017d54af46fbd2a45_prof);

        
        $__internal_6d8c9eee5158332b2386eba542b82472c1003a60ebc6e365df5ecf4066b37ff4->leave($__internal_6d8c9eee5158332b2386eba542b82472c1003a60ebc6e365df5ecf4066b37ff4_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_70568386a4f8adaaa6f6f0bafd3e4e5b83d16a794cbadefcb15fca3d41a9c803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70568386a4f8adaaa6f6f0bafd3e4e5b83d16a794cbadefcb15fca3d41a9c803->enter($__internal_70568386a4f8adaaa6f6f0bafd3e4e5b83d16a794cbadefcb15fca3d41a9c803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3407230e09309459f1e32bf03406bfc960f0d5bf09af052e1473ec4fead964a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3407230e09309459f1e32bf03406bfc960f0d5bf09af052e1473ec4fead964a8->enter($__internal_3407230e09309459f1e32bf03406bfc960f0d5bf09af052e1473ec4fead964a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nos Amis Les Oiseaux";
        
        $__internal_3407230e09309459f1e32bf03406bfc960f0d5bf09af052e1473ec4fead964a8->leave($__internal_3407230e09309459f1e32bf03406bfc960f0d5bf09af052e1473ec4fead964a8_prof);

        
        $__internal_70568386a4f8adaaa6f6f0bafd3e4e5b83d16a794cbadefcb15fca3d41a9c803->leave($__internal_70568386a4f8adaaa6f6f0bafd3e4e5b83d16a794cbadefcb15fca3d41a9c803_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b23890e6628caef4c77b7b7f4a54dab66308089c2dc3a57d18e35e072cb5e47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23890e6628caef4c77b7b7f4a54dab66308089c2dc3a57d18e35e072cb5e47b->enter($__internal_b23890e6628caef4c77b7b7f4a54dab66308089c2dc3a57d18e35e072cb5e47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e3366313c756f6063cde8f1124a66dbd8ff87602a631c1f057402b13e0eb9fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3366313c756f6063cde8f1124a66dbd8ff87602a631c1f057402b13e0eb9fe8->enter($__internal_e3366313c756f6063cde8f1124a66dbd8ff87602a631c1f057402b13e0eb9fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
            <link rel = \"stylesheet\" href = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" />
            <link rel = \"stylesheet\" href = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/base.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_e3366313c756f6063cde8f1124a66dbd8ff87602a631c1f057402b13e0eb9fe8->leave($__internal_e3366313c756f6063cde8f1124a66dbd8ff87602a631c1f057402b13e0eb9fe8_prof);

        
        $__internal_b23890e6628caef4c77b7b7f4a54dab66308089c2dc3a57d18e35e072cb5e47b->leave($__internal_b23890e6628caef4c77b7b7f4a54dab66308089c2dc3a57d18e35e072cb5e47b_prof);

    }

    // line 26
    public function block_messages($context, array $blocks = array())
    {
        $__internal_1ee23e2ebb1e58849150c73338c9302e00dc8ca790b76f36353ceae4a95bec71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee23e2ebb1e58849150c73338c9302e00dc8ca790b76f36353ceae4a95bec71->enter($__internal_1ee23e2ebb1e58849150c73338c9302e00dc8ca790b76f36353ceae4a95bec71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_adcb0c3d6eacc62e1d0f8751de3155a58d12adfce614e58780419a75a1043ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adcb0c3d6eacc62e1d0f8751de3155a58d12adfce614e58780419a75a1043ea5->enter($__internal_adcb0c3d6eacc62e1d0f8751de3155a58d12adfce614e58780419a75a1043ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 27
        echo "
              <div class = \"text-center\" id = \"flash-message\"></div>

          ";
        
        $__internal_adcb0c3d6eacc62e1d0f8751de3155a58d12adfce614e58780419a75a1043ea5->leave($__internal_adcb0c3d6eacc62e1d0f8751de3155a58d12adfce614e58780419a75a1043ea5_prof);

        
        $__internal_1ee23e2ebb1e58849150c73338c9302e00dc8ca790b76f36353ceae4a95bec71->leave($__internal_1ee23e2ebb1e58849150c73338c9302e00dc8ca790b76f36353ceae4a95bec71_prof);

    }

    // line 106
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecaf47cef0b6b16bd5f60e20a82fe3fd897ed3862910a2be3b9edbe3fb8223d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecaf47cef0b6b16bd5f60e20a82fe3fd897ed3862910a2be3b9edbe3fb8223d1->enter($__internal_ecaf47cef0b6b16bd5f60e20a82fe3fd897ed3862910a2be3b9edbe3fb8223d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88ae498a6fc6e7e7b5487ae747a32e4fe211a806105598d6faa1d06b8d383ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ae498a6fc6e7e7b5487ae747a32e4fe211a806105598d6faa1d06b8d383ab0->enter($__internal_88ae498a6fc6e7e7b5487ae747a32e4fe211a806105598d6faa1d06b8d383ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88ae498a6fc6e7e7b5487ae747a32e4fe211a806105598d6faa1d06b8d383ab0->leave($__internal_88ae498a6fc6e7e7b5487ae747a32e4fe211a806105598d6faa1d06b8d383ab0_prof);

        
        $__internal_ecaf47cef0b6b16bd5f60e20a82fe3fd897ed3862910a2be3b9edbe3fb8223d1->leave($__internal_ecaf47cef0b6b16bd5f60e20a82fe3fd897ed3862910a2be3b9edbe3fb8223d1_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97204c0f47b31dbe3fd70ba747d033600c36cb3b35047568e955fc45919467a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97204c0f47b31dbe3fd70ba747d033600c36cb3b35047568e955fc45919467a7->enter($__internal_97204c0f47b31dbe3fd70ba747d033600c36cb3b35047568e955fc45919467a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_105c0a9c491ea47b0b2b765c7f46751c6a61e1d4df059f2146aba6dc46a92510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105c0a9c491ea47b0b2b765c7f46751c6a61e1d4df059f2146aba6dc46a92510->enter($__internal_105c0a9c491ea47b0b2b765c7f46751c6a61e1d4df059f2146aba6dc46a92510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
            <script type = \"text/javascript\" src = \"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
            <script src = \"https://use.fontawesome.com/86150c9ee5.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>


        ";
        
        $__internal_105c0a9c491ea47b0b2b765c7f46751c6a61e1d4df059f2146aba6dc46a92510->leave($__internal_105c0a9c491ea47b0b2b765c7f46751c6a61e1d4df059f2146aba6dc46a92510_prof);

        
        $__internal_97204c0f47b31dbe3fd70ba747d033600c36cb3b35047568e955fc45919467a7->leave($__internal_97204c0f47b31dbe3fd70ba747d033600c36cb3b35047568e955fc45919467a7_prof);

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
