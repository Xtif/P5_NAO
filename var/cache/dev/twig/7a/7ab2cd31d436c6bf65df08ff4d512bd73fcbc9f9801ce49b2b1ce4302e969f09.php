<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5c9521a1e9bb05c5c98c7cfd00c7e4f08751542367c8f61ed81b34232f57e219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9521a1e9bb05c5c98c7cfd00c7e4f08751542367c8f61ed81b34232f57e219->enter($__internal_5c9521a1e9bb05c5c98c7cfd00c7e4f08751542367c8f61ed81b34232f57e219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_91675f0d74481619a10ee51d199478d0b92425a471fe337252f5cb1fa8854c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91675f0d74481619a10ee51d199478d0b92425a471fe337252f5cb1fa8854c01->enter($__internal_91675f0d74481619a10ee51d199478d0b92425a471fe337252f5cb1fa8854c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9521a1e9bb05c5c98c7cfd00c7e4f08751542367c8f61ed81b34232f57e219->leave($__internal_5c9521a1e9bb05c5c98c7cfd00c7e4f08751542367c8f61ed81b34232f57e219_prof);

        
        $__internal_91675f0d74481619a10ee51d199478d0b92425a471fe337252f5cb1fa8854c01->leave($__internal_91675f0d74481619a10ee51d199478d0b92425a471fe337252f5cb1fa8854c01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9dd7b113fcda2c9c149d80411953dce0313ef965dce95219418fee73bbb2c594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd7b113fcda2c9c149d80411953dce0313ef965dce95219418fee73bbb2c594->enter($__internal_9dd7b113fcda2c9c149d80411953dce0313ef965dce95219418fee73bbb2c594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e919e3976ac629a9ac1db7177131679a1a9f068dfce411e0797698855cdc65d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e919e3976ac629a9ac1db7177131679a1a9f068dfce411e0797698855cdc65d2->enter($__internal_e919e3976ac629a9ac1db7177131679a1a9f068dfce411e0797698855cdc65d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e919e3976ac629a9ac1db7177131679a1a9f068dfce411e0797698855cdc65d2->leave($__internal_e919e3976ac629a9ac1db7177131679a1a9f068dfce411e0797698855cdc65d2_prof);

        
        $__internal_9dd7b113fcda2c9c149d80411953dce0313ef965dce95219418fee73bbb2c594->leave($__internal_9dd7b113fcda2c9c149d80411953dce0313ef965dce95219418fee73bbb2c594_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3db267d6ee330e51f47c072977b2deb7cfdf243744a45cbea083d5adc06083a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db267d6ee330e51f47c072977b2deb7cfdf243744a45cbea083d5adc06083a8->enter($__internal_3db267d6ee330e51f47c072977b2deb7cfdf243744a45cbea083d5adc06083a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_769a54a203cef9a4fd171a9c77f5276939619661e53527233f9085700350f788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769a54a203cef9a4fd171a9c77f5276939619661e53527233f9085700350f788->enter($__internal_769a54a203cef9a4fd171a9c77f5276939619661e53527233f9085700350f788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_769a54a203cef9a4fd171a9c77f5276939619661e53527233f9085700350f788->leave($__internal_769a54a203cef9a4fd171a9c77f5276939619661e53527233f9085700350f788_prof);

        
        $__internal_3db267d6ee330e51f47c072977b2deb7cfdf243744a45cbea083d5adc06083a8->leave($__internal_3db267d6ee330e51f47c072977b2deb7cfdf243744a45cbea083d5adc06083a8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80dc03f61832914b8c7f49fdb48ae3a1279a8048b3d91c5ddff12130ff685808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80dc03f61832914b8c7f49fdb48ae3a1279a8048b3d91c5ddff12130ff685808->enter($__internal_80dc03f61832914b8c7f49fdb48ae3a1279a8048b3d91c5ddff12130ff685808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_deab3409eecb310fcfaf9a6168d34edcee5d2b5cfaa06bf872a093deb0cfd62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deab3409eecb310fcfaf9a6168d34edcee5d2b5cfaa06bf872a093deb0cfd62f->enter($__internal_deab3409eecb310fcfaf9a6168d34edcee5d2b5cfaa06bf872a093deb0cfd62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_deab3409eecb310fcfaf9a6168d34edcee5d2b5cfaa06bf872a093deb0cfd62f->leave($__internal_deab3409eecb310fcfaf9a6168d34edcee5d2b5cfaa06bf872a093deb0cfd62f_prof);

        
        $__internal_80dc03f61832914b8c7f49fdb48ae3a1279a8048b3d91c5ddff12130ff685808->leave($__internal_80dc03f61832914b8c7f49fdb48ae3a1279a8048b3d91c5ddff12130ff685808_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\OpenClassRooms-Projet-NAO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
