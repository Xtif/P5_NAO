<?php

/* default/contact.html.twig */
class __TwigTemplate_50a5e8a7a64738b6f14a2e87d3b4d31ac747f4e4ced92ab65226c77337169555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
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
        $__internal_6b16c50a4d27fd36968b40485760432711776d17fefec1b30628b32929fab675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b16c50a4d27fd36968b40485760432711776d17fefec1b30628b32929fab675->enter($__internal_6b16c50a4d27fd36968b40485760432711776d17fefec1b30628b32929fab675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $__internal_1adb50c140cc7ad41aec0bd4847c71e1dc8d25db05224c92043cbf59b2ff5bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1adb50c140cc7ad41aec0bd4847c71e1dc8d25db05224c92043cbf59b2ff5bd8->enter($__internal_1adb50c140cc7ad41aec0bd4847c71e1dc8d25db05224c92043cbf59b2ff5bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b16c50a4d27fd36968b40485760432711776d17fefec1b30628b32929fab675->leave($__internal_6b16c50a4d27fd36968b40485760432711776d17fefec1b30628b32929fab675_prof);

        
        $__internal_1adb50c140cc7ad41aec0bd4847c71e1dc8d25db05224c92043cbf59b2ff5bd8->leave($__internal_1adb50c140cc7ad41aec0bd4847c71e1dc8d25db05224c92043cbf59b2ff5bd8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69ebb8fffa7602454528417dbd3eea59fdc45311f61f8d1123e6c71894200fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ebb8fffa7602454528417dbd3eea59fdc45311f61f8d1123e6c71894200fd2->enter($__internal_69ebb8fffa7602454528417dbd3eea59fdc45311f61f8d1123e6c71894200fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d4f81d6652c74782bb0d659c17433568129c936cd5125fa30d83b9652c36cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4f81d6652c74782bb0d659c17433568129c936cd5125fa30d83b9652c36cb0->enter($__internal_3d4f81d6652c74782bb0d659c17433568129c936cd5125fa30d83b9652c36cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
Ici sera placé le formulaire de contact...

";
        
        $__internal_3d4f81d6652c74782bb0d659c17433568129c936cd5125fa30d83b9652c36cb0->leave($__internal_3d4f81d6652c74782bb0d659c17433568129c936cd5125fa30d83b9652c36cb0_prof);

        
        $__internal_69ebb8fffa7602454528417dbd3eea59fdc45311f61f8d1123e6c71894200fd2->leave($__internal_69ebb8fffa7602454528417dbd3eea59fdc45311f61f8d1123e6c71894200fd2_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
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

Ici sera placé le formulaire de contact...

{% endblock %}
", "default/contact.html.twig", "C:\\wamp64\\www\\OpenClassRooms-Projet-NAO\\app\\Resources\\views\\default\\contact.html.twig");
    }
}
