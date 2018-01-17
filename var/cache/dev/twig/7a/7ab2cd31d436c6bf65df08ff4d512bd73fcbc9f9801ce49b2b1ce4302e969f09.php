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
        $__internal_c93762b19fbff2bf723c94bf4db265cab39959a121782d3999f29d575f0dec8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93762b19fbff2bf723c94bf4db265cab39959a121782d3999f29d575f0dec8e->enter($__internal_c93762b19fbff2bf723c94bf4db265cab39959a121782d3999f29d575f0dec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_19758e238d6fe4951328804380f8570f59b13c37474aafd24275fcab8edc5a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19758e238d6fe4951328804380f8570f59b13c37474aafd24275fcab8edc5a11->enter($__internal_19758e238d6fe4951328804380f8570f59b13c37474aafd24275fcab8edc5a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c93762b19fbff2bf723c94bf4db265cab39959a121782d3999f29d575f0dec8e->leave($__internal_c93762b19fbff2bf723c94bf4db265cab39959a121782d3999f29d575f0dec8e_prof);

        
        $__internal_19758e238d6fe4951328804380f8570f59b13c37474aafd24275fcab8edc5a11->leave($__internal_19758e238d6fe4951328804380f8570f59b13c37474aafd24275fcab8edc5a11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_835ca9d3f4b78ec68af9349edb4cd8ba6ecee69013b8be061f5acaddcd0bc7d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835ca9d3f4b78ec68af9349edb4cd8ba6ecee69013b8be061f5acaddcd0bc7d0->enter($__internal_835ca9d3f4b78ec68af9349edb4cd8ba6ecee69013b8be061f5acaddcd0bc7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0541be069657a89c51231ead752e6a4e7115add8bdb26056e7c8261112e4100f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0541be069657a89c51231ead752e6a4e7115add8bdb26056e7c8261112e4100f->enter($__internal_0541be069657a89c51231ead752e6a4e7115add8bdb26056e7c8261112e4100f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0541be069657a89c51231ead752e6a4e7115add8bdb26056e7c8261112e4100f->leave($__internal_0541be069657a89c51231ead752e6a4e7115add8bdb26056e7c8261112e4100f_prof);

        
        $__internal_835ca9d3f4b78ec68af9349edb4cd8ba6ecee69013b8be061f5acaddcd0bc7d0->leave($__internal_835ca9d3f4b78ec68af9349edb4cd8ba6ecee69013b8be061f5acaddcd0bc7d0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff2bf469ee3a7153b9afde3f8fa5c3c30d4e446ab72eb329be21e7bf1feddd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2bf469ee3a7153b9afde3f8fa5c3c30d4e446ab72eb329be21e7bf1feddd6d->enter($__internal_ff2bf469ee3a7153b9afde3f8fa5c3c30d4e446ab72eb329be21e7bf1feddd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22eafe4c6195c112c2d03fb4847f254777e4135d9eead85dccf44524962a8ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22eafe4c6195c112c2d03fb4847f254777e4135d9eead85dccf44524962a8ce7->enter($__internal_22eafe4c6195c112c2d03fb4847f254777e4135d9eead85dccf44524962a8ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_22eafe4c6195c112c2d03fb4847f254777e4135d9eead85dccf44524962a8ce7->leave($__internal_22eafe4c6195c112c2d03fb4847f254777e4135d9eead85dccf44524962a8ce7_prof);

        
        $__internal_ff2bf469ee3a7153b9afde3f8fa5c3c30d4e446ab72eb329be21e7bf1feddd6d->leave($__internal_ff2bf469ee3a7153b9afde3f8fa5c3c30d4e446ab72eb329be21e7bf1feddd6d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cdc6dec413dfe78a429c5a361f95ea8ce0df382ea0155d6b6528d599c67357b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cdc6dec413dfe78a429c5a361f95ea8ce0df382ea0155d6b6528d599c67357b->enter($__internal_5cdc6dec413dfe78a429c5a361f95ea8ce0df382ea0155d6b6528d599c67357b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cdd5b5f3c19ed46c1470a5d819310e7d68c7cba302845e537fe8a140f6c24904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd5b5f3c19ed46c1470a5d819310e7d68c7cba302845e537fe8a140f6c24904->enter($__internal_cdd5b5f3c19ed46c1470a5d819310e7d68c7cba302845e537fe8a140f6c24904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cdd5b5f3c19ed46c1470a5d819310e7d68c7cba302845e537fe8a140f6c24904->leave($__internal_cdd5b5f3c19ed46c1470a5d819310e7d68c7cba302845e537fe8a140f6c24904_prof);

        
        $__internal_5cdc6dec413dfe78a429c5a361f95ea8ce0df382ea0155d6b6528d599c67357b->leave($__internal_5cdc6dec413dfe78a429c5a361f95ea8ce0df382ea0155d6b6528d599c67357b_prof);

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
