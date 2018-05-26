<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_1369fc004b274b44bdf258d2115aa23e14d2c6a8d65740e09063bc3143b903bc extends Twig_Template
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
        $__internal_18b4e073823049f29a3f092c74276f559b72d09bc2d8c25e550881be03ce7001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b4e073823049f29a3f092c74276f559b72d09bc2d8c25e550881be03ce7001->enter($__internal_18b4e073823049f29a3f092c74276f559b72d09bc2d8c25e550881be03ce7001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_45573dafc3dc4da8a5a3a40f445ca1ae3a6339d59a2dde5f513b59ec7d4de7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45573dafc3dc4da8a5a3a40f445ca1ae3a6339d59a2dde5f513b59ec7d4de7b7->enter($__internal_45573dafc3dc4da8a5a3a40f445ca1ae3a6339d59a2dde5f513b59ec7d4de7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_18b4e073823049f29a3f092c74276f559b72d09bc2d8c25e550881be03ce7001->leave($__internal_18b4e073823049f29a3f092c74276f559b72d09bc2d8c25e550881be03ce7001_prof);

        
        $__internal_45573dafc3dc4da8a5a3a40f445ca1ae3a6339d59a2dde5f513b59ec7d4de7b7->leave($__internal_45573dafc3dc4da8a5a3a40f445ca1ae3a6339d59a2dde5f513b59ec7d4de7b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
