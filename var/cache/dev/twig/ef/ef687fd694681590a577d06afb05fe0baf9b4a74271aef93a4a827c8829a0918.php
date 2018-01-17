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
        $__internal_b01e6463fadbbc781fbede95eab5aeba185795de396fe7f3d1be019e31f053f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01e6463fadbbc781fbede95eab5aeba185795de396fe7f3d1be019e31f053f8->enter($__internal_b01e6463fadbbc781fbede95eab5aeba185795de396fe7f3d1be019e31f053f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_72a27b1ff616493077e2e1147b19c82d7957b9ac22e09dd56feb53b74131e6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a27b1ff616493077e2e1147b19c82d7957b9ac22e09dd56feb53b74131e6b4->enter($__internal_72a27b1ff616493077e2e1147b19c82d7957b9ac22e09dd56feb53b74131e6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b01e6463fadbbc781fbede95eab5aeba185795de396fe7f3d1be019e31f053f8->leave($__internal_b01e6463fadbbc781fbede95eab5aeba185795de396fe7f3d1be019e31f053f8_prof);

        
        $__internal_72a27b1ff616493077e2e1147b19c82d7957b9ac22e09dd56feb53b74131e6b4->leave($__internal_72a27b1ff616493077e2e1147b19c82d7957b9ac22e09dd56feb53b74131e6b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7901f1c7b28b44cac3e428fb1e3a0c69e56218126106409347dcad9f9d4e41a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7901f1c7b28b44cac3e428fb1e3a0c69e56218126106409347dcad9f9d4e41a1->enter($__internal_7901f1c7b28b44cac3e428fb1e3a0c69e56218126106409347dcad9f9d4e41a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f2a9924b0177f77309c099ddd864c8d00c4c746cd5911a5efebfeadeb31d2b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a9924b0177f77309c099ddd864c8d00c4c746cd5911a5efebfeadeb31d2b21->enter($__internal_f2a9924b0177f77309c099ddd864c8d00c4c746cd5911a5efebfeadeb31d2b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f2a9924b0177f77309c099ddd864c8d00c4c746cd5911a5efebfeadeb31d2b21->leave($__internal_f2a9924b0177f77309c099ddd864c8d00c4c746cd5911a5efebfeadeb31d2b21_prof);

        
        $__internal_7901f1c7b28b44cac3e428fb1e3a0c69e56218126106409347dcad9f9d4e41a1->leave($__internal_7901f1c7b28b44cac3e428fb1e3a0c69e56218126106409347dcad9f9d4e41a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_afea0b1df11fff893ea585ca5e7d6eb2de45b47430df0a977731e085dd35f2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afea0b1df11fff893ea585ca5e7d6eb2de45b47430df0a977731e085dd35f2c1->enter($__internal_afea0b1df11fff893ea585ca5e7d6eb2de45b47430df0a977731e085dd35f2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ff1f82af283487a2b806564d1a7161aead4801625fde469478993a954dc6fa3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1f82af283487a2b806564d1a7161aead4801625fde469478993a954dc6fa3b->enter($__internal_ff1f82af283487a2b806564d1a7161aead4801625fde469478993a954dc6fa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff1f82af283487a2b806564d1a7161aead4801625fde469478993a954dc6fa3b->leave($__internal_ff1f82af283487a2b806564d1a7161aead4801625fde469478993a954dc6fa3b_prof);

        
        $__internal_afea0b1df11fff893ea585ca5e7d6eb2de45b47430df0a977731e085dd35f2c1->leave($__internal_afea0b1df11fff893ea585ca5e7d6eb2de45b47430df0a977731e085dd35f2c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_139dd4914f0e11b75f57a9e638e2b217eaf13242212d66097a5f6336b43477ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139dd4914f0e11b75f57a9e638e2b217eaf13242212d66097a5f6336b43477ad->enter($__internal_139dd4914f0e11b75f57a9e638e2b217eaf13242212d66097a5f6336b43477ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf8fb93a7e11473baeea634d08d175996917f00428bd6875361b109793602f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8fb93a7e11473baeea634d08d175996917f00428bd6875361b109793602f32->enter($__internal_cf8fb93a7e11473baeea634d08d175996917f00428bd6875361b109793602f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cf8fb93a7e11473baeea634d08d175996917f00428bd6875361b109793602f32->leave($__internal_cf8fb93a7e11473baeea634d08d175996917f00428bd6875361b109793602f32_prof);

        
        $__internal_139dd4914f0e11b75f57a9e638e2b217eaf13242212d66097a5f6336b43477ad->leave($__internal_139dd4914f0e11b75f57a9e638e2b217eaf13242212d66097a5f6336b43477ad_prof);

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
