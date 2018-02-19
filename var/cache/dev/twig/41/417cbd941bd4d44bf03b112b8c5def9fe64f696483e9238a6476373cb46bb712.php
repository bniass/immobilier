<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2b663556ff72f30322b1b69cdbc9dc83fc3e0cdc43f3a5b1ccf1c8440ed4f2c6 extends Twig_Template
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
        $__internal_333e931f62649f2e0f774850929766697e242427d02332118b5fa0b3162c35bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333e931f62649f2e0f774850929766697e242427d02332118b5fa0b3162c35bb->enter($__internal_333e931f62649f2e0f774850929766697e242427d02332118b5fa0b3162c35bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5d3ca0bc31f76cc3bfad41ba7ca26cb76e11df100842c410170b9d15f2d008c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3ca0bc31f76cc3bfad41ba7ca26cb76e11df100842c410170b9d15f2d008c9->enter($__internal_5d3ca0bc31f76cc3bfad41ba7ca26cb76e11df100842c410170b9d15f2d008c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_333e931f62649f2e0f774850929766697e242427d02332118b5fa0b3162c35bb->leave($__internal_333e931f62649f2e0f774850929766697e242427d02332118b5fa0b3162c35bb_prof);

        
        $__internal_5d3ca0bc31f76cc3bfad41ba7ca26cb76e11df100842c410170b9d15f2d008c9->leave($__internal_5d3ca0bc31f76cc3bfad41ba7ca26cb76e11df100842c410170b9d15f2d008c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33bb53f809a677b469eed509a2e05ec46d338f115c0f015cfd04d0e4082495d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bb53f809a677b469eed509a2e05ec46d338f115c0f015cfd04d0e4082495d0->enter($__internal_33bb53f809a677b469eed509a2e05ec46d338f115c0f015cfd04d0e4082495d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d88c41ad0415292eac23acb1d251b72c93a91fd27fd6937558eee57b34302c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88c41ad0415292eac23acb1d251b72c93a91fd27fd6937558eee57b34302c61->enter($__internal_d88c41ad0415292eac23acb1d251b72c93a91fd27fd6937558eee57b34302c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d88c41ad0415292eac23acb1d251b72c93a91fd27fd6937558eee57b34302c61->leave($__internal_d88c41ad0415292eac23acb1d251b72c93a91fd27fd6937558eee57b34302c61_prof);

        
        $__internal_33bb53f809a677b469eed509a2e05ec46d338f115c0f015cfd04d0e4082495d0->leave($__internal_33bb53f809a677b469eed509a2e05ec46d338f115c0f015cfd04d0e4082495d0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f0f2171ced05407da03e62ea06f2d147b41cd3e9409ee03bcdaa21ef98f2c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0f2171ced05407da03e62ea06f2d147b41cd3e9409ee03bcdaa21ef98f2c40->enter($__internal_9f0f2171ced05407da03e62ea06f2d147b41cd3e9409ee03bcdaa21ef98f2c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c33d6e1db69c63e173c4ac1ba9921501972dbee4590ac1ba9e4f93b6715f21c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33d6e1db69c63e173c4ac1ba9921501972dbee4590ac1ba9e4f93b6715f21c0->enter($__internal_c33d6e1db69c63e173c4ac1ba9921501972dbee4590ac1ba9e4f93b6715f21c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c33d6e1db69c63e173c4ac1ba9921501972dbee4590ac1ba9e4f93b6715f21c0->leave($__internal_c33d6e1db69c63e173c4ac1ba9921501972dbee4590ac1ba9e4f93b6715f21c0_prof);

        
        $__internal_9f0f2171ced05407da03e62ea06f2d147b41cd3e9409ee03bcdaa21ef98f2c40->leave($__internal_9f0f2171ced05407da03e62ea06f2d147b41cd3e9409ee03bcdaa21ef98f2c40_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_074d477d2f781cad50a5b1b250951cf192b16061b13716096b1ef0a8a6d61422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074d477d2f781cad50a5b1b250951cf192b16061b13716096b1ef0a8a6d61422->enter($__internal_074d477d2f781cad50a5b1b250951cf192b16061b13716096b1ef0a8a6d61422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40bd498d50e72a0a306f690a14f59641ed86289561c7ec297e0a2e625be0bc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bd498d50e72a0a306f690a14f59641ed86289561c7ec297e0a2e625be0bc98->enter($__internal_40bd498d50e72a0a306f690a14f59641ed86289561c7ec297e0a2e625be0bc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_40bd498d50e72a0a306f690a14f59641ed86289561c7ec297e0a2e625be0bc98->leave($__internal_40bd498d50e72a0a306f690a14f59641ed86289561c7ec297e0a2e625be0bc98_prof);

        
        $__internal_074d477d2f781cad50a5b1b250951cf192b16061b13716096b1ef0a8a6d61422->leave($__internal_074d477d2f781cad50a5b1b250951cf192b16061b13716096b1ef0a8a6d61422_prof);

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
