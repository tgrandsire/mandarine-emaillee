<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_aa6b578a41cbe86abb2a011242c5281bf3aa3e059ae79dc6327cfe4c3520b2de extends Twig_Template
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
        $__internal_50a25116e5956318ff6de5d3d34280ec4be98ddfba32296447f6246534a75d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a25116e5956318ff6de5d3d34280ec4be98ddfba32296447f6246534a75d72->enter($__internal_50a25116e5956318ff6de5d3d34280ec4be98ddfba32296447f6246534a75d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_dfe36f82fba4255ac6530ccaba981ca18091093a104cd4707d787e29de288a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe36f82fba4255ac6530ccaba981ca18091093a104cd4707d787e29de288a1e->enter($__internal_dfe36f82fba4255ac6530ccaba981ca18091093a104cd4707d787e29de288a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_50a25116e5956318ff6de5d3d34280ec4be98ddfba32296447f6246534a75d72->leave($__internal_50a25116e5956318ff6de5d3d34280ec4be98ddfba32296447f6246534a75d72_prof);

        
        $__internal_dfe36f82fba4255ac6530ccaba981ca18091093a104cd4707d787e29de288a1e->leave($__internal_dfe36f82fba4255ac6530ccaba981ca18091093a104cd4707d787e29de288a1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
