<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4944bd3db7bde65ce97464d507e700496de24fdcc360ae9773e8237033e4adc6 extends Twig_Template
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
        $__internal_6fb9a2ea19923e2dbc9e16c2e39d4d22a6bdc4a3e6a83d56c8c927d3091e396a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb9a2ea19923e2dbc9e16c2e39d4d22a6bdc4a3e6a83d56c8c927d3091e396a->enter($__internal_6fb9a2ea19923e2dbc9e16c2e39d4d22a6bdc4a3e6a83d56c8c927d3091e396a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e4b974c69f710aaa97540c25c813c34322fb9ddc1a256e04a5b7aff9b3dc2892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b974c69f710aaa97540c25c813c34322fb9ddc1a256e04a5b7aff9b3dc2892->enter($__internal_e4b974c69f710aaa97540c25c813c34322fb9ddc1a256e04a5b7aff9b3dc2892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6fb9a2ea19923e2dbc9e16c2e39d4d22a6bdc4a3e6a83d56c8c927d3091e396a->leave($__internal_6fb9a2ea19923e2dbc9e16c2e39d4d22a6bdc4a3e6a83d56c8c927d3091e396a_prof);

        
        $__internal_e4b974c69f710aaa97540c25c813c34322fb9ddc1a256e04a5b7aff9b3dc2892->leave($__internal_e4b974c69f710aaa97540c25c813c34322fb9ddc1a256e04a5b7aff9b3dc2892_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
