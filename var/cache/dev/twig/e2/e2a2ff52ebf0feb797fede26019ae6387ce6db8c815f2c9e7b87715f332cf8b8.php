<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_aeb19497c69840d460a91757925d5aa5cb5dff73edc89108e723fbf24cea4680 extends Twig_Template
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
        $__internal_d8333de8b531d362cf47cabb12669efa683310ff3365c63332eb58f959204382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8333de8b531d362cf47cabb12669efa683310ff3365c63332eb58f959204382->enter($__internal_d8333de8b531d362cf47cabb12669efa683310ff3365c63332eb58f959204382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_93e2ba16c37d674785a632899fc28d322d63cb072dd66e574c5d6de473102618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e2ba16c37d674785a632899fc28d322d63cb072dd66e574c5d6de473102618->enter($__internal_93e2ba16c37d674785a632899fc28d322d63cb072dd66e574c5d6de473102618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d8333de8b531d362cf47cabb12669efa683310ff3365c63332eb58f959204382->leave($__internal_d8333de8b531d362cf47cabb12669efa683310ff3365c63332eb58f959204382_prof);

        
        $__internal_93e2ba16c37d674785a632899fc28d322d63cb072dd66e574c5d6de473102618->leave($__internal_93e2ba16c37d674785a632899fc28d322d63cb072dd66e574c5d6de473102618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
