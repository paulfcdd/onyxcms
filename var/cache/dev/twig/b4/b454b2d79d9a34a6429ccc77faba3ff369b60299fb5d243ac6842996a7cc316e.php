<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_467819e92baafb23fad0391f10f3be20c6aa08e8fb69cc7588c44d257a1ef7fb extends Twig_Template
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
        $__internal_05f4a7a821e64fe079d746c19c843762d9958bf2d463c06ce91cb5bdf5da55e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f4a7a821e64fe079d746c19c843762d9958bf2d463c06ce91cb5bdf5da55e1->enter($__internal_05f4a7a821e64fe079d746c19c843762d9958bf2d463c06ce91cb5bdf5da55e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05f4a7a821e64fe079d746c19c843762d9958bf2d463c06ce91cb5bdf5da55e1->leave($__internal_05f4a7a821e64fe079d746c19c843762d9958bf2d463c06ce91cb5bdf5da55e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_520e989f82f09896f548c3c18106101693f8d123d42a28c96f96dc5ee63f646e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520e989f82f09896f548c3c18106101693f8d123d42a28c96f96dc5ee63f646e->enter($__internal_520e989f82f09896f548c3c18106101693f8d123d42a28c96f96dc5ee63f646e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_520e989f82f09896f548c3c18106101693f8d123d42a28c96f96dc5ee63f646e->leave($__internal_520e989f82f09896f548c3c18106101693f8d123d42a28c96f96dc5ee63f646e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a98941f22bf40cb1749aa420c8192d3d137954e2076430d4a4d65c8d7a44a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a98941f22bf40cb1749aa420c8192d3d137954e2076430d4a4d65c8d7a44a40->enter($__internal_9a98941f22bf40cb1749aa420c8192d3d137954e2076430d4a4d65c8d7a44a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a98941f22bf40cb1749aa420c8192d3d137954e2076430d4a4d65c8d7a44a40->leave($__internal_9a98941f22bf40cb1749aa420c8192d3d137954e2076430d4a4d65c8d7a44a40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47cace12a1e7c56af7d6f8bd72b1fd3e949a29beaf36c60b37c9378eeb1675fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cace12a1e7c56af7d6f8bd72b1fd3e949a29beaf36c60b37c9378eeb1675fa->enter($__internal_47cace12a1e7c56af7d6f8bd72b1fd3e949a29beaf36c60b37c9378eeb1675fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_47cace12a1e7c56af7d6f8bd72b1fd3e949a29beaf36c60b37c9378eeb1675fa->leave($__internal_47cace12a1e7c56af7d6f8bd72b1fd3e949a29beaf36c60b37c9378eeb1675fa_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/Users/paulnovikov/Projects/localhost/onyxcms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
