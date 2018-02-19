<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d2aa0aff61a453fbc9f463562b398a4a6447b6f1b801d4ceff8a564d1b1b9b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4393aec5577368a9a54d61824424c31fae6de33e24cc775246d4ff94be985bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4393aec5577368a9a54d61824424c31fae6de33e24cc775246d4ff94be985bab->enter($__internal_4393aec5577368a9a54d61824424c31fae6de33e24cc775246d4ff94be985bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_36183cd456aa0ac13130dc145f4783c7afd581dbf7a222a651825651c0e676d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36183cd456aa0ac13130dc145f4783c7afd581dbf7a222a651825651c0e676d8->enter($__internal_36183cd456aa0ac13130dc145f4783c7afd581dbf7a222a651825651c0e676d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4393aec5577368a9a54d61824424c31fae6de33e24cc775246d4ff94be985bab->leave($__internal_4393aec5577368a9a54d61824424c31fae6de33e24cc775246d4ff94be985bab_prof);

        
        $__internal_36183cd456aa0ac13130dc145f4783c7afd581dbf7a222a651825651c0e676d8->leave($__internal_36183cd456aa0ac13130dc145f4783c7afd581dbf7a222a651825651c0e676d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_722c58feea1e582a881aa0b5051428986158d3b9ca272bcc2fee09bbb5a0fcd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722c58feea1e582a881aa0b5051428986158d3b9ca272bcc2fee09bbb5a0fcd4->enter($__internal_722c58feea1e582a881aa0b5051428986158d3b9ca272bcc2fee09bbb5a0fcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd45fc0838a3f7247e4248135e578f5db9e18de9cc17e43ab385b8fca59225f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd45fc0838a3f7247e4248135e578f5db9e18de9cc17e43ab385b8fca59225f1->enter($__internal_cd45fc0838a3f7247e4248135e578f5db9e18de9cc17e43ab385b8fca59225f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cd45fc0838a3f7247e4248135e578f5db9e18de9cc17e43ab385b8fca59225f1->leave($__internal_cd45fc0838a3f7247e4248135e578f5db9e18de9cc17e43ab385b8fca59225f1_prof);

        
        $__internal_722c58feea1e582a881aa0b5051428986158d3b9ca272bcc2fee09bbb5a0fcd4->leave($__internal_722c58feea1e582a881aa0b5051428986158d3b9ca272bcc2fee09bbb5a0fcd4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17ef200ae97dff01dec594409388272e2c231b42bc397188df4112a255c70572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ef200ae97dff01dec594409388272e2c231b42bc397188df4112a255c70572->enter($__internal_17ef200ae97dff01dec594409388272e2c231b42bc397188df4112a255c70572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ff91e65c38b57c0972fcc98cf604b93f20358b1eb803a301244c04286ec19a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff91e65c38b57c0972fcc98cf604b93f20358b1eb803a301244c04286ec19a71->enter($__internal_ff91e65c38b57c0972fcc98cf604b93f20358b1eb803a301244c04286ec19a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ff91e65c38b57c0972fcc98cf604b93f20358b1eb803a301244c04286ec19a71->leave($__internal_ff91e65c38b57c0972fcc98cf604b93f20358b1eb803a301244c04286ec19a71_prof);

        
        $__internal_17ef200ae97dff01dec594409388272e2c231b42bc397188df4112a255c70572->leave($__internal_17ef200ae97dff01dec594409388272e2c231b42bc397188df4112a255c70572_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cd17e3865d08d857ca07db80d8408e2e89d561ab497600d245eab2602a6ad8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd17e3865d08d857ca07db80d8408e2e89d561ab497600d245eab2602a6ad8a->enter($__internal_1cd17e3865d08d857ca07db80d8408e2e89d561ab497600d245eab2602a6ad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f04f52635ca485f449f60de87c101c2720386953b12c1eb738dfa88b1a86ee6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04f52635ca485f449f60de87c101c2720386953b12c1eb738dfa88b1a86ee6e->enter($__internal_f04f52635ca485f449f60de87c101c2720386953b12c1eb738dfa88b1a86ee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f04f52635ca485f449f60de87c101c2720386953b12c1eb738dfa88b1a86ee6e->leave($__internal_f04f52635ca485f449f60de87c101c2720386953b12c1eb738dfa88b1a86ee6e_prof);

        
        $__internal_1cd17e3865d08d857ca07db80d8408e2e89d561ab497600d245eab2602a6ad8a->leave($__internal_1cd17e3865d08d857ca07db80d8408e2e89d561ab497600d245eab2602a6ad8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
