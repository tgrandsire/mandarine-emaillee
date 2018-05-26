<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c666b32229c8c4c1105414980861dbc9220115f7ca46cf6ffb1cb4fcc5005980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74f25223cbbf2565ebe564085a6448759dd5b534561dda0afef96a8317faa739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f25223cbbf2565ebe564085a6448759dd5b534561dda0afef96a8317faa739->enter($__internal_74f25223cbbf2565ebe564085a6448759dd5b534561dda0afef96a8317faa739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_053742ddf220c3ad53425a6bb1221e5947b5a1bc090727c77faca33970589abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053742ddf220c3ad53425a6bb1221e5947b5a1bc090727c77faca33970589abc->enter($__internal_053742ddf220c3ad53425a6bb1221e5947b5a1bc090727c77faca33970589abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f25223cbbf2565ebe564085a6448759dd5b534561dda0afef96a8317faa739->leave($__internal_74f25223cbbf2565ebe564085a6448759dd5b534561dda0afef96a8317faa739_prof);

        
        $__internal_053742ddf220c3ad53425a6bb1221e5947b5a1bc090727c77faca33970589abc->leave($__internal_053742ddf220c3ad53425a6bb1221e5947b5a1bc090727c77faca33970589abc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1270dbb5ef6957cb87d60bf9805289cc7ec87d03bb7736b781853163c7d60a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1270dbb5ef6957cb87d60bf9805289cc7ec87d03bb7736b781853163c7d60a61->enter($__internal_1270dbb5ef6957cb87d60bf9805289cc7ec87d03bb7736b781853163c7d60a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52aa8950eaeacacc7dc609f64a1ad260690b3139d4d48011ef3b4f4457f6cc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52aa8950eaeacacc7dc609f64a1ad260690b3139d4d48011ef3b4f4457f6cc3e->enter($__internal_52aa8950eaeacacc7dc609f64a1ad260690b3139d4d48011ef3b4f4457f6cc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_52aa8950eaeacacc7dc609f64a1ad260690b3139d4d48011ef3b4f4457f6cc3e->leave($__internal_52aa8950eaeacacc7dc609f64a1ad260690b3139d4d48011ef3b4f4457f6cc3e_prof);

        
        $__internal_1270dbb5ef6957cb87d60bf9805289cc7ec87d03bb7736b781853163c7d60a61->leave($__internal_1270dbb5ef6957cb87d60bf9805289cc7ec87d03bb7736b781853163c7d60a61_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fe4090ec8e95bd2c97894d3ea39412f6edf9c7e887b57f8ff4b641bde105d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe4090ec8e95bd2c97894d3ea39412f6edf9c7e887b57f8ff4b641bde105d12->enter($__internal_1fe4090ec8e95bd2c97894d3ea39412f6edf9c7e887b57f8ff4b641bde105d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d16c16b5067813e13dd76fee17c169322896a3549ee33e1c264b888ea24c5759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16c16b5067813e13dd76fee17c169322896a3549ee33e1c264b888ea24c5759->enter($__internal_d16c16b5067813e13dd76fee17c169322896a3549ee33e1c264b888ea24c5759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d16c16b5067813e13dd76fee17c169322896a3549ee33e1c264b888ea24c5759->leave($__internal_d16c16b5067813e13dd76fee17c169322896a3549ee33e1c264b888ea24c5759_prof);

        
        $__internal_1fe4090ec8e95bd2c97894d3ea39412f6edf9c7e887b57f8ff4b641bde105d12->leave($__internal_1fe4090ec8e95bd2c97894d3ea39412f6edf9c7e887b57f8ff4b641bde105d12_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
