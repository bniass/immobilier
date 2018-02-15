<?php

/* SNTImmobilierBundle:bien:edit.html.twig */
class __TwigTemplate_26c41b370773388baca119b22a19b9a19b0b17e830dbfe938f7c01091fc48325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SNTImmobilierBundle:bien:edit.html.twig", 1);
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
        $__internal_394508f439fd232e348818dd1dd55e0ff715ce0966422f11a54ac841e1e8a4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394508f439fd232e348818dd1dd55e0ff715ce0966422f11a54ac841e1e8a4f1->enter($__internal_394508f439fd232e348818dd1dd55e0ff715ce0966422f11a54ac841e1e8a4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:bien:edit.html.twig"));

        $__internal_d0795a2201cf04bbcbcb63ccd4ff8d1327f5db894a704f4066c292d9d1ed0b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0795a2201cf04bbcbcb63ccd4ff8d1327f5db894a704f4066c292d9d1ed0b39->enter($__internal_d0795a2201cf04bbcbcb63ccd4ff8d1327f5db894a704f4066c292d9d1ed0b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:bien:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_394508f439fd232e348818dd1dd55e0ff715ce0966422f11a54ac841e1e8a4f1->leave($__internal_394508f439fd232e348818dd1dd55e0ff715ce0966422f11a54ac841e1e8a4f1_prof);

        
        $__internal_d0795a2201cf04bbcbcb63ccd4ff8d1327f5db894a704f4066c292d9d1ed0b39->leave($__internal_d0795a2201cf04bbcbcb63ccd4ff8d1327f5db894a704f4066c292d9d1ed0b39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a03e0b3a77577795b9e2d11327e68a275d0c7cb61710d9cf97c259e8be8c2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a03e0b3a77577795b9e2d11327e68a275d0c7cb61710d9cf97c259e8be8c2aa->enter($__internal_2a03e0b3a77577795b9e2d11327e68a275d0c7cb61710d9cf97c259e8be8c2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63bed956051d1eef10557091dde4a60eac17747e023bdf9c4755999ab1fb35e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bed956051d1eef10557091dde4a60eac17747e023bdf9c4755999ab1fb35e3->enter($__internal_63bed956051d1eef10557091dde4a60eac17747e023bdf9c4755999ab1fb35e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bien edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_63bed956051d1eef10557091dde4a60eac17747e023bdf9c4755999ab1fb35e3->leave($__internal_63bed956051d1eef10557091dde4a60eac17747e023bdf9c4755999ab1fb35e3_prof);

        
        $__internal_2a03e0b3a77577795b9e2d11327e68a275d0c7cb61710d9cf97c259e8be8c2aa->leave($__internal_2a03e0b3a77577795b9e2d11327e68a275d0c7cb61710d9cf97c259e8be8c2aa_prof);

    }

    public function getTemplateName()
    {
        return "SNTImmobilierBundle:bien:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Bien edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('bien_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "SNTImmobilierBundle:bien:edit.html.twig", "/var/www/html/immobilier/src/SNT/ImmobilierBundle/Resources/views/bien/edit.html.twig");
    }
}
