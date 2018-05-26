<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1af559323277e9570f7752e06a126597c735e94dc61e31e7f13b03ae06bd2e1e extends Twig_Template
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
        $__internal_10bdb76b23c60b76befe414ff109fe692a6ebefb3fc0d514815ef5f444363590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10bdb76b23c60b76befe414ff109fe692a6ebefb3fc0d514815ef5f444363590->enter($__internal_10bdb76b23c60b76befe414ff109fe692a6ebefb3fc0d514815ef5f444363590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4cab9b79dff67db8b2ed2c485f573f2bad5a4e732a2ba2e1fc270640a4a11cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cab9b79dff67db8b2ed2c485f573f2bad5a4e732a2ba2e1fc270640a4a11cd3->enter($__internal_4cab9b79dff67db8b2ed2c485f573f2bad5a4e732a2ba2e1fc270640a4a11cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_10bdb76b23c60b76befe414ff109fe692a6ebefb3fc0d514815ef5f444363590->leave($__internal_10bdb76b23c60b76befe414ff109fe692a6ebefb3fc0d514815ef5f444363590_prof);

        
        $__internal_4cab9b79dff67db8b2ed2c485f573f2bad5a4e732a2ba2e1fc270640a4a11cd3->leave($__internal_4cab9b79dff67db8b2ed2c485f573f2bad5a4e732a2ba2e1fc270640a4a11cd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
