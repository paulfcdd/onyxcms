<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f38982a453715cc33c5b77f38d4746103f6364f56660a9fe59ab1b9669b30825 extends Twig_Template
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
        $__internal_4a645f70af1f1a4d91938d73a6f70bc9b4803942081ed3b3e2b6439ee81b0279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a645f70af1f1a4d91938d73a6f70bc9b4803942081ed3b3e2b6439ee81b0279->enter($__internal_4a645f70af1f1a4d91938d73a6f70bc9b4803942081ed3b3e2b6439ee81b0279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a645f70af1f1a4d91938d73a6f70bc9b4803942081ed3b3e2b6439ee81b0279->leave($__internal_4a645f70af1f1a4d91938d73a6f70bc9b4803942081ed3b3e2b6439ee81b0279_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0da8a186cbc26774f10c3d220f2ea189cc93e12c967f09ecc52b0a418d72b326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da8a186cbc26774f10c3d220f2ea189cc93e12c967f09ecc52b0a418d72b326->enter($__internal_0da8a186cbc26774f10c3d220f2ea189cc93e12c967f09ecc52b0a418d72b326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0da8a186cbc26774f10c3d220f2ea189cc93e12c967f09ecc52b0a418d72b326->leave($__internal_0da8a186cbc26774f10c3d220f2ea189cc93e12c967f09ecc52b0a418d72b326_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a85b7f0a8233d1425d98384f40aec65563d88c72b751b4d4dfd80e76921a3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a85b7f0a8233d1425d98384f40aec65563d88c72b751b4d4dfd80e76921a3ec->enter($__internal_2a85b7f0a8233d1425d98384f40aec65563d88c72b751b4d4dfd80e76921a3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2a85b7f0a8233d1425d98384f40aec65563d88c72b751b4d4dfd80e76921a3ec->leave($__internal_2a85b7f0a8233d1425d98384f40aec65563d88c72b751b4d4dfd80e76921a3ec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76ad2b41ee12e09f8a3e45260f871d1f27025eb12d4eb4c728aa40b44fc4fdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ad2b41ee12e09f8a3e45260f871d1f27025eb12d4eb4c728aa40b44fc4fdf7->enter($__internal_76ad2b41ee12e09f8a3e45260f871d1f27025eb12d4eb4c728aa40b44fc4fdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_76ad2b41ee12e09f8a3e45260f871d1f27025eb12d4eb4c728aa40b44fc4fdf7->leave($__internal_76ad2b41ee12e09f8a3e45260f871d1f27025eb12d4eb4c728aa40b44fc4fdf7_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "/Users/paulnovikov/Projects/localhost/onyxcms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
