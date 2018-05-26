<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_f7bea7c4e1058517cbfb4476de762b6d284278299239ee36fdd0edaf39b626fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_662a0668c55bb461cd60fffce0ec7396eb2821468db4c44706956f282507bdbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662a0668c55bb461cd60fffce0ec7396eb2821468db4c44706956f282507bdbc->enter($__internal_662a0668c55bb461cd60fffce0ec7396eb2821468db4c44706956f282507bdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_17d64a7b2671412fcae4bdc43ee784cfc8f106168eebd522f0d4c15e43f5ff9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d64a7b2671412fcae4bdc43ee784cfc8f106168eebd522f0d4c15e43f5ff9b->enter($__internal_17d64a7b2671412fcae4bdc43ee784cfc8f106168eebd522f0d4c15e43f5ff9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_662a0668c55bb461cd60fffce0ec7396eb2821468db4c44706956f282507bdbc->leave($__internal_662a0668c55bb461cd60fffce0ec7396eb2821468db4c44706956f282507bdbc_prof);

        
        $__internal_17d64a7b2671412fcae4bdc43ee784cfc8f106168eebd522f0d4c15e43f5ff9b->leave($__internal_17d64a7b2671412fcae4bdc43ee784cfc8f106168eebd522f0d4c15e43f5ff9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ffc351edcc995e76a9a30aeaed64ecac5ffdea78a4b2f789b30d7d4690c5d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffc351edcc995e76a9a30aeaed64ecac5ffdea78a4b2f789b30d7d4690c5d61->enter($__internal_7ffc351edcc995e76a9a30aeaed64ecac5ffdea78a4b2f789b30d7d4690c5d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3d378ce0786dcaf77eeb9746ec8c08f24c4345a4ad176ce8f6056a28c04ea5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d378ce0786dcaf77eeb9746ec8c08f24c4345a4ad176ce8f6056a28c04ea5a->enter($__internal_c3d378ce0786dcaf77eeb9746ec8c08f24c4345a4ad176ce8f6056a28c04ea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c3d378ce0786dcaf77eeb9746ec8c08f24c4345a4ad176ce8f6056a28c04ea5a->leave($__internal_c3d378ce0786dcaf77eeb9746ec8c08f24c4345a4ad176ce8f6056a28c04ea5a_prof);

        
        $__internal_7ffc351edcc995e76a9a30aeaed64ecac5ffdea78a4b2f789b30d7d4690c5d61->leave($__internal_7ffc351edcc995e76a9a30aeaed64ecac5ffdea78a4b2f789b30d7d4690c5d61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
