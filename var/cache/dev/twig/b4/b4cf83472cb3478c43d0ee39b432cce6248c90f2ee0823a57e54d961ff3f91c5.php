<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_922f5995ccd036e18c410373adcf83e073b522d1147b6bf28afcfe15233c659a extends Twig_Template
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
        $__internal_d157677ae11bab0d7b0b85d0970db3b194bb116f293c29e2f8cb59ce99255826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d157677ae11bab0d7b0b85d0970db3b194bb116f293c29e2f8cb59ce99255826->enter($__internal_d157677ae11bab0d7b0b85d0970db3b194bb116f293c29e2f8cb59ce99255826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1b1cd9fcab36db52a50e5460ef7fff732f265e766d296c7d92f104c87bd716cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1cd9fcab36db52a50e5460ef7fff732f265e766d296c7d92f104c87bd716cf->enter($__internal_1b1cd9fcab36db52a50e5460ef7fff732f265e766d296c7d92f104c87bd716cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_d157677ae11bab0d7b0b85d0970db3b194bb116f293c29e2f8cb59ce99255826->leave($__internal_d157677ae11bab0d7b0b85d0970db3b194bb116f293c29e2f8cb59ce99255826_prof);

        
        $__internal_1b1cd9fcab36db52a50e5460ef7fff732f265e766d296c7d92f104c87bd716cf->leave($__internal_1b1cd9fcab36db52a50e5460ef7fff732f265e766d296c7d92f104c87bd716cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
