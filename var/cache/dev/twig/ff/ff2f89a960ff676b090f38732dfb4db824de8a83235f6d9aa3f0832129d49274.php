<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b1485a2a1e8a06f7311b5ca5271cc7e3bd9517d83a632d5e89cab2a536d02cdb extends Twig_Template
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
        $__internal_e11a3ccc1c2b6b259a6bd290b621c22ddf405c32d999cbcb87c8a01dad0a9285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11a3ccc1c2b6b259a6bd290b621c22ddf405c32d999cbcb87c8a01dad0a9285->enter($__internal_e11a3ccc1c2b6b259a6bd290b621c22ddf405c32d999cbcb87c8a01dad0a9285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_79d582df4ab85f60ce40c389a9a4b4ca909a70af745303212025593dd241ae46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d582df4ab85f60ce40c389a9a4b4ca909a70af745303212025593dd241ae46->enter($__internal_79d582df4ab85f60ce40c389a9a4b4ca909a70af745303212025593dd241ae46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_e11a3ccc1c2b6b259a6bd290b621c22ddf405c32d999cbcb87c8a01dad0a9285->leave($__internal_e11a3ccc1c2b6b259a6bd290b621c22ddf405c32d999cbcb87c8a01dad0a9285_prof);

        
        $__internal_79d582df4ab85f60ce40c389a9a4b4ca909a70af745303212025593dd241ae46->leave($__internal_79d582df4ab85f60ce40c389a9a4b4ca909a70af745303212025593dd241ae46_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
