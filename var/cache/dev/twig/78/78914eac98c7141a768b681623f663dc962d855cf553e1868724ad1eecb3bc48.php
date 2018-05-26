<?php

/* base.html.twig */
class __TwigTemplate_98fd8d8e6e324dc9ee7caddfa7e16dc93f93e00c5c9b2f4d0496a2e1ffaa4780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e49299719ca98454bfbdf41998a024d8676b77dfa89bc2f3c7ce1363672877f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49299719ca98454bfbdf41998a024d8676b77dfa89bc2f3c7ce1363672877f8->enter($__internal_e49299719ca98454bfbdf41998a024d8676b77dfa89bc2f3c7ce1363672877f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7cf1af48ea29db02cd432aa509f717fda867ba9066ed2608fa64df09d6e7b8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf1af48ea29db02cd432aa509f717fda867ba9066ed2608fa64df09d6e7b8ad->enter($__internal_7cf1af48ea29db02cd432aa509f717fda867ba9066ed2608fa64df09d6e7b8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e49299719ca98454bfbdf41998a024d8676b77dfa89bc2f3c7ce1363672877f8->leave($__internal_e49299719ca98454bfbdf41998a024d8676b77dfa89bc2f3c7ce1363672877f8_prof);

        
        $__internal_7cf1af48ea29db02cd432aa509f717fda867ba9066ed2608fa64df09d6e7b8ad->leave($__internal_7cf1af48ea29db02cd432aa509f717fda867ba9066ed2608fa64df09d6e7b8ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb92202b59fb39f82f62d878a94e43ad0d50f080b23ba39a08841fc54adad1a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb92202b59fb39f82f62d878a94e43ad0d50f080b23ba39a08841fc54adad1a3->enter($__internal_bb92202b59fb39f82f62d878a94e43ad0d50f080b23ba39a08841fc54adad1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f09cd00e6655f46e9fc5f3e019f6c26c87d7869d8e1a4b1f54bd5bc19f7e0201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09cd00e6655f46e9fc5f3e019f6c26c87d7869d8e1a4b1f54bd5bc19f7e0201->enter($__internal_f09cd00e6655f46e9fc5f3e019f6c26c87d7869d8e1a4b1f54bd5bc19f7e0201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f09cd00e6655f46e9fc5f3e019f6c26c87d7869d8e1a4b1f54bd5bc19f7e0201->leave($__internal_f09cd00e6655f46e9fc5f3e019f6c26c87d7869d8e1a4b1f54bd5bc19f7e0201_prof);

        
        $__internal_bb92202b59fb39f82f62d878a94e43ad0d50f080b23ba39a08841fc54adad1a3->leave($__internal_bb92202b59fb39f82f62d878a94e43ad0d50f080b23ba39a08841fc54adad1a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9bb625eed10bc8389ac8cb6a0da4358920c704e09d234844da4622ca6fb0d75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb625eed10bc8389ac8cb6a0da4358920c704e09d234844da4622ca6fb0d75d->enter($__internal_9bb625eed10bc8389ac8cb6a0da4358920c704e09d234844da4622ca6fb0d75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e8c5fb2ed1d2e6a8b2cdc4722f71966b89e5b68e6df77b49e7685f5bb5163cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c5fb2ed1d2e6a8b2cdc4722f71966b89e5b68e6df77b49e7685f5bb5163cd8->enter($__internal_e8c5fb2ed1d2e6a8b2cdc4722f71966b89e5b68e6df77b49e7685f5bb5163cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8c5fb2ed1d2e6a8b2cdc4722f71966b89e5b68e6df77b49e7685f5bb5163cd8->leave($__internal_e8c5fb2ed1d2e6a8b2cdc4722f71966b89e5b68e6df77b49e7685f5bb5163cd8_prof);

        
        $__internal_9bb625eed10bc8389ac8cb6a0da4358920c704e09d234844da4622ca6fb0d75d->leave($__internal_9bb625eed10bc8389ac8cb6a0da4358920c704e09d234844da4622ca6fb0d75d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_47ae80556ec35dab909d9a07a087b8a1f43311a41382e29553d27866de750134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ae80556ec35dab909d9a07a087b8a1f43311a41382e29553d27866de750134->enter($__internal_47ae80556ec35dab909d9a07a087b8a1f43311a41382e29553d27866de750134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c98f0536113a1cefd02b8f1ed4e6277ea8a74a75fdf7e36806e71ea16c51a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c98f0536113a1cefd02b8f1ed4e6277ea8a74a75fdf7e36806e71ea16c51a34->enter($__internal_7c98f0536113a1cefd02b8f1ed4e6277ea8a74a75fdf7e36806e71ea16c51a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c98f0536113a1cefd02b8f1ed4e6277ea8a74a75fdf7e36806e71ea16c51a34->leave($__internal_7c98f0536113a1cefd02b8f1ed4e6277ea8a74a75fdf7e36806e71ea16c51a34_prof);

        
        $__internal_47ae80556ec35dab909d9a07a087b8a1f43311a41382e29553d27866de750134->leave($__internal_47ae80556ec35dab909d9a07a087b8a1f43311a41382e29553d27866de750134_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f0678df862095548ec2fbb3652be63deaa263317cd7da5d323ec49323359188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0678df862095548ec2fbb3652be63deaa263317cd7da5d323ec49323359188->enter($__internal_0f0678df862095548ec2fbb3652be63deaa263317cd7da5d323ec49323359188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c9287e612d84dc769d45f4f04e206679bdc093d203658238fb5907b30d41f8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9287e612d84dc769d45f4f04e206679bdc093d203658238fb5907b30d41f8f3->enter($__internal_c9287e612d84dc769d45f4f04e206679bdc093d203658238fb5907b30d41f8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c9287e612d84dc769d45f4f04e206679bdc093d203658238fb5907b30d41f8f3->leave($__internal_c9287e612d84dc769d45f4f04e206679bdc093d203658238fb5907b30d41f8f3_prof);

        
        $__internal_0f0678df862095548ec2fbb3652be63deaa263317cd7da5d323ec49323359188->leave($__internal_0f0678df862095548ec2fbb3652be63deaa263317cd7da5d323ec49323359188_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/teddy/projects/grandsire/app/Resources/views/base.html.twig");
    }
}
