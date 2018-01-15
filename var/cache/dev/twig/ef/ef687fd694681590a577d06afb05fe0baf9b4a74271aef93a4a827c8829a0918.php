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
        $__internal_c357ef2d897b76fd3ece0eb00f65ed58c9df8a3bbcd5995f9765567a96b26910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c357ef2d897b76fd3ece0eb00f65ed58c9df8a3bbcd5995f9765567a96b26910->enter($__internal_c357ef2d897b76fd3ece0eb00f65ed58c9df8a3bbcd5995f9765567a96b26910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cd9457d84eb7afa944c9c3648eaac5c7082974d73f5aea684f84e661b29cd83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9457d84eb7afa944c9c3648eaac5c7082974d73f5aea684f84e661b29cd83c->enter($__internal_cd9457d84eb7afa944c9c3648eaac5c7082974d73f5aea684f84e661b29cd83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c357ef2d897b76fd3ece0eb00f65ed58c9df8a3bbcd5995f9765567a96b26910->leave($__internal_c357ef2d897b76fd3ece0eb00f65ed58c9df8a3bbcd5995f9765567a96b26910_prof);

        
        $__internal_cd9457d84eb7afa944c9c3648eaac5c7082974d73f5aea684f84e661b29cd83c->leave($__internal_cd9457d84eb7afa944c9c3648eaac5c7082974d73f5aea684f84e661b29cd83c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_348edb23b77f91a92e23c7460f5e2a48a9d125f638876949b69fad744783606c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348edb23b77f91a92e23c7460f5e2a48a9d125f638876949b69fad744783606c->enter($__internal_348edb23b77f91a92e23c7460f5e2a48a9d125f638876949b69fad744783606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d2b138a26f3c7202509453d6c9a6b6c568df496cbaab91bfd1150f2f46aa568a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b138a26f3c7202509453d6c9a6b6c568df496cbaab91bfd1150f2f46aa568a->enter($__internal_d2b138a26f3c7202509453d6c9a6b6c568df496cbaab91bfd1150f2f46aa568a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d2b138a26f3c7202509453d6c9a6b6c568df496cbaab91bfd1150f2f46aa568a->leave($__internal_d2b138a26f3c7202509453d6c9a6b6c568df496cbaab91bfd1150f2f46aa568a_prof);

        
        $__internal_348edb23b77f91a92e23c7460f5e2a48a9d125f638876949b69fad744783606c->leave($__internal_348edb23b77f91a92e23c7460f5e2a48a9d125f638876949b69fad744783606c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fdf644d615b44421bc77bc11cd8d58e5ce86a8f214c150aa4adfd77056888094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf644d615b44421bc77bc11cd8d58e5ce86a8f214c150aa4adfd77056888094->enter($__internal_fdf644d615b44421bc77bc11cd8d58e5ce86a8f214c150aa4adfd77056888094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_638dfa3fab82e757b5520290b27b47d15583872314a0672e55174fdf27e9581f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638dfa3fab82e757b5520290b27b47d15583872314a0672e55174fdf27e9581f->enter($__internal_638dfa3fab82e757b5520290b27b47d15583872314a0672e55174fdf27e9581f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_638dfa3fab82e757b5520290b27b47d15583872314a0672e55174fdf27e9581f->leave($__internal_638dfa3fab82e757b5520290b27b47d15583872314a0672e55174fdf27e9581f_prof);

        
        $__internal_fdf644d615b44421bc77bc11cd8d58e5ce86a8f214c150aa4adfd77056888094->leave($__internal_fdf644d615b44421bc77bc11cd8d58e5ce86a8f214c150aa4adfd77056888094_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_611991bcd8527a0da86313e5929e3b9e5f882aaf9cdc134855eef7f7cc5e43fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611991bcd8527a0da86313e5929e3b9e5f882aaf9cdc134855eef7f7cc5e43fe->enter($__internal_611991bcd8527a0da86313e5929e3b9e5f882aaf9cdc134855eef7f7cc5e43fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e99bc1d3b6dc94c76866513d15129bef41ee3878529148443eae06728463898b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99bc1d3b6dc94c76866513d15129bef41ee3878529148443eae06728463898b->enter($__internal_e99bc1d3b6dc94c76866513d15129bef41ee3878529148443eae06728463898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e99bc1d3b6dc94c76866513d15129bef41ee3878529148443eae06728463898b->leave($__internal_e99bc1d3b6dc94c76866513d15129bef41ee3878529148443eae06728463898b_prof);

        
        $__internal_611991bcd8527a0da86313e5929e3b9e5f882aaf9cdc134855eef7f7cc5e43fe->leave($__internal_611991bcd8527a0da86313e5929e3b9e5f882aaf9cdc134855eef7f7cc5e43fe_prof);

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
