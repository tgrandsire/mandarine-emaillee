<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_07cf7dd0a2d7ddf87027a0bf35948f9c0193256b10264aa20c45d4818b43e87a extends Twig_Template
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
        $__internal_d949fac270a07ff4f9721ad83d2586cc0e014aeb8588145b8ce5ec65b893e42c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d949fac270a07ff4f9721ad83d2586cc0e014aeb8588145b8ce5ec65b893e42c->enter($__internal_d949fac270a07ff4f9721ad83d2586cc0e014aeb8588145b8ce5ec65b893e42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_a925cb51c0d85b00cd4fe39f83903711c6b26af38b280617ba311a8f1fec18d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a925cb51c0d85b00cd4fe39f83903711c6b26af38b280617ba311a8f1fec18d9->enter($__internal_a925cb51c0d85b00cd4fe39f83903711c6b26af38b280617ba311a8f1fec18d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_d949fac270a07ff4f9721ad83d2586cc0e014aeb8588145b8ce5ec65b893e42c->leave($__internal_d949fac270a07ff4f9721ad83d2586cc0e014aeb8588145b8ce5ec65b893e42c_prof);

        
        $__internal_a925cb51c0d85b00cd4fe39f83903711c6b26af38b280617ba311a8f1fec18d9->leave($__internal_a925cb51c0d85b00cd4fe39f83903711c6b26af38b280617ba311a8f1fec18d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/home/teddy/projects/grandsire/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new_content.html.twig");
    }
}
