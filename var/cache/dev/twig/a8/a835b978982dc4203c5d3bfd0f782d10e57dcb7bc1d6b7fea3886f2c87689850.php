<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d67fafd1f00fd14fe54c83c400c1cde8284fe2478968127cdec56a068ed3d5b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_35cae4c68c9b4de8daad9ea1476a1820b7aecdd13fa1e29250c4bc54b1d7edd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cae4c68c9b4de8daad9ea1476a1820b7aecdd13fa1e29250c4bc54b1d7edd4->enter($__internal_35cae4c68c9b4de8daad9ea1476a1820b7aecdd13fa1e29250c4bc54b1d7edd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_46fcfb01a264e6d496346b3fe19c3fad2f31e70d70d91d2b7c4e2f01401fab55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fcfb01a264e6d496346b3fe19c3fad2f31e70d70d91d2b7c4e2f01401fab55->enter($__internal_46fcfb01a264e6d496346b3fe19c3fad2f31e70d70d91d2b7c4e2f01401fab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35cae4c68c9b4de8daad9ea1476a1820b7aecdd13fa1e29250c4bc54b1d7edd4->leave($__internal_35cae4c68c9b4de8daad9ea1476a1820b7aecdd13fa1e29250c4bc54b1d7edd4_prof);

        
        $__internal_46fcfb01a264e6d496346b3fe19c3fad2f31e70d70d91d2b7c4e2f01401fab55->leave($__internal_46fcfb01a264e6d496346b3fe19c3fad2f31e70d70d91d2b7c4e2f01401fab55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5687fec148ffbf79476790dd2981be004d316cb647c118e686cb11cb764fa450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5687fec148ffbf79476790dd2981be004d316cb647c118e686cb11cb764fa450->enter($__internal_5687fec148ffbf79476790dd2981be004d316cb647c118e686cb11cb764fa450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2d89d168054b186b781e51debb532a90ffbc783a8459ab656ef7765945778754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d89d168054b186b781e51debb532a90ffbc783a8459ab656ef7765945778754->enter($__internal_2d89d168054b186b781e51debb532a90ffbc783a8459ab656ef7765945778754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d89d168054b186b781e51debb532a90ffbc783a8459ab656ef7765945778754->leave($__internal_2d89d168054b186b781e51debb532a90ffbc783a8459ab656ef7765945778754_prof);

        
        $__internal_5687fec148ffbf79476790dd2981be004d316cb647c118e686cb11cb764fa450->leave($__internal_5687fec148ffbf79476790dd2981be004d316cb647c118e686cb11cb764fa450_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec0e44983a3a472bd6484d0014e8e3c81f2d9e6868ee53f0e2b1429f27277cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0e44983a3a472bd6484d0014e8e3c81f2d9e6868ee53f0e2b1429f27277cf7->enter($__internal_ec0e44983a3a472bd6484d0014e8e3c81f2d9e6868ee53f0e2b1429f27277cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c0bd09f67376d404d5633fb10d19f25cb1b7e4f72d5543ddfd597b47be4d866b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bd09f67376d404d5633fb10d19f25cb1b7e4f72d5543ddfd597b47be4d866b->enter($__internal_c0bd09f67376d404d5633fb10d19f25cb1b7e4f72d5543ddfd597b47be4d866b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0bd09f67376d404d5633fb10d19f25cb1b7e4f72d5543ddfd597b47be4d866b->leave($__internal_c0bd09f67376d404d5633fb10d19f25cb1b7e4f72d5543ddfd597b47be4d866b_prof);

        
        $__internal_ec0e44983a3a472bd6484d0014e8e3c81f2d9e6868ee53f0e2b1429f27277cf7->leave($__internal_ec0e44983a3a472bd6484d0014e8e3c81f2d9e6868ee53f0e2b1429f27277cf7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5321f1d81ac04f2814e21f92a190710fe65f4af82fa89443e6316b517ec8c579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5321f1d81ac04f2814e21f92a190710fe65f4af82fa89443e6316b517ec8c579->enter($__internal_5321f1d81ac04f2814e21f92a190710fe65f4af82fa89443e6316b517ec8c579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4e405e40a1d9db2538355c20d2ca2ea2a8c92207ea2b8ad93322b0a4340df3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e405e40a1d9db2538355c20d2ca2ea2a8c92207ea2b8ad93322b0a4340df3c->enter($__internal_d4e405e40a1d9db2538355c20d2ca2ea2a8c92207ea2b8ad93322b0a4340df3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d4e405e40a1d9db2538355c20d2ca2ea2a8c92207ea2b8ad93322b0a4340df3c->leave($__internal_d4e405e40a1d9db2538355c20d2ca2ea2a8c92207ea2b8ad93322b0a4340df3c_prof);

        
        $__internal_5321f1d81ac04f2814e21f92a190710fe65f4af82fa89443e6316b517ec8c579->leave($__internal_5321f1d81ac04f2814e21f92a190710fe65f4af82fa89443e6316b517ec8c579_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
