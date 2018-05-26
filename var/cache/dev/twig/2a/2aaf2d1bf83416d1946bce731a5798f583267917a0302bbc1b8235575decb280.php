<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4350bcea21fc968f5d7b770e630353b3a4739bbb3afb23df25a93d09a377840b extends Twig_Template
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
        $__internal_6957637203b5729c274ee64173b0cfc97da50112b6bc3777fc9371dd51d552ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6957637203b5729c274ee64173b0cfc97da50112b6bc3777fc9371dd51d552ed->enter($__internal_6957637203b5729c274ee64173b0cfc97da50112b6bc3777fc9371dd51d552ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_73d6f26e616c1f5581c9f2d41b058cb92ff51c4228606411947fbfe61b54d37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d6f26e616c1f5581c9f2d41b058cb92ff51c4228606411947fbfe61b54d37d->enter($__internal_73d6f26e616c1f5581c9f2d41b058cb92ff51c4228606411947fbfe61b54d37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6957637203b5729c274ee64173b0cfc97da50112b6bc3777fc9371dd51d552ed->leave($__internal_6957637203b5729c274ee64173b0cfc97da50112b6bc3777fc9371dd51d552ed_prof);

        
        $__internal_73d6f26e616c1f5581c9f2d41b058cb92ff51c4228606411947fbfe61b54d37d->leave($__internal_73d6f26e616c1f5581c9f2d41b058cb92ff51c4228606411947fbfe61b54d37d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
