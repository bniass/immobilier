<?php

/* ::base.html.twig */
class __TwigTemplate_b63db24ecdede5eeefaaf6b1db33c213c532911e4bf501bdae269fb24a5470bc extends Twig_Template
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
        $__internal_e32e2aeca09541aeaef58fdde7ce5d8751653a390a1e1dbf263c5a40f1d28457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32e2aeca09541aeaef58fdde7ce5d8751653a390a1e1dbf263c5a40f1d28457->enter($__internal_e32e2aeca09541aeaef58fdde7ce5d8751653a390a1e1dbf263c5a40f1d28457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b23fe7987e210b9cb7420ea78f112175706db630cdcfa5c044209e5f615ba234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23fe7987e210b9cb7420ea78f112175706db630cdcfa5c044209e5f615ba234->enter($__internal_b23fe7987e210b9cb7420ea78f112175706db630cdcfa5c044209e5f615ba234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e32e2aeca09541aeaef58fdde7ce5d8751653a390a1e1dbf263c5a40f1d28457->leave($__internal_e32e2aeca09541aeaef58fdde7ce5d8751653a390a1e1dbf263c5a40f1d28457_prof);

        
        $__internal_b23fe7987e210b9cb7420ea78f112175706db630cdcfa5c044209e5f615ba234->leave($__internal_b23fe7987e210b9cb7420ea78f112175706db630cdcfa5c044209e5f615ba234_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7db2a9c68ca1351c4bb6ee6f74a2c8859b8de70f781c9a82b13e3478035e2a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db2a9c68ca1351c4bb6ee6f74a2c8859b8de70f781c9a82b13e3478035e2a15->enter($__internal_7db2a9c68ca1351c4bb6ee6f74a2c8859b8de70f781c9a82b13e3478035e2a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7dc5a182ba3ef238ec22b4e9aea8b9ed9370936d6ee77c31ef420887f9a21a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc5a182ba3ef238ec22b4e9aea8b9ed9370936d6ee77c31ef420887f9a21a51->enter($__internal_7dc5a182ba3ef238ec22b4e9aea8b9ed9370936d6ee77c31ef420887f9a21a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7dc5a182ba3ef238ec22b4e9aea8b9ed9370936d6ee77c31ef420887f9a21a51->leave($__internal_7dc5a182ba3ef238ec22b4e9aea8b9ed9370936d6ee77c31ef420887f9a21a51_prof);

        
        $__internal_7db2a9c68ca1351c4bb6ee6f74a2c8859b8de70f781c9a82b13e3478035e2a15->leave($__internal_7db2a9c68ca1351c4bb6ee6f74a2c8859b8de70f781c9a82b13e3478035e2a15_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f11037f629449b920ed2701b89644afb58ef6e33159fef295bf3da99eb3b1456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11037f629449b920ed2701b89644afb58ef6e33159fef295bf3da99eb3b1456->enter($__internal_f11037f629449b920ed2701b89644afb58ef6e33159fef295bf3da99eb3b1456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_08d47b0b96f490bbbb480dc57fd48f0eda6ac7df4da4baee3389d66412906102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d47b0b96f490bbbb480dc57fd48f0eda6ac7df4da4baee3389d66412906102->enter($__internal_08d47b0b96f490bbbb480dc57fd48f0eda6ac7df4da4baee3389d66412906102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_08d47b0b96f490bbbb480dc57fd48f0eda6ac7df4da4baee3389d66412906102->leave($__internal_08d47b0b96f490bbbb480dc57fd48f0eda6ac7df4da4baee3389d66412906102_prof);

        
        $__internal_f11037f629449b920ed2701b89644afb58ef6e33159fef295bf3da99eb3b1456->leave($__internal_f11037f629449b920ed2701b89644afb58ef6e33159fef295bf3da99eb3b1456_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_31be7ad2802cec010c7c107220b67e196512d75fab95643d58640243bbbbbc11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31be7ad2802cec010c7c107220b67e196512d75fab95643d58640243bbbbbc11->enter($__internal_31be7ad2802cec010c7c107220b67e196512d75fab95643d58640243bbbbbc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fc64537fc06170c2195082fbb81d827ede10d815b5e9e93fe6e643d7c6170d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc64537fc06170c2195082fbb81d827ede10d815b5e9e93fe6e643d7c6170d1->enter($__internal_5fc64537fc06170c2195082fbb81d827ede10d815b5e9e93fe6e643d7c6170d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5fc64537fc06170c2195082fbb81d827ede10d815b5e9e93fe6e643d7c6170d1->leave($__internal_5fc64537fc06170c2195082fbb81d827ede10d815b5e9e93fe6e643d7c6170d1_prof);

        
        $__internal_31be7ad2802cec010c7c107220b67e196512d75fab95643d58640243bbbbbc11->leave($__internal_31be7ad2802cec010c7c107220b67e196512d75fab95643d58640243bbbbbc11_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff4b5b31c13c29c97a6ac43eed90736bc1a0946fee4c33aca0303c6ecd4bb4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4b5b31c13c29c97a6ac43eed90736bc1a0946fee4c33aca0303c6ecd4bb4db->enter($__internal_ff4b5b31c13c29c97a6ac43eed90736bc1a0946fee4c33aca0303c6ecd4bb4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9a6b709aaab5bebeb847179fd3acc6efd6a28c89596d038d73f05ded90c40ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6b709aaab5bebeb847179fd3acc6efd6a28c89596d038d73f05ded90c40ddf->enter($__internal_9a6b709aaab5bebeb847179fd3acc6efd6a28c89596d038d73f05ded90c40ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9a6b709aaab5bebeb847179fd3acc6efd6a28c89596d038d73f05ded90c40ddf->leave($__internal_9a6b709aaab5bebeb847179fd3acc6efd6a28c89596d038d73f05ded90c40ddf_prof);

        
        $__internal_ff4b5b31c13c29c97a6ac43eed90736bc1a0946fee4c33aca0303c6ecd4bb4db->leave($__internal_ff4b5b31c13c29c97a6ac43eed90736bc1a0946fee4c33aca0303c6ecd4bb4db_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/var/www/html/immobilier/app/Resources/views/base.html.twig");
    }
}
