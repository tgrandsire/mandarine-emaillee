<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9a5a8fb43465c3db57d912451754a0d00ff6ec8bbb2c7a3e21b00a93b70fdcba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_96104181b2b1ef1fc07f2ece796eaecad324c5992160b83943481d99e9ff9e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96104181b2b1ef1fc07f2ece796eaecad324c5992160b83943481d99e9ff9e26->enter($__internal_96104181b2b1ef1fc07f2ece796eaecad324c5992160b83943481d99e9ff9e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f77e2ec4982920db854e964a62396b3ee3da08a2c1e5a117fbee9cdbbdd28de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77e2ec4982920db854e964a62396b3ee3da08a2c1e5a117fbee9cdbbdd28de9->enter($__internal_f77e2ec4982920db854e964a62396b3ee3da08a2c1e5a117fbee9cdbbdd28de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96104181b2b1ef1fc07f2ece796eaecad324c5992160b83943481d99e9ff9e26->leave($__internal_96104181b2b1ef1fc07f2ece796eaecad324c5992160b83943481d99e9ff9e26_prof);

        
        $__internal_f77e2ec4982920db854e964a62396b3ee3da08a2c1e5a117fbee9cdbbdd28de9->leave($__internal_f77e2ec4982920db854e964a62396b3ee3da08a2c1e5a117fbee9cdbbdd28de9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37d7eaaff195fed1642b5c4a5f58603a204f4de05df033516421b5dac0ca3a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d7eaaff195fed1642b5c4a5f58603a204f4de05df033516421b5dac0ca3a1b->enter($__internal_37d7eaaff195fed1642b5c4a5f58603a204f4de05df033516421b5dac0ca3a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_06c2fa803fc02b5d21ef2bb9d9075c776ca636b0f84f7bcff8e732553b28c554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c2fa803fc02b5d21ef2bb9d9075c776ca636b0f84f7bcff8e732553b28c554->enter($__internal_06c2fa803fc02b5d21ef2bb9d9075c776ca636b0f84f7bcff8e732553b28c554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_06c2fa803fc02b5d21ef2bb9d9075c776ca636b0f84f7bcff8e732553b28c554->leave($__internal_06c2fa803fc02b5d21ef2bb9d9075c776ca636b0f84f7bcff8e732553b28c554_prof);

        
        $__internal_37d7eaaff195fed1642b5c4a5f58603a204f4de05df033516421b5dac0ca3a1b->leave($__internal_37d7eaaff195fed1642b5c4a5f58603a204f4de05df033516421b5dac0ca3a1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
