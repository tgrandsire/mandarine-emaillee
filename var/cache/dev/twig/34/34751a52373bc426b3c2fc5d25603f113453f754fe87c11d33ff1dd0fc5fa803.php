<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_93a64e5742315c85115f966849e86b1586fe700f1e772cd02b5bed2d37fdd6ee extends Twig_Template
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
        $__internal_9f5ceb2cb5bfc168173a30b78ea7a5dcdbd0914a48898f7b30ef1a3030dbdbb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5ceb2cb5bfc168173a30b78ea7a5dcdbd0914a48898f7b30ef1a3030dbdbb3->enter($__internal_9f5ceb2cb5bfc168173a30b78ea7a5dcdbd0914a48898f7b30ef1a3030dbdbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_bcecb458572a5ec6f574739d3acdad7b97254456b3eef1d52bda88a840978dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcecb458572a5ec6f574739d3acdad7b97254456b3eef1d52bda88a840978dc7->enter($__internal_bcecb458572a5ec6f574739d3acdad7b97254456b3eef1d52bda88a840978dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9f5ceb2cb5bfc168173a30b78ea7a5dcdbd0914a48898f7b30ef1a3030dbdbb3->leave($__internal_9f5ceb2cb5bfc168173a30b78ea7a5dcdbd0914a48898f7b30ef1a3030dbdbb3_prof);

        
        $__internal_bcecb458572a5ec6f574739d3acdad7b97254456b3eef1d52bda88a840978dc7->leave($__internal_bcecb458572a5ec6f574739d3acdad7b97254456b3eef1d52bda88a840978dc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
