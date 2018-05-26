<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1f5c9b731737e1286e49d0c009aa5664bbb72859fa8f926383ba43071a63d7f4 extends Twig_Template
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
        $__internal_8258e9493848352cdef866b19966b873b1a3fcb43844c3eafa94501c8169c717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8258e9493848352cdef866b19966b873b1a3fcb43844c3eafa94501c8169c717->enter($__internal_8258e9493848352cdef866b19966b873b1a3fcb43844c3eafa94501c8169c717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2e4d1455c7af6083b66c0b319bc0f3616458b7c106615345393e69d3ab5d4d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4d1455c7af6083b66c0b319bc0f3616458b7c106615345393e69d3ab5d4d99->enter($__internal_2e4d1455c7af6083b66c0b319bc0f3616458b7c106615345393e69d3ab5d4d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8258e9493848352cdef866b19966b873b1a3fcb43844c3eafa94501c8169c717->leave($__internal_8258e9493848352cdef866b19966b873b1a3fcb43844c3eafa94501c8169c717_prof);

        
        $__internal_2e4d1455c7af6083b66c0b319bc0f3616458b7c106615345393e69d3ab5d4d99->leave($__internal_2e4d1455c7af6083b66c0b319bc0f3616458b7c106615345393e69d3ab5d4d99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
