<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d541548e7ce92d4b4cc9e8250c0081a7d1124fc05c5b99087b0090b7100febb7 extends Twig_Template
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
        $__internal_1551c371127b02c33a5b14434ff157f7cf0f3791308d05ec5a07bdf2f1de1ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1551c371127b02c33a5b14434ff157f7cf0f3791308d05ec5a07bdf2f1de1ad8->enter($__internal_1551c371127b02c33a5b14434ff157f7cf0f3791308d05ec5a07bdf2f1de1ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b658ef293b7ebd752d556edb6f62e7ccd6e2c6ee4eac77536099540cb1a009f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b658ef293b7ebd752d556edb6f62e7ccd6e2c6ee4eac77536099540cb1a009f9->enter($__internal_b658ef293b7ebd752d556edb6f62e7ccd6e2c6ee4eac77536099540cb1a009f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1551c371127b02c33a5b14434ff157f7cf0f3791308d05ec5a07bdf2f1de1ad8->leave($__internal_1551c371127b02c33a5b14434ff157f7cf0f3791308d05ec5a07bdf2f1de1ad8_prof);

        
        $__internal_b658ef293b7ebd752d556edb6f62e7ccd6e2c6ee4eac77536099540cb1a009f9->leave($__internal_b658ef293b7ebd752d556edb6f62e7ccd6e2c6ee4eac77536099540cb1a009f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
