<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_7efe7f3c8ac5e625f584ad242b42fa385175eb3da1ed19b399aff416f826fd97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_004db619252a1ca7fe7bda52bb80895c1769d5c8b5bf54fdd50e0f9a08765182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004db619252a1ca7fe7bda52bb80895c1769d5c8b5bf54fdd50e0f9a08765182->enter($__internal_004db619252a1ca7fe7bda52bb80895c1769d5c8b5bf54fdd50e0f9a08765182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $__internal_da030a92ec975a1efdf05327be03689ce2ca7ce52cf7fa6f2dc359aa26754ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da030a92ec975a1efdf05327be03689ce2ca7ce52cf7fa6f2dc359aa26754ed0->enter($__internal_da030a92ec975a1efdf05327be03689ce2ca7ce52cf7fa6f2dc359aa26754ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_004db619252a1ca7fe7bda52bb80895c1769d5c8b5bf54fdd50e0f9a08765182->leave($__internal_004db619252a1ca7fe7bda52bb80895c1769d5c8b5bf54fdd50e0f9a08765182_prof);

        
        $__internal_da030a92ec975a1efdf05327be03689ce2ca7ce52cf7fa6f2dc359aa26754ed0->leave($__internal_da030a92ec975a1efdf05327be03689ce2ca7ce52cf7fa6f2dc359aa26754ed0_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2c1647b7b820d3857cc6159a51917e42fd7bbe0ef7654c5e98e3e805b8caebb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1647b7b820d3857cc6159a51917e42fd7bbe0ef7654c5e98e3e805b8caebb3->enter($__internal_2c1647b7b820d3857cc6159a51917e42fd7bbe0ef7654c5e98e3e805b8caebb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_be9931ca10c83797a91f880747130ccf1f483a84c6c6dbbfa4a25d5d97c977ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9931ca10c83797a91f880747130ccf1f483a84c6c6dbbfa4a25d5d97c977ec->enter($__internal_be9931ca10c83797a91f880747130ccf1f483a84c6c6dbbfa4a25d5d97c977ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_be9931ca10c83797a91f880747130ccf1f483a84c6c6dbbfa4a25d5d97c977ec->leave($__internal_be9931ca10c83797a91f880747130ccf1f483a84c6c6dbbfa4a25d5d97c977ec_prof);

        
        $__internal_2c1647b7b820d3857cc6159a51917e42fd7bbe0ef7654c5e98e3e805b8caebb3->leave($__internal_2c1647b7b820d3857cc6159a51917e42fd7bbe0ef7654c5e98e3e805b8caebb3_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8793ec37faca0017878375b99438be852411015d09663ac39fe5dd01cd9ec353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8793ec37faca0017878375b99438be852411015d09663ac39fe5dd01cd9ec353->enter($__internal_8793ec37faca0017878375b99438be852411015d09663ac39fe5dd01cd9ec353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_969b906de084714db44e2a7b73fd3f46510f519cca60f5a33e5201b1dbb6e26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969b906de084714db44e2a7b73fd3f46510f519cca60f5a33e5201b1dbb6e26d->enter($__internal_969b906de084714db44e2a7b73fd3f46510f519cca60f5a33e5201b1dbb6e26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array())) {
            // line 7
            echo "        ";
            $context["is_authenticated"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()));
            // line 8
            echo "        ";
            $context["color_code"] = (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("") : ("yellow"));
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["color_code"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) ? ("red") : (""));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "impersonated", array())) {
            // line 20
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "impersonatorUser", array()), "html", null, true);
            echo "</span>
                </div>
            </div>
        ";
        }
        // line 27
        echo "
        <div class=\"sf-toolbar-info-group\">
            ";
        // line 29
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
            // line 30
            echo "                ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array())) {
                // line 31
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()), "html", null, true);
                echo "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 38
                echo (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("green") : ("red"));
                echo "\">";
                echo (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("Yes") : ("No"));
                echo "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()));
                echo "</span>
                    </div>
                ";
            } else {
                // line 46
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                    </div>
                ";
            }
            // line 51
            echo "
                ";
            // line 52
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array())) {
                // line 53
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    </div>
                ";
            }
            // line 58
            echo "
                ";
            // line 59
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()) && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logoutUrl", array()))) {
                // line 60
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a>
                            ";
                // line 64
                if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "impersonated", array()) && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "impersonationExitPath", array()))) {
                    // line 65
                    echo "                                | <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "impersonationExitPath", array()), "html", null, true);
                    echo "\">Exit impersonation</a>
                            ";
                }
                // line 67
                echo "                        </span>
                    </div>
                ";
            }
            // line 70
            echo "            ";
        } else {
            // line 71
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>
            ";
        }
        // line 75
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 77
        echo "
    ";
        // line 78
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code"))));
        echo "
