<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b9c07514edf9231e1dd2c300dacfef653930c235874639cb382da90d42327e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72defb0cd92968c274f20bcebcfcbd227673482466e2fbce5c38aaf264281b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72defb0cd92968c274f20bcebcfcbd227673482466e2fbce5c38aaf264281b93->enter($__internal_72defb0cd92968c274f20bcebcfcbd227673482466e2fbce5c38aaf264281b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8f574bd541c6dfd9789fcc8b4aafc89d74a0b862d8f96ee6fc727bb5d40e926e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f574bd541c6dfd9789fcc8b4aafc89d74a0b862d8f96ee6fc727bb5d40e926e->enter($__internal_8f574bd541c6dfd9789fcc8b4aafc89d74a0b862d8f96ee6fc727bb5d40e926e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72defb0cd92968c274f20bcebcfcbd227673482466e2fbce5c38aaf264281b93->leave($__internal_72defb0cd92968c274f20bcebcfcbd227673482466e2fbce5c38aaf264281b93_prof);

        
        $__internal_8f574bd541c6dfd9789fcc8b4aafc89d74a0b862d8f96ee6fc727bb5d40e926e->leave($__internal_8f574bd541c6dfd9789fcc8b4aafc89d74a0b862d8f96ee6fc727bb5d40e926e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a974fcbc3d96d8f77a4fe3de95646e7b32c6e34b8ef1837a68ed0fccf95ede72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a974fcbc3d96d8f77a4fe3de95646e7b32c6e34b8ef1837a68ed0fccf95ede72->enter($__internal_a974fcbc3d96d8f77a4fe3de95646e7b32c6e34b8ef1837a68ed0fccf95ede72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_abd80a6aee35f9b6accb609fe7ce0fb805190e56f62c95b30a18261581d96fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd80a6aee35f9b6accb609fe7ce0fb805190e56f62c95b30a18261581d96fd4->enter($__internal_abd80a6aee35f9b6accb609fe7ce0fb805190e56f62c95b30a18261581d96fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_abd80a6aee35f9b6accb609fe7ce0fb805190e56f62c95b30a18261581d96fd4->leave($__internal_abd80a6aee35f9b6accb609fe7ce0fb805190e56f62c95b30a18261581d96fd4_prof);

        
        $__internal_a974fcbc3d96d8f77a4fe3de95646e7b32c6e34b8ef1837a68ed0fccf95ede72->leave($__internal_a974fcbc3d96d8f77a4fe3de95646e7b32c6e34b8ef1837a68ed0fccf95ede72_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_494dee4d1aba9f6ea760c9de7e6e8ad47b8e34a769712be0520219ae01bf9050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494dee4d1aba9f6ea760c9de7e6e8ad47b8e34a769712be0520219ae01bf9050->enter($__internal_494dee4d1aba9f6ea760c9de7e6e8ad47b8e34a769712be0520219ae01bf9050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16fd1c5d149c07bd36ffba3fd1df5df57bb4112b8118d8cd73239c3643cf9aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fd1c5d149c07bd36ffba3fd1df5df57bb4112b8118d8cd73239c3643cf9aa5->enter($__internal_16fd1c5d149c07bd36ffba3fd1df5df57bb4112b8118d8cd73239c3643cf9aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_16fd1c5d149c07bd36ffba3fd1df5df57bb4112b8118d8cd73239c3643cf9aa5->leave($__internal_16fd1c5d149c07bd36ffba3fd1df5df57bb4112b8118d8cd73239c3643cf9aa5_prof);

        
        $__internal_494dee4d1aba9f6ea760c9de7e6e8ad47b8e34a769712be0520219ae01bf9050->leave($__internal_494dee4d1aba9f6ea760c9de7e6e8ad47b8e34a769712be0520219ae01bf9050_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
