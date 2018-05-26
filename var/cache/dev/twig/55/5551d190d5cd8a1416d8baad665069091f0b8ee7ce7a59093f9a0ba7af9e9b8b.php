<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_22f141747e72e2466eb755a24a841d8bf6ed82322b80cc00fefd0a627c7a65b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bf948df8b7d152eafea332f007994d07fd53c659b8e0e0ecf8fc6339c654443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf948df8b7d152eafea332f007994d07fd53c659b8e0e0ecf8fc6339c654443->enter($__internal_4bf948df8b7d152eafea332f007994d07fd53c659b8e0e0ecf8fc6339c654443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_4b481970c04fadb3e81430e419a55b5d53fd9da0ada1b230b328e09a3cd5b0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b481970c04fadb3e81430e419a55b5d53fd9da0ada1b230b328e09a3cd5b0d7->enter($__internal_4b481970c04fadb3e81430e419a55b5d53fd9da0ada1b230b328e09a3cd5b0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bf948df8b7d152eafea332f007994d07fd53c659b8e0e0ecf8fc6339c654443->leave($__internal_4bf948df8b7d152eafea332f007994d07fd53c659b8e0e0ecf8fc6339c654443_prof);

        
        $__internal_4b481970c04fadb3e81430e419a55b5d53fd9da0ada1b230b328e09a3cd5b0d7->leave($__internal_4b481970c04fadb3e81430e419a55b5d53fd9da0ada1b230b328e09a3cd5b0d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1765348cfd15ed958613d237255af41a50bd95c75c6d745c64b7355aa62489f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1765348cfd15ed958613d237255af41a50bd95c75c6d745c64b7355aa62489f2->enter($__internal_1765348cfd15ed958613d237255af41a50bd95c75c6d745c64b7355aa62489f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b539634f1432dba4cc8cbc819663ea48d6273a52e2d4d95ca0db5d6dd84fa45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b539634f1432dba4cc8cbc819663ea48d6273a52e2d4d95ca0db5d6dd84fa45e->enter($__internal_b539634f1432dba4cc8cbc819663ea48d6273a52e2d4d95ca0db5d6dd84fa45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b539634f1432dba4cc8cbc819663ea48d6273a52e2d4d95ca0db5d6dd84fa45e->leave($__internal_b539634f1432dba4cc8cbc819663ea48d6273a52e2d4d95ca0db5d6dd84fa45e_prof);

        
        $__internal_1765348cfd15ed958613d237255af41a50bd95c75c6d745c64b7355aa62489f2->leave($__internal_1765348cfd15ed958613d237255af41a50bd95c75c6d745c64b7355aa62489f2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4f663e0b1208fb83830658ec9171380d27982123a1cb76ccf67de1a3db2cd37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f663e0b1208fb83830658ec9171380d27982123a1cb76ccf67de1a3db2cd37->enter($__internal_b4f663e0b1208fb83830658ec9171380d27982123a1cb76ccf67de1a3db2cd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e80c2e250c13afc96289649fb28fa541fdac660a7ad4fb915446f5d5bebfeffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80c2e250c13afc96289649fb28fa541fdac660a7ad4fb915446f5d5bebfeffe->enter($__internal_e80c2e250c13afc96289649fb28fa541fdac660a7ad4fb915446f5d5bebfeffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e80c2e250c13afc96289649fb28fa541fdac660a7ad4fb915446f5d5bebfeffe->leave($__internal_e80c2e250c13afc96289649fb28fa541fdac660a7ad4fb915446f5d5bebfeffe_prof);

        
        $__internal_b4f663e0b1208fb83830658ec9171380d27982123a1cb76ccf67de1a3db2cd37->leave($__internal_b4f663e0b1208fb83830658ec9171380d27982123a1cb76ccf67de1a3db2cd37_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b81d5dce48f709559b08bf34c9bef7f8592d73434d69da5f5a34a765f667f0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b81d5dce48f709559b08bf34c9bef7f8592d73434d69da5f5a34a765f667f0c3->enter($__internal_b81d5dce48f709559b08bf34c9bef7f8592d73434d69da5f5a34a765f667f0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91de41c555ab5eb0a93cf866980c690711d30aeee237d6dae4c8962d0976fcfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91de41c555ab5eb0a93cf866980c690711d30aeee237d6dae4c8962d0976fcfc->enter($__internal_91de41c555ab5eb0a93cf866980c690711d30aeee237d6dae4c8962d0976fcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_91de41c555ab5eb0a93cf866980c690711d30aeee237d6dae4c8962d0976fcfc->leave($__internal_91de41c555ab5eb0a93cf866980c690711d30aeee237d6dae4c8962d0976fcfc_prof);

        
        $__internal_b81d5dce48f709559b08bf34c9bef7f8592d73434d69da5f5a34a765f667f0c3->leave($__internal_b81d5dce48f709559b08bf34c9bef7f8592d73434d69da5f5a34a765f667f0c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
