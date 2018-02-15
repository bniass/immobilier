<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
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
        $__internal_eb6b56f1cff901e845386cfdf43a5fb5121726c6d5a64900360494c36df2d0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6b56f1cff901e845386cfdf43a5fb5121726c6d5a64900360494c36df2d0e5->enter($__internal_eb6b56f1cff901e845386cfdf43a5fb5121726c6d5a64900360494c36df2d0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_381dd89defc5405fcbb1e6bfb30e3ad1f42fd19373015763238e9d73fce4e02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381dd89defc5405fcbb1e6bfb30e3ad1f42fd19373015763238e9d73fce4e02c->enter($__internal_381dd89defc5405fcbb1e6bfb30e3ad1f42fd19373015763238e9d73fce4e02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb6b56f1cff901e845386cfdf43a5fb5121726c6d5a64900360494c36df2d0e5->leave($__internal_eb6b56f1cff901e845386cfdf43a5fb5121726c6d5a64900360494c36df2d0e5_prof);

        
        $__internal_381dd89defc5405fcbb1e6bfb30e3ad1f42fd19373015763238e9d73fce4e02c->leave($__internal_381dd89defc5405fcbb1e6bfb30e3ad1f42fd19373015763238e9d73fce4e02c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d0ed81729cd5b8c61753fb45cb787cc2c9d2ae82dbcf94192dd71bff5c117fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ed81729cd5b8c61753fb45cb787cc2c9d2ae82dbcf94192dd71bff5c117fb9->enter($__internal_d0ed81729cd5b8c61753fb45cb787cc2c9d2ae82dbcf94192dd71bff5c117fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f65098eccbaa990947a8ef64eb1ce107ef47987bbea8139f54be9df28ef80a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f65098eccbaa990947a8ef64eb1ce107ef47987bbea8139f54be9df28ef80a3->enter($__internal_4f65098eccbaa990947a8ef64eb1ce107ef47987bbea8139f54be9df28ef80a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4f65098eccbaa990947a8ef64eb1ce107ef47987bbea8139f54be9df28ef80a3->leave($__internal_4f65098eccbaa990947a8ef64eb1ce107ef47987bbea8139f54be9df28ef80a3_prof);

        
        $__internal_d0ed81729cd5b8c61753fb45cb787cc2c9d2ae82dbcf94192dd71bff5c117fb9->leave($__internal_d0ed81729cd5b8c61753fb45cb787cc2c9d2ae82dbcf94192dd71bff5c117fb9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8480bca9efefd45df958deef13ef0455908337c4ef89953601cdf3fd7695d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8480bca9efefd45df958deef13ef0455908337c4ef89953601cdf3fd7695d1f->enter($__internal_b8480bca9efefd45df958deef13ef0455908337c4ef89953601cdf3fd7695d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_58f1f78d042f1ff5ac215404157104ab906967f46533bfd04cfb21798d5f5c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f1f78d042f1ff5ac215404157104ab906967f46533bfd04cfb21798d5f5c75->enter($__internal_58f1f78d042f1ff5ac215404157104ab906967f46533bfd04cfb21798d5f5c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_58f1f78d042f1ff5ac215404157104ab906967f46533bfd04cfb21798d5f5c75->leave($__internal_58f1f78d042f1ff5ac215404157104ab906967f46533bfd04cfb21798d5f5c75_prof);

        
        $__internal_b8480bca9efefd45df958deef13ef0455908337c4ef89953601cdf3fd7695d1f->leave($__internal_b8480bca9efefd45df958deef13ef0455908337c4ef89953601cdf3fd7695d1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9347c369ee4f817f1d1da3019b5bd2794d60faee527f4d8aa654c9422e205cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9347c369ee4f817f1d1da3019b5bd2794d60faee527f4d8aa654c9422e205cd9->enter($__internal_9347c369ee4f817f1d1da3019b5bd2794d60faee527f4d8aa654c9422e205cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5152fd79d56cc6b9eadc0f40982958fa936eeebcf0ab39b409397d5412e07fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5152fd79d56cc6b9eadc0f40982958fa936eeebcf0ab39b409397d5412e07fb->enter($__internal_f5152fd79d56cc6b9eadc0f40982958fa936eeebcf0ab39b409397d5412e07fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5152fd79d56cc6b9eadc0f40982958fa936eeebcf0ab39b409397d5412e07fb->leave($__internal_f5152fd79d56cc6b9eadc0f40982958fa936eeebcf0ab39b409397d5412e07fb_prof);

        
        $__internal_9347c369ee4f817f1d1da3019b5bd2794d60faee527f4d8aa654c9422e205cd9->leave($__internal_9347c369ee4f817f1d1da3019b5bd2794d60faee527f4d8aa654c9422e205cd9_prof);

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
