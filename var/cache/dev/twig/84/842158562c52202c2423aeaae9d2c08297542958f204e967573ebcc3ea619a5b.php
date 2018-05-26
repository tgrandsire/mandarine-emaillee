<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4c393f10c0a2f62b5e830467556a83b665bc62249984c078a2f290a0a59eaa5c extends Twig_Template
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
        $__internal_c5d9944615053bc8692477146fd43698c3d913233aaf93fc4ff081383cbd7ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d9944615053bc8692477146fd43698c3d913233aaf93fc4ff081383cbd7ace->enter($__internal_c5d9944615053bc8692477146fd43698c3d913233aaf93fc4ff081383cbd7ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_790f267b60fbff6076d2e682f395170b1ee556a121f256e0a0e0e821a68011c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790f267b60fbff6076d2e682f395170b1ee556a121f256e0a0e0e821a68011c4->enter($__internal_790f267b60fbff6076d2e682f395170b1ee556a121f256e0a0e0e821a68011c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c5d9944615053bc8692477146fd43698c3d913233aaf93fc4ff081383cbd7ace->leave($__internal_c5d9944615053bc8692477146fd43698c3d913233aaf93fc4ff081383cbd7ace_prof);

        
        $__internal_790f267b60fbff6076d2e682f395170b1ee556a121f256e0a0e0e821a68011c4->leave($__internal_790f267b60fbff6076d2e682f395170b1ee556a121f256e0a0e0e821a68011c4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9734878c762ba39ecbf1cc63da9e1b8d5100e483c17707ad33961e0a57eedc38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9734878c762ba39ecbf1cc63da9e1b8d5100e483c17707ad33961e0a57eedc38->enter($__internal_9734878c762ba39ecbf1cc63da9e1b8d5100e483c17707ad33961e0a57eedc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_6aed96e2df1b9290a0f276d9691d5b96365da7129ecb8f9023c5353a35c26279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aed96e2df1b9290a0f276d9691d5b96365da7129ecb8f9023c5353a35c26279->enter($__internal_6aed96e2df1b9290a0f276d9691d5b96365da7129ecb8f9023c5353a35c26279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_6aed96e2df1b9290a0f276d9691d5b96365da7129ecb8f9023c5353a35c26279->leave($__internal_6aed96e2df1b9290a0f276d9691d5b96365da7129ecb8f9023c5353a35c26279_prof);

        
        $__internal_9734878c762ba39ecbf1cc63da9e1b8d5100e483c17707ad33961e0a57eedc38->leave($__internal_9734878c762ba39ecbf1cc63da9e1b8d5100e483c17707ad33961e0a57eedc38_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_03505847dbe9521c57932beab9e5842ea07b9be66f671a7acc8ded1c18cc9ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03505847dbe9521c57932beab9e5842ea07b9be66f671a7acc8ded1c18cc9ca4->enter($__internal_03505847dbe9521c57932beab9e5842ea07b9be66f671a7acc8ded1c18cc9ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_14eaf026bc94c71a3fc12c424a45149e0d220f3ea277fd997b00b10579377517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14eaf026bc94c71a3fc12c424a45149e0d220f3ea277fd997b00b10579377517->enter($__internal_14eaf026bc94c71a3fc12c424a45149e0d220f3ea277fd997b00b10579377517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_14eaf026bc94c71a3fc12c424a45149e0d220f3ea277fd997b00b10579377517->leave($__internal_14eaf026bc94c71a3fc12c424a45149e0d220f3ea277fd997b00b10579377517_prof);

        
        $__internal_03505847dbe9521c57932beab9e5842ea07b9be66f671a7acc8ded1c18cc9ca4->leave($__internal_03505847dbe9521c57932beab9e5842ea07b9be66f671a7acc8ded1c18cc9ca4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bcde4038fba99a993c8919b328061a16cf0ca6e9a2e80180c90545c7f8c7bf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcde4038fba99a993c8919b328061a16cf0ca6e9a2e80180c90545c7f8c7bf45->enter($__internal_bcde4038fba99a993c8919b328061a16cf0ca6e9a2e80180c90545c7f8c7bf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_caf94659b4bede429f01bb2b98df7ab58ac9a3d517e49184abb1af9ffba94e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf94659b4bede429f01bb2b98df7ab58ac9a3d517e49184abb1af9ffba94e0a->enter($__internal_caf94659b4bede429f01bb2b98df7ab58ac9a3d517e49184abb1af9ffba94e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_caf94659b4bede429f01bb2b98df7ab58ac9a3d517e49184abb1af9ffba94e0a->leave($__internal_caf94659b4bede429f01bb2b98df7ab58ac9a3d517e49184abb1af9ffba94e0a_prof);

        
        $__internal_bcde4038fba99a993c8919b328061a16cf0ca6e9a2e80180c90545c7f8c7bf45->leave($__internal_bcde4038fba99a993c8919b328061a16cf0ca6e9a2e80180c90545c7f8c7bf45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
