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
        $__internal_9cb5edec1388bcb853431a3c4db6b7f9128e0e36d67ee3d0490d1b93f77335e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb5edec1388bcb853431a3c4db6b7f9128e0e36d67ee3d0490d1b93f77335e0->enter($__internal_9cb5edec1388bcb853431a3c4db6b7f9128e0e36d67ee3d0490d1b93f77335e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0aff5710eba339befa508b7ee0bfecbb3ebf71895a791cfcd83ea331b184be79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aff5710eba339befa508b7ee0bfecbb3ebf71895a791cfcd83ea331b184be79->enter($__internal_0aff5710eba339befa508b7ee0bfecbb3ebf71895a791cfcd83ea331b184be79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb5edec1388bcb853431a3c4db6b7f9128e0e36d67ee3d0490d1b93f77335e0->leave($__internal_9cb5edec1388bcb853431a3c4db6b7f9128e0e36d67ee3d0490d1b93f77335e0_prof);

        
        $__internal_0aff5710eba339befa508b7ee0bfecbb3ebf71895a791cfcd83ea331b184be79->leave($__internal_0aff5710eba339befa508b7ee0bfecbb3ebf71895a791cfcd83ea331b184be79_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_754719bd9fcaa0a81892ed9d8eb6d0bc05b4175aa9f66883cc91a2e3c1413851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754719bd9fcaa0a81892ed9d8eb6d0bc05b4175aa9f66883cc91a2e3c1413851->enter($__internal_754719bd9fcaa0a81892ed9d8eb6d0bc05b4175aa9f66883cc91a2e3c1413851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f1a671397bf9ec334573a815810602ce54a5aa6692e6a9a6d9e6406ee47a408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1a671397bf9ec334573a815810602ce54a5aa6692e6a9a6d9e6406ee47a408->enter($__internal_8f1a671397bf9ec334573a815810602ce54a5aa6692e6a9a6d9e6406ee47a408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8f1a671397bf9ec334573a815810602ce54a5aa6692e6a9a6d9e6406ee47a408->leave($__internal_8f1a671397bf9ec334573a815810602ce54a5aa6692e6a9a6d9e6406ee47a408_prof);

        
        $__internal_754719bd9fcaa0a81892ed9d8eb6d0bc05b4175aa9f66883cc91a2e3c1413851->leave($__internal_754719bd9fcaa0a81892ed9d8eb6d0bc05b4175aa9f66883cc91a2e3c1413851_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95174ea986354e40122abcf9b2cd89b510d4a8ec31eb63e0c4ab6e395c30ed2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95174ea986354e40122abcf9b2cd89b510d4a8ec31eb63e0c4ab6e395c30ed2e->enter($__internal_95174ea986354e40122abcf9b2cd89b510d4a8ec31eb63e0c4ab6e395c30ed2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_79ff0185a3585e5ef6baed0cbd6c8686655f813ce3df5c79ec4753fe783558a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ff0185a3585e5ef6baed0cbd6c8686655f813ce3df5c79ec4753fe783558a6->enter($__internal_79ff0185a3585e5ef6baed0cbd6c8686655f813ce3df5c79ec4753fe783558a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_79ff0185a3585e5ef6baed0cbd6c8686655f813ce3df5c79ec4753fe783558a6->leave($__internal_79ff0185a3585e5ef6baed0cbd6c8686655f813ce3df5c79ec4753fe783558a6_prof);

        
        $__internal_95174ea986354e40122abcf9b2cd89b510d4a8ec31eb63e0c4ab6e395c30ed2e->leave($__internal_95174ea986354e40122abcf9b2cd89b510d4a8ec31eb63e0c4ab6e395c30ed2e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b92ca9ec23fc507177e95f9cc41c3814f772fa5ac319950bb4fce37630b725ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92ca9ec23fc507177e95f9cc41c3814f772fa5ac319950bb4fce37630b725ad->enter($__internal_b92ca9ec23fc507177e95f9cc41c3814f772fa5ac319950bb4fce37630b725ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_baa1c124c43326543d66f0ae10eac1447bd3437f56afec892e247ac48ea70c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa1c124c43326543d66f0ae10eac1447bd3437f56afec892e247ac48ea70c41->enter($__internal_baa1c124c43326543d66f0ae10eac1447bd3437f56afec892e247ac48ea70c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_baa1c124c43326543d66f0ae10eac1447bd3437f56afec892e247ac48ea70c41->leave($__internal_baa1c124c43326543d66f0ae10eac1447bd3437f56afec892e247ac48ea70c41_prof);

        
        $__internal_b92ca9ec23fc507177e95f9cc41c3814f772fa5ac319950bb4fce37630b725ad->leave($__internal_b92ca9ec23fc507177e95f9cc41c3814f772fa5ac319950bb4fce37630b725ad_prof);

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
