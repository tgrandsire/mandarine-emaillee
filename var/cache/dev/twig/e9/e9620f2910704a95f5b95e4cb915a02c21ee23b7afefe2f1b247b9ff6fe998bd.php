<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_77ab786ea4287aedc5cf3354d017947e710457ddfe18a78d02a693e872afbbc1 extends Twig_Template
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
        $__internal_5b935f520d9c3b8564399a1c0709e61ae09d70ccee95f3e8331ff2c4c289299f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b935f520d9c3b8564399a1c0709e61ae09d70ccee95f3e8331ff2c4c289299f->enter($__internal_5b935f520d9c3b8564399a1c0709e61ae09d70ccee95f3e8331ff2c4c289299f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0ebf6d51b40bb96846916b80d56a8bea492c90901d18176d505a7039b5bfcab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebf6d51b40bb96846916b80d56a8bea492c90901d18176d505a7039b5bfcab8->enter($__internal_0ebf6d51b40bb96846916b80d56a8bea492c90901d18176d505a7039b5bfcab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5b935f520d9c3b8564399a1c0709e61ae09d70ccee95f3e8331ff2c4c289299f->leave($__internal_5b935f520d9c3b8564399a1c0709e61ae09d70ccee95f3e8331ff2c4c289299f_prof);

        
        $__internal_0ebf6d51b40bb96846916b80d56a8bea492c90901d18176d505a7039b5bfcab8->leave($__internal_0ebf6d51b40bb96846916b80d56a8bea492c90901d18176d505a7039b5bfcab8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
