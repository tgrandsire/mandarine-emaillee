<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5f4cfb635699946011854b3cb644e2c13f722f604ed55043857229715e624910 extends Twig_Template
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
        $__internal_03ca38f0ccfbb86bca316840dbe0854505f83695579ec1bee42418693110f4c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ca38f0ccfbb86bca316840dbe0854505f83695579ec1bee42418693110f4c0->enter($__internal_03ca38f0ccfbb86bca316840dbe0854505f83695579ec1bee42418693110f4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4aec1f003731e3775568286da40be3efecdbb2f62d8141251571414ffaa0d5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aec1f003731e3775568286da40be3efecdbb2f62d8141251571414ffaa0d5ab->enter($__internal_4aec1f003731e3775568286da40be3efecdbb2f62d8141251571414ffaa0d5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_03ca38f0ccfbb86bca316840dbe0854505f83695579ec1bee42418693110f4c0->leave($__internal_03ca38f0ccfbb86bca316840dbe0854505f83695579ec1bee42418693110f4c0_prof);

        
        $__internal_4aec1f003731e3775568286da40be3efecdbb2f62d8141251571414ffaa0d5ab->leave($__internal_4aec1f003731e3775568286da40be3efecdbb2f62d8141251571414ffaa0d5ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
