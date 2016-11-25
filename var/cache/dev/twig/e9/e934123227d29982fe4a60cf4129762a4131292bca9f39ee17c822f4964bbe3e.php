<?php

/* base.html.twig */
class __TwigTemplate_06546c5ce92438d198953474fc98b1a3ce6c4787cbdc75da490863c3e18f931e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0c88ddb18c002fdfa7064022a74ff49f297156fa25619ebff335af5295d95dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c88ddb18c002fdfa7064022a74ff49f297156fa25619ebff335af5295d95dd->enter($__internal_a0c88ddb18c002fdfa7064022a74ff49f297156fa25619ebff335af5295d95dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a0c88ddb18c002fdfa7064022a74ff49f297156fa25619ebff335af5295d95dd->leave($__internal_a0c88ddb18c002fdfa7064022a74ff49f297156fa25619ebff335af5295d95dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f22d7ddf038d9a029cb1b42bec390e9785e750dbaa313a3dc42d4e9a54821817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22d7ddf038d9a029cb1b42bec390e9785e750dbaa313a3dc42d4e9a54821817->enter($__internal_f22d7ddf038d9a029cb1b42bec390e9785e750dbaa313a3dc42d4e9a54821817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f22d7ddf038d9a029cb1b42bec390e9785e750dbaa313a3dc42d4e9a54821817->leave($__internal_f22d7ddf038d9a029cb1b42bec390e9785e750dbaa313a3dc42d4e9a54821817_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9249708c02f0e1a9a83359b3682a182bbe5c8abafdc76bd4642583c18b64325d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9249708c02f0e1a9a83359b3682a182bbe5c8abafdc76bd4642583c18b64325d->enter($__internal_9249708c02f0e1a9a83359b3682a182bbe5c8abafdc76bd4642583c18b64325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9249708c02f0e1a9a83359b3682a182bbe5c8abafdc76bd4642583c18b64325d->leave($__internal_9249708c02f0e1a9a83359b3682a182bbe5c8abafdc76bd4642583c18b64325d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fc56cc9271ba1f0b5348e49447f039e26af2ea40d803f82aac9b65094310936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc56cc9271ba1f0b5348e49447f039e26af2ea40d803f82aac9b65094310936->enter($__internal_4fc56cc9271ba1f0b5348e49447f039e26af2ea40d803f82aac9b65094310936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4fc56cc9271ba1f0b5348e49447f039e26af2ea40d803f82aac9b65094310936->leave($__internal_4fc56cc9271ba1f0b5348e49447f039e26af2ea40d803f82aac9b65094310936_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085883cbafd9cdd00b66b9cb73152b77ed50436b37632741a47a8f4b2ec86f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085883cbafd9cdd00b66b9cb73152b77ed50436b37632741a47a8f4b2ec86f76->enter($__internal_085883cbafd9cdd00b66b9cb73152b77ed50436b37632741a47a8f4b2ec86f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_085883cbafd9cdd00b66b9cb73152b77ed50436b37632741a47a8f4b2ec86f76->leave($__internal_085883cbafd9cdd00b66b9cb73152b77ed50436b37632741a47a8f4b2ec86f76_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/paulnovikov/Projects/localhost/onyxcms/app/Resources/views/base.html.twig");
    }
}
