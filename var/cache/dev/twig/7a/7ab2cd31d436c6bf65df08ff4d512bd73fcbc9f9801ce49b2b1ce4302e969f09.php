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
        $__internal_d54edb2b3e138988da76333b52ea2c1da901e3aae6b86a2791e195880616f7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54edb2b3e138988da76333b52ea2c1da901e3aae6b86a2791e195880616f7f2->enter($__internal_d54edb2b3e138988da76333b52ea2c1da901e3aae6b86a2791e195880616f7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3f56152b94d96144594d973b98efa657fb775bb4d9e2be5ff9f6fd09ff4c26c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f56152b94d96144594d973b98efa657fb775bb4d9e2be5ff9f6fd09ff4c26c4->enter($__internal_3f56152b94d96144594d973b98efa657fb775bb4d9e2be5ff9f6fd09ff4c26c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d54edb2b3e138988da76333b52ea2c1da901e3aae6b86a2791e195880616f7f2->leave($__internal_d54edb2b3e138988da76333b52ea2c1da901e3aae6b86a2791e195880616f7f2_prof);

        
        $__internal_3f56152b94d96144594d973b98efa657fb775bb4d9e2be5ff9f6fd09ff4c26c4->leave($__internal_3f56152b94d96144594d973b98efa657fb775bb4d9e2be5ff9f6fd09ff4c26c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc960321c767d1842f1b134855a8f65b051e8be784c9aaa9101ffbeb6b1827c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc960321c767d1842f1b134855a8f65b051e8be784c9aaa9101ffbeb6b1827c9->enter($__internal_cc960321c767d1842f1b134855a8f65b051e8be784c9aaa9101ffbeb6b1827c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f44b3f3fbef61e635eda0c4d4e14f28605cf91f74be9ecf99095323fdecd99f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44b3f3fbef61e635eda0c4d4e14f28605cf91f74be9ecf99095323fdecd99f3->enter($__internal_f44b3f3fbef61e635eda0c4d4e14f28605cf91f74be9ecf99095323fdecd99f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f44b3f3fbef61e635eda0c4d4e14f28605cf91f74be9ecf99095323fdecd99f3->leave($__internal_f44b3f3fbef61e635eda0c4d4e14f28605cf91f74be9ecf99095323fdecd99f3_prof);

        
        $__internal_cc960321c767d1842f1b134855a8f65b051e8be784c9aaa9101ffbeb6b1827c9->leave($__internal_cc960321c767d1842f1b134855a8f65b051e8be784c9aaa9101ffbeb6b1827c9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e446462fbfd12f953a51a524b993cbccdd9f8a3af793f728940c8e405c32fb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e446462fbfd12f953a51a524b993cbccdd9f8a3af793f728940c8e405c32fb9a->enter($__internal_e446462fbfd12f953a51a524b993cbccdd9f8a3af793f728940c8e405c32fb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a2ce3de3f9b85b4d5bb86599a19dc6a28222b90bd8c863bc34629682d18e8c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ce3de3f9b85b4d5bb86599a19dc6a28222b90bd8c863bc34629682d18e8c4d->enter($__internal_a2ce3de3f9b85b4d5bb86599a19dc6a28222b90bd8c863bc34629682d18e8c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a2ce3de3f9b85b4d5bb86599a19dc6a28222b90bd8c863bc34629682d18e8c4d->leave($__internal_a2ce3de3f9b85b4d5bb86599a19dc6a28222b90bd8c863bc34629682d18e8c4d_prof);

        
        $__internal_e446462fbfd12f953a51a524b993cbccdd9f8a3af793f728940c8e405c32fb9a->leave($__internal_e446462fbfd12f953a51a524b993cbccdd9f8a3af793f728940c8e405c32fb9a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecfa82684f57bb8c06b557b6c217616e71e9736065ef2a80e46a730d555b52a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfa82684f57bb8c06b557b6c217616e71e9736065ef2a80e46a730d555b52a6->enter($__internal_ecfa82684f57bb8c06b557b6c217616e71e9736065ef2a80e46a730d555b52a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1138f443c535bde7a50b258beb5448eed86911e9faefa7ef42274598967f9172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1138f443c535bde7a50b258beb5448eed86911e9faefa7ef42274598967f9172->enter($__internal_1138f443c535bde7a50b258beb5448eed86911e9faefa7ef42274598967f9172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1138f443c535bde7a50b258beb5448eed86911e9faefa7ef42274598967f9172->leave($__internal_1138f443c535bde7a50b258beb5448eed86911e9faefa7ef42274598967f9172_prof);

        
        $__internal_ecfa82684f57bb8c06b557b6c217616e71e9736065ef2a80e46a730d555b52a6->leave($__internal_ecfa82684f57bb8c06b557b6c217616e71e9736065ef2a80e46a730d555b52a6_prof);

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
