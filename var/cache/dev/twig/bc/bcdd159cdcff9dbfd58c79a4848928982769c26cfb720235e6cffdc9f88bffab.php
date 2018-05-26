<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ddbfb069b3da3565c2abdf40635fd28a2c1dcb5079e0401b40e1c064e6c655a1 extends Twig_Template
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
        $__internal_c90d85a3945debb85dc0bb64d50f74817910602e30bb74287075914f5353656a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90d85a3945debb85dc0bb64d50f74817910602e30bb74287075914f5353656a->enter($__internal_c90d85a3945debb85dc0bb64d50f74817910602e30bb74287075914f5353656a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4808e1119e19990ce4334d4a9cbd510cffa01cb80f6e17cef2c39e19af7e078f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4808e1119e19990ce4334d4a9cbd510cffa01cb80f6e17cef2c39e19af7e078f->enter($__internal_4808e1119e19990ce4334d4a9cbd510cffa01cb80f6e17cef2c39e19af7e078f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c90d85a3945debb85dc0bb64d50f74817910602e30bb74287075914f5353656a->leave($__internal_c90d85a3945debb85dc0bb64d50f74817910602e30bb74287075914f5353656a_prof);

        
        $__internal_4808e1119e19990ce4334d4a9cbd510cffa01cb80f6e17cef2c39e19af7e078f->leave($__internal_4808e1119e19990ce4334d4a9cbd510cffa01cb80f6e17cef2c39e19af7e078f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
