<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_2186715a1c833521c34713b549403089ac5e30e5543e5631ed98896d48da6d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e5bd5aace9040ee0154c01e5020d1ad0c7857f0fe65248d10726edc5a593706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5bd5aace9040ee0154c01e5020d1ad0c7857f0fe65248d10726edc5a593706->enter($__internal_3e5bd5aace9040ee0154c01e5020d1ad0c7857f0fe65248d10726edc5a593706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_d53c578085d974bcf70a5b28da63cc5751ba1fe546ba7ddd70fe89dfb91a2704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53c578085d974bcf70a5b28da63cc5751ba1fe546ba7ddd70fe89dfb91a2704->enter($__internal_d53c578085d974bcf70a5b28da63cc5751ba1fe546ba7ddd70fe89dfb91a2704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3e5bd5aace9040ee0154c01e5020d1ad0c7857f0fe65248d10726edc5a593706->leave($__internal_3e5bd5aace9040ee0154c01e5020d1ad0c7857f0fe65248d10726edc5a593706_prof);

        
        $__internal_d53c578085d974bcf70a5b28da63cc5751ba1fe546ba7ddd70fe89dfb91a2704->leave($__internal_d53c578085d974bcf70a5b28da63cc5751ba1fe546ba7ddd70fe89dfb91a2704_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f66982f2ccc30a2822897702adbe103033d535d766484603edda5a776e05b770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66982f2ccc30a2822897702adbe103033d535d766484603edda5a776e05b770->enter($__internal_f66982f2ccc30a2822897702adbe103033d535d766484603edda5a776e05b770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96673d5361a4f3883439e09db523d9e1513f28754ec5807e504bf569b8892a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96673d5361a4f3883439e09db523d9e1513f28754ec5807e504bf569b8892a15->enter($__internal_96673d5361a4f3883439e09db523d9e1513f28754ec5807e504bf569b8892a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_96673d5361a4f3883439e09db523d9e1513f28754ec5807e504bf569b8892a15->leave($__internal_96673d5361a4f3883439e09db523d9e1513f28754ec5807e504bf569b8892a15_prof);

        
        $__internal_f66982f2ccc30a2822897702adbe103033d535d766484603edda5a776e05b770->leave($__internal_f66982f2ccc30a2822897702adbe103033d535d766484603edda5a776e05b770_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_21d25631dafceea27ddd7627e9b629fb650edc553a1fc62ec92784aed17563bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d25631dafceea27ddd7627e9b629fb650edc553a1fc62ec92784aed17563bb->enter($__internal_21d25631dafceea27ddd7627e9b629fb650edc553a1fc62ec92784aed17563bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18d43dc0913c3287775dbf5d06819b5feaa8e2c5900d3a7fb86859024fea1ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d43dc0913c3287775dbf5d06819b5feaa8e2c5900d3a7fb86859024fea1ff9->enter($__internal_18d43dc0913c3287775dbf5d06819b5feaa8e2c5900d3a7fb86859024fea1ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_18d43dc0913c3287775dbf5d06819b5feaa8e2c5900d3a7fb86859024fea1ff9->leave($__internal_18d43dc0913c3287775dbf5d06819b5feaa8e2c5900d3a7fb86859024fea1ff9_prof);

        
        $__internal_21d25631dafceea27ddd7627e9b629fb650edc553a1fc62ec92784aed17563bb->leave($__internal_21d25631dafceea27ddd7627e9b629fb650edc553a1fc62ec92784aed17563bb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e31b6946f65b256d836e304031e2896bad9536e9eb7dc3a97abc53081cdfb24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e31b6946f65b256d836e304031e2896bad9536e9eb7dc3a97abc53081cdfb24->enter($__internal_1e31b6946f65b256d836e304031e2896bad9536e9eb7dc3a97abc53081cdfb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cee4f701c0f26323b590ef554f5fcee0529cfbab665744b780c303fca614fc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee4f701c0f26323b590ef554f5fcee0529cfbab665744b780c303fca614fc3e->enter($__internal_cee4f701c0f26323b590ef554f5fcee0529cfbab665744b780c303fca614fc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cee4f701c0f26323b590ef554f5fcee0529cfbab665744b780c303fca614fc3e->leave($__internal_cee4f701c0f26323b590ef554f5fcee0529cfbab665744b780c303fca614fc3e_prof);

        
        $__internal_1e31b6946f65b256d836e304031e2896bad9536e9eb7dc3a97abc53081cdfb24->leave($__internal_1e31b6946f65b256d836e304031e2896bad9536e9eb7dc3a97abc53081cdfb24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/home/teddy/projects/grandsire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
