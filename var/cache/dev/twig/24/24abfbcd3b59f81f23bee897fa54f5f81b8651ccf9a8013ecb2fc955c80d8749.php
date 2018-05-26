<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3d1bebd4f410e84b7e23451f7f64a032017dcb46824e18bb68fb822e4b858466 extends Twig_Template
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
        $__internal_a0939f054f2807db9222ede83c0e036789a4d30f6aef92487d816de0d335521a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0939f054f2807db9222ede83c0e036789a4d30f6aef92487d816de0d335521a->enter($__internal_a0939f054f2807db9222ede83c0e036789a4d30f6aef92487d816de0d335521a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6d5ef953f2146316c7e7251ded49e13af1b7695bb78d6a7d874634c2640a0c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5ef953f2146316c7e7251ded49e13af1b7695bb78d6a7d874634c2640a0c0f->enter($__internal_6d5ef953f2146316c7e7251ded49e13af1b7695bb78d6a7d874634c2640a0c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a0939f054f2807db9222ede83c0e036789a4d30f6aef92487d816de0d335521a->leave($__internal_a0939f054f2807db9222ede83c0e036789a4d30f6aef92487d816de0d335521a_prof);

        
        $__internal_6d5ef953f2146316c7e7251ded49e13af1b7695bb78d6a7d874634c2640a0c0f->leave($__internal_6d5ef953f2146316c7e7251ded49e13af1b7695bb78d6a7d874634c2640a0c0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
