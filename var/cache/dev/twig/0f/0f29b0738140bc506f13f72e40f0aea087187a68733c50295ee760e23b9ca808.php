<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_40ce5e79efbde7e6deb816c0522af85356c5bf69593e357fa47672d402a177ff extends Twig_Template
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
        $__internal_9ced7cddcaea3574f4ab1734648147b77533f60b14a90c28923899e9a0c5eb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ced7cddcaea3574f4ab1734648147b77533f60b14a90c28923899e9a0c5eb6a->enter($__internal_9ced7cddcaea3574f4ab1734648147b77533f60b14a90c28923899e9a0c5eb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0cf2c66584e25c4695fb581829c491085032326b6c333f9422f4e7fdc3a1fa16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf2c66584e25c4695fb581829c491085032326b6c333f9422f4e7fdc3a1fa16->enter($__internal_0cf2c66584e25c4695fb581829c491085032326b6c333f9422f4e7fdc3a1fa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_9ced7cddcaea3574f4ab1734648147b77533f60b14a90c28923899e9a0c5eb6a->leave($__internal_9ced7cddcaea3574f4ab1734648147b77533f60b14a90c28923899e9a0c5eb6a_prof);

        
        $__internal_0cf2c66584e25c4695fb581829c491085032326b6c333f9422f4e7fdc3a1fa16->leave($__internal_0cf2c66584e25c4695fb581829c491085032326b6c333f9422f4e7fdc3a1fa16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
