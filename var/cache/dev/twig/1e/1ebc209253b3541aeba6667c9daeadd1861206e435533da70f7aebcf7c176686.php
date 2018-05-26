<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_21ab5402420baf136a5447628b0280dcb30c839f1b91b3b5f23af3ddb82851e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1cc77692109ab33ddc9d7f2998821c6c49391fb49376bd0fbc19a7dc1054fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1cc77692109ab33ddc9d7f2998821c6c49391fb49376bd0fbc19a7dc1054fc6->enter($__internal_c1cc77692109ab33ddc9d7f2998821c6c49391fb49376bd0fbc19a7dc1054fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_59307211a631b72e49b469f488d9c13602832d0845c5be1201ef58615dde9306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59307211a631b72e49b469f488d9c13602832d0845c5be1201ef58615dde9306->enter($__internal_59307211a631b72e49b469f488d9c13602832d0845c5be1201ef58615dde9306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c1cc77692109ab33ddc9d7f2998821c6c49391fb49376bd0fbc19a7dc1054fc6->leave($__internal_c1cc77692109ab33ddc9d7f2998821c6c49391fb49376bd0fbc19a7dc1054fc6_prof);

        
        $__internal_59307211a631b72e49b469f488d9c13602832d0845c5be1201ef58615dde9306->leave($__internal_59307211a631b72e49b469f488d9c13602832d0845c5be1201ef58615dde9306_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_735ae127fd3c69fedfa71ce4634560b0d885510221c2d0feb051af515c2ef137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735ae127fd3c69fedfa71ce4634560b0d885510221c2d0feb051af515c2ef137->enter($__internal_735ae127fd3c69fedfa71ce4634560b0d885510221c2d0feb051af515c2ef137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc8bd842f2d939f782ac5ef955e55e9d5b0d340acf2c1a29da2d4268d2057528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8bd842f2d939f782ac5ef955e55e9d5b0d340acf2c1a29da2d4268d2057528->enter($__internal_dc8bd842f2d939f782ac5ef955e55e9d5b0d340acf2c1a29da2d4268d2057528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dc8bd842f2d939f782ac5ef955e55e9d5b0d340acf2c1a29da2d4268d2057528->leave($__internal_dc8bd842f2d939f782ac5ef955e55e9d5b0d340acf2c1a29da2d4268d2057528_prof);

        
        $__internal_735ae127fd3c69fedfa71ce4634560b0d885510221c2d0feb051af515c2ef137->leave($__internal_735ae127fd3c69fedfa71ce4634560b0d885510221c2d0feb051af515c2ef137_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
