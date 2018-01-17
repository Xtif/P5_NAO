<?php

/* default/index.html.twig */
class __TwigTemplate_3600cc78cdcca7057e0183a9a66b5240574c75abd7c4d631bf37f423c420b88a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6390a79b0d38190527fcfdec1ec07d5e0d30fdba9e53d89268ef86422e194801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6390a79b0d38190527fcfdec1ec07d5e0d30fdba9e53d89268ef86422e194801->enter($__internal_6390a79b0d38190527fcfdec1ec07d5e0d30fdba9e53d89268ef86422e194801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1065160c9cba83f5771fc44fa14fc4f44780ba90b1cbbfdd7839dd2f3e401d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1065160c9cba83f5771fc44fa14fc4f44780ba90b1cbbfdd7839dd2f3e401d0a->enter($__internal_1065160c9cba83f5771fc44fa14fc4f44780ba90b1cbbfdd7839dd2f3e401d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6390a79b0d38190527fcfdec1ec07d5e0d30fdba9e53d89268ef86422e194801->leave($__internal_6390a79b0d38190527fcfdec1ec07d5e0d30fdba9e53d89268ef86422e194801_prof);

        
        $__internal_1065160c9cba83f5771fc44fa14fc4f44780ba90b1cbbfdd7839dd2f3e401d0a->leave($__internal_1065160c9cba83f5771fc44fa14fc4f44780ba90b1cbbfdd7839dd2f3e401d0a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_380bb777821402174ab8cb93e8c1268095e9a2156a3353406a45321ac49d67dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_380bb777821402174ab8cb93e8c1268095e9a2156a3353406a45321ac49d67dc->enter($__internal_380bb777821402174ab8cb93e8c1268095e9a2156a3353406a45321ac49d67dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_668de33835923cfb19db74548d5384435cf2fd022bbffcfaa4e661c834f55d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668de33835923cfb19db74548d5384435cf2fd022bbffcfaa4e661c834f55d62->enter($__internal_668de33835923cfb19db74548d5384435cf2fd022bbffcfaa4e661c834f55d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel = \"stylesheet\" href = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/home.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_668de33835923cfb19db74548d5384435cf2fd022bbffcfaa4e661c834f55d62->leave($__internal_668de33835923cfb19db74548d5384435cf2fd022bbffcfaa4e661c834f55d62_prof);

        
        $__internal_380bb777821402174ab8cb93e8c1268095e9a2156a3353406a45321ac49d67dc->leave($__internal_380bb777821402174ab8cb93e8c1268095e9a2156a3353406a45321ac49d67dc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6548d3c58742a0eaa1afaea9c87e677a7e5ba75b5f10c5ae30c02bd8597354a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6548d3c58742a0eaa1afaea9c87e677a7e5ba75b5f10c5ae30c02bd8597354a1->enter($__internal_6548d3c58742a0eaa1afaea9c87e677a7e5ba75b5f10c5ae30c02bd8597354a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46544bc06467400759fbb651dec779b8ee61b0011a8ffc5cb69bfbf7a07bba75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46544bc06467400759fbb651dec779b8ee61b0011a8ffc5cb69bfbf7a07bba75->enter($__internal_46544bc06467400759fbb651dec779b8ee61b0011a8ffc5cb69bfbf7a07bba75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <section id = \"header-section\">

        <div id = \"header-section-content\" class = \"flex-column\">

            <div id = \"header-section-title\" class = \"flex-row\">

                <h1>Nos amis les oiseaux</h1>

            </div>

            <div id = \"header-section-box\" class = \"flex-column\">

                <p class = \"flex-row\">Rejoignez une communauté investie dans l'observation et le recensement des oiseaux</p>

                <div id = \"buttons\" class = \"flex-column\">

                    <a href = \"#comment-ça-marche\"><button class = \"btn ccm\">Comment ça marche ?</button></a>
                    <a href = \"#qui-sommes-nous\"><button class = \"btn qsn\">Qui sommes-nous ?</button></a>

                </div>

            </div>

        </div>

    </section>

    <section id = \"ccm\" class = \"flex-column\">

        <div id = \"ccm-section-title\" class = \"flex-row\">

            <h2>Comment ça marche ?</h2>

        </div>

        <div id = \"ccm-section-content\">

            <div id = \"ccm-section-search-box\" class = \"flex-column\">

                <h3 class = \"flex-row\">Recherchez</h3>
                <i class=\"fa fa-4x fa-search\" aria-hidden=\"true\"></i>
                <p class = \"flex-row\">Parcourez notre carte interactive pour localiser les espèces observées par la comunauté.</p>
                <a href = \"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><button class = \"btn\">Parcourir la carte</button></a>

            </div>

            <div id = \"ccm-section-observation-box\" class = \"flex-column\">

                <h3 class = \"flex-row\">Observez</h3>
                <i class=\"fa fa-4x fa-binoculars\" aria-hidden=\"true\"></i>
                <p class = \"flex-row\">Rejoignez la comunauté et aidez à répertorier les espèces sur votre territoire.</p>
                <a href = \"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_observation");
        echo "\"><button class = \"btn\">En savoir plus</button></a>

            </div>

            <div id = \"ccm-section-participate-box\" class = \"flex-column\">

                <h3 class = \"flex-row\">Participez</h3>
                <i class=\"fa fa-4x fa-calendar-check-o\" aria-hidden=\"true\"></i>
                <p class = \"flex-row\">Devenez référent et aidez à la gestion des observations et des utilisateurs.</p>
                <a href = \"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><button class = \"btn\">En savoir plus</button></a>

            </div>

        </div>

    </section>

    <section id = \"qsn\" class = \"flex-column\">

        <div id = \"qsn-section-title\" class = \"flex-row\">

            <h2>Qui sommes-nous ?</h2>

        </div>

        <div id = \"qsn-section-content\" class = \"flex-column\">

            <p>

                L'association NAO (Nos Amis les Oiseaux) regroupe les passionnés d'ornithologie.
                Rejoignez l'association afin de prendre part à un programme de recherche
                visant à étudier les effets du climat, de l'urbanisation et de l'aggriculture sur la biodiversité.

            </p>

            <a href = \"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\"><button class = \"btn\">Nous contacter</button></a>

        </div>

    </section>

";
        
        $__internal_46544bc06467400759fbb651dec779b8ee61b0011a8ffc5cb69bfbf7a07bba75->leave($__internal_46544bc06467400759fbb651dec779b8ee61b0011a8ffc5cb69bfbf7a07bba75_prof);

        
        $__internal_6548d3c58742a0eaa1afaea9c87e677a7e5ba75b5f10c5ae30c02bd8597354a1->leave($__internal_6548d3c58742a0eaa1afaea9c87e677a7e5ba75b5f10c5ae30c02bd8597354a1_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca439a409cce1405771b2f22ef723bb20cff1e238a669878b1fbb0e85f54bd77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca439a409cce1405771b2f22ef723bb20cff1e238a669878b1fbb0e85f54bd77->enter($__internal_ca439a409cce1405771b2f22ef723bb20cff1e238a669878b1fbb0e85f54bd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a546a205a9bf83a6ffab0c2e0b45a43926980f1a7b1d997a475047c79e16988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a546a205a9bf83a6ffab0c2e0b45a43926980f1a7b1d997a475047c79e16988->enter($__internal_2a546a205a9bf83a6ffab0c2e0b45a43926980f1a7b1d997a475047c79e16988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "
    ";
        // line 108
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src = \"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("JS/home.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_2a546a205a9bf83a6ffab0c2e0b45a43926980f1a7b1d997a475047c79e16988->leave($__internal_2a546a205a9bf83a6ffab0c2e0b45a43926980f1a7b1d997a475047c79e16988_prof);

        
        $__internal_ca439a409cce1405771b2f22ef723bb20cff1e238a669878b1fbb0e85f54bd77->leave($__internal_ca439a409cce1405771b2f22ef723bb20cff1e238a669878b1fbb0e85f54bd77_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 109,  207 => 108,  204 => 107,  195 => 106,  178 => 98,  149 => 72,  137 => 63,  125 => 54,  80 => 11,  71 => 10,  58 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}

    {{ parent() }}
    <link rel = \"stylesheet\" href = \"{{ asset('CSS/home.css') }}\" />

{% endblock %}

{% block body %}

    <section id = \"header-section\">

        <div id = \"header-section-content\" class = \"flex-column\">

            <div id = \"header-section-title\" class = \"flex-row\">

                <h1>Nos amis les oiseaux</h1>

            </div>

            <div id = \"header-section-box\" class = \"flex-column\">

                <p class = \"flex-row\">Rejoignez une communauté investie dans l'observation et le recensement des oiseaux</p>

                <div id = \"buttons\" class = \"flex-column\">

                    <a href = \"#comment-ça-marche\"><button class = \"btn ccm\">Comment ça marche ?</button></a>
                    <a href = \"#qui-sommes-nous\"><button class = \"btn qsn\">Qui sommes-nous ?</button></a>

                </div>

            </div>

        </div>

    </section>

    <section id = \"ccm\" class = \"flex-column\">

        <div id = \"ccm-section-title\" class = \"flex-row\">

            <h2>Comment ça marche ?</h2>

        </div>

        <div id = \"ccm-section-content\">

            <div id = \"ccm-section-search-box\" class = \"flex-column\">

                <h3 class = \"flex-row\">Recherchez</h3>
                <i class=\"fa fa-4x fa-search\" aria-hidden=\"true\"></i>
                <p class = \"flex-row\">Parcourez notre carte interactive pour localiser les espèces observées par la comunauté.</p>
                <a href = \"{{ path('map') }}\"><button class = \"btn\">Parcourir la carte</button></a>

            </div>

            <div id = \"ccm-section-observation-box\" class = \"flex-column\">

                <h3 class = \"flex-row\">Observez</h3>
                <i class=\"fa fa-4x fa-binoculars\" aria-hidden=\"true\"></i>
                <p class = \"flex-row\">Rejoignez la comunauté et aidez à répertorier les espèces sur votre territoire.</p>
                <a href = \"{{ path('add_observation') }}\"><button class = \"btn\">En savoir plus</button></a>

            </div>

            <div id = \"ccm-section-participate-box\" class = \"flex-column\">

                <h3 class = \"flex-row\">Participez</h3>
                <i class=\"fa fa-4x fa-calendar-check-o\" aria-hidden=\"true\"></i>
                <p class = \"flex-row\">Devenez référent et aidez à la gestion des observations et des utilisateurs.</p>
                <a href = \"{{ path('map') }}\"><button class = \"btn\">En savoir plus</button></a>

            </div>

        </div>

    </section>

    <section id = \"qsn\" class = \"flex-column\">

        <div id = \"qsn-section-title\" class = \"flex-row\">

            <h2>Qui sommes-nous ?</h2>

        </div>

        <div id = \"qsn-section-content\" class = \"flex-column\">

            <p>

                L'association NAO (Nos Amis les Oiseaux) regroupe les passionnés d'ornithologie.
                Rejoignez l'association afin de prendre part à un programme de recherche
                visant à étudier les effets du climat, de l'urbanisation et de l'aggriculture sur la biodiversité.

            </p>

            <a href = \"{{ path('contact') }}\"><button class = \"btn\">Nous contacter</button></a>

        </div>

    </section>

{% endblock %}

{% block javascripts %}

    {{ parent() }}
    <script src = \"{{ asset('JS/home.js') }}\"></script>

{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\OpenClassRooms-Projet-NAO\\app\\Resources\\views\\default\\index.html.twig");
    }
}
