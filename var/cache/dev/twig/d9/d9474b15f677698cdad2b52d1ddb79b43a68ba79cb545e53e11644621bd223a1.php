<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_81475650fb520d55e81ed83dd5cd6ecba7e8e281e348ab611fb95bda814e81be extends Twig_Template
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
        $__internal_c5a3735977245b153fff89ed8997c1e5010b8d740caaf0647232fbfb999d7b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a3735977245b153fff89ed8997c1e5010b8d740caaf0647232fbfb999d7b8f->enter($__internal_c5a3735977245b153fff89ed8997c1e5010b8d740caaf0647232fbfb999d7b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_686303b816989a39b809defe441295e74ec775f94c5fa759f7459b508ad9fe37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686303b816989a39b809defe441295e74ec775f94c5fa759f7459b508ad9fe37->enter($__internal_686303b816989a39b809defe441295e74ec775f94c5fa759f7459b508ad9fe37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c5a3735977245b153fff89ed8997c1e5010b8d740caaf0647232fbfb999d7b8f->leave($__internal_c5a3735977245b153fff89ed8997c1e5010b8d740caaf0647232fbfb999d7b8f_prof);

        
        $__internal_686303b816989a39b809defe441295e74ec775f94c5fa759f7459b508ad9fe37->leave($__internal_686303b816989a39b809defe441295e74ec775f94c5fa759f7459b508ad9fe37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
