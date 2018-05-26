<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_81019ea3a0b32f5bfdd418e9a8cb25294ef8f7a3652c8ea40ca7e24e63a128e5 extends Twig_Template
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
        $__internal_1f593b3da9f1745fe2f8640ef0d816d1bbfe48adeada4cd4f6e830ea940fe1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f593b3da9f1745fe2f8640ef0d816d1bbfe48adeada4cd4f6e830ea940fe1b4->enter($__internal_1f593b3da9f1745fe2f8640ef0d816d1bbfe48adeada4cd4f6e830ea940fe1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_73460f16e054498553c3c87e9ac7336092143c6b2913459de24a52e1cb530b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73460f16e054498553c3c87e9ac7336092143c6b2913459de24a52e1cb530b9c->enter($__internal_73460f16e054498553c3c87e9ac7336092143c6b2913459de24a52e1cb530b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1f593b3da9f1745fe2f8640ef0d816d1bbfe48adeada4cd4f6e830ea940fe1b4->leave($__internal_1f593b3da9f1745fe2f8640ef0d816d1bbfe48adeada4cd4f6e830ea940fe1b4_prof);

        
        $__internal_73460f16e054498553c3c87e9ac7336092143c6b2913459de24a52e1cb530b9c->leave($__internal_73460f16e054498553c3c87e9ac7336092143c6b2913459de24a52e1cb530b9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
