<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9b8d6fb54aa903fbd97f46c46f825ba9fcaeadcd1d10bd475180f525cb0f3533 extends Twig_Template
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
        $__internal_545cb51315fb8bb9a0e1abc23d0d25054596095d05545731726ccc78e6ce8f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545cb51315fb8bb9a0e1abc23d0d25054596095d05545731726ccc78e6ce8f22->enter($__internal_545cb51315fb8bb9a0e1abc23d0d25054596095d05545731726ccc78e6ce8f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2ecd828d23a4712572828d596bc7585a202eb857b91536c50592d2788b2f0d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecd828d23a4712572828d596bc7585a202eb857b91536c50592d2788b2f0d25->enter($__internal_2ecd828d23a4712572828d596bc7585a202eb857b91536c50592d2788b2f0d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_545cb51315fb8bb9a0e1abc23d0d25054596095d05545731726ccc78e6ce8f22->leave($__internal_545cb51315fb8bb9a0e1abc23d0d25054596095d05545731726ccc78e6ce8f22_prof);

        
        $__internal_2ecd828d23a4712572828d596bc7585a202eb857b91536c50592d2788b2f0d25->leave($__internal_2ecd828d23a4712572828d596bc7585a202eb857b91536c50592d2788b2f0d25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
