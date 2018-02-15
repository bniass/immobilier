<?php

/* base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
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
        $__internal_03587de25a183c4cc37c7b6bc8e11382176e0219a2c9fa2d035f2757842e93aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03587de25a183c4cc37c7b6bc8e11382176e0219a2c9fa2d035f2757842e93aa->enter($__internal_03587de25a183c4cc37c7b6bc8e11382176e0219a2c9fa2d035f2757842e93aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b0c8702619830029b4072994f303ec5708d4073c47a9e941dceca92a193b6736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c8702619830029b4072994f303ec5708d4073c47a9e941dceca92a193b6736->enter($__internal_b0c8702619830029b4072994f303ec5708d4073c47a9e941dceca92a193b6736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_03587de25a183c4cc37c7b6bc8e11382176e0219a2c9fa2d035f2757842e93aa->leave($__internal_03587de25a183c4cc37c7b6bc8e11382176e0219a2c9fa2d035f2757842e93aa_prof);

        
        $__internal_b0c8702619830029b4072994f303ec5708d4073c47a9e941dceca92a193b6736->leave($__internal_b0c8702619830029b4072994f303ec5708d4073c47a9e941dceca92a193b6736_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dedc7ac1cfad9e4083f6afa67983de38bdca782f72969ddd8bc95aeff7e0a6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dedc7ac1cfad9e4083f6afa67983de38bdca782f72969ddd8bc95aeff7e0a6db->enter($__internal_dedc7ac1cfad9e4083f6afa67983de38bdca782f72969ddd8bc95aeff7e0a6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c218997e231d396d9a63d5cde2da734872673fa7fbf1112f754470c498bca78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c218997e231d396d9a63d5cde2da734872673fa7fbf1112f754470c498bca78->enter($__internal_1c218997e231d396d9a63d5cde2da734872673fa7fbf1112f754470c498bca78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c218997e231d396d9a63d5cde2da734872673fa7fbf1112f754470c498bca78->leave($__internal_1c218997e231d396d9a63d5cde2da734872673fa7fbf1112f754470c498bca78_prof);

        
        $__internal_dedc7ac1cfad9e4083f6afa67983de38bdca782f72969ddd8bc95aeff7e0a6db->leave($__internal_dedc7ac1cfad9e4083f6afa67983de38bdca782f72969ddd8bc95aeff7e0a6db_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e44436ccadfef4e58e1da7d0b823eb77804121acce5ee50798a3120d2108303d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44436ccadfef4e58e1da7d0b823eb77804121acce5ee50798a3120d2108303d->enter($__internal_e44436ccadfef4e58e1da7d0b823eb77804121acce5ee50798a3120d2108303d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6291aa7b268acf61f3869c96e3bf092e2d7c6cca50c3fde9bb815adf533d07bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6291aa7b268acf61f3869c96e3bf092e2d7c6cca50c3fde9bb815adf533d07bf->enter($__internal_6291aa7b268acf61f3869c96e3bf092e2d7c6cca50c3fde9bb815adf533d07bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6291aa7b268acf61f3869c96e3bf092e2d7c6cca50c3fde9bb815adf533d07bf->leave($__internal_6291aa7b268acf61f3869c96e3bf092e2d7c6cca50c3fde9bb815adf533d07bf_prof);

        
        $__internal_e44436ccadfef4e58e1da7d0b823eb77804121acce5ee50798a3120d2108303d->leave($__internal_e44436ccadfef4e58e1da7d0b823eb77804121acce5ee50798a3120d2108303d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0452846ec7f452d280ccd85e2cda15068c447cd3c2df9232b1315613a31b12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0452846ec7f452d280ccd85e2cda15068c447cd3c2df9232b1315613a31b12b->enter($__internal_e0452846ec7f452d280ccd85e2cda15068c447cd3c2df9232b1315613a31b12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15e6466815e04c9896e648702c69c4fa7d985bb4f017dfeacdd0da6b27ed25c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e6466815e04c9896e648702c69c4fa7d985bb4f017dfeacdd0da6b27ed25c3->enter($__internal_15e6466815e04c9896e648702c69c4fa7d985bb4f017dfeacdd0da6b27ed25c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15e6466815e04c9896e648702c69c4fa7d985bb4f017dfeacdd0da6b27ed25c3->leave($__internal_15e6466815e04c9896e648702c69c4fa7d985bb4f017dfeacdd0da6b27ed25c3_prof);

        
        $__internal_e0452846ec7f452d280ccd85e2cda15068c447cd3c2df9232b1315613a31b12b->leave($__internal_e0452846ec7f452d280ccd85e2cda15068c447cd3c2df9232b1315613a31b12b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_74c0b35953851265f54ac0a28c11d96ed937c1f21ff7e238361db9b47a5b4e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c0b35953851265f54ac0a28c11d96ed937c1f21ff7e238361db9b47a5b4e7c->enter($__internal_74c0b35953851265f54ac0a28c11d96ed937c1f21ff7e238361db9b47a5b4e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e2f6d3f00a0153b56472d074dda9c63bb2ece169fd7fea8fb861ffc801bc539c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f6d3f00a0153b56472d074dda9c63bb2ece169fd7fea8fb861ffc801bc539c->enter($__internal_e2f6d3f00a0153b56472d074dda9c63bb2ece169fd7fea8fb861ffc801bc539c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e2f6d3f00a0153b56472d074dda9c63bb2ece169fd7fea8fb861ffc801bc539c->leave($__internal_e2f6d3f00a0153b56472d074dda9c63bb2ece169fd7fea8fb861ffc801bc539c_prof);

        
        $__internal_74c0b35953851265f54ac0a28c11d96ed937c1f21ff7e238361db9b47a5b4e7c->leave($__internal_74c0b35953851265f54ac0a28c11d96ed937c1f21ff7e238361db9b47a5b4e7c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "base.html.twig", "/var/www/html/immobilier/app/Resources/views/base.html.twig");
    }
}
