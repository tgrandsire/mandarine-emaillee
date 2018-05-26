<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_039b3de9a929bb721e0c584ef7b9c9cec77f0e85ec768f87135a92e2312372bf extends Twig_Template
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
        $__internal_af5e995cedaeaa306e48c0c1992519bbb69de42c636539e0d9b1a9d331d85e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5e995cedaeaa306e48c0c1992519bbb69de42c636539e0d9b1a9d331d85e70->enter($__internal_af5e995cedaeaa306e48c0c1992519bbb69de42c636539e0d9b1a9d331d85e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_4c79d9cee136e283042b19506ec9ec01578785dafc119b3bd84a24dd697415bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c79d9cee136e283042b19506ec9ec01578785dafc119b3bd84a24dd697415bc->enter($__internal_4c79d9cee136e283042b19506ec9ec01578785dafc119b3bd84a24dd697415bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_af5e995cedaeaa306e48c0c1992519bbb69de42c636539e0d9b1a9d331d85e70->leave($__internal_af5e995cedaeaa306e48c0c1992519bbb69de42c636539e0d9b1a9d331d85e70_prof);

        
        $__internal_4c79d9cee136e283042b19506ec9ec01578785dafc119b3bd84a24dd697415bc->leave($__internal_4c79d9cee136e283042b19506ec9ec01578785dafc119b3bd84a24dd697415bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
