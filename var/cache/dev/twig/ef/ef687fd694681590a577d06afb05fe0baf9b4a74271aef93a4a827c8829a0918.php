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
        $__internal_562d41dfb63d7e89685351d3b72e3c32cb8be79d07b1e284e7ffc485f20977bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562d41dfb63d7e89685351d3b72e3c32cb8be79d07b1e284e7ffc485f20977bc->enter($__internal_562d41dfb63d7e89685351d3b72e3c32cb8be79d07b1e284e7ffc485f20977bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_72b3e4abe8e58cfc7a8dc2ae3355e03d1110027937bf82eb893c3ed05e1fdebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b3e4abe8e58cfc7a8dc2ae3355e03d1110027937bf82eb893c3ed05e1fdebb->enter($__internal_72b3e4abe8e58cfc7a8dc2ae3355e03d1110027937bf82eb893c3ed05e1fdebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_562d41dfb63d7e89685351d3b72e3c32cb8be79d07b1e284e7ffc485f20977bc->leave($__internal_562d41dfb63d7e89685351d3b72e3c32cb8be79d07b1e284e7ffc485f20977bc_prof);

        
        $__internal_72b3e4abe8e58cfc7a8dc2ae3355e03d1110027937bf82eb893c3ed05e1fdebb->leave($__internal_72b3e4abe8e58cfc7a8dc2ae3355e03d1110027937bf82eb893c3ed05e1fdebb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_953bb070f7acc7d921ccaf1ddf2a5d3ccf2a56c661370a5b0ebd15d0997fff82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953bb070f7acc7d921ccaf1ddf2a5d3ccf2a56c661370a5b0ebd15d0997fff82->enter($__internal_953bb070f7acc7d921ccaf1ddf2a5d3ccf2a56c661370a5b0ebd15d0997fff82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d8f146e74d94a1368ef864faa8894b3a583c78f2ebdc42f7ce72daa049ff18a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f146e74d94a1368ef864faa8894b3a583c78f2ebdc42f7ce72daa049ff18a8->enter($__internal_d8f146e74d94a1368ef864faa8894b3a583c78f2ebdc42f7ce72daa049ff18a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8f146e74d94a1368ef864faa8894b3a583c78f2ebdc42f7ce72daa049ff18a8->leave($__internal_d8f146e74d94a1368ef864faa8894b3a583c78f2ebdc42f7ce72daa049ff18a8_prof);

        
        $__internal_953bb070f7acc7d921ccaf1ddf2a5d3ccf2a56c661370a5b0ebd15d0997fff82->leave($__internal_953bb070f7acc7d921ccaf1ddf2a5d3ccf2a56c661370a5b0ebd15d0997fff82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf1d45060bdca9c896a3785589ba7000b75f58bd663614e3870e4219a3b03543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1d45060bdca9c896a3785589ba7000b75f58bd663614e3870e4219a3b03543->enter($__internal_cf1d45060bdca9c896a3785589ba7000b75f58bd663614e3870e4219a3b03543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_510e1e03d53f3809f273dbd73803bb8e7dd3805a32bb11075633a4dfd3a4d8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510e1e03d53f3809f273dbd73803bb8e7dd3805a32bb11075633a4dfd3a4d8f5->enter($__internal_510e1e03d53f3809f273dbd73803bb8e7dd3805a32bb11075633a4dfd3a4d8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_510e1e03d53f3809f273dbd73803bb8e7dd3805a32bb11075633a4dfd3a4d8f5->leave($__internal_510e1e03d53f3809f273dbd73803bb8e7dd3805a32bb11075633a4dfd3a4d8f5_prof);

        
        $__internal_cf1d45060bdca9c896a3785589ba7000b75f58bd663614e3870e4219a3b03543->leave($__internal_cf1d45060bdca9c896a3785589ba7000b75f58bd663614e3870e4219a3b03543_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05b6452474f7e78033bcaff851203f855dc8a3944ccdf52c70ba73e3ff22973d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b6452474f7e78033bcaff851203f855dc8a3944ccdf52c70ba73e3ff22973d->enter($__internal_05b6452474f7e78033bcaff851203f855dc8a3944ccdf52c70ba73e3ff22973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75e5da3fe47f5e99aff33279846e312f08c133e09af42ef4eca84a66e87536ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e5da3fe47f5e99aff33279846e312f08c133e09af42ef4eca84a66e87536ff->enter($__internal_75e5da3fe47f5e99aff33279846e312f08c133e09af42ef4eca84a66e87536ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_75e5da3fe47f5e99aff33279846e312f08c133e09af42ef4eca84a66e87536ff->leave($__internal_75e5da3fe47f5e99aff33279846e312f08c133e09af42ef4eca84a66e87536ff_prof);

        
        $__internal_05b6452474f7e78033bcaff851203f855dc8a3944ccdf52c70ba73e3ff22973d->leave($__internal_05b6452474f7e78033bcaff851203f855dc8a3944ccdf52c70ba73e3ff22973d_prof);

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
