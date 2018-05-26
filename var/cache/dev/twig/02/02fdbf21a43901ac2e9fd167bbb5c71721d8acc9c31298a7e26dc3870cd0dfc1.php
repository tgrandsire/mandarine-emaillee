<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c33ac96832200f5f10c138dbde44e0ef113b5694799da3639f2a4965079e86eb extends Twig_Template
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
        $__internal_131ef7cb30f081ef3f9aa8992c210ed7cc8050322865b8c80bf80cdca716d561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131ef7cb30f081ef3f9aa8992c210ed7cc8050322865b8c80bf80cdca716d561->enter($__internal_131ef7cb30f081ef3f9aa8992c210ed7cc8050322865b8c80bf80cdca716d561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f773dbc2a1067890c4ba376dbe109a9a832305f917f5e64cfba3a57d4c3f6d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f773dbc2a1067890c4ba376dbe109a9a832305f917f5e64cfba3a57d4c3f6d15->enter($__internal_f773dbc2a1067890c4ba376dbe109a9a832305f917f5e64cfba3a57d4c3f6d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_131ef7cb30f081ef3f9aa8992c210ed7cc8050322865b8c80bf80cdca716d561->leave($__internal_131ef7cb30f081ef3f9aa8992c210ed7cc8050322865b8c80bf80cdca716d561_prof);

        
        $__internal_f773dbc2a1067890c4ba376dbe109a9a832305f917f5e64cfba3a57d4c3f6d15->leave($__internal_f773dbc2a1067890c4ba376dbe109a9a832305f917f5e64cfba3a57d4c3f6d15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
