<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_e448ed0acb100b69ad3ab16ce4a03415f6e3e356dd04d3b5f13b40b2be3428dc extends Twig_Template
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
        $__internal_be93430d8aca00b872b6f91c46789e43d5c9bf393f8cd83a356852b22d7dda4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be93430d8aca00b872b6f91c46789e43d5c9bf393f8cd83a356852b22d7dda4c->enter($__internal_be93430d8aca00b872b6f91c46789e43d5c9bf393f8cd83a356852b22d7dda4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_8a3b7d0f01ad1ed0bfe05c5e23990d6519d58d97bdba7a3094c9e11e03eff8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3b7d0f01ad1ed0bfe05c5e23990d6519d58d97bdba7a3094c9e11e03eff8ed->enter($__internal_8a3b7d0f01ad1ed0bfe05c5e23990d6519d58d97bdba7a3094c9e11e03eff8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_be93430d8aca00b872b6f91c46789e43d5c9bf393f8cd83a356852b22d7dda4c->leave($__internal_be93430d8aca00b872b6f91c46789e43d5c9bf393f8cd83a356852b22d7dda4c_prof);

        
        $__internal_8a3b7d0f01ad1ed0bfe05c5e23990d6519d58d97bdba7a3094c9e11e03eff8ed->leave($__internal_8a3b7d0f01ad1ed0bfe05c5e23990d6519d58d97bdba7a3094c9e11e03eff8ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
