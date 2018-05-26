<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_1310db1e2a2963105d43f4d61737f47745f3be57b8c9d53642744da5b3fa456d extends Twig_Template
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
        $__internal_497b2450526f441f9c61c11ef7bab109b47d9a906ee1cfd00f012bb62c52ebc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497b2450526f441f9c61c11ef7bab109b47d9a906ee1cfd00f012bb62c52ebc8->enter($__internal_497b2450526f441f9c61c11ef7bab109b47d9a906ee1cfd00f012bb62c52ebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_18bf4e8e3e756b76861693906bbad5cd14d3b2302c56c8904da5808792fa170c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bf4e8e3e756b76861693906bbad5cd14d3b2302c56c8904da5808792fa170c->enter($__internal_18bf4e8e3e756b76861693906bbad5cd14d3b2302c56c8904da5808792fa170c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_497b2450526f441f9c61c11ef7bab109b47d9a906ee1cfd00f012bb62c52ebc8->leave($__internal_497b2450526f441f9c61c11ef7bab109b47d9a906ee1cfd00f012bb62c52ebc8_prof);

        
        $__internal_18bf4e8e3e756b76861693906bbad5cd14d3b2302c56c8904da5808792fa170c->leave($__internal_18bf4e8e3e756b76861693906bbad5cd14d3b2302c56c8904da5808792fa170c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
