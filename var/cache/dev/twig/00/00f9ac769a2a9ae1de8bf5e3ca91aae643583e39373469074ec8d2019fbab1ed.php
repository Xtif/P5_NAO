<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d94be88c51a39e6cd550b8b61c9090f68acf423f3a911b79e05e8b1bdb5840c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d94be88c51a39e6cd550b8b61c9090f68acf423f3a911b79e05e8b1bdb5840c->enter($__internal_1d94be88c51a39e6cd550b8b61c9090f68acf423f3a911b79e05e8b1bdb5840c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5c1a44cd997b925b8c21c1a823ac734add1d41a45ec4d09111376e53df7029f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1a44cd997b925b8c21c1a823ac734add1d41a45ec4d09111376e53df7029f2->enter($__internal_5c1a44cd997b925b8c21c1a823ac734add1d41a45ec4d09111376e53df7029f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1d94be88c51a39e6cd550b8b61c9090f68acf423f3a911b79e05e8b1bdb5840c->leave($__internal_1d94be88c51a39e6cd550b8b61c9090f68acf423f3a911b79e05e8b1bdb5840c_prof);

        
        $__internal_5c1a44cd997b925b8c21c1a823ac734add1d41a45ec4d09111376e53df7029f2->leave($__internal_5c1a44cd997b925b8c21c1a823ac734add1d41a45ec4d09111376e53df7029f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d1fa1b390083cb8fe00696d61b053a4c7ed2bd955cc04dcd8d50625c1710c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1fa1b390083cb8fe00696d61b053a4c7ed2bd955cc04dcd8d50625c1710c44->enter($__internal_6d1fa1b390083cb8fe00696d61b053a4c7ed2bd955cc04dcd8d50625c1710c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbc149aef75ad98ba05d975b56e53ff0a787833816adedd15c5592f22aa68409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc149aef75ad98ba05d975b56e53ff0a787833816adedd15c5592f22aa68409->enter($__internal_dbc149aef75ad98ba05d975b56e53ff0a787833816adedd15c5592f22aa68409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dbc149aef75ad98ba05d975b56e53ff0a787833816adedd15c5592f22aa68409->leave($__internal_dbc149aef75ad98ba05d975b56e53ff0a787833816adedd15c5592f22aa68409_prof);

        
        $__internal_6d1fa1b390083cb8fe00696d61b053a4c7ed2bd955cc04dcd8d50625c1710c44->leave($__internal_6d1fa1b390083cb8fe00696d61b053a4c7ed2bd955cc04dcd8d50625c1710c44_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_49dcdd51c7cb10ed0890834cbc29aeaf99b9f0c5bc25e0e4b25c6e43dfad960e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49dcdd51c7cb10ed0890834cbc29aeaf99b9f0c5bc25e0e4b25c6e43dfad960e->enter($__internal_49dcdd51c7cb10ed0890834cbc29aeaf99b9f0c5bc25e0e4b25c6e43dfad960e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_131de5855ddd04bbf9fb7f14905616c75244b24757da2d2d492afb7da45f849f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131de5855ddd04bbf9fb7f14905616c75244b24757da2d2d492afb7da45f849f->enter($__internal_131de5855ddd04bbf9fb7f14905616c75244b24757da2d2d492afb7da45f849f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_131de5855ddd04bbf9fb7f14905616c75244b24757da2d2d492afb7da45f849f->leave($__internal_131de5855ddd04bbf9fb7f14905616c75244b24757da2d2d492afb7da45f849f_prof);

        
        $__internal_49dcdd51c7cb10ed0890834cbc29aeaf99b9f0c5bc25e0e4b25c6e43dfad960e->leave($__internal_49dcdd51c7cb10ed0890834cbc29aeaf99b9f0c5bc25e0e4b25c6e43dfad960e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_62706237a0cbff12f18c1b3a9f57243a1e2f4455317a6195dd44654cf28fa14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62706237a0cbff12f18c1b3a9f57243a1e2f4455317a6195dd44654cf28fa14d->enter($__internal_62706237a0cbff12f18c1b3a9f57243a1e2f4455317a6195dd44654cf28fa14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d041c9c3d0478b8f863b2e8f7c5edd687a896ac0d56646904ed210a11a4ee060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d041c9c3d0478b8f863b2e8f7c5edd687a896ac0d56646904ed210a11a4ee060->enter($__internal_d041c9c3d0478b8f863b2e8f7c5edd687a896ac0d56646904ed210a11a4ee060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d041c9c3d0478b8f863b2e8f7c5edd687a896ac0d56646904ed210a11a4ee060->leave($__internal_d041c9c3d0478b8f863b2e8f7c5edd687a896ac0d56646904ed210a11a4ee060_prof);

        
        $__internal_62706237a0cbff12f18c1b3a9f57243a1e2f4455317a6195dd44654cf28fa14d->leave($__internal_62706237a0cbff12f18c1b3a9f57243a1e2f4455317a6195dd44654cf28fa14d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\OpenClassRooms-Projet-NAO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
