<?php

/* default/map.html.twig */
class __TwigTemplate_01ea8405ccfc2917d88330b49ffff8e4b82e49a016f9dfe60120c566b7c829c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/map.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_800438a6e5e746edff2f35fad177f62bd09947a7818574829a6949a48c3458ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800438a6e5e746edff2f35fad177f62bd09947a7818574829a6949a48c3458ac->enter($__internal_800438a6e5e746edff2f35fad177f62bd09947a7818574829a6949a48c3458ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/map.html.twig"));

        $__internal_2befb34cacefe38891b5a127f94e1324d715690aa96568e90496a657676a42f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2befb34cacefe38891b5a127f94e1324d715690aa96568e90496a657676a42f4->enter($__internal_2befb34cacefe38891b5a127f94e1324d715690aa96568e90496a657676a42f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_800438a6e5e746edff2f35fad177f62bd09947a7818574829a6949a48c3458ac->leave($__internal_800438a6e5e746edff2f35fad177f62bd09947a7818574829a6949a48c3458ac_prof);

        
        $__internal_2befb34cacefe38891b5a127f94e1324d715690aa96568e90496a657676a42f4->leave($__internal_2befb34cacefe38891b5a127f94e1324d715690aa96568e90496a657676a42f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e0968e33f901a990f41d9461848ba2ee38d00ab8e8ba134b51731ca161e0112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0968e33f901a990f41d9461848ba2ee38d00ab8e8ba134b51731ca161e0112->enter($__internal_3e0968e33f901a990f41d9461848ba2ee38d00ab8e8ba134b51731ca161e0112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08ee31a3c58ea7ddfa42651d33a606c567dbd6281d9381ccdb8044090c5c7682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ee31a3c58ea7ddfa42651d33a606c567dbd6281d9381ccdb8044090c5c7682->enter($__internal_08ee31a3c58ea7ddfa42651d33a606c567dbd6281d9381ccdb8044090c5c7682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
ici sera placé la carte interactive...

";
        
        $__internal_08ee31a3c58ea7ddfa42651d33a606c567dbd6281d9381ccdb8044090c5c7682->leave($__internal_08ee31a3c58ea7ddfa42651d33a606c567dbd6281d9381ccdb8044090c5c7682_prof);

        
        $__internal_3e0968e33f901a990f41d9461848ba2ee38d00ab8e8ba134b51731ca161e0112->leave($__internal_3e0968e33f901a990f41d9461848ba2ee38d00ab8e8ba134b51731ca161e0112_prof);

    }

    public function getTemplateName()
    {
        return "default/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

ici sera placé la carte interactive...

{% endblock %}
", "default/map.html.twig", "C:\\wamp64\\www\\OpenClassRooms-Projet-NAO\\app\\Resources\\views\\default\\map.html.twig");
    }
}