";
        
        $__internal_969b906de084714db44e2a7b73fd3f46510f519cca60f5a33e5201b1dbb6e26d->leave($__internal_969b906de084714db44e2a7b73fd3f46510f519cca60f5a33e5201b1dbb6e26d_prof);

        
        $__internal_8793ec37faca0017878375b99438be852411015d09663ac39fe5dd01cd9ec353->leave($__internal_8793ec37faca0017878375b99438be852411015d09663ac39fe5dd01cd9ec353_prof);

    }

    // line 81
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91dec9986581835d9f1a44188ed789262c1eb356161971a4758169a478eed2dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91dec9986581835d9f1a44188ed789262c1eb356161971a4758169a478eed2dd->enter($__internal_91dec9986581835d9f1a44188ed789262c1eb356161971a4758169a478eed2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ba5561c177bf27f6513d5fda43b3133434a1791916e4418144a9ae49fb8fb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba5561c177bf27f6513d5fda43b3133434a1791916e4418144a9ae49fb8fb5c->enter($__internal_1ba5561c177bf27f6513d5fda43b3133434a1791916e4418144a9ae49fb8fb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 82
        echo "    <span class=\"label ";
        echo ((( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) ||  !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 83
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_1ba5561c177bf27f6513d5fda43b3133434a1791916e4418144a9ae49fb8fb5c->leave($__internal_1ba5561c177bf27f6513d5fda43b3133434a1791916e4418144a9ae49fb8fb5c_prof);

        
        $__internal_91dec9986581835d9f1a44188ed789262c1eb356161971a4758169a478eed2dd->leave($__internal_91dec9986581835d9f1a44188ed789262c1eb356161971a4758169a478eed2dd_prof);

    }

    // line 88
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d6551f1b7e999b1a0208374afdf44138efdacd00c0a4f0e86f2ea14b97e7c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6551f1b7e999b1a0208374afdf44138efdacd00c0a4f0e86f2ea14b97e7c82->enter($__internal_2d6551f1b7e999b1a0208374afdf44138efdacd00c0a4f0e86f2ea14b97e7c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_542c88a72e4c6e8381b378e695f0b1bef1f8a9447ab24c9a66872f29ee8f5fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542c88a72e4c6e8381b378e695f0b1bef1f8a9447ab24c9a66872f29ee8f5fa8->enter($__internal_542c88a72e4c6e8381b378e695f0b1bef1f8a9447ab24c9a66872f29ee8f5fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 89
        echo "    <h2>Security Token</h2>

    ";
        // line 91
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
            // line 92
            echo "        ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array())) {
                // line 93
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 95
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()) == "anon.")) ? ("Anonymous") : ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()))), "html", null, true);
                echo "</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 100
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            ";
                // line 116
                echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array()), 1))));
                echo "

                            ";
                // line 118
                if (( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()) && twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array())))) {
                    // line 119
                    echo "                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            ";
                }
                // line 121
                echo "                        </td>
                    </tr>

                    ";
                // line 124
                if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "supportsRoleHierarchy", array())) {
                    // line 125
                    echo "                    <tr>
                        <th>Inherited Roles</th>
                        <td>";
                    // line 127
                    echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inheritedRoles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inheritedRoles", array()), 1))));
                    echo "</td>
                    </tr>
                    ";
                }
                // line 130
                echo "
                    ";
                // line 131
                if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array())) {
                    // line 132
                    echo "                    <tr>
                        <th>Token</th>
                        <td>";
                    // line 134
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array())));
                    echo "</td>
                    </tr>
                    ";
                }
                // line 137
                echo "                </tbody>
            </table>
        ";
            } elseif ($this->getAttribute(            // line 139
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
                // line 140
                echo "            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        ";
            }
            // line 144
            echo "

        <h2>Security Firewall</h2>

        ";
            // line 148
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array())) {
                // line 149
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 155
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "security_enabled", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 159
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "stateless", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 163
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "allows_anonymous", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            ";
                // line 168
                if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "security_enabled", array())) {
                    // line 169
                    echo "                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>";
                    // line 181
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "provider", array())) ? ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "provider", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>";
                    // line 185
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "context", array())) ? ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "context", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>";
                    // line 189
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "entry_point", array())) ? ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "entry_point", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>";
                    // line 193
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "user_checker", array())) ? ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "user_checker", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>";
                    // line 197
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "access_denied_handler", array())) ? ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "access_denied_handler", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>";
                    // line 201
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "access_denied_url", array())) ? ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "access_denied_url", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>";
                    // line 205
                    echo ((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "listeners", array()))) ? ("(none)") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "firewall", array()), "listeners", array()), 1))));
                    echo "</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>

                ";
                    // line 212
                    if (twig_test_empty((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "listeners", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "listeners", array()), array())) : (array())))) {
                        // line 213
                        echo "                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>
                ";
                    } else {
                        // line 217
                        echo "                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>

                        ";
                        // line 226
                        $context["previous_event"] = twig_first($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "listeners", array()));
                        // line 227
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "listeners", array()));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                            // line 228
                            echo "                            ";
                            if (($this->getAttribute($context["loop"], "first", array()) || ($context["listener"] != (isset($context["previous_event"]) ? $context["previous_event"] : $this->getContext($context, "previous_event"))))) {
                                // line 229
                                echo "                                ";
                                if ( !$this->getAttribute($context["loop"], "first", array())) {
                                    // line 230
                                    echo "                                    </tbody>
                                ";
                                }
                                // line 232
                                echo "
                                <tbody>
                                ";
                                // line 234
                                $context["previous_event"] = $context["listener"];
                                // line 235
                                echo "                            ";
                            }
                            // line 236
                            echo "
                            <tr>
                                <td class=\"font-normal\">";
                            // line 238
                            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "stub", array())));
                            echo "</td>
                                <td class=\"no-wrap\">";
                            // line 239
                            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["listener"], "time", array()) * 1000)), "html", null, true);
                            echo " ms</td>
                                <td class=\"font-normal\">";
                            // line 240
                            echo (($this->getAttribute($context["listener"], "response", array())) ? (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "response", array())))) : ("(none)"));
                            echo "</td>
                            </tr>

                            ";
                            // line 243
                            if ($this->getAttribute($context["loop"], "last", array())) {
                                // line 244
                                echo "                                </tbody>
                            ";
                            }
                            // line 246
                            echo "                        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 247
                        echo "                    </table>
                ";
                    }
                    // line 249
                    echo "            ";
                }
                // line 250
                echo "        ";
            } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
                // line 251
                echo "            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        ";
            }
            // line 255
            echo "    ";
        } else {
            // line 256
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
        // line 260
        echo "
    ";
        // line 261
        if ( !twig_test_empty((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "voters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "voters", array()), array())) : (array())))) {
            // line 262
            echo "        <h2>Security Voters <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "voters", array())), "html", null, true);
            echo ")</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 266
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "voterStrategy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "voterStrategy", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "voters", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                // line 281
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 282
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 283
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["voter"]));
                echo "</td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "            </tbody>
        </table>
    ";
        }
        // line 289
        echo "
    ";
        // line 290
        if ( !twig_test_empty((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "accessDecisionLog", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "accessDecisionLog", array()), array())) : (array())))) {
            // line 291
            echo "        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 309
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "accessDecisionLog", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                // line 310
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 311
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">
                            ";
                // line 313
                echo (($this->getAttribute($context["decision"], "result", array())) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                // line 316
                echo "
                        </td>
                        <td>
                            ";
                // line 319
                if ((twig_length_filter($this->env, $this->getAttribute($context["decision"], "attributes", array())) == 1)) {
                    // line 320
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute($context["decision"], "attributes", array())), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 322
                    echo "                                ";
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["decision"], "attributes", array())));
                    echo "
                            ";
                }
                // line 324
                echo "                        </td>
                        <td>";
                // line 325
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["decision"], "seek", array(0 => "object"), "method")));
                echo "</td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_542c88a72e4c6e8381b378e695f0b1bef1f8a9447ab24c9a66872f29ee8f5fa8->leave($__internal_542c88a72e4c6e8381b378e695f0b1bef1f8a9447ab24c9a66872f29ee8f5fa8_prof);

        
        $__internal_2d6551f1b7e999b1a0208374afdf44138efdacd00c0a4f0e86f2ea14b97e7c82->leave($__internal_2d6551f1b7e999b1a0208374afdf44138efdacd00c0a4f0e86f2ea14b97e7c82_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 328,  749 => 325,  746 => 324,  740 => 322,  734 => 320,  732 => 319,  727 => 316,  725 => 313,  720 => 311,  717 => 310,  700 => 309,  680 => 291,  678 => 290,  675 => 289,  670 => 286,  653 => 283,  649 => 282,  646 => 281,  629 => 280,  612 => 266,  604 => 262,  602 => 261,  599 => 260,  593 => 256,  590 => 255,  584 => 251,  581 => 250,  578 => 249,  574 => 247,  560 => 246,  556 => 244,  554 => 243,  548 => 240,  544 => 239,  540 => 238,  536 => 236,  533 => 235,  531 => 234,  527 => 232,  523 => 230,  520 => 229,  517 => 228,  499 => 227,  497 => 226,  486 => 217,  480 => 213,  478 => 212,  468 => 205,  461 => 201,  454 => 197,  447 => 193,  440 => 189,  433 => 185,  426 => 181,  412 => 169,  410 => 168,  402 => 163,  395 => 159,  388 => 155,  381 => 151,  377 => 149,  375 => 148,  369 => 144,  363 => 140,  361 => 139,  357 => 137,  351 => 134,  347 => 132,  345 => 131,  342 => 130,  336 => 127,  332 => 125,  330 => 124,  325 => 121,  321 => 119,  319 => 118,  314 => 116,  295 => 100,  287 => 95,  283 => 93,  280 => 92,  278 => 91,  274 => 89,  265 => 88,  251 => 83,  246 => 82,  237 => 81,  225 => 78,  222 => 77,  218 => 75,  212 => 71,  209 => 70,  204 => 67,  198 => 65,  196 => 64,  192 => 63,  187 => 60,  185 => 59,  182 => 58,  176 => 55,  172 => 53,  170 => 52,  167 => 51,  160 => 46,  154 => 43,  144 => 38,  136 => 33,  132 => 31,  129 => 30,  127 => 29,  123 => 27,  116 => 23,  111 => 20,  108 => 19,  106 => 18,  103 => 17,  98 => 15,  93 => 14,  91 => 13,  88 => 12,  85 => 11,  82 => 10,  79 => 9,  76 => 8,  73 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block page_title 'Security' %}

