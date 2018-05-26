<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6f6460848d05017b4703b501f1155e350058e583f0b6a8eddad3780ec82121b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_772fe653e96e31a5e5efd797cc0df9e5b56660181e3efcce063dd1d60916dc61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772fe653e96e31a5e5efd797cc0df9e5b56660181e3efcce063dd1d60916dc61->enter($__internal_772fe653e96e31a5e5efd797cc0df9e5b56660181e3efcce063dd1d60916dc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7a83243811d7a7511662a1586e474e7cca744ea5b6b21ce4c145f9930561d19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a83243811d7a7511662a1586e474e7cca744ea5b6b21ce4c145f9930561d19d->enter($__internal_7a83243811d7a7511662a1586e474e7cca744ea5b6b21ce4c145f9930561d19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_772fe653e96e31a5e5efd797cc0df9e5b56660181e3efcce063dd1d60916dc61->leave($__internal_772fe653e96e31a5e5efd797cc0df9e5b56660181e3efcce063dd1d60916dc61_prof);

        
        $__internal_7a83243811d7a7511662a1586e474e7cca744ea5b6b21ce4c145f9930561d19d->leave($__internal_7a83243811d7a7511662a1586e474e7cca744ea5b6b21ce4c145f9930561d19d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ed703211cf22de5c8f5c7a894f8d8ac655eb002ca705bf084f4335c7a560e34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed703211cf22de5c8f5c7a894f8d8ac655eb002ca705bf084f4335c7a560e34e->enter($__internal_ed703211cf22de5c8f5c7a894f8d8ac655eb002ca705bf084f4335c7a560e34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9e15b8add7157c40ef5171785ed7170e8dd73d7f024d1a97c90900e13d1f55dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e15b8add7157c40ef5171785ed7170e8dd73d7f024d1a97c90900e13d1f55dd->enter($__internal_9e15b8add7157c40ef5171785ed7170e8dd73d7f024d1a97c90900e13d1f55dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9e15b8add7157c40ef5171785ed7170e8dd73d7f024d1a97c90900e13d1f55dd->leave($__internal_9e15b8add7157c40ef5171785ed7170e8dd73d7f024d1a97c90900e13d1f55dd_prof);

        
        $__internal_ed703211cf22de5c8f5c7a894f8d8ac655eb002ca705bf084f4335c7a560e34e->leave($__internal_ed703211cf22de5c8f5c7a894f8d8ac655eb002ca705bf084f4335c7a560e34e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b0007bb15b1a6eceba931846e9fe65c68ac159d1c5f1872e5d63c8d267ad6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0007bb15b1a6eceba931846e9fe65c68ac159d1c5f1872e5d63c8d267ad6cb->enter($__internal_0b0007bb15b1a6eceba931846e9fe65c68ac159d1c5f1872e5d63c8d267ad6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39b8f6200238ae1c0a95cd512bc275062d884d0ef651c3a2602fd58f165b731f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b8f6200238ae1c0a95cd512bc275062d884d0ef651c3a2602fd58f165b731f->enter($__internal_39b8f6200238ae1c0a95cd512bc275062d884d0ef651c3a2602fd58f165b731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_39b8f6200238ae1c0a95cd512bc275062d884d0ef651c3a2602fd58f165b731f->leave($__internal_39b8f6200238ae1c0a95cd512bc275062d884d0ef651c3a2602fd58f165b731f_prof);

        
        $__internal_0b0007bb15b1a6eceba931846e9fe65c68ac159d1c5f1872e5d63c8d267ad6cb->leave($__internal_0b0007bb15b1a6eceba931846e9fe65c68ac159d1c5f1872e5d63c8d267ad6cb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
