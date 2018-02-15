<?php

/* SNTImmobilierBundle:bien:new.html.twig */
class __TwigTemplate_64a410cb6bb1f852a063417fd2f47e65483d910f9be1ec85cbda8f0d9904f53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SNTImmobilierBundle:bien:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d94a6e18cadedda1bf42c27abd28ec1484ec1a6169ee4664c0fa88f162d4ca6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94a6e18cadedda1bf42c27abd28ec1484ec1a6169ee4664c0fa88f162d4ca6a->enter($__internal_d94a6e18cadedda1bf42c27abd28ec1484ec1a6169ee4664c0fa88f162d4ca6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:bien:new.html.twig"));

        $__internal_776f560ef1c4243d654053b5e4a549f11b60005df680547ca9854d2517c27194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776f560ef1c4243d654053b5e4a549f11b60005df680547ca9854d2517c27194->enter($__internal_776f560ef1c4243d654053b5e4a549f11b60005df680547ca9854d2517c27194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:bien:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94a6e18cadedda1bf42c27abd28ec1484ec1a6169ee4664c0fa88f162d4ca6a->leave($__internal_d94a6e18cadedda1bf42c27abd28ec1484ec1a6169ee4664c0fa88f162d4ca6a_prof);

        
        $__internal_776f560ef1c4243d654053b5e4a549f11b60005df680547ca9854d2517c27194->leave($__internal_776f560ef1c4243d654053b5e4a549f11b60005df680547ca9854d2517c27194_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbd887a2c58f742a2ff125137636af2ac58ec3fa9be77a693fb47acf705f6f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd887a2c58f742a2ff125137636af2ac58ec3fa9be77a693fb47acf705f6f5b->enter($__internal_cbd887a2c58f742a2ff125137636af2ac58ec3fa9be77a693fb47acf705f6f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08a62db74d9a926e533fbda75686e06d21236ab1240d7b1ca0129c59c3b518f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a62db74d9a926e533fbda75686e06d21236ab1240d7b1ca0129c59c3b518f5->enter($__internal_08a62db74d9a926e533fbda75686e06d21236ab1240d7b1ca0129c59c3b518f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bien creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_08a62db74d9a926e533fbda75686e06d21236ab1240d7b1ca0129c59c3b518f5->leave($__internal_08a62db74d9a926e533fbda75686e06d21236ab1240d7b1ca0129c59c3b518f5_prof);

        
        $__internal_cbd887a2c58f742a2ff125137636af2ac58ec3fa9be77a693fb47acf705f6f5b->leave($__internal_cbd887a2c58f742a2ff125137636af2ac58ec3fa9be77a693fb47acf705f6f5b_prof);

    }

    public function getTemplateName()
    {
        return "SNTImmobilierBundle:bien:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Bien creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('bien_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "SNTImmobilierBundle:bien:new.html.twig", "/var/www/html/immobilier/src/SNT/ImmobilierBundle/Resources/views/bien/new.html.twig");
    }
}
