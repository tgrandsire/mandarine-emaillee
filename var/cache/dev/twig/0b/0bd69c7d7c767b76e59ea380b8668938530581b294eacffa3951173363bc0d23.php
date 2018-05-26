<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_b0880056632bf548d7e629cbcb26ba17ab9fb5053e6785dcca6241d8e3982479 extends Twig_Template
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
        $__internal_c20e90a7a6c3b870c37eff1ec7d834a7b047bccbdbffbf26ec097fe44985edd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20e90a7a6c3b870c37eff1ec7d834a7b047bccbdbffbf26ec097fe44985edd9->enter($__internal_c20e90a7a6c3b870c37eff1ec7d834a7b047bccbdbffbf26ec097fe44985edd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ca74efd75caf8634eed688422ecfbb765500d992a650151bd86839ea24481d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca74efd75caf8634eed688422ecfbb765500d992a650151bd86839ea24481d66->enter($__internal_ca74efd75caf8634eed688422ecfbb765500d992a650151bd86839ea24481d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c20e90a7a6c3b870c37eff1ec7d834a7b047bccbdbffbf26ec097fe44985edd9->leave($__internal_c20e90a7a6c3b870c37eff1ec7d834a7b047bccbdbffbf26ec097fe44985edd9_prof);

        
        $__internal_ca74efd75caf8634eed688422ecfbb765500d992a650151bd86839ea24481d66->leave($__internal_ca74efd75caf8634eed688422ecfbb765500d992a650151bd86839ea24481d66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
