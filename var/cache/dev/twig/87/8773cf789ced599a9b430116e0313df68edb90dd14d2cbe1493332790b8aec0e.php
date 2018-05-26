<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b76f20a27ce42b8b964f24af097e2ccf521fb49e63f27aa7db540fd789d30aca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d9f4bad3e3127c7e954ae66cf17395acba9bb85d7d5bfbc1959c55d9b895a3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f4bad3e3127c7e954ae66cf17395acba9bb85d7d5bfbc1959c55d9b895a3dd->enter($__internal_d9f4bad3e3127c7e954ae66cf17395acba9bb85d7d5bfbc1959c55d9b895a3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_8e194296584f3635cd4eccb3b866da3571c01055cf8e70602f59d78ebe51e755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e194296584f3635cd4eccb3b866da3571c01055cf8e70602f59d78ebe51e755->enter($__internal_8e194296584f3635cd4eccb3b866da3571c01055cf8e70602f59d78ebe51e755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9f4bad3e3127c7e954ae66cf17395acba9bb85d7d5bfbc1959c55d9b895a3dd->leave($__internal_d9f4bad3e3127c7e954ae66cf17395acba9bb85d7d5bfbc1959c55d9b895a3dd_prof);

        
        $__internal_8e194296584f3635cd4eccb3b866da3571c01055cf8e70602f59d78ebe51e755->leave($__internal_8e194296584f3635cd4eccb3b866da3571c01055cf8e70602f59d78ebe51e755_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45a788ff11e38f6752997b8fa3eda302f0a0a9bbc938d1c166a011db43f36209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a788ff11e38f6752997b8fa3eda302f0a0a9bbc938d1c166a011db43f36209->enter($__internal_45a788ff11e38f6752997b8fa3eda302f0a0a9bbc938d1c166a011db43f36209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1439dced9d80ee5eaa82b542a78e1ceeb2765825745614e9b254cce77921f8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1439dced9d80ee5eaa82b542a78e1ceeb2765825745614e9b254cce77921f8ad->enter($__internal_1439dced9d80ee5eaa82b542a78e1ceeb2765825745614e9b254cce77921f8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1439dced9d80ee5eaa82b542a78e1ceeb2765825745614e9b254cce77921f8ad->leave($__internal_1439dced9d80ee5eaa82b542a78e1ceeb2765825745614e9b254cce77921f8ad_prof);

        
        $__internal_45a788ff11e38f6752997b8fa3eda302f0a0a9bbc938d1c166a011db43f36209->leave($__internal_45a788ff11e38f6752997b8fa3eda302f0a0a9bbc938d1c166a011db43f36209_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
