<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_fc0bd023e960afaa9904aaa684c37b6482901c4773ab8e8b58acb7224b728a5e extends Twig_Template
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
        $__internal_e483acda2fc2c1cd403c0e58d80c2b7f4df83305df4ff3417abdb8d6dbf652b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e483acda2fc2c1cd403c0e58d80c2b7f4df83305df4ff3417abdb8d6dbf652b3->enter($__internal_e483acda2fc2c1cd403c0e58d80c2b7f4df83305df4ff3417abdb8d6dbf652b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_885744bb9e3fdea003000669b6002d7172fa440e72de7e2adbfc87940dec16bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885744bb9e3fdea003000669b6002d7172fa440e72de7e2adbfc87940dec16bd->enter($__internal_885744bb9e3fdea003000669b6002d7172fa440e72de7e2adbfc87940dec16bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e483acda2fc2c1cd403c0e58d80c2b7f4df83305df4ff3417abdb8d6dbf652b3->leave($__internal_e483acda2fc2c1cd403c0e58d80c2b7f4df83305df4ff3417abdb8d6dbf652b3_prof);

        
        $__internal_885744bb9e3fdea003000669b6002d7172fa440e72de7e2adbfc87940dec16bd->leave($__internal_885744bb9e3fdea003000669b6002d7172fa440e72de7e2adbfc87940dec16bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
