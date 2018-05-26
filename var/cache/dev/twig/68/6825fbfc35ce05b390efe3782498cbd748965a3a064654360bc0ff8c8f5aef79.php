<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_41e603c31cd79d19246c93de6be229bfb834041bc91e62684b37005f20b7becc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04ef5853f2493c42e5297e8ef08055efb47fb96fca70e9ca8a4dc33950d847d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ef5853f2493c42e5297e8ef08055efb47fb96fca70e9ca8a4dc33950d847d3->enter($__internal_04ef5853f2493c42e5297e8ef08055efb47fb96fca70e9ca8a4dc33950d847d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9bfdf9e9f6e2878426e286b6db21e923cfa0464919f908f73215f8beef7bc0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfdf9e9f6e2878426e286b6db21e923cfa0464919f908f73215f8beef7bc0ac->enter($__internal_9bfdf9e9f6e2878426e286b6db21e923cfa0464919f908f73215f8beef7bc0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_04ef5853f2493c42e5297e8ef08055efb47fb96fca70e9ca8a4dc33950d847d3->leave($__internal_04ef5853f2493c42e5297e8ef08055efb47fb96fca70e9ca8a4dc33950d847d3_prof);

        
        $__internal_9bfdf9e9f6e2878426e286b6db21e923cfa0464919f908f73215f8beef7bc0ac->leave($__internal_9bfdf9e9f6e2878426e286b6db21e923cfa0464919f908f73215f8beef7bc0ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
