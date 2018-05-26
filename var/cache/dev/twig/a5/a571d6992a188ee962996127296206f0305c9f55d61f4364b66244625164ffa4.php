<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_665aabd1e8f46575bbb5ca4fb51b79e3afb7ed3eb58d547c526a28542675c9cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_37ede614e5b2383614e0d1d0249129548365edf7484d9a2d7971c3775ce58f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ede614e5b2383614e0d1d0249129548365edf7484d9a2d7971c3775ce58f3f->enter($__internal_37ede614e5b2383614e0d1d0249129548365edf7484d9a2d7971c3775ce58f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f2a113809127645bffaaa189272f8ac7b43be2f1d9ae709ac46877ac8d0087e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a113809127645bffaaa189272f8ac7b43be2f1d9ae709ac46877ac8d0087e3->enter($__internal_f2a113809127645bffaaa189272f8ac7b43be2f1d9ae709ac46877ac8d0087e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ede614e5b2383614e0d1d0249129548365edf7484d9a2d7971c3775ce58f3f->leave($__internal_37ede614e5b2383614e0d1d0249129548365edf7484d9a2d7971c3775ce58f3f_prof);

        
        $__internal_f2a113809127645bffaaa189272f8ac7b43be2f1d9ae709ac46877ac8d0087e3->leave($__internal_f2a113809127645bffaaa189272f8ac7b43be2f1d9ae709ac46877ac8d0087e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9b048cdcd436febf78f878e9301b8c7ad364a53a133a248e61dc08c463cf76c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b048cdcd436febf78f878e9301b8c7ad364a53a133a248e61dc08c463cf76c->enter($__internal_e9b048cdcd436febf78f878e9301b8c7ad364a53a133a248e61dc08c463cf76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fedd7f894c3cd63a9c045ee46fb9e3500272840bf41fbb4bdcd4e9be01167f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedd7f894c3cd63a9c045ee46fb9e3500272840bf41fbb4bdcd4e9be01167f02->enter($__internal_fedd7f894c3cd63a9c045ee46fb9e3500272840bf41fbb4bdcd4e9be01167f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fedd7f894c3cd63a9c045ee46fb9e3500272840bf41fbb4bdcd4e9be01167f02->leave($__internal_fedd7f894c3cd63a9c045ee46fb9e3500272840bf41fbb4bdcd4e9be01167f02_prof);

        
        $__internal_e9b048cdcd436febf78f878e9301b8c7ad364a53a133a248e61dc08c463cf76c->leave($__internal_e9b048cdcd436febf78f878e9301b8c7ad364a53a133a248e61dc08c463cf76c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc1aa05ffc426cc4e72740b4702ddb58b75a10d5d228af075ee130f0da75a95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1aa05ffc426cc4e72740b4702ddb58b75a10d5d228af075ee130f0da75a95c->enter($__internal_dc1aa05ffc426cc4e72740b4702ddb58b75a10d5d228af075ee130f0da75a95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_35d98d71852aa72bf6a71588a6deb8b97b2d100eddb4515945784c567d2b2cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d98d71852aa72bf6a71588a6deb8b97b2d100eddb4515945784c567d2b2cf5->enter($__internal_35d98d71852aa72bf6a71588a6deb8b97b2d100eddb4515945784c567d2b2cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_35d98d71852aa72bf6a71588a6deb8b97b2d100eddb4515945784c567d2b2cf5->leave($__internal_35d98d71852aa72bf6a71588a6deb8b97b2d100eddb4515945784c567d2b2cf5_prof);

        
        $__internal_dc1aa05ffc426cc4e72740b4702ddb58b75a10d5d228af075ee130f0da75a95c->leave($__internal_dc1aa05ffc426cc4e72740b4702ddb58b75a10d5d228af075ee130f0da75a95c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4601f1afa78940209958822f8fd68e6d9917d56ee5d2c1f2b31507fa6a4a2e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4601f1afa78940209958822f8fd68e6d9917d56ee5d2c1f2b31507fa6a4a2e43->enter($__internal_4601f1afa78940209958822f8fd68e6d9917d56ee5d2c1f2b31507fa6a4a2e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ffb7cc312c8451e9f469d3dcf0551eff5dd914ffc138266210fcce4e62ab3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffb7cc312c8451e9f469d3dcf0551eff5dd914ffc138266210fcce4e62ab3d0->enter($__internal_8ffb7cc312c8451e9f469d3dcf0551eff5dd914ffc138266210fcce4e62ab3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_8ffb7cc312c8451e9f469d3dcf0551eff5dd914ffc138266210fcce4e62ab3d0->leave($__internal_8ffb7cc312c8451e9f469d3dcf0551eff5dd914ffc138266210fcce4e62ab3d0_prof);

        
        $__internal_4601f1afa78940209958822f8fd68e6d9917d56ee5d2c1f2b31507fa6a4a2e43->leave($__internal_4601f1afa78940209958822f8fd68e6d9917d56ee5d2c1f2b31507fa6a4a2e43_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
