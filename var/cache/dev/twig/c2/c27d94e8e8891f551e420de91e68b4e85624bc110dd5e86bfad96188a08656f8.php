<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
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
        $__internal_deb123a8b49517dcab93d386642401399e6df5997faf31709996c50ae8597c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb123a8b49517dcab93d386642401399e6df5997faf31709996c50ae8597c04->enter($__internal_deb123a8b49517dcab93d386642401399e6df5997faf31709996c50ae8597c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e1b551b209320ef99019920beb51715a2976a13de635f4eeb3830a9450b4fd57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b551b209320ef99019920beb51715a2976a13de635f4eeb3830a9450b4fd57->enter($__internal_e1b551b209320ef99019920beb51715a2976a13de635f4eeb3830a9450b4fd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_deb123a8b49517dcab93d386642401399e6df5997faf31709996c50ae8597c04->leave($__internal_deb123a8b49517dcab93d386642401399e6df5997faf31709996c50ae8597c04_prof);

        
        $__internal_e1b551b209320ef99019920beb51715a2976a13de635f4eeb3830a9450b4fd57->leave($__internal_e1b551b209320ef99019920beb51715a2976a13de635f4eeb3830a9450b4fd57_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b2594a62789d57aacce6e8e07139ce581ad3efc9f51c7390a20a906ee5c55e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2594a62789d57aacce6e8e07139ce581ad3efc9f51c7390a20a906ee5c55e4->enter($__internal_9b2594a62789d57aacce6e8e07139ce581ad3efc9f51c7390a20a906ee5c55e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb430e374c095bc097c8e965a84fe62c7d331e3dc7f125e9b653c24596fec3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb430e374c095bc097c8e965a84fe62c7d331e3dc7f125e9b653c24596fec3c8->enter($__internal_bb430e374c095bc097c8e965a84fe62c7d331e3dc7f125e9b653c24596fec3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bb430e374c095bc097c8e965a84fe62c7d331e3dc7f125e9b653c24596fec3c8->leave($__internal_bb430e374c095bc097c8e965a84fe62c7d331e3dc7f125e9b653c24596fec3c8_prof);

        
        $__internal_9b2594a62789d57aacce6e8e07139ce581ad3efc9f51c7390a20a906ee5c55e4->leave($__internal_9b2594a62789d57aacce6e8e07139ce581ad3efc9f51c7390a20a906ee5c55e4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b51c3a455c8cf41b85aec0c2cafdbf97c6d7408b690821e14908b732290cd391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51c3a455c8cf41b85aec0c2cafdbf97c6d7408b690821e14908b732290cd391->enter($__internal_b51c3a455c8cf41b85aec0c2cafdbf97c6d7408b690821e14908b732290cd391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d69a6ae5560ac919b6408388b910a1fe93b83896e901b87d016b2a46ddabebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d69a6ae5560ac919b6408388b910a1fe93b83896e901b87d016b2a46ddabebf->enter($__internal_3d69a6ae5560ac919b6408388b910a1fe93b83896e901b87d016b2a46ddabebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3d69a6ae5560ac919b6408388b910a1fe93b83896e901b87d016b2a46ddabebf->leave($__internal_3d69a6ae5560ac919b6408388b910a1fe93b83896e901b87d016b2a46ddabebf_prof);

        
        $__internal_b51c3a455c8cf41b85aec0c2cafdbf97c6d7408b690821e14908b732290cd391->leave($__internal_b51c3a455c8cf41b85aec0c2cafdbf97c6d7408b690821e14908b732290cd391_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_351d963a2864d0072a925a973e4d7e8788d855c3d8d25e023f485f4153e8fef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351d963a2864d0072a925a973e4d7e8788d855c3d8d25e023f485f4153e8fef6->enter($__internal_351d963a2864d0072a925a973e4d7e8788d855c3d8d25e023f485f4153e8fef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa5b4edbe0809eec8f799ad53144c2cbf8eaf17d1334fee4bf8fcb408fa9c64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5b4edbe0809eec8f799ad53144c2cbf8eaf17d1334fee4bf8fcb408fa9c64e->enter($__internal_fa5b4edbe0809eec8f799ad53144c2cbf8eaf17d1334fee4bf8fcb408fa9c64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa5b4edbe0809eec8f799ad53144c2cbf8eaf17d1334fee4bf8fcb408fa9c64e->leave($__internal_fa5b4edbe0809eec8f799ad53144c2cbf8eaf17d1334fee4bf8fcb408fa9c64e_prof);

        
        $__internal_351d963a2864d0072a925a973e4d7e8788d855c3d8d25e023f485f4153e8fef6->leave($__internal_351d963a2864d0072a925a973e4d7e8788d855c3d8d25e023f485f4153e8fef6_prof);

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
