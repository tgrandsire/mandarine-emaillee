<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_624054467a096e5dce2c03870be775001cb1268f7005b26910e79688a4fa93c1 extends Twig_Template
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
        $__internal_e8d8c43920d8f15a31cc93c6e3bdcd77ce25f773492607ccc63c05a163a275ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d8c43920d8f15a31cc93c6e3bdcd77ce25f773492607ccc63c05a163a275ec->enter($__internal_e8d8c43920d8f15a31cc93c6e3bdcd77ce25f773492607ccc63c05a163a275ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2950ea57a9da936e82f9aab09665211c26eabbe0b7e747616f8dbed742eaec67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2950ea57a9da936e82f9aab09665211c26eabbe0b7e747616f8dbed742eaec67->enter($__internal_2950ea57a9da936e82f9aab09665211c26eabbe0b7e747616f8dbed742eaec67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e8d8c43920d8f15a31cc93c6e3bdcd77ce25f773492607ccc63c05a163a275ec->leave($__internal_e8d8c43920d8f15a31cc93c6e3bdcd77ce25f773492607ccc63c05a163a275ec_prof);

        
        $__internal_2950ea57a9da936e82f9aab09665211c26eabbe0b7e747616f8dbed742eaec67->leave($__internal_2950ea57a9da936e82f9aab09665211c26eabbe0b7e747616f8dbed742eaec67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
