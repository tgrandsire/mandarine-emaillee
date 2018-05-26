<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_957212b565547895acebb694636844060d1b46f12705375dcedfe019369c6734 extends Twig_Template
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
        $__internal_92bd02add268997ed00f783475be7b20651530855a994f1550456613e5c768d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92bd02add268997ed00f783475be7b20651530855a994f1550456613e5c768d4->enter($__internal_92bd02add268997ed00f783475be7b20651530855a994f1550456613e5c768d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6e642ffdf9c4e7bf1620da608d01bfbadbca5d86a8ed60a40522ae505a684d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e642ffdf9c4e7bf1620da608d01bfbadbca5d86a8ed60a40522ae505a684d64->enter($__internal_6e642ffdf9c4e7bf1620da608d01bfbadbca5d86a8ed60a40522ae505a684d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_92bd02add268997ed00f783475be7b20651530855a994f1550456613e5c768d4->leave($__internal_92bd02add268997ed00f783475be7b20651530855a994f1550456613e5c768d4_prof);

        
        $__internal_6e642ffdf9c4e7bf1620da608d01bfbadbca5d86a8ed60a40522ae505a684d64->leave($__internal_6e642ffdf9c4e7bf1620da608d01bfbadbca5d86a8ed60a40522ae505a684d64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
