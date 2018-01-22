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
        $__internal_2a7c68adb8d9a4b95498cb2bdddf9c47d4595a2bae8fcedb909532cf302ce862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7c68adb8d9a4b95498cb2bdddf9c47d4595a2bae8fcedb909532cf302ce862->enter($__internal_2a7c68adb8d9a4b95498cb2bdddf9c47d4595a2bae8fcedb909532cf302ce862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_41f4c76e29351c27a22dd30c596d198fee41afdbee222be067827a43f8bcd8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f4c76e29351c27a22dd30c596d198fee41afdbee222be067827a43f8bcd8a5->enter($__internal_41f4c76e29351c27a22dd30c596d198fee41afdbee222be067827a43f8bcd8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a7c68adb8d9a4b95498cb2bdddf9c47d4595a2bae8fcedb909532cf302ce862->leave($__internal_2a7c68adb8d9a4b95498cb2bdddf9c47d4595a2bae8fcedb909532cf302ce862_prof);

        
        $__internal_41f4c76e29351c27a22dd30c596d198fee41afdbee222be067827a43f8bcd8a5->leave($__internal_41f4c76e29351c27a22dd30c596d198fee41afdbee222be067827a43f8bcd8a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8234e733a123c52f7a55c27d79a26e76b4c798e1cb1430cc223f583ac2dccb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8234e733a123c52f7a55c27d79a26e76b4c798e1cb1430cc223f583ac2dccb2->enter($__internal_f8234e733a123c52f7a55c27d79a26e76b4c798e1cb1430cc223f583ac2dccb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_92f6ca3c632a2d2a1343929d6586f116dd03df67529fc95a7cb3752d65fac2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f6ca3c632a2d2a1343929d6586f116dd03df67529fc95a7cb3752d65fac2dc->enter($__internal_92f6ca3c632a2d2a1343929d6586f116dd03df67529fc95a7cb3752d65fac2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92f6ca3c632a2d2a1343929d6586f116dd03df67529fc95a7cb3752d65fac2dc->leave($__internal_92f6ca3c632a2d2a1343929d6586f116dd03df67529fc95a7cb3752d65fac2dc_prof);

        
        $__internal_f8234e733a123c52f7a55c27d79a26e76b4c798e1cb1430cc223f583ac2dccb2->leave($__internal_f8234e733a123c52f7a55c27d79a26e76b4c798e1cb1430cc223f583ac2dccb2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce5f1f1b3f0070e52b9db97dd7730365a1c1cd6fc9310e4230a1b1f1f9626aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5f1f1b3f0070e52b9db97dd7730365a1c1cd6fc9310e4230a1b1f1f9626aeb->enter($__internal_ce5f1f1b3f0070e52b9db97dd7730365a1c1cd6fc9310e4230a1b1f1f9626aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18131c0ad5260b1ba31cd51e63e27184e9768e44fdb1ad19e4fa707a7a6aaebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18131c0ad5260b1ba31cd51e63e27184e9768e44fdb1ad19e4fa707a7a6aaebf->enter($__internal_18131c0ad5260b1ba31cd51e63e27184e9768e44fdb1ad19e4fa707a7a6aaebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18131c0ad5260b1ba31cd51e63e27184e9768e44fdb1ad19e4fa707a7a6aaebf->leave($__internal_18131c0ad5260b1ba31cd51e63e27184e9768e44fdb1ad19e4fa707a7a6aaebf_prof);

        
        $__internal_ce5f1f1b3f0070e52b9db97dd7730365a1c1cd6fc9310e4230a1b1f1f9626aeb->leave($__internal_ce5f1f1b3f0070e52b9db97dd7730365a1c1cd6fc9310e4230a1b1f1f9626aeb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec0fc7ab889dbe1148ef9ec81259cfe07a75c6a1c8019f5b8455a2cc1325b682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0fc7ab889dbe1148ef9ec81259cfe07a75c6a1c8019f5b8455a2cc1325b682->enter($__internal_ec0fc7ab889dbe1148ef9ec81259cfe07a75c6a1c8019f5b8455a2cc1325b682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4eac096596b748befbf6535b3e9fc21ec4edd814d09b4cc0e77ec2e858cb108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4eac096596b748befbf6535b3e9fc21ec4edd814d09b4cc0e77ec2e858cb108->enter($__internal_b4eac096596b748befbf6535b3e9fc21ec4edd814d09b4cc0e77ec2e858cb108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b4eac096596b748befbf6535b3e9fc21ec4edd814d09b4cc0e77ec2e858cb108->leave($__internal_b4eac096596b748befbf6535b3e9fc21ec4edd814d09b4cc0e77ec2e858cb108_prof);

        
        $__internal_ec0fc7ab889dbe1148ef9ec81259cfe07a75c6a1c8019f5b8455a2cc1325b682->leave($__internal_ec0fc7ab889dbe1148ef9ec81259cfe07a75c6a1c8019f5b8455a2cc1325b682_prof);

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
