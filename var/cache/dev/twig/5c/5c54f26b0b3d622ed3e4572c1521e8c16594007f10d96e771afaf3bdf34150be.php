<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_1e16c38b45dd6da9f21a4e32ec0f4a3f0694f9280b64f598d23025325ec7b626 extends Twig_Template
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
        $__internal_1f49afa6d1c1dc9035dbaa517b45302156a17d2ea622266891ab0593792493d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f49afa6d1c1dc9035dbaa517b45302156a17d2ea622266891ab0593792493d1->enter($__internal_1f49afa6d1c1dc9035dbaa517b45302156a17d2ea622266891ab0593792493d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_c16ddfb48a001d3f5faefb73171a0928a9ebd4ab4e2c157488a5e28f6b686123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16ddfb48a001d3f5faefb73171a0928a9ebd4ab4e2c157488a5e28f6b686123->enter($__internal_c16ddfb48a001d3f5faefb73171a0928a9ebd4ab4e2c157488a5e28f6b686123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_1f49afa6d1c1dc9035dbaa517b45302156a17d2ea622266891ab0593792493d1->leave($__internal_1f49afa6d1c1dc9035dbaa517b45302156a17d2ea622266891ab0593792493d1_prof);

        
        $__internal_c16ddfb48a001d3f5faefb73171a0928a9ebd4ab4e2c157488a5e28f6b686123->leave($__internal_c16ddfb48a001d3f5faefb73171a0928a9ebd4ab4e2c157488a5e28f6b686123_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
