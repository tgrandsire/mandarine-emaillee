<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_12885d79bf8f86461582fa70a75a2cfc7b59f7ce1717f2c101287ccd6a8c75d5 extends Twig_Template
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
        $__internal_095bfe1746aba4e2c617106a552ec8e11193baa96745d880239431252cfae977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095bfe1746aba4e2c617106a552ec8e11193baa96745d880239431252cfae977->enter($__internal_095bfe1746aba4e2c617106a552ec8e11193baa96745d880239431252cfae977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_91336b4e8cba871e70a554b2f6091d1739ab589b3a6da53018e234c210c56d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91336b4e8cba871e70a554b2f6091d1739ab589b3a6da53018e234c210c56d62->enter($__internal_91336b4e8cba871e70a554b2f6091d1739ab589b3a6da53018e234c210c56d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_095bfe1746aba4e2c617106a552ec8e11193baa96745d880239431252cfae977->leave($__internal_095bfe1746aba4e2c617106a552ec8e11193baa96745d880239431252cfae977_prof);

        
        $__internal_91336b4e8cba871e70a554b2f6091d1739ab589b3a6da53018e234c210c56d62->leave($__internal_91336b4e8cba871e70a554b2f6091d1739ab589b3a6da53018e234c210c56d62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
