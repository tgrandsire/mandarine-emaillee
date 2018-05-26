<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_66a2913b367426463028cf4c6ecf1bf16d2550ec8969774b93cf4367e21abe2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_edb6b0adbcb028c12667aaac1d0d08b225a51167fa2d8417e4cf75f10e90a292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb6b0adbcb028c12667aaac1d0d08b225a51167fa2d8417e4cf75f10e90a292->enter($__internal_edb6b0adbcb028c12667aaac1d0d08b225a51167fa2d8417e4cf75f10e90a292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_260c60cb8b886f10f17c24731ed3f3b71df87407f3e1d65d17ca5a96490fe435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260c60cb8b886f10f17c24731ed3f3b71df87407f3e1d65d17ca5a96490fe435->enter($__internal_260c60cb8b886f10f17c24731ed3f3b71df87407f3e1d65d17ca5a96490fe435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edb6b0adbcb028c12667aaac1d0d08b225a51167fa2d8417e4cf75f10e90a292->leave($__internal_edb6b0adbcb028c12667aaac1d0d08b225a51167fa2d8417e4cf75f10e90a292_prof);

        
        $__internal_260c60cb8b886f10f17c24731ed3f3b71df87407f3e1d65d17ca5a96490fe435->leave($__internal_260c60cb8b886f10f17c24731ed3f3b71df87407f3e1d65d17ca5a96490fe435_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fb9f0e7240e2c768686c99a69f35705af3c877e5f2d20166e082b81bc29d372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb9f0e7240e2c768686c99a69f35705af3c877e5f2d20166e082b81bc29d372->enter($__internal_8fb9f0e7240e2c768686c99a69f35705af3c877e5f2d20166e082b81bc29d372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8284b0acef16481bdb547d3be7b409746c05557fa542037253ad55c8df3c3716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8284b0acef16481bdb547d3be7b409746c05557fa542037253ad55c8df3c3716->enter($__internal_8284b0acef16481bdb547d3be7b409746c05557fa542037253ad55c8df3c3716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8284b0acef16481bdb547d3be7b409746c05557fa542037253ad55c8df3c3716->leave($__internal_8284b0acef16481bdb547d3be7b409746c05557fa542037253ad55c8df3c3716_prof);

        
        $__internal_8fb9f0e7240e2c768686c99a69f35705af3c877e5f2d20166e082b81bc29d372->leave($__internal_8fb9f0e7240e2c768686c99a69f35705af3c877e5f2d20166e082b81bc29d372_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
