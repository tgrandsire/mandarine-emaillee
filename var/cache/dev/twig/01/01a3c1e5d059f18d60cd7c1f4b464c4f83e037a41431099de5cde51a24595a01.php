<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_34b7df984e78e1cc0f6bcb484ca248179933abc9b2af19a6d2a1a3c0f9b05f16 extends Twig_Template
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
        $__internal_37c42bb2b23cf38709822b883cc4807280eaefe14ac1aac3dc13e2906dfb300e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c42bb2b23cf38709822b883cc4807280eaefe14ac1aac3dc13e2906dfb300e->enter($__internal_37c42bb2b23cf38709822b883cc4807280eaefe14ac1aac3dc13e2906dfb300e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_572dfb717a8a09229ffa5754ae92ace11b48ed1dab9c8982c7aa5f22e09688d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572dfb717a8a09229ffa5754ae92ace11b48ed1dab9c8982c7aa5f22e09688d6->enter($__internal_572dfb717a8a09229ffa5754ae92ace11b48ed1dab9c8982c7aa5f22e09688d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_37c42bb2b23cf38709822b883cc4807280eaefe14ac1aac3dc13e2906dfb300e->leave($__internal_37c42bb2b23cf38709822b883cc4807280eaefe14ac1aac3dc13e2906dfb300e_prof);

        
        $__internal_572dfb717a8a09229ffa5754ae92ace11b48ed1dab9c8982c7aa5f22e09688d6->leave($__internal_572dfb717a8a09229ffa5754ae92ace11b48ed1dab9c8982c7aa5f22e09688d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
