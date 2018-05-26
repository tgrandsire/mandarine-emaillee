<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a18e84c4e60c39c70983f311e0f2aee5e3587da55466c9a8d18e243afd25b108 extends Twig_Template
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
        $__internal_02a5ade7c75d66425e2cd6aeabe5c0910008cb6ac537fd7821fb9486c1170a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a5ade7c75d66425e2cd6aeabe5c0910008cb6ac537fd7821fb9486c1170a72->enter($__internal_02a5ade7c75d66425e2cd6aeabe5c0910008cb6ac537fd7821fb9486c1170a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_51c0349989b604ca1c92062fb7398e1f681fec103d217b49d3644dd222f84885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c0349989b604ca1c92062fb7398e1f681fec103d217b49d3644dd222f84885->enter($__internal_51c0349989b604ca1c92062fb7398e1f681fec103d217b49d3644dd222f84885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_02a5ade7c75d66425e2cd6aeabe5c0910008cb6ac537fd7821fb9486c1170a72->leave($__internal_02a5ade7c75d66425e2cd6aeabe5c0910008cb6ac537fd7821fb9486c1170a72_prof);

        
        $__internal_51c0349989b604ca1c92062fb7398e1f681fec103d217b49d3644dd222f84885->leave($__internal_51c0349989b604ca1c92062fb7398e1f681fec103d217b49d3644dd222f84885_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
