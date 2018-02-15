<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
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
        $__internal_d37991a26dba2bc3c8e45e864be0f3e0dcd9f40fcf3ddfda00ad1fbd8a1efe6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37991a26dba2bc3c8e45e864be0f3e0dcd9f40fcf3ddfda00ad1fbd8a1efe6d->enter($__internal_d37991a26dba2bc3c8e45e864be0f3e0dcd9f40fcf3ddfda00ad1fbd8a1efe6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b6d8261616a1034a536e717a134ed0cd7aa561b9016484799cedae252b766ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d8261616a1034a536e717a134ed0cd7aa561b9016484799cedae252b766ef9->enter($__internal_b6d8261616a1034a536e717a134ed0cd7aa561b9016484799cedae252b766ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d37991a26dba2bc3c8e45e864be0f3e0dcd9f40fcf3ddfda00ad1fbd8a1efe6d->leave($__internal_d37991a26dba2bc3c8e45e864be0f3e0dcd9f40fcf3ddfda00ad1fbd8a1efe6d_prof);

        
        $__internal_b6d8261616a1034a536e717a134ed0cd7aa561b9016484799cedae252b766ef9->leave($__internal_b6d8261616a1034a536e717a134ed0cd7aa561b9016484799cedae252b766ef9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b29470c38c731dc10786c9424dba3c5a6feb9a18b23ef1eccef7e2f3720e564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b29470c38c731dc10786c9424dba3c5a6feb9a18b23ef1eccef7e2f3720e564->enter($__internal_0b29470c38c731dc10786c9424dba3c5a6feb9a18b23ef1eccef7e2f3720e564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89980e22e5b55f5da05e6414ed436c661d342551e93aed90eecfb2e66939fcee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89980e22e5b55f5da05e6414ed436c661d342551e93aed90eecfb2e66939fcee->enter($__internal_89980e22e5b55f5da05e6414ed436c661d342551e93aed90eecfb2e66939fcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_89980e22e5b55f5da05e6414ed436c661d342551e93aed90eecfb2e66939fcee->leave($__internal_89980e22e5b55f5da05e6414ed436c661d342551e93aed90eecfb2e66939fcee_prof);

        
        $__internal_0b29470c38c731dc10786c9424dba3c5a6feb9a18b23ef1eccef7e2f3720e564->leave($__internal_0b29470c38c731dc10786c9424dba3c5a6feb9a18b23ef1eccef7e2f3720e564_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cda6985fa0e771f7b5586cf416c5e292a93e1c7f5321679fab1919a27fe93e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda6985fa0e771f7b5586cf416c5e292a93e1c7f5321679fab1919a27fe93e69->enter($__internal_cda6985fa0e771f7b5586cf416c5e292a93e1c7f5321679fab1919a27fe93e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2caf13e56e3eeae73d68fc86343b3c5cb1ddb714ff3fa495ea3488128a4af900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2caf13e56e3eeae73d68fc86343b3c5cb1ddb714ff3fa495ea3488128a4af900->enter($__internal_2caf13e56e3eeae73d68fc86343b3c5cb1ddb714ff3fa495ea3488128a4af900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2caf13e56e3eeae73d68fc86343b3c5cb1ddb714ff3fa495ea3488128a4af900->leave($__internal_2caf13e56e3eeae73d68fc86343b3c5cb1ddb714ff3fa495ea3488128a4af900_prof);

        
        $__internal_cda6985fa0e771f7b5586cf416c5e292a93e1c7f5321679fab1919a27fe93e69->leave($__internal_cda6985fa0e771f7b5586cf416c5e292a93e1c7f5321679fab1919a27fe93e69_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_faefd32822854092603847af3286620c5ee115e15915544f326776367d96b0aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faefd32822854092603847af3286620c5ee115e15915544f326776367d96b0aa->enter($__internal_faefd32822854092603847af3286620c5ee115e15915544f326776367d96b0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b02e392495b3ee9510945ecba962def0659187c1d8ebda5eed8b5f64b1057a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b02e392495b3ee9510945ecba962def0659187c1d8ebda5eed8b5f64b1057a2->enter($__internal_5b02e392495b3ee9510945ecba962def0659187c1d8ebda5eed8b5f64b1057a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5b02e392495b3ee9510945ecba962def0659187c1d8ebda5eed8b5f64b1057a2->leave($__internal_5b02e392495b3ee9510945ecba962def0659187c1d8ebda5eed8b5f64b1057a2_prof);

        
        $__internal_faefd32822854092603847af3286620c5ee115e15915544f326776367d96b0aa->leave($__internal_faefd32822854092603847af3286620c5ee115e15915544f326776367d96b0aa_prof);

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
