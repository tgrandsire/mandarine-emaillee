<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a550c576a6c081c64c4c77afb838868ad8cf3dfbc27153e4bb050ce9944fd9b3 extends Twig_Template
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
        $__internal_e2a22cf198ddf6de03abb0b6169cf173e2d0259aefefda93b6dece774db77e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a22cf198ddf6de03abb0b6169cf173e2d0259aefefda93b6dece774db77e86->enter($__internal_e2a22cf198ddf6de03abb0b6169cf173e2d0259aefefda93b6dece774db77e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_02e2efc77e2d812a94f7b49ce2f11ab3bc67209239f1a9e22d9ce61c4d0fa9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e2efc77e2d812a94f7b49ce2f11ab3bc67209239f1a9e22d9ce61c4d0fa9ef->enter($__internal_02e2efc77e2d812a94f7b49ce2f11ab3bc67209239f1a9e22d9ce61c4d0fa9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e2a22cf198ddf6de03abb0b6169cf173e2d0259aefefda93b6dece774db77e86->leave($__internal_e2a22cf198ddf6de03abb0b6169cf173e2d0259aefefda93b6dece774db77e86_prof);

        
        $__internal_02e2efc77e2d812a94f7b49ce2f11ab3bc67209239f1a9e22d9ce61c4d0fa9ef->leave($__internal_02e2efc77e2d812a94f7b49ce2f11ab3bc67209239f1a9e22d9ce61c4d0fa9ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
