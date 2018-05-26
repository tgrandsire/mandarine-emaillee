<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d36e2dd68a28ab84f7420662a77122d26c6a97a2507c93b3285e8aaa81e085eb extends Twig_Template
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
        $__internal_f730d336feda93753da648a1597660d86b98d0d2b0bd8880f739949b06969e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f730d336feda93753da648a1597660d86b98d0d2b0bd8880f739949b06969e5a->enter($__internal_f730d336feda93753da648a1597660d86b98d0d2b0bd8880f739949b06969e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_053d6bda717c161e7a3cd2794b8f8c7a3d60867d7cb2b7745d49a629858a7544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053d6bda717c161e7a3cd2794b8f8c7a3d60867d7cb2b7745d49a629858a7544->enter($__internal_053d6bda717c161e7a3cd2794b8f8c7a3d60867d7cb2b7745d49a629858a7544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f730d336feda93753da648a1597660d86b98d0d2b0bd8880f739949b06969e5a->leave($__internal_f730d336feda93753da648a1597660d86b98d0d2b0bd8880f739949b06969e5a_prof);

        
        $__internal_053d6bda717c161e7a3cd2794b8f8c7a3d60867d7cb2b7745d49a629858a7544->leave($__internal_053d6bda717c161e7a3cd2794b8f8c7a3d60867d7cb2b7745d49a629858a7544_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
