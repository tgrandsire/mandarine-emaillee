<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0ad451bc9df303c460905255fc137d6b5cdfb01ca0e80eefa300bc0244fdc181 extends Twig_Template
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
        $__internal_90aac49450f6e1cb38a0dfc9317141a335041909665491ec19327f4f09ea1200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90aac49450f6e1cb38a0dfc9317141a335041909665491ec19327f4f09ea1200->enter($__internal_90aac49450f6e1cb38a0dfc9317141a335041909665491ec19327f4f09ea1200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_78bddb5ee1aa63459ad8d2aa7b742d69e3ade43103b6fb41fce7019dccedc919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bddb5ee1aa63459ad8d2aa7b742d69e3ade43103b6fb41fce7019dccedc919->enter($__internal_78bddb5ee1aa63459ad8d2aa7b742d69e3ade43103b6fb41fce7019dccedc919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_90aac49450f6e1cb38a0dfc9317141a335041909665491ec19327f4f09ea1200->leave($__internal_90aac49450f6e1cb38a0dfc9317141a335041909665491ec19327f4f09ea1200_prof);

        
        $__internal_78bddb5ee1aa63459ad8d2aa7b742d69e3ade43103b6fb41fce7019dccedc919->leave($__internal_78bddb5ee1aa63459ad8d2aa7b742d69e3ade43103b6fb41fce7019dccedc919_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
