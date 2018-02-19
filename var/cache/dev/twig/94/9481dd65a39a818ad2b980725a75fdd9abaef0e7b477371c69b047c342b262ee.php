<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d51aece742432dc0a51a48aeb8da8275f807e6d04d6caf8f296a8adf877ae954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1347c463482c65c3ee8186d00b222cbc84e1c5292f78a8100728e5617d1ac21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1347c463482c65c3ee8186d00b222cbc84e1c5292f78a8100728e5617d1ac21->enter($__internal_d1347c463482c65c3ee8186d00b222cbc84e1c5292f78a8100728e5617d1ac21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8a151c6dc3832efbf512a6269464cab3b02a6f91b164012bbc73cbe52ce3f5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a151c6dc3832efbf512a6269464cab3b02a6f91b164012bbc73cbe52ce3f5c8->enter($__internal_8a151c6dc3832efbf512a6269464cab3b02a6f91b164012bbc73cbe52ce3f5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1347c463482c65c3ee8186d00b222cbc84e1c5292f78a8100728e5617d1ac21->leave($__internal_d1347c463482c65c3ee8186d00b222cbc84e1c5292f78a8100728e5617d1ac21_prof);

        
        $__internal_8a151c6dc3832efbf512a6269464cab3b02a6f91b164012bbc73cbe52ce3f5c8->leave($__internal_8a151c6dc3832efbf512a6269464cab3b02a6f91b164012bbc73cbe52ce3f5c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a873713a4db8c3e431d6277f447dfe82df83671911ec6df6b1e2f1299847061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a873713a4db8c3e431d6277f447dfe82df83671911ec6df6b1e2f1299847061->enter($__internal_2a873713a4db8c3e431d6277f447dfe82df83671911ec6df6b1e2f1299847061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_590bc04ac6111dddb7a855efdcffba7c5cf3184db6950ccb5edbb67c8232f828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590bc04ac6111dddb7a855efdcffba7c5cf3184db6950ccb5edbb67c8232f828->enter($__internal_590bc04ac6111dddb7a855efdcffba7c5cf3184db6950ccb5edbb67c8232f828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_590bc04ac6111dddb7a855efdcffba7c5cf3184db6950ccb5edbb67c8232f828->leave($__internal_590bc04ac6111dddb7a855efdcffba7c5cf3184db6950ccb5edbb67c8232f828_prof);

        
        $__internal_2a873713a4db8c3e431d6277f447dfe82df83671911ec6df6b1e2f1299847061->leave($__internal_2a873713a4db8c3e431d6277f447dfe82df83671911ec6df6b1e2f1299847061_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64bd28f0d575a98574abb72041b682b7863e395517cab636170627b1cc435e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64bd28f0d575a98574abb72041b682b7863e395517cab636170627b1cc435e49->enter($__internal_64bd28f0d575a98574abb72041b682b7863e395517cab636170627b1cc435e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d1118924b1134c49d5cb4540f381bcd4096b17ae9304e9b00fd9bd66a9d3f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1118924b1134c49d5cb4540f381bcd4096b17ae9304e9b00fd9bd66a9d3f97->enter($__internal_5d1118924b1134c49d5cb4540f381bcd4096b17ae9304e9b00fd9bd66a9d3f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d1118924b1134c49d5cb4540f381bcd4096b17ae9304e9b00fd9bd66a9d3f97->leave($__internal_5d1118924b1134c49d5cb4540f381bcd4096b17ae9304e9b00fd9bd66a9d3f97_prof);

        
        $__internal_64bd28f0d575a98574abb72041b682b7863e395517cab636170627b1cc435e49->leave($__internal_64bd28f0d575a98574abb72041b682b7863e395517cab636170627b1cc435e49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_196d17166dc9392cfd566743e73cf0886e7bc8975a4620899e20e12b0860d98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196d17166dc9392cfd566743e73cf0886e7bc8975a4620899e20e12b0860d98c->enter($__internal_196d17166dc9392cfd566743e73cf0886e7bc8975a4620899e20e12b0860d98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11aec1f90ff3f0e79ffc91949e203539521f141ab911cd91aa69e7dd86515e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11aec1f90ff3f0e79ffc91949e203539521f141ab911cd91aa69e7dd86515e0d->enter($__internal_11aec1f90ff3f0e79ffc91949e203539521f141ab911cd91aa69e7dd86515e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_11aec1f90ff3f0e79ffc91949e203539521f141ab911cd91aa69e7dd86515e0d->leave($__internal_11aec1f90ff3f0e79ffc91949e203539521f141ab911cd91aa69e7dd86515e0d_prof);

        
        $__internal_196d17166dc9392cfd566743e73cf0886e7bc8975a4620899e20e12b0860d98c->leave($__internal_196d17166dc9392cfd566743e73cf0886e7bc8975a4620899e20e12b0860d98c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
