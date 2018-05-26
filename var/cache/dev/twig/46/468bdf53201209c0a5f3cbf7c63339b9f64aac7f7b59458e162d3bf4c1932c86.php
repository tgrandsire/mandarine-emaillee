<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_03b41fb009400e79ebd41486fdb8c0262b6742ba535c4f03fd913ea4c0b605cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f6a4e732d48ab87ee0d14b3cbce6150bb19526f48da43eca2395abc94dacfa75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a4e732d48ab87ee0d14b3cbce6150bb19526f48da43eca2395abc94dacfa75->enter($__internal_f6a4e732d48ab87ee0d14b3cbce6150bb19526f48da43eca2395abc94dacfa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_59ef195f33cc2864dbd7318eca7c7a238dde6626ca9d1fdbec3c4a925d6ade68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ef195f33cc2864dbd7318eca7c7a238dde6626ca9d1fdbec3c4a925d6ade68->enter($__internal_59ef195f33cc2864dbd7318eca7c7a238dde6626ca9d1fdbec3c4a925d6ade68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a4e732d48ab87ee0d14b3cbce6150bb19526f48da43eca2395abc94dacfa75->leave($__internal_f6a4e732d48ab87ee0d14b3cbce6150bb19526f48da43eca2395abc94dacfa75_prof);

        
        $__internal_59ef195f33cc2864dbd7318eca7c7a238dde6626ca9d1fdbec3c4a925d6ade68->leave($__internal_59ef195f33cc2864dbd7318eca7c7a238dde6626ca9d1fdbec3c4a925d6ade68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0736ba45965c016a4309d3a42fdbabad0f5e0aeeffe1790fd0f59abd3be3812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0736ba45965c016a4309d3a42fdbabad0f5e0aeeffe1790fd0f59abd3be3812->enter($__internal_f0736ba45965c016a4309d3a42fdbabad0f5e0aeeffe1790fd0f59abd3be3812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c0397a2bb332140f8bee09a247b1d457970fa511a585d5400911587f6690761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0397a2bb332140f8bee09a247b1d457970fa511a585d5400911587f6690761->enter($__internal_9c0397a2bb332140f8bee09a247b1d457970fa511a585d5400911587f6690761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9c0397a2bb332140f8bee09a247b1d457970fa511a585d5400911587f6690761->leave($__internal_9c0397a2bb332140f8bee09a247b1d457970fa511a585d5400911587f6690761_prof);

        
        $__internal_f0736ba45965c016a4309d3a42fdbabad0f5e0aeeffe1790fd0f59abd3be3812->leave($__internal_f0736ba45965c016a4309d3a42fdbabad0f5e0aeeffe1790fd0f59abd3be3812_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
