<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c1408e68fda48e07d1f99e08fad3bef71b3f082960bfdfa2fb9b713c336ed54b extends Twig_Template
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
        $__internal_d1e5db784c175bc8d11a575c987504bdcf96df05fc07a0c1399b43ae26ae1119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e5db784c175bc8d11a575c987504bdcf96df05fc07a0c1399b43ae26ae1119->enter($__internal_d1e5db784c175bc8d11a575c987504bdcf96df05fc07a0c1399b43ae26ae1119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fe7804ded64a1685e03f40d3a479130ca24ea207f3dae672ab3d972fa55ab763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7804ded64a1685e03f40d3a479130ca24ea207f3dae672ab3d972fa55ab763->enter($__internal_fe7804ded64a1685e03f40d3a479130ca24ea207f3dae672ab3d972fa55ab763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d1e5db784c175bc8d11a575c987504bdcf96df05fc07a0c1399b43ae26ae1119->leave($__internal_d1e5db784c175bc8d11a575c987504bdcf96df05fc07a0c1399b43ae26ae1119_prof);

        
        $__internal_fe7804ded64a1685e03f40d3a479130ca24ea207f3dae672ab3d972fa55ab763->leave($__internal_fe7804ded64a1685e03f40d3a479130ca24ea207f3dae672ab3d972fa55ab763_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
