<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_026b7e17af8aaea1784865bdf1f738981416282de9c9e76f5c7a67a976c4708f extends Twig_Template
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
        $__internal_71d32d560548d43686846733d39e3f67a32eae3f9f1a9bd23a3f0f63e6221f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d32d560548d43686846733d39e3f67a32eae3f9f1a9bd23a3f0f63e6221f0a->enter($__internal_71d32d560548d43686846733d39e3f67a32eae3f9f1a9bd23a3f0f63e6221f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e05ac812f29eb96d34fb73b13e13760ef99934785aae6b3067137e20d42ec0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05ac812f29eb96d34fb73b13e13760ef99934785aae6b3067137e20d42ec0dc->enter($__internal_e05ac812f29eb96d34fb73b13e13760ef99934785aae6b3067137e20d42ec0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_71d32d560548d43686846733d39e3f67a32eae3f9f1a9bd23a3f0f63e6221f0a->leave($__internal_71d32d560548d43686846733d39e3f67a32eae3f9f1a9bd23a3f0f63e6221f0a_prof);

        
        $__internal_e05ac812f29eb96d34fb73b13e13760ef99934785aae6b3067137e20d42ec0dc->leave($__internal_e05ac812f29eb96d34fb73b13e13760ef99934785aae6b3067137e20d42ec0dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a981a4d965c1b75daa2d01144def050cababb5cf569d08d45cb79b7c42773ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a981a4d965c1b75daa2d01144def050cababb5cf569d08d45cb79b7c42773ef->enter($__internal_1a981a4d965c1b75daa2d01144def050cababb5cf569d08d45cb79b7c42773ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_488eae35061c4e98eab985349ed3ac66b7e24d9dd5d8389181758fcc614108ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488eae35061c4e98eab985349ed3ac66b7e24d9dd5d8389181758fcc614108ea->enter($__internal_488eae35061c4e98eab985349ed3ac66b7e24d9dd5d8389181758fcc614108ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_488eae35061c4e98eab985349ed3ac66b7e24d9dd5d8389181758fcc614108ea->leave($__internal_488eae35061c4e98eab985349ed3ac66b7e24d9dd5d8389181758fcc614108ea_prof);

        
        $__internal_1a981a4d965c1b75daa2d01144def050cababb5cf569d08d45cb79b7c42773ef->leave($__internal_1a981a4d965c1b75daa2d01144def050cababb5cf569d08d45cb79b7c42773ef_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7010fa55bcae72614771e0af81b1eb813ebc0b2363ce2a2c844affda80eece0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7010fa55bcae72614771e0af81b1eb813ebc0b2363ce2a2c844affda80eece0->enter($__internal_c7010fa55bcae72614771e0af81b1eb813ebc0b2363ce2a2c844affda80eece0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e32b502edb597d908254188c10a0d8f0dc1b50eaa273dcf9fea30865a2813e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32b502edb597d908254188c10a0d8f0dc1b50eaa273dcf9fea30865a2813e44->enter($__internal_e32b502edb597d908254188c10a0d8f0dc1b50eaa273dcf9fea30865a2813e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e32b502edb597d908254188c10a0d8f0dc1b50eaa273dcf9fea30865a2813e44->leave($__internal_e32b502edb597d908254188c10a0d8f0dc1b50eaa273dcf9fea30865a2813e44_prof);

        
        $__internal_c7010fa55bcae72614771e0af81b1eb813ebc0b2363ce2a2c844affda80eece0->leave($__internal_c7010fa55bcae72614771e0af81b1eb813ebc0b2363ce2a2c844affda80eece0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd36ee9931efc012dda78e4a298402c9b771cab410dbb9177f981397a08a4df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd36ee9931efc012dda78e4a298402c9b771cab410dbb9177f981397a08a4df8->enter($__internal_dd36ee9931efc012dda78e4a298402c9b771cab410dbb9177f981397a08a4df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca1cf41a46f5a06af48ae603033ee6975abfda5f120e08669d4eb469bbdac30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1cf41a46f5a06af48ae603033ee6975abfda5f120e08669d4eb469bbdac30c->enter($__internal_ca1cf41a46f5a06af48ae603033ee6975abfda5f120e08669d4eb469bbdac30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca1cf41a46f5a06af48ae603033ee6975abfda5f120e08669d4eb469bbdac30c->leave($__internal_ca1cf41a46f5a06af48ae603033ee6975abfda5f120e08669d4eb469bbdac30c_prof);

        
        $__internal_dd36ee9931efc012dda78e4a298402c9b771cab410dbb9177f981397a08a4df8->leave($__internal_dd36ee9931efc012dda78e4a298402c9b771cab410dbb9177f981397a08a4df8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
", "@Twig/layout.html.twig", "/var/www/html/immobilier/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
