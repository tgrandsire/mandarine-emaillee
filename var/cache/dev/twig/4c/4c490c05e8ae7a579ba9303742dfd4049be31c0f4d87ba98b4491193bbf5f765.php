<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_353009fe93805ac8ec24072b3e4a8cebe59ea171f32b3da947a37f03b82859c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_2bc1ec5131df7256d97ac72d9cdf7367847b00a47b3348e4433056c0fd0c416c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc1ec5131df7256d97ac72d9cdf7367847b00a47b3348e4433056c0fd0c416c->enter($__internal_2bc1ec5131df7256d97ac72d9cdf7367847b00a47b3348e4433056c0fd0c416c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_0c5fde8c88130c34119a3a795a84124e18924b4b54fdeaa8374903f4d51c7be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5fde8c88130c34119a3a795a84124e18924b4b54fdeaa8374903f4d51c7be3->enter($__internal_0c5fde8c88130c34119a3a795a84124e18924b4b54fdeaa8374903f4d51c7be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc1ec5131df7256d97ac72d9cdf7367847b00a47b3348e4433056c0fd0c416c->leave($__internal_2bc1ec5131df7256d97ac72d9cdf7367847b00a47b3348e4433056c0fd0c416c_prof);

        
        $__internal_0c5fde8c88130c34119a3a795a84124e18924b4b54fdeaa8374903f4d51c7be3->leave($__internal_0c5fde8c88130c34119a3a795a84124e18924b4b54fdeaa8374903f4d51c7be3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c15f2a1c6a1642c4b458c7cc17052ea890f8911e6cd459098100849bf2178b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15f2a1c6a1642c4b458c7cc17052ea890f8911e6cd459098100849bf2178b77->enter($__internal_c15f2a1c6a1642c4b458c7cc17052ea890f8911e6cd459098100849bf2178b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9104f86207988923ef7309688c0d381177c30e67434744d798a0707980eab38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9104f86207988923ef7309688c0d381177c30e67434744d798a0707980eab38->enter($__internal_e9104f86207988923ef7309688c0d381177c30e67434744d798a0707980eab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e9104f86207988923ef7309688c0d381177c30e67434744d798a0707980eab38->leave($__internal_e9104f86207988923ef7309688c0d381177c30e67434744d798a0707980eab38_prof);

        
        $__internal_c15f2a1c6a1642c4b458c7cc17052ea890f8911e6cd459098100849bf2178b77->leave($__internal_c15f2a1c6a1642c4b458c7cc17052ea890f8911e6cd459098100849bf2178b77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
