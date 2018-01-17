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
        $__internal_116a184c10c9b3d9c4d09add8237185fef577e32f78e05e1c3b2b0788bf962af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116a184c10c9b3d9c4d09add8237185fef577e32f78e05e1c3b2b0788bf962af->enter($__internal_116a184c10c9b3d9c4d09add8237185fef577e32f78e05e1c3b2b0788bf962af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f228951e3baa0d2e37f7d7797f8cad7550b983b9630b54efe7583876217e9178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f228951e3baa0d2e37f7d7797f8cad7550b983b9630b54efe7583876217e9178->enter($__internal_f228951e3baa0d2e37f7d7797f8cad7550b983b9630b54efe7583876217e9178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_116a184c10c9b3d9c4d09add8237185fef577e32f78e05e1c3b2b0788bf962af->leave($__internal_116a184c10c9b3d9c4d09add8237185fef577e32f78e05e1c3b2b0788bf962af_prof);

        
        $__internal_f228951e3baa0d2e37f7d7797f8cad7550b983b9630b54efe7583876217e9178->leave($__internal_f228951e3baa0d2e37f7d7797f8cad7550b983b9630b54efe7583876217e9178_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3dbe78dca5010aadcd006923732ba43dc6ffff328eef3cfabbe66afba61f413f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbe78dca5010aadcd006923732ba43dc6ffff328eef3cfabbe66afba61f413f->enter($__internal_3dbe78dca5010aadcd006923732ba43dc6ffff328eef3cfabbe66afba61f413f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c40f68bd24da0b0a7060c9e366d3dd870cca2996c17f8d64d11268284a77a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c40f68bd24da0b0a7060c9e366d3dd870cca2996c17f8d64d11268284a77a5f->enter($__internal_1c40f68bd24da0b0a7060c9e366d3dd870cca2996c17f8d64d11268284a77a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1c40f68bd24da0b0a7060c9e366d3dd870cca2996c17f8d64d11268284a77a5f->leave($__internal_1c40f68bd24da0b0a7060c9e366d3dd870cca2996c17f8d64d11268284a77a5f_prof);

        
        $__internal_3dbe78dca5010aadcd006923732ba43dc6ffff328eef3cfabbe66afba61f413f->leave($__internal_3dbe78dca5010aadcd006923732ba43dc6ffff328eef3cfabbe66afba61f413f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e7b814954b2766842827ca7aba8c8564f60221e4227daac93e3f4503108d6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7b814954b2766842827ca7aba8c8564f60221e4227daac93e3f4503108d6fc->enter($__internal_8e7b814954b2766842827ca7aba8c8564f60221e4227daac93e3f4503108d6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f0895854723ec64244296a86c7fdd85ee1cd7d93f887fdd518ebeb2d791a9d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0895854723ec64244296a86c7fdd85ee1cd7d93f887fdd518ebeb2d791a9d87->enter($__internal_f0895854723ec64244296a86c7fdd85ee1cd7d93f887fdd518ebeb2d791a9d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f0895854723ec64244296a86c7fdd85ee1cd7d93f887fdd518ebeb2d791a9d87->leave($__internal_f0895854723ec64244296a86c7fdd85ee1cd7d93f887fdd518ebeb2d791a9d87_prof);

        
        $__internal_8e7b814954b2766842827ca7aba8c8564f60221e4227daac93e3f4503108d6fc->leave($__internal_8e7b814954b2766842827ca7aba8c8564f60221e4227daac93e3f4503108d6fc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f1c613ff7f923e5eac8e7795cca87a7e0dacce6bea63f27e78d58a4b4063e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1c613ff7f923e5eac8e7795cca87a7e0dacce6bea63f27e78d58a4b4063e62->enter($__internal_0f1c613ff7f923e5eac8e7795cca87a7e0dacce6bea63f27e78d58a4b4063e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f51077312668a16dd9fc8dd02d1c360c84a67c4314329527a055bb4e1eef4d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51077312668a16dd9fc8dd02d1c360c84a67c4314329527a055bb4e1eef4d6b->enter($__internal_f51077312668a16dd9fc8dd02d1c360c84a67c4314329527a055bb4e1eef4d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f51077312668a16dd9fc8dd02d1c360c84a67c4314329527a055bb4e1eef4d6b->leave($__internal_f51077312668a16dd9fc8dd02d1c360c84a67c4314329527a055bb4e1eef4d6b_prof);

        
        $__internal_0f1c613ff7f923e5eac8e7795cca87a7e0dacce6bea63f27e78d58a4b4063e62->leave($__internal_0f1c613ff7f923e5eac8e7795cca87a7e0dacce6bea63f27e78d58a4b4063e62_prof);

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
