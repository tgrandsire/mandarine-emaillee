<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_eabf06bd8d49eca85978da4118a8642ad1c7c77918d50b4f8517e5d953099373 extends Twig_Template
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
        $__internal_eb3a7f9634cfad5e46534eaac50df78eede3efede26469ab8d574f7a72537370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3a7f9634cfad5e46534eaac50df78eede3efede26469ab8d574f7a72537370->enter($__internal_eb3a7f9634cfad5e46534eaac50df78eede3efede26469ab8d574f7a72537370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8c5ad0bf4598e59678e005467720c55f6806b52faa508d4edba3ae3c9e3bda7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5ad0bf4598e59678e005467720c55f6806b52faa508d4edba3ae3c9e3bda7a->enter($__internal_8c5ad0bf4598e59678e005467720c55f6806b52faa508d4edba3ae3c9e3bda7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_eb3a7f9634cfad5e46534eaac50df78eede3efede26469ab8d574f7a72537370->leave($__internal_eb3a7f9634cfad5e46534eaac50df78eede3efede26469ab8d574f7a72537370_prof);

        
        $__internal_8c5ad0bf4598e59678e005467720c55f6806b52faa508d4edba3ae3c9e3bda7a->leave($__internal_8c5ad0bf4598e59678e005467720c55f6806b52faa508d4edba3ae3c9e3bda7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
