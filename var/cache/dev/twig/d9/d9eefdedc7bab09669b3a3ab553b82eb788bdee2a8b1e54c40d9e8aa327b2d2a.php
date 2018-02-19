<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e1089c99c9b4234d0f062418c78cacf8f403206630cb54535fdbe6dded845f2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ad9865b81c9b63f67c40de81b9adff85610a54c2a6850f2933309a50136d64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad9865b81c9b63f67c40de81b9adff85610a54c2a6850f2933309a50136d64e->enter($__internal_5ad9865b81c9b63f67c40de81b9adff85610a54c2a6850f2933309a50136d64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ea7dbe4c99512115f9cc53c15cbc528b124e8abbb9c2577d9459780bb41d9883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7dbe4c99512115f9cc53c15cbc528b124e8abbb9c2577d9459780bb41d9883->enter($__internal_ea7dbe4c99512115f9cc53c15cbc528b124e8abbb9c2577d9459780bb41d9883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ad9865b81c9b63f67c40de81b9adff85610a54c2a6850f2933309a50136d64e->leave($__internal_5ad9865b81c9b63f67c40de81b9adff85610a54c2a6850f2933309a50136d64e_prof);

        
        $__internal_ea7dbe4c99512115f9cc53c15cbc528b124e8abbb9c2577d9459780bb41d9883->leave($__internal_ea7dbe4c99512115f9cc53c15cbc528b124e8abbb9c2577d9459780bb41d9883_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3aa618054a3a5e8902c3e1c7ebf5519786522d9de71ee764a011effc44b69e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa618054a3a5e8902c3e1c7ebf5519786522d9de71ee764a011effc44b69e42->enter($__internal_3aa618054a3a5e8902c3e1c7ebf5519786522d9de71ee764a011effc44b69e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fda236b8cef07d74e072cfbc169094d35ee9f2c9caf1e4e12d6db77532403eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda236b8cef07d74e072cfbc169094d35ee9f2c9caf1e4e12d6db77532403eee->enter($__internal_fda236b8cef07d74e072cfbc169094d35ee9f2c9caf1e4e12d6db77532403eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fda236b8cef07d74e072cfbc169094d35ee9f2c9caf1e4e12d6db77532403eee->leave($__internal_fda236b8cef07d74e072cfbc169094d35ee9f2c9caf1e4e12d6db77532403eee_prof);

        
        $__internal_3aa618054a3a5e8902c3e1c7ebf5519786522d9de71ee764a011effc44b69e42->leave($__internal_3aa618054a3a5e8902c3e1c7ebf5519786522d9de71ee764a011effc44b69e42_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
