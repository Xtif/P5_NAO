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
        $__internal_9a18aba6fd5517e0053efee68efb53fa71d5cb955a3fe8be0f8a5452104dab5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a18aba6fd5517e0053efee68efb53fa71d5cb955a3fe8be0f8a5452104dab5b->enter($__internal_9a18aba6fd5517e0053efee68efb53fa71d5cb955a3fe8be0f8a5452104dab5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1993e94179e89be1cbf0802178ce3b3ac953dc3d1027f01beb89778532e57514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1993e94179e89be1cbf0802178ce3b3ac953dc3d1027f01beb89778532e57514->enter($__internal_1993e94179e89be1cbf0802178ce3b3ac953dc3d1027f01beb89778532e57514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a18aba6fd5517e0053efee68efb53fa71d5cb955a3fe8be0f8a5452104dab5b->leave($__internal_9a18aba6fd5517e0053efee68efb53fa71d5cb955a3fe8be0f8a5452104dab5b_prof);

        
        $__internal_1993e94179e89be1cbf0802178ce3b3ac953dc3d1027f01beb89778532e57514->leave($__internal_1993e94179e89be1cbf0802178ce3b3ac953dc3d1027f01beb89778532e57514_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af53a06172a80051f2c217310e5084f625784d95c425ef041f38ff39a4eadc9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af53a06172a80051f2c217310e5084f625784d95c425ef041f38ff39a4eadc9a->enter($__internal_af53a06172a80051f2c217310e5084f625784d95c425ef041f38ff39a4eadc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_deda5cc5999079bfffec8cf9763c62cc2d533f5c0aa38a0c5442c32a69a69cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deda5cc5999079bfffec8cf9763c62cc2d533f5c0aa38a0c5442c32a69a69cae->enter($__internal_deda5cc5999079bfffec8cf9763c62cc2d533f5c0aa38a0c5442c32a69a69cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_deda5cc5999079bfffec8cf9763c62cc2d533f5c0aa38a0c5442c32a69a69cae->leave($__internal_deda5cc5999079bfffec8cf9763c62cc2d533f5c0aa38a0c5442c32a69a69cae_prof);

        
        $__internal_af53a06172a80051f2c217310e5084f625784d95c425ef041f38ff39a4eadc9a->leave($__internal_af53a06172a80051f2c217310e5084f625784d95c425ef041f38ff39a4eadc9a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6243086ee836d1ff54682fc408c179c2ba59a767ebe5aafb9a23475e58a71f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6243086ee836d1ff54682fc408c179c2ba59a767ebe5aafb9a23475e58a71f36->enter($__internal_6243086ee836d1ff54682fc408c179c2ba59a767ebe5aafb9a23475e58a71f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02c678bfe6425077085a1fe5cc97199c591621211966edc94f9d2fbad628db55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c678bfe6425077085a1fe5cc97199c591621211966edc94f9d2fbad628db55->enter($__internal_02c678bfe6425077085a1fe5cc97199c591621211966edc94f9d2fbad628db55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <section id = \"header-section\">

        <div id = \"header-section-content\" class = \"flex-column\">

            <div id = \"header-section-title\" class = \"flex-row\">

                <h1>Nos amis les oiseaux</h1>

            </div>

            <div id = \"header-section-box\" class = \"flex-column\">

                <p>Rejoignez une communauté investie dans l'observation et le recensement des oiseaux</p>
                <a href = \"#comment-ça-marche\"><button class = \"btn ccm\">Comment ça marche ?</button></a>
                <a href = \"#qui-sommes-nous\"><button class = \"btn qsn\">Qui sommes-nous ?</button></a>

            </div>

        </div>

    </section>

    <section id = \"ccm\" class = \"flex-column\">

        <div id = \"ccm-section-title\" class = \"flex-row\">

            <h2>Comment ça marche ?</h2>

        </div>

        <div id = \"ccm-section-content\" class = \"flex-row\">

            <div id = \"ccm-section-search-box\" class = \"flex-column\">

                <h3>Recherchez</h3>
                <i class=\"fa fa-4x fa-search\" aria-hidden=\"true\"></i>
                <p>Parcourez notre carte interactive pour localiser les espèces observées par la comunauté.</p>
                <a href = \"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><button class = \"btn\">Parcourir la carte</button></a>

            </div>

            <div id = \"ccm-section-observation-box\" class = \"flex-column\">

                <h3>Observez</h3>
                <i class=\"fa fa-4x fa-binoculars\" aria-hidden=\"true\"></i>
                <p>Rejoignez la comunauté et aidez à répertorier les espèces sur votre territoire.</p>
                <a href = \"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_observation");
        echo "\"><button class = \"btn\">En savoir plus</button></a>

            </div>

            <div id = \"ccm-section-participate-box\" class = \"flex-column\">

                <h3>Participez</h3>
                <i class=\"fa fa-4x fa-calendar-check-o\" aria-hidden=\"true\"></i>
                <p>Devenez référent et aidez à la gestion des observations et des utilisateurs.</p>
                <a href = \"";
        // line 67
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
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\"><button class = \"btn\">Nous contacter</button></a>

        </div>

    </section>

";
        
        $__internal_02c678bfe6425077085a1fe5cc97199c591621211966edc94f9d2fbad628db55->leave($__internal_02c678bfe6425077085a1fe5cc97199c591621211966edc94f9d2fbad628db55_prof);

        
        $__internal_6243086ee836d1ff54682fc408c179c2ba59a767ebe5aafb9a23475e58a71f36->leave($__internal_6243086ee836d1ff54682fc408c179c2ba59a767ebe5aafb9a23475e58a71f36_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11dad1e07a05ffba1728936d2a060035530f75f51a8bf71cb4cb66cbcb1a6784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11dad1e07a05ffba1728936d2a060035530f75f51a8bf71cb4cb66cbcb1a6784->enter($__internal_11dad1e07a05ffba1728936d2a060035530f75f51a8bf71cb4cb66cbcb1a6784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_30b2da73bfb572d5865b6aaa700f970a825eed439b5f373a423a3657cfa4d1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b2da73bfb572d5865b6aaa700f970a825eed439b5f373a423a3657cfa4d1ac->enter($__internal_30b2da73bfb572d5865b6aaa700f970a825eed439b5f373a423a3657cfa4d1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "
    ";
        // line 103
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src = \"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("JS/home.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_30b2da73bfb572d5865b6aaa700f970a825eed439b5f373a423a3657cfa4d1ac->leave($__internal_30b2da73bfb572d5865b6aaa700f970a825eed439b5f373a423a3657cfa4d1ac_prof);

        
        $__internal_11dad1e07a05ffba1728936d2a060035530f75f51a8bf71cb4cb66cbcb1a6784->leave($__internal_11dad1e07a05ffba1728936d2a060035530f75f51a8bf71cb4cb66cbcb1a6784_prof);

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
        return array (  206 => 104,  202 => 103,  199 => 102,  190 => 101,  173 => 93,  144 => 67,  132 => 58,  120 => 49,  80 => 11,  71 => 10,  58 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

                <p>Rejoignez une communauté investie dans l'observation et le recensement des oiseaux</p>
                <a href = \"#comment-ça-marche\"><button class = \"btn ccm\">Comment ça marche ?</button></a>
                <a href = \"#qui-sommes-nous\"><button class = \"btn qsn\">Qui sommes-nous ?</button></a>

            </div>

        </div>

    </section>

    <section id = \"ccm\" class = \"flex-column\">

        <div id = \"ccm-section-title\" class = \"flex-row\">

            <h2>Comment ça marche ?</h2>

        </div>

        <div id = \"ccm-section-content\" class = \"flex-row\">

            <div id = \"ccm-section-search-box\" class = \"flex-column\">

                <h3>Recherchez</h3>
                <i class=\"fa fa-4x fa-search\" aria-hidden=\"true\"></i>
                <p>Parcourez notre carte interactive pour localiser les espèces observées par la comunauté.</p>
                <a href = \"{{ path('map') }}\"><button class = \"btn\">Parcourir la carte</button></a>

            </div>

            <div id = \"ccm-section-observation-box\" class = \"flex-column\">

                <h3>Observez</h3>
                <i class=\"fa fa-4x fa-binoculars\" aria-hidden=\"true\"></i>
                <p>Rejoignez la comunauté et aidez à répertorier les espèces sur votre territoire.</p>
                <a href = \"{{ path('add_observation') }}\"><button class = \"btn\">En savoir plus</button></a>

            </div>

            <div id = \"ccm-section-participate-box\" class = \"flex-column\">

                <h3>Participez</h3>
                <i class=\"fa fa-4x fa-calendar-check-o\" aria-hidden=\"true\"></i>
                <p>Devenez référent et aidez à la gestion des observations et des utilisateurs.</p>
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
