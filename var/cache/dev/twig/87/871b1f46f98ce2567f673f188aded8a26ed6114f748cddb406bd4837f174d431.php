<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_5507651a18c57f8dd312b87cb26c783f6ae530deae1f25313ca911350e699b2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_e778ddd9cc27c8819f4ba1d128388e776556150761075d1ca4db62b835fbde20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e778ddd9cc27c8819f4ba1d128388e776556150761075d1ca4db62b835fbde20->enter($__internal_e778ddd9cc27c8819f4ba1d128388e776556150761075d1ca4db62b835fbde20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_aa0fa9a27a7329f98aaabd98b7ac5c27ebb70ffbaf44a80a6c57277b8720573f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0fa9a27a7329f98aaabd98b7ac5c27ebb70ffbaf44a80a6c57277b8720573f->enter($__internal_aa0fa9a27a7329f98aaabd98b7ac5c27ebb70ffbaf44a80a6c57277b8720573f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e778ddd9cc27c8819f4ba1d128388e776556150761075d1ca4db62b835fbde20->leave($__internal_e778ddd9cc27c8819f4ba1d128388e776556150761075d1ca4db62b835fbde20_prof);

        
        $__internal_aa0fa9a27a7329f98aaabd98b7ac5c27ebb70ffbaf44a80a6c57277b8720573f->leave($__internal_aa0fa9a27a7329f98aaabd98b7ac5c27ebb70ffbaf44a80a6c57277b8720573f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1331bff26f4c5e116ff86539ecae1cb4c808d79fb35786b86e3ca0b73afc975b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1331bff26f4c5e116ff86539ecae1cb4c808d79fb35786b86e3ca0b73afc975b->enter($__internal_1331bff26f4c5e116ff86539ecae1cb4c808d79fb35786b86e3ca0b73afc975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_faa9051e408829a578b9f09b9376f969c9138a0ec0581d9adbb61edd7aaa1b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa9051e408829a578b9f09b9376f969c9138a0ec0581d9adbb61edd7aaa1b14->enter($__internal_faa9051e408829a578b9f09b9376f969c9138a0ec0581d9adbb61edd7aaa1b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_faa9051e408829a578b9f09b9376f969c9138a0ec0581d9adbb61edd7aaa1b14->leave($__internal_faa9051e408829a578b9f09b9376f969c9138a0ec0581d9adbb61edd7aaa1b14_prof);

        
        $__internal_1331bff26f4c5e116ff86539ecae1cb4c808d79fb35786b86e3ca0b73afc975b->leave($__internal_1331bff26f4c5e116ff86539ecae1cb4c808d79fb35786b86e3ca0b73afc975b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
