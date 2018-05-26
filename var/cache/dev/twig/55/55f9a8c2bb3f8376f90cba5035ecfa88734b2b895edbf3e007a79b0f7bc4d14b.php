<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_92afde046cf5776f1f05845893173af99c09a4eefd28536dd2ba307cd53ff477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_5d18d4e63c50764053d3f152b11be1da9bc25f1dd0594a3cc0a2c35cb31cf6f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d18d4e63c50764053d3f152b11be1da9bc25f1dd0594a3cc0a2c35cb31cf6f1->enter($__internal_5d18d4e63c50764053d3f152b11be1da9bc25f1dd0594a3cc0a2c35cb31cf6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_73d459bf31111a4383e6b3a13086fd56737b457364c0308cbcfb84563f5ae9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d459bf31111a4383e6b3a13086fd56737b457364c0308cbcfb84563f5ae9ff->enter($__internal_73d459bf31111a4383e6b3a13086fd56737b457364c0308cbcfb84563f5ae9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d18d4e63c50764053d3f152b11be1da9bc25f1dd0594a3cc0a2c35cb31cf6f1->leave($__internal_5d18d4e63c50764053d3f152b11be1da9bc25f1dd0594a3cc0a2c35cb31cf6f1_prof);

        
        $__internal_73d459bf31111a4383e6b3a13086fd56737b457364c0308cbcfb84563f5ae9ff->leave($__internal_73d459bf31111a4383e6b3a13086fd56737b457364c0308cbcfb84563f5ae9ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_beba276b658f81cc5cc7fead0f87b3a539d3a590a10fe0b073e06e5fda90c3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beba276b658f81cc5cc7fead0f87b3a539d3a590a10fe0b073e06e5fda90c3d4->enter($__internal_beba276b658f81cc5cc7fead0f87b3a539d3a590a10fe0b073e06e5fda90c3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b19da7dcaee0306b4e63f90f75ee242ac630a4f33dee12f0185c1da4ccaa9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b19da7dcaee0306b4e63f90f75ee242ac630a4f33dee12f0185c1da4ccaa9b2->enter($__internal_4b19da7dcaee0306b4e63f90f75ee242ac630a4f33dee12f0185c1da4ccaa9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4b19da7dcaee0306b4e63f90f75ee242ac630a4f33dee12f0185c1da4ccaa9b2->leave($__internal_4b19da7dcaee0306b4e63f90f75ee242ac630a4f33dee12f0185c1da4ccaa9b2_prof);

        
        $__internal_beba276b658f81cc5cc7fead0f87b3a539d3a590a10fe0b073e06e5fda90c3d4->leave($__internal_beba276b658f81cc5cc7fead0f87b3a539d3a590a10fe0b073e06e5fda90c3d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
