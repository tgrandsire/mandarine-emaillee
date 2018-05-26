<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_492a03bf8bda442e62fbc426c663baee6bd5378225ad5c939bd634210a6a5127 extends Twig_Template
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
        $__internal_114ba90bdd7072aeb7645982279c40d7918310e30abc9e37befe799cc1714287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114ba90bdd7072aeb7645982279c40d7918310e30abc9e37befe799cc1714287->enter($__internal_114ba90bdd7072aeb7645982279c40d7918310e30abc9e37befe799cc1714287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_1c616dce7be0234e35d5e100fbd7c343034005f9a396c8a1124df1c6f0442861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c616dce7be0234e35d5e100fbd7c343034005f9a396c8a1124df1c6f0442861->enter($__internal_1c616dce7be0234e35d5e100fbd7c343034005f9a396c8a1124df1c6f0442861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_114ba90bdd7072aeb7645982279c40d7918310e30abc9e37befe799cc1714287->leave($__internal_114ba90bdd7072aeb7645982279c40d7918310e30abc9e37befe799cc1714287_prof);

        
        $__internal_1c616dce7be0234e35d5e100fbd7c343034005f9a396c8a1124df1c6f0442861->leave($__internal_1c616dce7be0234e35d5e100fbd7c343034005f9a396c8a1124df1c6f0442861_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
