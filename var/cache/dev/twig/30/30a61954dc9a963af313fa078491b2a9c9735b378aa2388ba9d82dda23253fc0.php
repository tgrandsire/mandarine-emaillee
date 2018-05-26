<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9abc81b0aba7a8b472fb4f5c0354cb0d03c623aa90804cd05a8fde69157b9ea3 extends Twig_Template
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
        $__internal_5ea0453e2ebee10a2e6cdda03eff025cbaea8df315e2579cfb554c7d481de352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea0453e2ebee10a2e6cdda03eff025cbaea8df315e2579cfb554c7d481de352->enter($__internal_5ea0453e2ebee10a2e6cdda03eff025cbaea8df315e2579cfb554c7d481de352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b8fd2028d4126fa13c9a6e439880dcc3aaa0983360b04cd61ed135c889e3e370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fd2028d4126fa13c9a6e439880dcc3aaa0983360b04cd61ed135c889e3e370->enter($__internal_b8fd2028d4126fa13c9a6e439880dcc3aaa0983360b04cd61ed135c889e3e370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5ea0453e2ebee10a2e6cdda03eff025cbaea8df315e2579cfb554c7d481de352->leave($__internal_5ea0453e2ebee10a2e6cdda03eff025cbaea8df315e2579cfb554c7d481de352_prof);

        
        $__internal_b8fd2028d4126fa13c9a6e439880dcc3aaa0983360b04cd61ed135c889e3e370->leave($__internal_b8fd2028d4126fa13c9a6e439880dcc3aaa0983360b04cd61ed135c889e3e370_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
