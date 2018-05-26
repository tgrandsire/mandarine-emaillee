<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7c18c063b867e73b104ac92215f4fec286b0a5eba339c2c967503b93db1c9a86 extends Twig_Template
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
        $__internal_cc6769f09f335cce99ce2a9514b7e1fd43884a96a0c504f3d557187689e6195f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6769f09f335cce99ce2a9514b7e1fd43884a96a0c504f3d557187689e6195f->enter($__internal_cc6769f09f335cce99ce2a9514b7e1fd43884a96a0c504f3d557187689e6195f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_12455b950a2bec1f82973685fc4dfb418636e031eb5e228181a8f6c7cf549c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12455b950a2bec1f82973685fc4dfb418636e031eb5e228181a8f6c7cf549c23->enter($__internal_12455b950a2bec1f82973685fc4dfb418636e031eb5e228181a8f6c7cf549c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cc6769f09f335cce99ce2a9514b7e1fd43884a96a0c504f3d557187689e6195f->leave($__internal_cc6769f09f335cce99ce2a9514b7e1fd43884a96a0c504f3d557187689e6195f_prof);

        
        $__internal_12455b950a2bec1f82973685fc4dfb418636e031eb5e228181a8f6c7cf549c23->leave($__internal_12455b950a2bec1f82973685fc4dfb418636e031eb5e228181a8f6c7cf549c23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
