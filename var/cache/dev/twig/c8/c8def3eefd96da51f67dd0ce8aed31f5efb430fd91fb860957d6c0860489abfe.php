<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bc4d65846ccc1d8c650ffb9bb72aa047fc2ce962e486206c538c529bb435ea46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_0146ed3a691749ee9a9143f1d11998bd48a6d22e8b0151894ea70040d8991c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0146ed3a691749ee9a9143f1d11998bd48a6d22e8b0151894ea70040d8991c25->enter($__internal_0146ed3a691749ee9a9143f1d11998bd48a6d22e8b0151894ea70040d8991c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_4e3f327c903b10a55d73bc2653ffb721b12d5340dfee5a3d48bd7d0ec1283fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3f327c903b10a55d73bc2653ffb721b12d5340dfee5a3d48bd7d0ec1283fb2->enter($__internal_4e3f327c903b10a55d73bc2653ffb721b12d5340dfee5a3d48bd7d0ec1283fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0146ed3a691749ee9a9143f1d11998bd48a6d22e8b0151894ea70040d8991c25->leave($__internal_0146ed3a691749ee9a9143f1d11998bd48a6d22e8b0151894ea70040d8991c25_prof);

        
        $__internal_4e3f327c903b10a55d73bc2653ffb721b12d5340dfee5a3d48bd7d0ec1283fb2->leave($__internal_4e3f327c903b10a55d73bc2653ffb721b12d5340dfee5a3d48bd7d0ec1283fb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_babb3842d7851d5a69c790c055658ee4821ca3ca2a38daed84565ba0fe706220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babb3842d7851d5a69c790c055658ee4821ca3ca2a38daed84565ba0fe706220->enter($__internal_babb3842d7851d5a69c790c055658ee4821ca3ca2a38daed84565ba0fe706220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_87837740fb9f5be43a0486b5a944caf42603657e59e76070972bb21765d65c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87837740fb9f5be43a0486b5a944caf42603657e59e76070972bb21765d65c1d->enter($__internal_87837740fb9f5be43a0486b5a944caf42603657e59e76070972bb21765d65c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_87837740fb9f5be43a0486b5a944caf42603657e59e76070972bb21765d65c1d->leave($__internal_87837740fb9f5be43a0486b5a944caf42603657e59e76070972bb21765d65c1d_prof);

        
        $__internal_babb3842d7851d5a69c790c055658ee4821ca3ca2a38daed84565ba0fe706220->leave($__internal_babb3842d7851d5a69c790c055658ee4821ca3ca2a38daed84565ba0fe706220_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
