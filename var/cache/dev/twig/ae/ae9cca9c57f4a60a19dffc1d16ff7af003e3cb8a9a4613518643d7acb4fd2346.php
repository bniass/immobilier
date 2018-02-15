<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_454e3f89df2d016fe6428fbb83b64ffd1b7860b099b1b0f87466f8aba1f5c662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454e3f89df2d016fe6428fbb83b64ffd1b7860b099b1b0f87466f8aba1f5c662->enter($__internal_454e3f89df2d016fe6428fbb83b64ffd1b7860b099b1b0f87466f8aba1f5c662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_34b93488b0a4356d7426932a41be4136ac63225eb74607c8e6799dbd42856b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b93488b0a4356d7426932a41be4136ac63225eb74607c8e6799dbd42856b82->enter($__internal_34b93488b0a4356d7426932a41be4136ac63225eb74607c8e6799dbd42856b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454e3f89df2d016fe6428fbb83b64ffd1b7860b099b1b0f87466f8aba1f5c662->leave($__internal_454e3f89df2d016fe6428fbb83b64ffd1b7860b099b1b0f87466f8aba1f5c662_prof);

        
        $__internal_34b93488b0a4356d7426932a41be4136ac63225eb74607c8e6799dbd42856b82->leave($__internal_34b93488b0a4356d7426932a41be4136ac63225eb74607c8e6799dbd42856b82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_72e3b0719800801e9f58f78514de687281d9e28141c4fc56a088f51a3df7a512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e3b0719800801e9f58f78514de687281d9e28141c4fc56a088f51a3df7a512->enter($__internal_72e3b0719800801e9f58f78514de687281d9e28141c4fc56a088f51a3df7a512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f779b811a032cb60318edd87ff8084da31c72d3a3eb4417e21a1fa7328cb45d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f779b811a032cb60318edd87ff8084da31c72d3a3eb4417e21a1fa7328cb45d2->enter($__internal_f779b811a032cb60318edd87ff8084da31c72d3a3eb4417e21a1fa7328cb45d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f779b811a032cb60318edd87ff8084da31c72d3a3eb4417e21a1fa7328cb45d2->leave($__internal_f779b811a032cb60318edd87ff8084da31c72d3a3eb4417e21a1fa7328cb45d2_prof);

        
        $__internal_72e3b0719800801e9f58f78514de687281d9e28141c4fc56a088f51a3df7a512->leave($__internal_72e3b0719800801e9f58f78514de687281d9e28141c4fc56a088f51a3df7a512_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_825428099db66f723c396952e367111566095265568498db1f6661feda81f356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825428099db66f723c396952e367111566095265568498db1f6661feda81f356->enter($__internal_825428099db66f723c396952e367111566095265568498db1f6661feda81f356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4b5c571fb69b6649e6956018fb0fa6ae2fda30b864a49d73a242d6d542d2510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b5c571fb69b6649e6956018fb0fa6ae2fda30b864a49d73a242d6d542d2510->enter($__internal_e4b5c571fb69b6649e6956018fb0fa6ae2fda30b864a49d73a242d6d542d2510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e4b5c571fb69b6649e6956018fb0fa6ae2fda30b864a49d73a242d6d542d2510->leave($__internal_e4b5c571fb69b6649e6956018fb0fa6ae2fda30b864a49d73a242d6d542d2510_prof);

        
        $__internal_825428099db66f723c396952e367111566095265568498db1f6661feda81f356->leave($__internal_825428099db66f723c396952e367111566095265568498db1f6661feda81f356_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_35f5d25d2431fd44ff2ef7f26dfad8120d5ac6de422bbf17349fbfc75adce0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f5d25d2431fd44ff2ef7f26dfad8120d5ac6de422bbf17349fbfc75adce0ee->enter($__internal_35f5d25d2431fd44ff2ef7f26dfad8120d5ac6de422bbf17349fbfc75adce0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fecf9b69eb3d9c0b93204a5b8d8f8a386db15262e3b8b919a55fbf6a093add3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fecf9b69eb3d9c0b93204a5b8d8f8a386db15262e3b8b919a55fbf6a093add3->enter($__internal_3fecf9b69eb3d9c0b93204a5b8d8f8a386db15262e3b8b919a55fbf6a093add3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3fecf9b69eb3d9c0b93204a5b8d8f8a386db15262e3b8b919a55fbf6a093add3->leave($__internal_3fecf9b69eb3d9c0b93204a5b8d8f8a386db15262e3b8b919a55fbf6a093add3_prof);

        
        $__internal_35f5d25d2431fd44ff2ef7f26dfad8120d5ac6de422bbf17349fbfc75adce0ee->leave($__internal_35f5d25d2431fd44ff2ef7f26dfad8120d5ac6de422bbf17349fbfc75adce0ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/immobilier/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
