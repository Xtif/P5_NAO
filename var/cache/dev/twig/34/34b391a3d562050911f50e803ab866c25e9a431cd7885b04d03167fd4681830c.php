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
        $__internal_c880e5dce5510ab60c1e5fc1168332077c4cfc6c4974ac8200a7dae50d013c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c880e5dce5510ab60c1e5fc1168332077c4cfc6c4974ac8200a7dae50d013c92->enter($__internal_c880e5dce5510ab60c1e5fc1168332077c4cfc6c4974ac8200a7dae50d013c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_74e12ca2540294200d76383a5b64f385fa7c8a32db570512345fa6d0c1339ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e12ca2540294200d76383a5b64f385fa7c8a32db570512345fa6d0c1339ffd->enter($__internal_74e12ca2540294200d76383a5b64f385fa7c8a32db570512345fa6d0c1339ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c880e5dce5510ab60c1e5fc1168332077c4cfc6c4974ac8200a7dae50d013c92->leave($__internal_c880e5dce5510ab60c1e5fc1168332077c4cfc6c4974ac8200a7dae50d013c92_prof);

        
        $__internal_74e12ca2540294200d76383a5b64f385fa7c8a32db570512345fa6d0c1339ffd->leave($__internal_74e12ca2540294200d76383a5b64f385fa7c8a32db570512345fa6d0c1339ffd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fb3e6194ab1ee0796f1528a6360b1a354ca247b295ccab44dfb1043f6d08bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb3e6194ab1ee0796f1528a6360b1a354ca247b295ccab44dfb1043f6d08bfa->enter($__internal_7fb3e6194ab1ee0796f1528a6360b1a354ca247b295ccab44dfb1043f6d08bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e4874f7baa29fd285dc947bb3c96e2f1e4c7bbda4fd4e7df8787b678de8a6a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4874f7baa29fd285dc947bb3c96e2f1e4c7bbda4fd4e7df8787b678de8a6a64->enter($__internal_e4874f7baa29fd285dc947bb3c96e2f1e4c7bbda4fd4e7df8787b678de8a6a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e4874f7baa29fd285dc947bb3c96e2f1e4c7bbda4fd4e7df8787b678de8a6a64->leave($__internal_e4874f7baa29fd285dc947bb3c96e2f1e4c7bbda4fd4e7df8787b678de8a6a64_prof);

        
        $__internal_7fb3e6194ab1ee0796f1528a6360b1a354ca247b295ccab44dfb1043f6d08bfa->leave($__internal_7fb3e6194ab1ee0796f1528a6360b1a354ca247b295ccab44dfb1043f6d08bfa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_642d3b8035f29d7d90a3b8938f506591a827bfc4a35d7b28621c11650258be94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642d3b8035f29d7d90a3b8938f506591a827bfc4a35d7b28621c11650258be94->enter($__internal_642d3b8035f29d7d90a3b8938f506591a827bfc4a35d7b28621c11650258be94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa34fb350690cbfeae7728ce44d340decc728a3e331a964170e2110ce9deea8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa34fb350690cbfeae7728ce44d340decc728a3e331a964170e2110ce9deea8e->enter($__internal_aa34fb350690cbfeae7728ce44d340decc728a3e331a964170e2110ce9deea8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa34fb350690cbfeae7728ce44d340decc728a3e331a964170e2110ce9deea8e->leave($__internal_aa34fb350690cbfeae7728ce44d340decc728a3e331a964170e2110ce9deea8e_prof);

        
        $__internal_642d3b8035f29d7d90a3b8938f506591a827bfc4a35d7b28621c11650258be94->leave($__internal_642d3b8035f29d7d90a3b8938f506591a827bfc4a35d7b28621c11650258be94_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14ddf13ae53b2f991713dc66e4e34fbda582927479ea54c581906ec51ee9a27b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ddf13ae53b2f991713dc66e4e34fbda582927479ea54c581906ec51ee9a27b->enter($__internal_14ddf13ae53b2f991713dc66e4e34fbda582927479ea54c581906ec51ee9a27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b78315b6934d062f254ae5ffd22c7e2033e152f7587d83b026ba199c8a94761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b78315b6934d062f254ae5ffd22c7e2033e152f7587d83b026ba199c8a94761->enter($__internal_7b78315b6934d062f254ae5ffd22c7e2033e152f7587d83b026ba199c8a94761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7b78315b6934d062f254ae5ffd22c7e2033e152f7587d83b026ba199c8a94761->leave($__internal_7b78315b6934d062f254ae5ffd22c7e2033e152f7587d83b026ba199c8a94761_prof);

        
        $__internal_14ddf13ae53b2f991713dc66e4e34fbda582927479ea54c581906ec51ee9a27b->leave($__internal_14ddf13ae53b2f991713dc66e4e34fbda582927479ea54c581906ec51ee9a27b_prof);

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
