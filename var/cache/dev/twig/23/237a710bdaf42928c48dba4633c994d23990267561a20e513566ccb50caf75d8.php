<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_08f02770c170dd536d63ac781d333cfb82f6e7b3b7c04009ea8281739baec20d extends Twig_Template
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
        $__internal_b7f5a4148068da2f76308591bc6bbb2be5ac995921e084347758eec6ec9de463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f5a4148068da2f76308591bc6bbb2be5ac995921e084347758eec6ec9de463->enter($__internal_b7f5a4148068da2f76308591bc6bbb2be5ac995921e084347758eec6ec9de463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_414d9686cf91610e221e0465598232d3cb79bb2f4bb4fba2c4d19660c2e7c897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414d9686cf91610e221e0465598232d3cb79bb2f4bb4fba2c4d19660c2e7c897->enter($__internal_414d9686cf91610e221e0465598232d3cb79bb2f4bb4fba2c4d19660c2e7c897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b7f5a4148068da2f76308591bc6bbb2be5ac995921e084347758eec6ec9de463->leave($__internal_b7f5a4148068da2f76308591bc6bbb2be5ac995921e084347758eec6ec9de463_prof);

        
        $__internal_414d9686cf91610e221e0465598232d3cb79bb2f4bb4fba2c4d19660c2e7c897->leave($__internal_414d9686cf91610e221e0465598232d3cb79bb2f4bb4fba2c4d19660c2e7c897_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
