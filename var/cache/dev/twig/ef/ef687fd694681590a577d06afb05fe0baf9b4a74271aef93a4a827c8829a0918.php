<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4dfbce909af26f9824e4201ecf295b58f96c5e8a2bf7901af400a42363648da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dfbce909af26f9824e4201ecf295b58f96c5e8a2bf7901af400a42363648da->enter($__internal_a4dfbce909af26f9824e4201ecf295b58f96c5e8a2bf7901af400a42363648da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2a13b4b4e01e517ca19d245daff0e21978c5fc392d0bae24d70b0cf2098f9634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a13b4b4e01e517ca19d245daff0e21978c5fc392d0bae24d70b0cf2098f9634->enter($__internal_2a13b4b4e01e517ca19d245daff0e21978c5fc392d0bae24d70b0cf2098f9634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4dfbce909af26f9824e4201ecf295b58f96c5e8a2bf7901af400a42363648da->leave($__internal_a4dfbce909af26f9824e4201ecf295b58f96c5e8a2bf7901af400a42363648da_prof);

        
        $__internal_2a13b4b4e01e517ca19d245daff0e21978c5fc392d0bae24d70b0cf2098f9634->leave($__internal_2a13b4b4e01e517ca19d245daff0e21978c5fc392d0bae24d70b0cf2098f9634_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c5463f99712aca6f63d61b92b2461f9c130d6cbd86cc8b4af5b8b894e4ba658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5463f99712aca6f63d61b92b2461f9c130d6cbd86cc8b4af5b8b894e4ba658->enter($__internal_5c5463f99712aca6f63d61b92b2461f9c130d6cbd86cc8b4af5b8b894e4ba658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e5da120bf473bb6866811b0209b9bc06d6125b6471c0f7feffe39944442d9440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5da120bf473bb6866811b0209b9bc06d6125b6471c0f7feffe39944442d9440->enter($__internal_e5da120bf473bb6866811b0209b9bc06d6125b6471c0f7feffe39944442d9440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e5da120bf473bb6866811b0209b9bc06d6125b6471c0f7feffe39944442d9440->leave($__internal_e5da120bf473bb6866811b0209b9bc06d6125b6471c0f7feffe39944442d9440_prof);

        
        $__internal_5c5463f99712aca6f63d61b92b2461f9c130d6cbd86cc8b4af5b8b894e4ba658->leave($__internal_5c5463f99712aca6f63d61b92b2461f9c130d6cbd86cc8b4af5b8b894e4ba658_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0c317444c63b3f0d001dd5b60668cc3a7fe563b1d3c57c0821357578f3387db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c317444c63b3f0d001dd5b60668cc3a7fe563b1d3c57c0821357578f3387db->enter($__internal_e0c317444c63b3f0d001dd5b60668cc3a7fe563b1d3c57c0821357578f3387db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_09b6530f4c2fd721dab98e6a7439a104651fb687f9fb4ccb5b4d45b44cea0dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b6530f4c2fd721dab98e6a7439a104651fb687f9fb4ccb5b4d45b44cea0dc8->enter($__internal_09b6530f4c2fd721dab98e6a7439a104651fb687f9fb4ccb5b4d45b44cea0dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09b6530f4c2fd721dab98e6a7439a104651fb687f9fb4ccb5b4d45b44cea0dc8->leave($__internal_09b6530f4c2fd721dab98e6a7439a104651fb687f9fb4ccb5b4d45b44cea0dc8_prof);

        
        $__internal_e0c317444c63b3f0d001dd5b60668cc3a7fe563b1d3c57c0821357578f3387db->leave($__internal_e0c317444c63b3f0d001dd5b60668cc3a7fe563b1d3c57c0821357578f3387db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fb78324d686e189e37c97f93ca2d8b1bca38b2b888f03fd5c281e2f43eb97d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb78324d686e189e37c97f93ca2d8b1bca38b2b888f03fd5c281e2f43eb97d2->enter($__internal_8fb78324d686e189e37c97f93ca2d8b1bca38b2b888f03fd5c281e2f43eb97d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81779b4bdeb5650c65527906a3e5214b4b60e78d459c3be9dccd668280aa5b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81779b4bdeb5650c65527906a3e5214b4b60e78d459c3be9dccd668280aa5b26->enter($__internal_81779b4bdeb5650c65527906a3e5214b4b60e78d459c3be9dccd668280aa5b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_81779b4bdeb5650c65527906a3e5214b4b60e78d459c3be9dccd668280aa5b26->leave($__internal_81779b4bdeb5650c65527906a3e5214b4b60e78d459c3be9dccd668280aa5b26_prof);

        
        $__internal_8fb78324d686e189e37c97f93ca2d8b1bca38b2b888f03fd5c281e2f43eb97d2->leave($__internal_8fb78324d686e189e37c97f93ca2d8b1bca38b2b888f03fd5c281e2f43eb97d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\OpenClassRooms-Projet-NAO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
