<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b3cf3d3d44f5394cd82eb8e49ca77cb264326b8a6a2d29ca6426413412602f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0eb5560d8bfe728231ce91abffc3ec13940e2b7cb0b9bf67311c7223efa07ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb5560d8bfe728231ce91abffc3ec13940e2b7cb0b9bf67311c7223efa07ca5->enter($__internal_0eb5560d8bfe728231ce91abffc3ec13940e2b7cb0b9bf67311c7223efa07ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_1f39bde5fac6bced2cefa80f5f877cc434995f48dc16304f8068c35eceeb58a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f39bde5fac6bced2cefa80f5f877cc434995f48dc16304f8068c35eceeb58a6->enter($__internal_1f39bde5fac6bced2cefa80f5f877cc434995f48dc16304f8068c35eceeb58a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0eb5560d8bfe728231ce91abffc3ec13940e2b7cb0b9bf67311c7223efa07ca5->leave($__internal_0eb5560d8bfe728231ce91abffc3ec13940e2b7cb0b9bf67311c7223efa07ca5_prof);

        
        $__internal_1f39bde5fac6bced2cefa80f5f877cc434995f48dc16304f8068c35eceeb58a6->leave($__internal_1f39bde5fac6bced2cefa80f5f877cc434995f48dc16304f8068c35eceeb58a6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_edc6d8a501e6d4fcfde48387beb5f1ffab86deb6b48e180d76cf00a8926e6850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc6d8a501e6d4fcfde48387beb5f1ffab86deb6b48e180d76cf00a8926e6850->enter($__internal_edc6d8a501e6d4fcfde48387beb5f1ffab86deb6b48e180d76cf00a8926e6850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_233e16a525a5957f3709a12d941e068a10e6b1f123b5dc267142c9926793db5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233e16a525a5957f3709a12d941e068a10e6b1f123b5dc267142c9926793db5e->enter($__internal_233e16a525a5957f3709a12d941e068a10e6b1f123b5dc267142c9926793db5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_233e16a525a5957f3709a12d941e068a10e6b1f123b5dc267142c9926793db5e->leave($__internal_233e16a525a5957f3709a12d941e068a10e6b1f123b5dc267142c9926793db5e_prof);

        
        $__internal_edc6d8a501e6d4fcfde48387beb5f1ffab86deb6b48e180d76cf00a8926e6850->leave($__internal_edc6d8a501e6d4fcfde48387beb5f1ffab86deb6b48e180d76cf00a8926e6850_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3148308d4a40631e70eadd09d3f9817890f72de290500ad7d1e14eb7d57c3ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3148308d4a40631e70eadd09d3f9817890f72de290500ad7d1e14eb7d57c3ef7->enter($__internal_3148308d4a40631e70eadd09d3f9817890f72de290500ad7d1e14eb7d57c3ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f057fff9cf7fc3b3915025b455d06368db7dcd3c281737afd561a1d405574389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f057fff9cf7fc3b3915025b455d06368db7dcd3c281737afd561a1d405574389->enter($__internal_f057fff9cf7fc3b3915025b455d06368db7dcd3c281737afd561a1d405574389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_f057fff9cf7fc3b3915025b455d06368db7dcd3c281737afd561a1d405574389->leave($__internal_f057fff9cf7fc3b3915025b455d06368db7dcd3c281737afd561a1d405574389_prof);

        
        $__internal_3148308d4a40631e70eadd09d3f9817890f72de290500ad7d1e14eb7d57c3ef7->leave($__internal_3148308d4a40631e70eadd09d3f9817890f72de290500ad7d1e14eb7d57c3ef7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_471d672db283988216e225956b9bedc02aa693e2135c33d296c6c9e8982ddc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471d672db283988216e225956b9bedc02aa693e2135c33d296c6c9e8982ddc2e->enter($__internal_471d672db283988216e225956b9bedc02aa693e2135c33d296c6c9e8982ddc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_71380c82574e9057a63cb89479f766030708455e8f8610c0e664d440697e6d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71380c82574e9057a63cb89479f766030708455e8f8610c0e664d440697e6d42->enter($__internal_71380c82574e9057a63cb89479f766030708455e8f8610c0e664d440697e6d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_71380c82574e9057a63cb89479f766030708455e8f8610c0e664d440697e6d42->leave($__internal_71380c82574e9057a63cb89479f766030708455e8f8610c0e664d440697e6d42_prof);

        
        $__internal_471d672db283988216e225956b9bedc02aa693e2135c33d296c6c9e8982ddc2e->leave($__internal_471d672db283988216e225956b9bedc02aa693e2135c33d296c6c9e8982ddc2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
