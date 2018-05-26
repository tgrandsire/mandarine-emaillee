<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1f098933d9a48286bd0775979ee33e1db0efc2ab473f41e59224239d9ce8cce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_06042aab0c34585901c29d0257ab4389dc808737ad635317fb46cde8ae3a1944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06042aab0c34585901c29d0257ab4389dc808737ad635317fb46cde8ae3a1944->enter($__internal_06042aab0c34585901c29d0257ab4389dc808737ad635317fb46cde8ae3a1944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_fa8e7461575b0c8df555d92516e85ca579a573f672db93e1d56d921bac123909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8e7461575b0c8df555d92516e85ca579a573f672db93e1d56d921bac123909->enter($__internal_fa8e7461575b0c8df555d92516e85ca579a573f672db93e1d56d921bac123909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06042aab0c34585901c29d0257ab4389dc808737ad635317fb46cde8ae3a1944->leave($__internal_06042aab0c34585901c29d0257ab4389dc808737ad635317fb46cde8ae3a1944_prof);

        
        $__internal_fa8e7461575b0c8df555d92516e85ca579a573f672db93e1d56d921bac123909->leave($__internal_fa8e7461575b0c8df555d92516e85ca579a573f672db93e1d56d921bac123909_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_737d2c83ee967384b8855f3129842f92a1f018889008f3173f98e1851679b3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737d2c83ee967384b8855f3129842f92a1f018889008f3173f98e1851679b3aa->enter($__internal_737d2c83ee967384b8855f3129842f92a1f018889008f3173f98e1851679b3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41207b8f302846a61a36043c10ae20fb402b026f9df4d58f236195014ceea327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41207b8f302846a61a36043c10ae20fb402b026f9df4d58f236195014ceea327->enter($__internal_41207b8f302846a61a36043c10ae20fb402b026f9df4d58f236195014ceea327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_41207b8f302846a61a36043c10ae20fb402b026f9df4d58f236195014ceea327->leave($__internal_41207b8f302846a61a36043c10ae20fb402b026f9df4d58f236195014ceea327_prof);

        
        $__internal_737d2c83ee967384b8855f3129842f92a1f018889008f3173f98e1851679b3aa->leave($__internal_737d2c83ee967384b8855f3129842f92a1f018889008f3173f98e1851679b3aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
