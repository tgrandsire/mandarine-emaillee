<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d7367268a9964e516605b387a5e1132463d62eea8e91bc6bb76751677a2ef9a6 extends Twig_Template
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
        $__internal_63796af691f3938ca46efb9a55f3e1622517e470a3a52e3e0186ee9a46ca894c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63796af691f3938ca46efb9a55f3e1622517e470a3a52e3e0186ee9a46ca894c->enter($__internal_63796af691f3938ca46efb9a55f3e1622517e470a3a52e3e0186ee9a46ca894c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_cfebe64724e8c2e492c1dd60e830ff20af0c6f1d045e94806335e96a5ea5e098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfebe64724e8c2e492c1dd60e830ff20af0c6f1d045e94806335e96a5ea5e098->enter($__internal_cfebe64724e8c2e492c1dd60e830ff20af0c6f1d045e94806335e96a5ea5e098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_63796af691f3938ca46efb9a55f3e1622517e470a3a52e3e0186ee9a46ca894c->leave($__internal_63796af691f3938ca46efb9a55f3e1622517e470a3a52e3e0186ee9a46ca894c_prof);

        
        $__internal_cfebe64724e8c2e492c1dd60e830ff20af0c6f1d045e94806335e96a5ea5e098->leave($__internal_cfebe64724e8c2e492c1dd60e830ff20af0c6f1d045e94806335e96a5ea5e098_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
