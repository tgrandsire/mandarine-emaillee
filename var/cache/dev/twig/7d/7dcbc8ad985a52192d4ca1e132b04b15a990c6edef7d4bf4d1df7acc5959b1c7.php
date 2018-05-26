<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_01f711110df8c0bf639e32ce1d1fb23d6da5e57c8e6d06210307e5cc332f65af extends Twig_Template
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
        $__internal_bb792a973049c2b826182a06bd38b6099ce91b62d01f903877158d2e5c1619b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb792a973049c2b826182a06bd38b6099ce91b62d01f903877158d2e5c1619b0->enter($__internal_bb792a973049c2b826182a06bd38b6099ce91b62d01f903877158d2e5c1619b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_90216f1bb9f8f36528ea2578812d3d31abdb68c23ec3577a3f6e9e12fa943723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90216f1bb9f8f36528ea2578812d3d31abdb68c23ec3577a3f6e9e12fa943723->enter($__internal_90216f1bb9f8f36528ea2578812d3d31abdb68c23ec3577a3f6e9e12fa943723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_bb792a973049c2b826182a06bd38b6099ce91b62d01f903877158d2e5c1619b0->leave($__internal_bb792a973049c2b826182a06bd38b6099ce91b62d01f903877158d2e5c1619b0_prof);

        
        $__internal_90216f1bb9f8f36528ea2578812d3d31abdb68c23ec3577a3f6e9e12fa943723->leave($__internal_90216f1bb9f8f36528ea2578812d3d31abdb68c23ec3577a3f6e9e12fa943723_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
