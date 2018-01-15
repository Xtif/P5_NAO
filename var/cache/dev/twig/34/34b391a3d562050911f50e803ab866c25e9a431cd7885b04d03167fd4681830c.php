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
        $__internal_e8a375efd6c646f0f63a6d1b80f77fa60291d40cc663c42baba7adef3ea5055e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a375efd6c646f0f63a6d1b80f77fa60291d40cc663c42baba7adef3ea5055e->enter($__internal_e8a375efd6c646f0f63a6d1b80f77fa60291d40cc663c42baba7adef3ea5055e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_88cb52e9a7b143fffc2a6593618a93c450181b6c3e9ffece65bfc81669e8d943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cb52e9a7b143fffc2a6593618a93c450181b6c3e9ffece65bfc81669e8d943->enter($__internal_88cb52e9a7b143fffc2a6593618a93c450181b6c3e9ffece65bfc81669e8d943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8a375efd6c646f0f63a6d1b80f77fa60291d40cc663c42baba7adef3ea5055e->leave($__internal_e8a375efd6c646f0f63a6d1b80f77fa60291d40cc663c42baba7adef3ea5055e_prof);

        
        $__internal_88cb52e9a7b143fffc2a6593618a93c450181b6c3e9ffece65bfc81669e8d943->leave($__internal_88cb52e9a7b143fffc2a6593618a93c450181b6c3e9ffece65bfc81669e8d943_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_337918c9808d1808af80d6e05abf0beacdf3ee2e54ff68f46ac0423d814fc984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337918c9808d1808af80d6e05abf0beacdf3ee2e54ff68f46ac0423d814fc984->enter($__internal_337918c9808d1808af80d6e05abf0beacdf3ee2e54ff68f46ac0423d814fc984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_309ab6a52085706ddaf1225b2472cf5e698d7c6bc7392c73e726df27e5bc38ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309ab6a52085706ddaf1225b2472cf5e698d7c6bc7392c73e726df27e5bc38ab->enter($__internal_309ab6a52085706ddaf1225b2472cf5e698d7c6bc7392c73e726df27e5bc38ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_309ab6a52085706ddaf1225b2472cf5e698d7c6bc7392c73e726df27e5bc38ab->leave($__internal_309ab6a52085706ddaf1225b2472cf5e698d7c6bc7392c73e726df27e5bc38ab_prof);

        
        $__internal_337918c9808d1808af80d6e05abf0beacdf3ee2e54ff68f46ac0423d814fc984->leave($__internal_337918c9808d1808af80d6e05abf0beacdf3ee2e54ff68f46ac0423d814fc984_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_77872bf80ff9eb67d6a9ea788d663f6483eef1bd1ad8dfa2a6897f19e4b2dc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77872bf80ff9eb67d6a9ea788d663f6483eef1bd1ad8dfa2a6897f19e4b2dc45->enter($__internal_77872bf80ff9eb67d6a9ea788d663f6483eef1bd1ad8dfa2a6897f19e4b2dc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf61b789f0477d7cc8f77f40af55f0221ba1a0d49e4ed59f233642e00fe0a853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf61b789f0477d7cc8f77f40af55f0221ba1a0d49e4ed59f233642e00fe0a853->enter($__internal_bf61b789f0477d7cc8f77f40af55f0221ba1a0d49e4ed59f233642e00fe0a853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        <div id = \"ccm-section-content\" class = \"flex-row\">

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
        
        $__internal_bf61b789f0477d7cc8f77f40af55f0221ba1a0d49e4ed59f233642e00fe0a853->leave($__internal_bf61b789f0477d7cc8f77f40af55f0221ba1a0d49e4ed59f233642e00fe0a853_prof);

        
        $__internal_77872bf80ff9eb67d6a9ea788d663f6483eef1bd1ad8dfa2a6897f19e4b2dc45->leave($__internal_77872bf80ff9eb67d6a9ea788d663f6483eef1bd1ad8dfa2a6897f19e4b2dc45_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24a46a160afbdc945debc89e680775dffe552e8f8a2eb21377c0c045340ddcf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a46a160afbdc945debc89e680775dffe552e8f8a2eb21377c0c045340ddcf9->enter($__internal_24a46a160afbdc945debc89e680775dffe552e8f8a2eb21377c0c045340ddcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bb42b172fcf9ba7098b23cf1d9c151c68f50823ec4791e51b121786f4676a56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb42b172fcf9ba7098b23cf1d9c151c68f50823ec4791e51b121786f4676a56c->enter($__internal_bb42b172fcf9ba7098b23cf1d9c151c68f50823ec4791e51b121786f4676a56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bb42b172fcf9ba7098b23cf1d9c151c68f50823ec4791e51b121786f4676a56c->leave($__internal_bb42b172fcf9ba7098b23cf1d9c151c68f50823ec4791e51b121786f4676a56c_prof);

        
        $__internal_24a46a160afbdc945debc89e680775dffe552e8f8a2eb21377c0c045340ddcf9->leave($__internal_24a46a160afbdc945debc89e680775dffe552e8f8a2eb21377c0c045340ddcf9_prof);

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

        <div id = \"ccm-section-content\" class = \"flex-row\">

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
