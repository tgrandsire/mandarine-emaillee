<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_3392e5870b8254331c9eb509c05b6d16daf37f36febb63bbb32c7fabf09a2dda extends Twig_Template
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
        $__internal_2064e37ebc39db25910d9f4f278c24e5ed83397b283ba5a7b9f302e12942d93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2064e37ebc39db25910d9f4f278c24e5ed83397b283ba5a7b9f302e12942d93c->enter($__internal_2064e37ebc39db25910d9f4f278c24e5ed83397b283ba5a7b9f302e12942d93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_8dab933585d5037ca1d8a1f43e9d6a365e4984ad95664a82711fbc7150d2c28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dab933585d5037ca1d8a1f43e9d6a365e4984ad95664a82711fbc7150d2c28b->enter($__internal_8dab933585d5037ca1d8a1f43e9d6a365e4984ad95664a82711fbc7150d2c28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_2064e37ebc39db25910d9f4f278c24e5ed83397b283ba5a7b9f302e12942d93c->leave($__internal_2064e37ebc39db25910d9f4f278c24e5ed83397b283ba5a7b9f302e12942d93c_prof);

        
        $__internal_8dab933585d5037ca1d8a1f43e9d6a365e4984ad95664a82711fbc7150d2c28b->leave($__internal_8dab933585d5037ca1d8a1f43e9d6a365e4984ad95664a82711fbc7150d2c28b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
