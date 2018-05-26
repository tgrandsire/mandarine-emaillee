<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_04c22d2c3e5891d4ee569e1ba8c3fe29529406d831ef0eee60cb8c02afa538b7 extends Twig_Template
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
        $__internal_6a01792c4193e92a8c95bb512b53e0a3b74b744f19162e3d3a295a6b71fd26ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a01792c4193e92a8c95bb512b53e0a3b74b744f19162e3d3a295a6b71fd26ea->enter($__internal_6a01792c4193e92a8c95bb512b53e0a3b74b744f19162e3d3a295a6b71fd26ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d60f94889ee8a427c794a6a8da34e63e2008ff4fd9613f803a42eee0c55f0a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60f94889ee8a427c794a6a8da34e63e2008ff4fd9613f803a42eee0c55f0a68->enter($__internal_d60f94889ee8a427c794a6a8da34e63e2008ff4fd9613f803a42eee0c55f0a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_6a01792c4193e92a8c95bb512b53e0a3b74b744f19162e3d3a295a6b71fd26ea->leave($__internal_6a01792c4193e92a8c95bb512b53e0a3b74b744f19162e3d3a295a6b71fd26ea_prof);

        
        $__internal_d60f94889ee8a427c794a6a8da34e63e2008ff4fd9613f803a42eee0c55f0a68->leave($__internal_d60f94889ee8a427c794a6a8da34e63e2008ff4fd9613f803a42eee0c55f0a68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
