<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3c90feb93148de470d090e02da96cda5039c7666ba277f26c376b16d53999a0d extends Twig_Template
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
        $__internal_952a89b6d95c87729d2be096344ea3ef78d85651b54937038c5d7679a7615194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952a89b6d95c87729d2be096344ea3ef78d85651b54937038c5d7679a7615194->enter($__internal_952a89b6d95c87729d2be096344ea3ef78d85651b54937038c5d7679a7615194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b9506839df47ecdb95f4de9479e4fcc3349a8da5e78dd04f82f5fb19162da58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9506839df47ecdb95f4de9479e4fcc3349a8da5e78dd04f82f5fb19162da58a->enter($__internal_b9506839df47ecdb95f4de9479e4fcc3349a8da5e78dd04f82f5fb19162da58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_952a89b6d95c87729d2be096344ea3ef78d85651b54937038c5d7679a7615194->leave($__internal_952a89b6d95c87729d2be096344ea3ef78d85651b54937038c5d7679a7615194_prof);

        
        $__internal_b9506839df47ecdb95f4de9479e4fcc3349a8da5e78dd04f82f5fb19162da58a->leave($__internal_b9506839df47ecdb95f4de9479e4fcc3349a8da5e78dd04f82f5fb19162da58a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
