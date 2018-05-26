<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c1947605988e80cc843b37856f87a454efd0bf4e8265e39c7077981a7c6c499b extends Twig_Template
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
        $__internal_0ce91f1f604b99bdbb1872ed7b1e07af291ad8ed88e07fbe104f490a5aff4453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ce91f1f604b99bdbb1872ed7b1e07af291ad8ed88e07fbe104f490a5aff4453->enter($__internal_0ce91f1f604b99bdbb1872ed7b1e07af291ad8ed88e07fbe104f490a5aff4453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b2b53a7dff1ade8c66f8fc87026eaa721c9a0b6d63fdd856021e0809a778ee7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b53a7dff1ade8c66f8fc87026eaa721c9a0b6d63fdd856021e0809a778ee7a->enter($__internal_b2b53a7dff1ade8c66f8fc87026eaa721c9a0b6d63fdd856021e0809a778ee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0ce91f1f604b99bdbb1872ed7b1e07af291ad8ed88e07fbe104f490a5aff4453->leave($__internal_0ce91f1f604b99bdbb1872ed7b1e07af291ad8ed88e07fbe104f490a5aff4453_prof);

        
        $__internal_b2b53a7dff1ade8c66f8fc87026eaa721c9a0b6d63fdd856021e0809a778ee7a->leave($__internal_b2b53a7dff1ade8c66f8fc87026eaa721c9a0b6d63fdd856021e0809a778ee7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