{% block toolbar %}
    {% if collector.token %}
        {% set is_authenticated = collector.enabled and collector.authenticated  %}
        {% set color_code = is_authenticated ? '' : 'yellow' %}
    {% else %}
        {% set color_code = collector.enabled ? 'red' : '' %}
    {% endif %}

    {% set icon %}
        {{ include('@Security/Collector/icon.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
    {% endset %}

    {% set text %}
        {% if collector.impersonated %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>{{ collector.impersonatorUser }}</span>
                </div>
            </div>
        {% endif %}

        <div class=\"sf-toolbar-info-group\">
            {% if collector.enabled %}
                {% if collector.token %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>{{ collector.user }}</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-{{ is_authenticated ? 'green' : 'red' }}\">{{ is_authenticated ? 'Yes' : 'No' }}</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>{{ collector.tokenClass|abbr_class }}</span>
                    </div>
                {% else %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                    </div>
                {% endif %}

                {% if collector.firewall %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>{{ collector.firewall.name }}</span>
                    </div>
                {% endif %}

                {% if collector.token and collector.logoutUrl %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"{{ collector.logoutUrl }}\">Logout</a>
                            {% if collector.impersonated and collector.impersonationExitPath %}
                                | <a href=\"{{ collector.impersonationExitPath }}\">Exit impersonation</a>
                            {% endif %}
                        </span>
                    </div>
                {% endif %}
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.enabled or not collector.token ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security Token</h2>

    {% if collector.enabled %}
        {% if collector.token %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            {{ collector.roles is empty ? 'none' : profiler_dump(collector.roles, maxDepth=1) }}

                            {% if not collector.authenticated and collector.roles is empty %}
                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            {% endif %}
                        </td>
                    </tr>

                    {% if collector.supportsRoleHierarchy %}
                    <tr>
                        <th>Inherited Roles</th>
                        <td>{{ collector.inheritedRoles is empty ? 'none' : profiler_dump(collector.inheritedRoles, maxDepth=1) }}</td>
                    </tr>
                    {% endif %}

                    {% if collector.token %}
                    <tr>
                        <th>Token</th>
                        <td>{{ profiler_dump(collector.token) }}</td>
                    </tr>
                    {% endif %}
                </tbody>
            </table>
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        {% endif %}


        <h2>Security Firewall</h2>

        {% if collector.firewall %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.firewall.name }}</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.security_enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.stateless ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.allows_anonymous ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            {% if collector.firewall.security_enabled %}
                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>{{ collector.firewall.provider ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>{{ collector.firewall.context ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>{{ collector.firewall.entry_point ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>{{ collector.firewall.user_checker ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>{{ collector.firewall.access_denied_handler ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>{{ collector.firewall.access_denied_url ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>{{ collector.firewall.listeners is empty ? '(none)' : profiler_dump(collector.firewall.listeners, maxDepth=1) }}</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>

                {% if collector.listeners|default([]) is empty %}
                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>
                {% else %}
                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>

                        {% set previous_event = (collector.listeners|first) %}
                        {% for listener in collector.listeners %}
                            {% if loop.first or listener != previous_event %}
                                {% if not loop.first %}
                                    </tbody>
                                {% endif %}

                                <tbody>
                                {% set previous_event = listener %}
                            {% endif %}

                            <tr>
                                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
                                <td class=\"no-wrap\">{{ '%0.2f'|format(listener.time * 1000) }} ms</td>
                                <td class=\"font-normal\">{{ listener.response ? profiler_dump(listener.response) : '(none)' }}</td>
                            </tr>

                            {% if loop.last %}
                                </tbody>
                            {% endif %}
                        {% endfor %}
                    </table>
                {% endif %}
            {% endif %}
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        {% endif %}
    {% else %}
        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    {% endif %}

    {% if collector.voters|default([]) is not empty %}
        <h2>Security Voters <small>({{ collector.voters|length }})</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.voterStrategy|default('unknown') }}</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                {% for voter in collector.voters %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">{{ profiler_dump(voter) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if collector.accessDecisionLog|default([]) is not empty %}
        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                {% for decision in collector.accessDecisionLog %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">
                            {{ decision.result
                                ? '<span class=\"label status-success same-width\">GRANTED</span>'
                                : '<span class=\"label status-error same-width\">DENIED</span>'
                            }}
                        </td>
                        <td>
                            {% if decision.attributes|length == 1 %}
                                {{ decision.attributes|first }}
                            {% else %}
                                {{ profiler_dump(decision.attributes) }}
                            {% endif %}
                        </td>
                        <td>{{ profiler_dump(decision.seek('object')) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "C:\\wamp64\\www\\OpenClassRooms-Projet-NAO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Resources\\views\\Collector\\security.html.twig");
    }
}
