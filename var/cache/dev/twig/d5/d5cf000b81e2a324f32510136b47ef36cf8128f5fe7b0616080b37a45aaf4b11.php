<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2b2d62948de362cd00ecfa26c9c8af3dcfdd76d7b2ccc9aa2e56b0dd3083b012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8b92fcb7a04e0e637b0ad1ca8e87f1b99a9cac3727ca87079bd5b0e06402b802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b92fcb7a04e0e637b0ad1ca8e87f1b99a9cac3727ca87079bd5b0e06402b802->enter($__internal_8b92fcb7a04e0e637b0ad1ca8e87f1b99a9cac3727ca87079bd5b0e06402b802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_16272f614f661a0b3405cc4a6d15ba8bbc7ec6fe3bea4c54f68bfa9d353c8b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16272f614f661a0b3405cc4a6d15ba8bbc7ec6fe3bea4c54f68bfa9d353c8b66->enter($__internal_16272f614f661a0b3405cc4a6d15ba8bbc7ec6fe3bea4c54f68bfa9d353c8b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b92fcb7a04e0e637b0ad1ca8e87f1b99a9cac3727ca87079bd5b0e06402b802->leave($__internal_8b92fcb7a04e0e637b0ad1ca8e87f1b99a9cac3727ca87079bd5b0e06402b802_prof);

        
        $__internal_16272f614f661a0b3405cc4a6d15ba8bbc7ec6fe3bea4c54f68bfa9d353c8b66->leave($__internal_16272f614f661a0b3405cc4a6d15ba8bbc7ec6fe3bea4c54f68bfa9d353c8b66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba98b63cf1befa0e42e289487348a20c53d4591db9f170a1e702bb0e0e905d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba98b63cf1befa0e42e289487348a20c53d4591db9f170a1e702bb0e0e905d48->enter($__internal_ba98b63cf1befa0e42e289487348a20c53d4591db9f170a1e702bb0e0e905d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_17097816da24a51d9a5804c7d8d897ebe1d6520c7e9d185113d7bdc302f9ef1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17097816da24a51d9a5804c7d8d897ebe1d6520c7e9d185113d7bdc302f9ef1a->enter($__internal_17097816da24a51d9a5804c7d8d897ebe1d6520c7e9d185113d7bdc302f9ef1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_17097816da24a51d9a5804c7d8d897ebe1d6520c7e9d185113d7bdc302f9ef1a->leave($__internal_17097816da24a51d9a5804c7d8d897ebe1d6520c7e9d185113d7bdc302f9ef1a_prof);

        
        $__internal_ba98b63cf1befa0e42e289487348a20c53d4591db9f170a1e702bb0e0e905d48->leave($__internal_ba98b63cf1befa0e42e289487348a20c53d4591db9f170a1e702bb0e0e905d48_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
