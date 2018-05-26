<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0a7012cf0f0c2e92340f4761be0a5a2a618ac5918fc357961e8c4f8a221e5d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_43392bec7cd84da19f5d6b0be9dc4d677d3008f2c353a1b51f8c37307a5105b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43392bec7cd84da19f5d6b0be9dc4d677d3008f2c353a1b51f8c37307a5105b5->enter($__internal_43392bec7cd84da19f5d6b0be9dc4d677d3008f2c353a1b51f8c37307a5105b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_34dc950061b10d76d61b25ab4b924a6257d064eb8616e1d704c52f1eb4316648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34dc950061b10d76d61b25ab4b924a6257d064eb8616e1d704c52f1eb4316648->enter($__internal_34dc950061b10d76d61b25ab4b924a6257d064eb8616e1d704c52f1eb4316648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43392bec7cd84da19f5d6b0be9dc4d677d3008f2c353a1b51f8c37307a5105b5->leave($__internal_43392bec7cd84da19f5d6b0be9dc4d677d3008f2c353a1b51f8c37307a5105b5_prof);

        
        $__internal_34dc950061b10d76d61b25ab4b924a6257d064eb8616e1d704c52f1eb4316648->leave($__internal_34dc950061b10d76d61b25ab4b924a6257d064eb8616e1d704c52f1eb4316648_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d734b09d7d4ed2e10ffde301f6dd4b41f9a8364e8c5fb169564f469be1587cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d734b09d7d4ed2e10ffde301f6dd4b41f9a8364e8c5fb169564f469be1587cb->enter($__internal_9d734b09d7d4ed2e10ffde301f6dd4b41f9a8364e8c5fb169564f469be1587cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_903a5b4aa8c3c3a98582e36be1de3e542d9325592388edf90acbd5606dae13f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903a5b4aa8c3c3a98582e36be1de3e542d9325592388edf90acbd5606dae13f4->enter($__internal_903a5b4aa8c3c3a98582e36be1de3e542d9325592388edf90acbd5606dae13f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_903a5b4aa8c3c3a98582e36be1de3e542d9325592388edf90acbd5606dae13f4->leave($__internal_903a5b4aa8c3c3a98582e36be1de3e542d9325592388edf90acbd5606dae13f4_prof);

        
        $__internal_9d734b09d7d4ed2e10ffde301f6dd4b41f9a8364e8c5fb169564f469be1587cb->leave($__internal_9d734b09d7d4ed2e10ffde301f6dd4b41f9a8364e8c5fb169564f469be1587cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
