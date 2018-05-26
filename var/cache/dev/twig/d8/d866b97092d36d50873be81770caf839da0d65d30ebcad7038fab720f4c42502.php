<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_74421f83b5a700e67479e2fff9d53785f0847029724ede5bf0000ab033e6df55 extends Twig_Template
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
        $__internal_d8a72f765be0fdd2e1e9b0ff2d26f70861f57d0ef9adf362f819bb8f1de74c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a72f765be0fdd2e1e9b0ff2d26f70861f57d0ef9adf362f819bb8f1de74c48->enter($__internal_d8a72f765be0fdd2e1e9b0ff2d26f70861f57d0ef9adf362f819bb8f1de74c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b3febfdf715a5a2442633ce2dba46a002c5bea40dec077c34c1e811749bee437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3febfdf715a5a2442633ce2dba46a002c5bea40dec077c34c1e811749bee437->enter($__internal_b3febfdf715a5a2442633ce2dba46a002c5bea40dec077c34c1e811749bee437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d8a72f765be0fdd2e1e9b0ff2d26f70861f57d0ef9adf362f819bb8f1de74c48->leave($__internal_d8a72f765be0fdd2e1e9b0ff2d26f70861f57d0ef9adf362f819bb8f1de74c48_prof);

        
        $__internal_b3febfdf715a5a2442633ce2dba46a002c5bea40dec077c34c1e811749bee437->leave($__internal_b3febfdf715a5a2442633ce2dba46a002c5bea40dec077c34c1e811749bee437_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
