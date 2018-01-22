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
        $__internal_b8c62292834bdac6adc1e33dfd1e7a88bd796c3776c9192cc69b5b2ab215e070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c62292834bdac6adc1e33dfd1e7a88bd796c3776c9192cc69b5b2ab215e070->enter($__internal_b8c62292834bdac6adc1e33dfd1e7a88bd796c3776c9192cc69b5b2ab215e070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bd36a875a2a3bf18e89fa2972a0280359b8bc38e5793c80484f30d4b882ea1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd36a875a2a3bf18e89fa2972a0280359b8bc38e5793c80484f30d4b882ea1a1->enter($__internal_bd36a875a2a3bf18e89fa2972a0280359b8bc38e5793c80484f30d4b882ea1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c62292834bdac6adc1e33dfd1e7a88bd796c3776c9192cc69b5b2ab215e070->leave($__internal_b8c62292834bdac6adc1e33dfd1e7a88bd796c3776c9192cc69b5b2ab215e070_prof);

        
        $__internal_bd36a875a2a3bf18e89fa2972a0280359b8bc38e5793c80484f30d4b882ea1a1->leave($__internal_bd36a875a2a3bf18e89fa2972a0280359b8bc38e5793c80484f30d4b882ea1a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bcff83f094272cfb56656bf9d435d1a1b88877e6b3d3a539ce21d8ae08a8712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcff83f094272cfb56656bf9d435d1a1b88877e6b3d3a539ce21d8ae08a8712->enter($__internal_9bcff83f094272cfb56656bf9d435d1a1b88877e6b3d3a539ce21d8ae08a8712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b98327f9b8d70ea249f61383179f874df23cda3a91ab24bbc0feddd9907600a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b98327f9b8d70ea249f61383179f874df23cda3a91ab24bbc0feddd9907600a->enter($__internal_0b98327f9b8d70ea249f61383179f874df23cda3a91ab24bbc0feddd9907600a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0b98327f9b8d70ea249f61383179f874df23cda3a91ab24bbc0feddd9907600a->leave($__internal_0b98327f9b8d70ea249f61383179f874df23cda3a91ab24bbc0feddd9907600a_prof);

        
        $__internal_9bcff83f094272cfb56656bf9d435d1a1b88877e6b3d3a539ce21d8ae08a8712->leave($__internal_9bcff83f094272cfb56656bf9d435d1a1b88877e6b3d3a539ce21d8ae08a8712_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_673bb7da25a8ec7200953394a2be5a0aa1efcae15560b42c67c29f9d08dc9ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673bb7da25a8ec7200953394a2be5a0aa1efcae15560b42c67c29f9d08dc9ffd->enter($__internal_673bb7da25a8ec7200953394a2be5a0aa1efcae15560b42c67c29f9d08dc9ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8f7e40596e7242082612a477c5036b5081e6bdccaacc70c9a554fc9b3d808b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7e40596e7242082612a477c5036b5081e6bdccaacc70c9a554fc9b3d808b19->enter($__internal_8f7e40596e7242082612a477c5036b5081e6bdccaacc70c9a554fc9b3d808b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8f7e40596e7242082612a477c5036b5081e6bdccaacc70c9a554fc9b3d808b19->leave($__internal_8f7e40596e7242082612a477c5036b5081e6bdccaacc70c9a554fc9b3d808b19_prof);

        
        $__internal_673bb7da25a8ec7200953394a2be5a0aa1efcae15560b42c67c29f9d08dc9ffd->leave($__internal_673bb7da25a8ec7200953394a2be5a0aa1efcae15560b42c67c29f9d08dc9ffd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0c4609de12a04bd0b786987a80cc68bd85e7461a614b67b40a3752571327235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c4609de12a04bd0b786987a80cc68bd85e7461a614b67b40a3752571327235->enter($__internal_e0c4609de12a04bd0b786987a80cc68bd85e7461a614b67b40a3752571327235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_115883d06caadc4cd05576414d5fc1e8931cb2d83880ea2a784b6e2938959e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115883d06caadc4cd05576414d5fc1e8931cb2d83880ea2a784b6e2938959e13->enter($__internal_115883d06caadc4cd05576414d5fc1e8931cb2d83880ea2a784b6e2938959e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_115883d06caadc4cd05576414d5fc1e8931cb2d83880ea2a784b6e2938959e13->leave($__internal_115883d06caadc4cd05576414d5fc1e8931cb2d83880ea2a784b6e2938959e13_prof);

        
        $__internal_e0c4609de12a04bd0b786987a80cc68bd85e7461a614b67b40a3752571327235->leave($__internal_e0c4609de12a04bd0b786987a80cc68bd85e7461a614b67b40a3752571327235_prof);

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
