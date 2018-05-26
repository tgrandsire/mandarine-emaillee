<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f99e60fa54bf8e4920f00b4b61943e5c6a502e98440a2a743b7a2c7f60949758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb6dac98ba2bf4299f3c6e16bef26917266ef6d4a1215558331370a54fdcf427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6dac98ba2bf4299f3c6e16bef26917266ef6d4a1215558331370a54fdcf427->enter($__internal_fb6dac98ba2bf4299f3c6e16bef26917266ef6d4a1215558331370a54fdcf427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_769664786fd381e8f27d6b93a429831e407d2fa9570c95cdd3ecbc17b16b7bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769664786fd381e8f27d6b93a429831e407d2fa9570c95cdd3ecbc17b16b7bd4->enter($__internal_769664786fd381e8f27d6b93a429831e407d2fa9570c95cdd3ecbc17b16b7bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb6dac98ba2bf4299f3c6e16bef26917266ef6d4a1215558331370a54fdcf427->leave($__internal_fb6dac98ba2bf4299f3c6e16bef26917266ef6d4a1215558331370a54fdcf427_prof);

        
        $__internal_769664786fd381e8f27d6b93a429831e407d2fa9570c95cdd3ecbc17b16b7bd4->leave($__internal_769664786fd381e8f27d6b93a429831e407d2fa9570c95cdd3ecbc17b16b7bd4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8519543911ec22e7e03cec2cde182337fbf4e0f262bc20dbf93880a183e5cdf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8519543911ec22e7e03cec2cde182337fbf4e0f262bc20dbf93880a183e5cdf3->enter($__internal_8519543911ec22e7e03cec2cde182337fbf4e0f262bc20dbf93880a183e5cdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_93e64981a721055d81fd0b57f4a8c2c21bd2927bde01d29fbfd0907c41be21e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e64981a721055d81fd0b57f4a8c2c21bd2927bde01d29fbfd0907c41be21e1->enter($__internal_93e64981a721055d81fd0b57f4a8c2c21bd2927bde01d29fbfd0907c41be21e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_93e64981a721055d81fd0b57f4a8c2c21bd2927bde01d29fbfd0907c41be21e1->leave($__internal_93e64981a721055d81fd0b57f4a8c2c21bd2927bde01d29fbfd0907c41be21e1_prof);

        
        $__internal_8519543911ec22e7e03cec2cde182337fbf4e0f262bc20dbf93880a183e5cdf3->leave($__internal_8519543911ec22e7e03cec2cde182337fbf4e0f262bc20dbf93880a183e5cdf3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
