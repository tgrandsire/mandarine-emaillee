<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b67de9b776c449971b4b91a9921dee0b3a88582c568a10eb7e074bf8a9618409 extends Twig_Template
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
        $__internal_78773a0fc620b551da1384eecb421cc7c6c2e7a902175b965a4cd0f417db9f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78773a0fc620b551da1384eecb421cc7c6c2e7a902175b965a4cd0f417db9f70->enter($__internal_78773a0fc620b551da1384eecb421cc7c6c2e7a902175b965a4cd0f417db9f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_e7d849db383195c199511441901fcf3b8909cc81ff25781f8def8c7837d9ea37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d849db383195c199511441901fcf3b8909cc81ff25781f8def8c7837d9ea37->enter($__internal_e7d849db383195c199511441901fcf3b8909cc81ff25781f8def8c7837d9ea37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_78773a0fc620b551da1384eecb421cc7c6c2e7a902175b965a4cd0f417db9f70->leave($__internal_78773a0fc620b551da1384eecb421cc7c6c2e7a902175b965a4cd0f417db9f70_prof);

        
        $__internal_e7d849db383195c199511441901fcf3b8909cc81ff25781f8def8c7837d9ea37->leave($__internal_e7d849db383195c199511441901fcf3b8909cc81ff25781f8def8c7837d9ea37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
