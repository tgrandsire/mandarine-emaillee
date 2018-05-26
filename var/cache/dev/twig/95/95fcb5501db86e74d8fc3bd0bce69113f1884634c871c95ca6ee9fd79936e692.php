<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c1db16741466cb0aaaf63a5e8c4eccdc39c73d26e445d3de25aa8074f822ec87 extends Twig_Template
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
        $__internal_80ae4219684d666c287b82f2888826957684c0a3c84b6c3460250f10c9bf5994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ae4219684d666c287b82f2888826957684c0a3c84b6c3460250f10c9bf5994->enter($__internal_80ae4219684d666c287b82f2888826957684c0a3c84b6c3460250f10c9bf5994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_d75fce2041fa20db6c9b30149b95ae49c18776663292215b2998d0fe530b4bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75fce2041fa20db6c9b30149b95ae49c18776663292215b2998d0fe530b4bff->enter($__internal_d75fce2041fa20db6c9b30149b95ae49c18776663292215b2998d0fe530b4bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_80ae4219684d666c287b82f2888826957684c0a3c84b6c3460250f10c9bf5994->leave($__internal_80ae4219684d666c287b82f2888826957684c0a3c84b6c3460250f10c9bf5994_prof);

        
        $__internal_d75fce2041fa20db6c9b30149b95ae49c18776663292215b2998d0fe530b4bff->leave($__internal_d75fce2041fa20db6c9b30149b95ae49c18776663292215b2998d0fe530b4bff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
