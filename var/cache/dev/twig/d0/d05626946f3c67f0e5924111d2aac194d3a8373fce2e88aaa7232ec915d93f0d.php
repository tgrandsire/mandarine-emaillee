<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1041718996b1ecf8c5b473ce9d34c0340dcf518df023ae495e3f90fa3f83d359 extends Twig_Template
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
        $__internal_8653727c65f2fa98d3748317541a031b91e5cbd40749121e0b16f7cf998bf8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8653727c65f2fa98d3748317541a031b91e5cbd40749121e0b16f7cf998bf8e2->enter($__internal_8653727c65f2fa98d3748317541a031b91e5cbd40749121e0b16f7cf998bf8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f830e4076b5f8aaba9d99992101450cb2e4483daf4e352113f72d125d1fb809d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f830e4076b5f8aaba9d99992101450cb2e4483daf4e352113f72d125d1fb809d->enter($__internal_f830e4076b5f8aaba9d99992101450cb2e4483daf4e352113f72d125d1fb809d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8653727c65f2fa98d3748317541a031b91e5cbd40749121e0b16f7cf998bf8e2->leave($__internal_8653727c65f2fa98d3748317541a031b91e5cbd40749121e0b16f7cf998bf8e2_prof);

        
        $__internal_f830e4076b5f8aaba9d99992101450cb2e4483daf4e352113f72d125d1fb809d->leave($__internal_f830e4076b5f8aaba9d99992101450cb2e4483daf4e352113f72d125d1fb809d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
