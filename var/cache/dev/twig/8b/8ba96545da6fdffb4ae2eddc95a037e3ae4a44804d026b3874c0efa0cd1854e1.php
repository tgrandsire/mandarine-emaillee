<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f95ca04ad7940aa879e86b0ed07682ecafd629b0868014adf30a8a9a16a98688 extends Twig_Template
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
        $__internal_3153b8184598659c190c4f7f1a8e004738e2b634e0af4998687754685e2b736f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3153b8184598659c190c4f7f1a8e004738e2b634e0af4998687754685e2b736f->enter($__internal_3153b8184598659c190c4f7f1a8e004738e2b634e0af4998687754685e2b736f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_66ab4488dc71ce8adfacebf2b27b2cf9eae9e0e343463d2db8fefae5368d4e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ab4488dc71ce8adfacebf2b27b2cf9eae9e0e343463d2db8fefae5368d4e3e->enter($__internal_66ab4488dc71ce8adfacebf2b27b2cf9eae9e0e343463d2db8fefae5368d4e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3153b8184598659c190c4f7f1a8e004738e2b634e0af4998687754685e2b736f->leave($__internal_3153b8184598659c190c4f7f1a8e004738e2b634e0af4998687754685e2b736f_prof);

        
        $__internal_66ab4488dc71ce8adfacebf2b27b2cf9eae9e0e343463d2db8fefae5368d4e3e->leave($__internal_66ab4488dc71ce8adfacebf2b27b2cf9eae9e0e343463d2db8fefae5368d4e3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
