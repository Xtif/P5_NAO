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
        $__internal_f448abe6bc290e40ece40c377cd8999365781ba9e7607f6558dbabed2c1651a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f448abe6bc290e40ece40c377cd8999365781ba9e7607f6558dbabed2c1651a7->enter($__internal_f448abe6bc290e40ece40c377cd8999365781ba9e7607f6558dbabed2c1651a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a821fc1fd6c5cbfc2546116b19256a0007ac180a3d848a95b1e8f405230dfed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a821fc1fd6c5cbfc2546116b19256a0007ac180a3d848a95b1e8f405230dfed8->enter($__internal_a821fc1fd6c5cbfc2546116b19256a0007ac180a3d848a95b1e8f405230dfed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f448abe6bc290e40ece40c377cd8999365781ba9e7607f6558dbabed2c1651a7->leave($__internal_f448abe6bc290e40ece40c377cd8999365781ba9e7607f6558dbabed2c1651a7_prof);

        
        $__internal_a821fc1fd6c5cbfc2546116b19256a0007ac180a3d848a95b1e8f405230dfed8->leave($__internal_a821fc1fd6c5cbfc2546116b19256a0007ac180a3d848a95b1e8f405230dfed8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c040cb9a6ada5606cb9161d9a9845f0128214f3b64236def996a8032c24c4fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c040cb9a6ada5606cb9161d9a9845f0128214f3b64236def996a8032c24c4fd2->enter($__internal_c040cb9a6ada5606cb9161d9a9845f0128214f3b64236def996a8032c24c4fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_484d33108ba4d843cc79f41b6fa3369c980b55eb44d110322c09d3de3c7ce327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484d33108ba4d843cc79f41b6fa3369c980b55eb44d110322c09d3de3c7ce327->enter($__internal_484d33108ba4d843cc79f41b6fa3369c980b55eb44d110322c09d3de3c7ce327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_484d33108ba4d843cc79f41b6fa3369c980b55eb44d110322c09d3de3c7ce327->leave($__internal_484d33108ba4d843cc79f41b6fa3369c980b55eb44d110322c09d3de3c7ce327_prof);

        
        $__internal_c040cb9a6ada5606cb9161d9a9845f0128214f3b64236def996a8032c24c4fd2->leave($__internal_c040cb9a6ada5606cb9161d9a9845f0128214f3b64236def996a8032c24c4fd2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e421a6f76b1f7707cd7f675080c03c878f92fef420cbe40a6bd4c5d981a278ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e421a6f76b1f7707cd7f675080c03c878f92fef420cbe40a6bd4c5d981a278ff->enter($__internal_e421a6f76b1f7707cd7f675080c03c878f92fef420cbe40a6bd4c5d981a278ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_608bca2cb844ff1b555f8373bd2282e967bb493bbb586cad2c591563741bc989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608bca2cb844ff1b555f8373bd2282e967bb493bbb586cad2c591563741bc989->enter($__internal_608bca2cb844ff1b555f8373bd2282e967bb493bbb586cad2c591563741bc989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_608bca2cb844ff1b555f8373bd2282e967bb493bbb586cad2c591563741bc989->leave($__internal_608bca2cb844ff1b555f8373bd2282e967bb493bbb586cad2c591563741bc989_prof);

        
        $__internal_e421a6f76b1f7707cd7f675080c03c878f92fef420cbe40a6bd4c5d981a278ff->leave($__internal_e421a6f76b1f7707cd7f675080c03c878f92fef420cbe40a6bd4c5d981a278ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7b3f2d508fda8b4851dedc2c2849584b3f05bb36c9f22f4ea248e7865bc249c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b3f2d508fda8b4851dedc2c2849584b3f05bb36c9f22f4ea248e7865bc249c->enter($__internal_c7b3f2d508fda8b4851dedc2c2849584b3f05bb36c9f22f4ea248e7865bc249c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_86590e250eda51eddfe4c3f49cc5c6b7ab19d260fda19dc3361206a8c9775542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86590e250eda51eddfe4c3f49cc5c6b7ab19d260fda19dc3361206a8c9775542->enter($__internal_86590e250eda51eddfe4c3f49cc5c6b7ab19d260fda19dc3361206a8c9775542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_86590e250eda51eddfe4c3f49cc5c6b7ab19d260fda19dc3361206a8c9775542->leave($__internal_86590e250eda51eddfe4c3f49cc5c6b7ab19d260fda19dc3361206a8c9775542_prof);

        
        $__internal_c7b3f2d508fda8b4851dedc2c2849584b3f05bb36c9f22f4ea248e7865bc249c->leave($__internal_c7b3f2d508fda8b4851dedc2c2849584b3f05bb36c9f22f4ea248e7865bc249c_prof);

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
