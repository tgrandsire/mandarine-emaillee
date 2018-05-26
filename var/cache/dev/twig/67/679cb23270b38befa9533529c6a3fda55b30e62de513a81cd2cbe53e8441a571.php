<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6d9e27d5cdc80c1a11f880eb0508051580e546caf970eabe398453d41fcadea0 extends Twig_Template
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
        $__internal_89a75b17c4c0e07dc695285e1c8fefe2a926c3dd65c77ecb988c267d49c99ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a75b17c4c0e07dc695285e1c8fefe2a926c3dd65c77ecb988c267d49c99ab1->enter($__internal_89a75b17c4c0e07dc695285e1c8fefe2a926c3dd65c77ecb988c267d49c99ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f0b42d5f257bac2e2f409c6325c47adfbcab460507e9261c3f96c6d3e3e6f996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b42d5f257bac2e2f409c6325c47adfbcab460507e9261c3f96c6d3e3e6f996->enter($__internal_f0b42d5f257bac2e2f409c6325c47adfbcab460507e9261c3f96c6d3e3e6f996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_89a75b17c4c0e07dc695285e1c8fefe2a926c3dd65c77ecb988c267d49c99ab1->leave($__internal_89a75b17c4c0e07dc695285e1c8fefe2a926c3dd65c77ecb988c267d49c99ab1_prof);

        
        $__internal_f0b42d5f257bac2e2f409c6325c47adfbcab460507e9261c3f96c6d3e3e6f996->leave($__internal_f0b42d5f257bac2e2f409c6325c47adfbcab460507e9261c3f96c6d3e3e6f996_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
