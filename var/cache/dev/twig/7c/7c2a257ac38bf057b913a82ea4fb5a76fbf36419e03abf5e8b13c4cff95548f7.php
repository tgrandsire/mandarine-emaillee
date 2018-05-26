<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_65f4d61d19127ec3bbbe47bd11f95c805320322bbe7f8923d2b61dec6ca77a76 extends Twig_Template
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
        $__internal_9e2407d565e7d73d2ab64d3223edb608f8ebf092c027d03d9797a052a66a2b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2407d565e7d73d2ab64d3223edb608f8ebf092c027d03d9797a052a66a2b3a->enter($__internal_9e2407d565e7d73d2ab64d3223edb608f8ebf092c027d03d9797a052a66a2b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5cd74cb53fabb9facb2b7b201baed36dc84a4a83b6fdafa542e5599deecff670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd74cb53fabb9facb2b7b201baed36dc84a4a83b6fdafa542e5599deecff670->enter($__internal_5cd74cb53fabb9facb2b7b201baed36dc84a4a83b6fdafa542e5599deecff670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9e2407d565e7d73d2ab64d3223edb608f8ebf092c027d03d9797a052a66a2b3a->leave($__internal_9e2407d565e7d73d2ab64d3223edb608f8ebf092c027d03d9797a052a66a2b3a_prof);

        
        $__internal_5cd74cb53fabb9facb2b7b201baed36dc84a4a83b6fdafa542e5599deecff670->leave($__internal_5cd74cb53fabb9facb2b7b201baed36dc84a4a83b6fdafa542e5599deecff670_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
