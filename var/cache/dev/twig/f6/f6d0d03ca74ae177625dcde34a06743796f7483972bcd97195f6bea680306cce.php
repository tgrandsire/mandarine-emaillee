<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9b583896d8ddab20b77ffd942899de209c9f7ac5fef0f6d344e0c0871964fbb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_238b4af5094ea3e2f2005b3230090a3f3da82e644bcd86ff90f28593dd56874c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238b4af5094ea3e2f2005b3230090a3f3da82e644bcd86ff90f28593dd56874c->enter($__internal_238b4af5094ea3e2f2005b3230090a3f3da82e644bcd86ff90f28593dd56874c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_be355e2dcafd7a91a1132086f489ea8f74f5d286e4914688832fdded21f5e00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be355e2dcafd7a91a1132086f489ea8f74f5d286e4914688832fdded21f5e00c->enter($__internal_be355e2dcafd7a91a1132086f489ea8f74f5d286e4914688832fdded21f5e00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_238b4af5094ea3e2f2005b3230090a3f3da82e644bcd86ff90f28593dd56874c->leave($__internal_238b4af5094ea3e2f2005b3230090a3f3da82e644bcd86ff90f28593dd56874c_prof);

        
        $__internal_be355e2dcafd7a91a1132086f489ea8f74f5d286e4914688832fdded21f5e00c->leave($__internal_be355e2dcafd7a91a1132086f489ea8f74f5d286e4914688832fdded21f5e00c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_356ca6a45fe6c24849fb1be30b1eb5b87a5cb7479a92d9315694509bb297bbd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356ca6a45fe6c24849fb1be30b1eb5b87a5cb7479a92d9315694509bb297bbd3->enter($__internal_356ca6a45fe6c24849fb1be30b1eb5b87a5cb7479a92d9315694509bb297bbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_13ed82cfc5681b11fd1723d8287d39d16eba84a91b328c1af7513c02649ea4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ed82cfc5681b11fd1723d8287d39d16eba84a91b328c1af7513c02649ea4c0->enter($__internal_13ed82cfc5681b11fd1723d8287d39d16eba84a91b328c1af7513c02649ea4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_13ed82cfc5681b11fd1723d8287d39d16eba84a91b328c1af7513c02649ea4c0->leave($__internal_13ed82cfc5681b11fd1723d8287d39d16eba84a91b328c1af7513c02649ea4c0_prof);

        
        $__internal_356ca6a45fe6c24849fb1be30b1eb5b87a5cb7479a92d9315694509bb297bbd3->leave($__internal_356ca6a45fe6c24849fb1be30b1eb5b87a5cb7479a92d9315694509bb297bbd3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
