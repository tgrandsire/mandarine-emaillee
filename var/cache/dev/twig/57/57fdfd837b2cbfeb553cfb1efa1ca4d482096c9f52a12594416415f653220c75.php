<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_c5304bd12f70d0880c6f754a2ac8e95c44dbccd4aa10f4a5a3fec5b7c3869495 extends Twig_Template
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
        $__internal_bb2622e8884c5d432d5bb740d26c33a9d01c82b25a3537de2997f7fd5fc67d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2622e8884c5d432d5bb740d26c33a9d01c82b25a3537de2997f7fd5fc67d9a->enter($__internal_bb2622e8884c5d432d5bb740d26c33a9d01c82b25a3537de2997f7fd5fc67d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_b453b0543dcfaec6ccb910daf7d429edb5ec4ba1f793027e54a1b4f53c7f79f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b453b0543dcfaec6ccb910daf7d429edb5ec4ba1f793027e54a1b4f53c7f79f4->enter($__internal_b453b0543dcfaec6ccb910daf7d429edb5ec4ba1f793027e54a1b4f53c7f79f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_bb2622e8884c5d432d5bb740d26c33a9d01c82b25a3537de2997f7fd5fc67d9a->leave($__internal_bb2622e8884c5d432d5bb740d26c33a9d01c82b25a3537de2997f7fd5fc67d9a_prof);

        
        $__internal_b453b0543dcfaec6ccb910daf7d429edb5ec4ba1f793027e54a1b4f53c7f79f4->leave($__internal_b453b0543dcfaec6ccb910daf7d429edb5ec4ba1f793027e54a1b4f53c7f79f4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
